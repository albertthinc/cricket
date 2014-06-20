<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Statistics Model
 *
 * This is model for all Statistics related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Statistics
 * @category	Model
 * @author	Albert Virgin V A
*/
class Statistics_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_divisions()
    {
        $result =   $this->db
                ->where("status", "Active")
                ->order_by('division', 'asc')
                ->get("divisions")
                ->result();
        
        return $result;
    }
    
    public function get_match_types()
    {
        $result =   $this->db
                ->where("status", "Active")
                ->get("match_types")
                ->result();
        
        $data['']   =   'All';
        foreach( $result AS $key => $value )
        {
            $data[$value->match_type_id]    =   $value->match_type;
        }
        
        return $data;
    }
    
    public function get_distinct_season()
    {
        $season =   $this->db
                ->distinct("season")
                ->order_by("season", "desc")
                ->get("batting_stats")                
                ->result();
        
        $data['']   =   'All';
        foreach( $season As $key => $value )
        {
            $data[$value->season]   =   $value->season;
        }
        
        return $data;
    }


    public function get_banners($banner_category)
    {
        $banner_caegory_info    =   $this->db
                ->where("title", $banner_category)
                ->get("banner_categories")
                ->row();
        
        if( count( $banner_caegory_info ) > 0 )  {
            $result =   $this->db
                    ->where("category_id", $banner_caegory_info->category_id)
                    ->get("banners")
                    ->result_array();

            return $result;
        } else {
            return array();
        }
    }
    
    public function get_points_table_regular( $season = "", $match_type_id = "" )
    {
        $teams_list =   self::get_teams_by_division($season);
        
        $this->db->flush_cache();
        $condFilter = "";
        if( !empty($season) ) {
            $condFilter =   " AND ms.season = '".$season."'";
        }
        
        if( !empty( $match_type_id ) ) {
            $condFilter .=   " AND ms.match_type_id = '".$match_type_id."'";
        }
        
        foreach( $teams_list AS $key => $team ) {
            $team->won    = $this->db->query("SELECT * FROM match_schedule AS ms WHERE ms.team_won = '".$team->team_id."' $condFilter and ms.result != ''")->num_rows();
            $team->loss    = $this->db->query("SELECT * FROM match_schedule AS ms WHERE (ms.home_team_id = '".$team->team_id."' OR ms.visiting_team_id = '".$team->team_id."') AND ms.team_won != '".$team->team_id."' $condFilter and ms.result != ''")->num_rows();
            $team->nodec    = $this->db->query("SELECT * FROM match_schedule AS ms WHERE (ms.home_team_id = '".$team->team_id."' OR ms.visiting_team_id = '".$team->team_id."') AND ms.team_won is null $condFilter AND ms.result != 'DRAWN' AND ms.result != 'TIED'")->num_rows();
            
            $team->tied    = $this->db->query("SELECT * FROM match_schedule AS ms WHERE (ms.home_team_id = '".$team->team_id."' OR ms.visiting_team_id = '".$team->team_id."') $condFilter AND ms.result = 'TIED'")->num_rows();
            
            $team->noresult    = $this->db->query("SELECT * FROM match_schedule AS ms WHERE (ms.home_team_id = '".$team->team_id."' OR ms.visiting_team_id = '".$team->team_id."') $condFilter AND ms.result IS NULL")->num_rows();
            
            $team->drawn    = $this->db->query("SELECT * FROM match_schedule AS ms WHERE (ms.home_team_id = '".$team->team_id."' OR ms.visiting_team_id = '".$team->team_id."') $condFilter AND ms.result = 'DRAWN'")->num_rows();
            
            $hteampoints    = $this->db->query("SELECT sum(home_team_points) as points FROM match_schedule AS ms WHERE ms.home_team_id = '".$team->team_id."' $condFilter  and ms.result != ''")->row()->points;
            $vteampoints    = $this->db->query("SELECT sum(visiting_team_points) as points FROM match_schedule AS ms WHERE ms.visiting_team_id = '".$team->team_id."' $condFilter  and ms.result is not null")->row()->points;
            $team->points    =   $hteampoints + $vteampoints;
            
            $team->played       =   $team->won + $team->loss + $team->nodec + $team->tied + $team->drawn;
        }
        
        /*$stats  =   $this->db
                ->select("CONCAT(u.first_name, ' ', u.last_name) AS player_full_name, bs.division, t.team_name, sum(matches) as played, sum(innings) as innings, sum(not_outs) as notouts, sum(runs) as runs, max(high_score) as hiscore, sum(fifties) as fifties, sum(hundreds) as hundreds,if(sum(innings) = sum(not_outs) or sum(innings) = 0, -1, sum(runs) / (sum(innings) - sum(not_outs))) as average", false)
                ->join("users AS u", "u.user_id = bs.player_id")
                ->join("teams AS t", "t.team_id = bs.team_id")
                ->group_by("bs.team_id, bs.division")
                ->order_by("bs.division, t.team_name", "ASC")
                ->get("batting_stats AS bs")
                ->result();*/
        
        return $teams_list;
    }
    
    public function get_teams_by_division($season, $dd = FALSE)
    {
        if( !empty($season) ) {
            $this->db->where("td.season", $season);
        }
        $result =   $this->db
                ->select("t.team_id, t.team_name, td.division, td.season")
                ->join("team_divisions AS td", "td.team_id = t.team_id")
                ->where("t.status", 'Active')
                ->group_by("t.team_id")
                ->order_by("t.team_name", "ASC")
                ->get("teams AS t")
                ->result();
        
        if(  $dd ) {
            if( count($result) > 0 ) {
                $data[''] = "All Teams";
                foreach($result AS $key => $value ) {
                    $data[$value->team_id]  =   $value->team_name;
                }
                
                return $data;
            }
        }
        
        return $result;
    }
    
    public function get_batting_stats($season = "", $match_type_id = "")
    {
        if( !empty($season) ) {
            $this->db->where("bs.season", $season);
        }
        
        if( !empty($match_type_id) ) {
            $this->db->where("bs.match_type_id", $match_type_id);
        }
        
        $stats  =   $this->db
                ->select("CONCAT(u.first_name, ' ', u.last_name) AS player_full_name, bs.division, t.team_name, sum(matches) as played, sum(innings) as innings, sum(not_outs) as notouts, sum(runs) as runs, max(high_score) as hiscore, sum(fifties) as fifties, sum(hundreds) as hundreds,if(sum(innings) = sum(not_outs) or sum(innings) = 0, -1, sum(runs) / (sum(innings) - sum(not_outs))) as average", false)
                ->join("users AS u", "u.user_id = bs.player_id")
                ->join("teams AS t", "t.team_id = bs.team_id")
                ->group_by("bs.player_id, bs.team_id")
                ->order_by("bs.division, t.team_name", "ASC")
                ->get("batting_stats AS bs")
                ->result();
        
        //print_r($stats);
        return $stats;
        
    }
    
    public function get_bowling_stats($season = "", $match_type_id = "")
    {
        if( !empty($season) ) {
            $this->db->where("bs.season", $season);
        }
        
        if( !empty($match_type_id) ) {
            $this->db->where("bs.match_type_id", $match_type_id);
        }
        
        $stats  =   $this->db
                ->select("u.user_id AS player_id, CONCAT(u.first_name, ' ', u.last_name) AS player_full_name, bs.division, t.team_name, sum(matches) as matches, sum(overs) + floor(sum(exballs) / 6) as overs, sum(exballs) % 6 as exballs,sum(maidens) as maidens,sum(runs) as runs, sum(wickets) as wickets, sum(fivewi) as fivewi,max(bbwkts) as bbwkts,if(sum(wickets) != 0, sum(runs) / sum(wickets), 9999) as average,if(sum(wickets) != 0, ((sum(overs) * 6) + sum(exballs)) / sum(wickets), 9999) as strike_rate, if(sum(overs) > 0 or sum(exballs) > 0, sum(runs) / (sum(overs) + (sum(exballs) / 6)), 9999) as rpo", false)
                ->join("users AS u", "u.user_id = bs.player_id")
                ->join("teams AS t", "t.team_id = bs.team_id")
                ->group_by("bs.player_id, bs.team_id")
                ->order_by("bs.division, t.team_name", "ASC")
                ->get("bowling_stats AS bs")
                ->result();
        
        //print_r($stats);
        return $stats;        
    }
    
    public function get_player_stats($season = "", $user_id)
    {
        if( !empty($season) ) {
            $this->db->where("bs.season", $season);
        }
        
        
        $stats['batting']  =   $this->db
                ->select("bs.season, mt.match_type, t.team_name, bs.division, bs.matches, bs.innings, bs.not_outs, bs.runs, bs.high_score, bs.hsno, bs.fifties, bs.hundreds, bs.average")
                ->join("match_types AS mt", "mt.match_type_id = bs.match_type_id")
                ->join("teams AS t", "t.team_id = bs.team_id")
                ->where("bs.player_id", $user_id)
                ->get("batting_stats AS bs")
                ->result();
        
        if( !empty($season) ) {
            $this->db->where("w.season", $season);
        }
        
        $stats['bowling']   =   $this->db
                ->select("w.season, w.match_type, w.team_name, w.division, t.matches, w.overs, w.exballs, w.maidens, w.runs, w.wickets, w.fivewi, w.bbwkts, w.bbruns, w.average, w.strike_rate, w.rpo")
                ->where(array("w.season = t.season" => null, "w.match_type_id = t.match_type_id" => null, "w.player_id = t.player_id" => null, "w.player_id" => $user_id))
                ->get("bowling_stats w, batting_stats t")
                ->result();
        
        return $stats;
        
    }
    
    public function get_fielding_stats($season = "", $match_type_id = "")
    {
        if( !empty($season) ) {
            $this->db->where("fs.season", $season);
        }
        
        if( !empty($match_type_id) ) {
            $this->db->where("fs.match_type_id", $match_type_id);
        }
        
        $stats  =   $this->db
            ->select("player_id, fs.division, CONCAT(u.first_name, ' ', u.last_name) as player_full_name, t.team_name,
            matches, sum(catches) as catches, sum(stumpings) as stumpings, sum(runouts) as runouts,
            sum(catches)+sum(stumpings)+sum(runouts) as totdis", false)
            ->join("users AS u", "u.user_id = fs.player_id")
            ->join("teams AS t", "t.team_id = fs.team_id")
            ->group_by("fs.player_id, fs.team_id")
            ->order_by("fs.division, t.team_name", "ASC")
            ->get("fielding_stats AS fs")
            ->result();
        
        return $stats;  
    }
}