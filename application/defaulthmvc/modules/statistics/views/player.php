<main role="main">
    <div class="container">
        <div class="schedule">
            <div class="well well-sm no-border-radius">
                <div class="row-fluid">
                    <div class="span8">
                        <form class="form-horizontal" role="form" action="" method="GET">
                            <div class="row-fluid">
                                <label class="span3">Select Season</label>
                                <div class="span2">
                                    <?php
                                        echo form_dropdown('season', $seasons, $this->input->get("season") );
                                    ?>
                                </div>
                            </div>
                            
<!--                            <div class="row-fluid">
                                <label class="span3">Select Match Types</label>
                                <div class="span2">
                                    <?php
                                        echo form_dropdown('match_type_id', $match_types, $this->input->get("match_type_id") );
                                    ?>
                                </div>
                            </div>-->
                            
                            <div class="row-fluid">
                                <label class="span3">&nbsp;</label>
                                <div class="span2">
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            
                        </form>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <p class="left-align last">You may sort on any column by clicking on the column title. Winning team is listed in <span class="blue-text">blue</span>. Matches without a winner (tied, drawn, no decision) is listed in <span class="green-text">green</span>.</p>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <h2>Batting Stats</h2>
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <?php foreach($divisions AS $key => $division) { ?>
                                <li class="<?php if( $key == 0 ) { echo "active"; } ?> margin-negative"><a class="no-border-radius" href="#division<?php echo $key+1; ?>" data-toggle="tab">Division <?php echo $division->division; ?></a></li>
                            <?php } ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach($divisions AS $key => $division) { ?>
                            <div class="tab-pane <?php if($key == 0) { echo "active"; } ?>" id="division<?php echo $key+1; ?>">
                                <h2 class="redHd"><?php echo $division->division_name ?></h2>
                                <table class="table table-bordered table-condensed table-striped table-hover no-border-radius example1">
                                    <thead>
                                        <tr>
                                            <th><b>Season</b></th>
                                            <th><b>Type</b></th>
                                            <th><b>Team</b></th>
<!--                                            <th><b>Div</b></th>-->
                                            <th><b>Matches</b></th>
                                            <th><b>Innings</b></th>
                                            <th><b>Not Outs</b></th>
                                            <th><b>Runs</b></th>
                                            <th><b>High Score</b></th>
                                            <th><b>50s</b></th>
                                            <th><b>100s</b></th>
                                            <th align=right><b>Avg</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach( $stats["batting"] AS $key => $value ) {
                                                if( $value->division == $division->division ) {
                                            ?>
                                        <tr>
                                            <td><?php echo $value->season; ?></td>
                                            <td><?php echo $value->match_type; ?></td>
                                            <td><?php echo $value->team_name; ?></td>
<!--                                            <td><?php echo $value->division ?></td>-->
                                            <td><?php echo $value->matches ?></td>
                                            <td><?php echo $value->innings ?></td>
                                            <td><?php echo $value->not_outs ?></td>
                                            <td><?php echo $value->runs ?></td>
                                            <td><?php echo $value->high_score ?></td>
                                            <td><?php echo $value->fifties ?></td>
                                            <td><?php echo $value->hundreds ?></td>
                                            <td><?php if( number_format($value->average, 2) < 0 ) { echo '0.00'; } else { echo number_format($value->average, 2); } ?></td>
                                        </tr>
                                        <?php  } } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <h2>Bowling Stats</h2>
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <?php foreach($divisions AS $key => $division) { ?>
                                <li class="<?php if( $key == 0 ) { echo "active"; } ?> margin-negative"><a class="no-border-radius" href="#divisionb<?php echo $key+1; ?>" data-toggle="tab">Division <?php echo $division->division; ?></a></li>
                            <?php } ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach($divisions AS $key => $division) { ?>
                            <div class="tab-pane <?php if($key == 0) { echo "active"; } ?>" id="divisionb<?php echo $key+1; ?>">
                                <h2 class="redHd"><?php echo $division->division_name ?></h2>
                                <table class="table table-bordered table-condensed table-striped table-hover no-border-radius example1">
                                    <thead>
                                        <tr>
                                            <th><b>Season</b></th>
                                            <th><b>Type</b></th>
                                            <th><b>Team</b></th>
                                            <th><b>Matches</b></th>
                                            <th><b>Overs</b></th>
                                            <th><b>Mdns</b></th>
                                            <th><b>Runs</b></th>
                                            <th><b>Wkts</b></th>
                                            <th><b>Best</b></th>
                                            <th><b>5 WI</b></th>
                                            <th><b>Avg</b></th>
                                            <th><b>S/R</b></th>
                                            <th><b>RPO</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $matches_total = 0; $maidens_total = 0; $runs_total = 0; $wickets_total = 0;
                                        
                                        foreach( $stats["bowling"] AS $key => $value ) {
                                                if( $value->division == $division->division ) {
                                            ?>
                                        <tr>
                                            <td><?php echo $value->season; ?></td>
                                            <td><?php echo $value->match_type; ?></td>
                                            <td><?php echo $value->team_name; ?></td>
                                            <td><?php echo $value->matches ?></td>
                                            <td><?php echo $value->overs.'.'.$value->exballs ?></td>
                                            <td><?php echo $value->maidens ?></td>
                                            <td><?php echo $value->runs ?></td>
                                            <td><?php echo $value->wickets ?></td>
                                            <td><?php echo $value->bbwkts ?>/<?php echo $value->bbruns ?></td>
                                            <td><?php echo $value->fivewi ?></td>
                                            <td><?php if( number_format($value->average, 2) < 0 ) { echo '0.00'; } else { echo number_format($value->average, 2); } ?></td>
                                            <td><?php if( $value->strike_rate == 9999 ) { echo '----'; } else { echo printf('%.2f', $value->strike_rate); }?></td>
                                            <td><?php echo $value->rpo ?></td>
                                        </tr>
                                        <?php  
                                            $matches_total  +=  $value->matches;
                                            $maidens_total  +=  $value->maidens;
                                            $runs_total  +=  $value->runs;
                                            $wickets_total  +=  $value->wickets;
                                        
                                        } } ?>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Career</th> 
                                            <th><?php echo $matches_total; ?></th>
                                            <th></th>
                                            <th><?php echo $maidens_total; ?></th>
                                            <th><?php echo $runs_total; ?></th>
                                            <th><?php echo $wickets_total; ?></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    </tbody>
                                </table>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</main>

<script src="/assets/scripts/vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="/assets/scripts/DT_bootstrap.js"></script>
