<form name="frmScorecard" action="/scorecard/step1/<?php echo $match_details->match_id; ?>" method="POST">
    <main role="main">
        <div class="container">				
            <div class="schedule">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Home Team :</label>
                            <b><?php echo $match_details->home_team_name; ?></b>
                        </div>
                        <div class="col-md-6">
                            <label>Visiting Team :</label>
                            <b><?php echo $match_details->visiting_team_name; ?></b>
                        </div>
                        <div class="col-md-6">
                            <label>Ground :</label>
                            <b><?php echo $match_details->venue_name; ?></b>
                        </div>
                        <div class="col-md-6">
                            <label>Toss Won by :</label>
                            <div>
                                <select name="toss_won_by">
                                    <option value="">--Select a team--</option>
                                    <option value="<?php echo $match_details->home_team_id; ?>"><?php echo $match_details->home_team_name; ?></option>
                                    <option value="<?php echo $match_details->visiting_team_id; ?>"><?php echo $match_details->visiting_team_name; ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Batted First :</label>
                            <div>
                                <select name="batted_first">
                                    <option value="">--Select a team--</option>
                                    <option value="<?php echo $match_details->home_team_id; ?>"><?php echo $match_details->home_team_name; ?></option>
                                    <option value="<?php echo $match_details->visiting_team_id; ?>"><?php echo $match_details->visiting_team_name; ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Batted Second :</label>
                            <div>
                                <select name="batted_second">
                                    <option value="">--Select a team--</option>
                                    <option value="<?php echo $match_details->home_team_id; ?>"><?php echo $match_details->home_team_name; ?></option>
                                    <option value="<?php echo $match_details->visiting_team_id; ?>"><?php echo $match_details->visiting_team_name; ?></option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <label>Result :</label>
                            <div>
                                <select name="toss_won_by" >
                                    <option value="">--Select a team--</option>
                                    <option value="<?php echo $match_details->home_team_id; ?>"><?php echo $match_details->home_team_name; ?></option>
                                    <option value="<?php echo $match_details->visiting_team_id; ?>"><?php echo $match_details->visiting_team_name; ?></option>
                                </select>
                                Won by <input type="text" name="won_by" /> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</form>