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
                            
                            <div class="row-fluid">
                                <label class="span3">Select Match Types</label>
                                <div class="span2">
                                    <?php
                                        echo form_dropdown('match_type_id', $match_types, $this->input->get("match_type_id") );
                                    ?>
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
                                            <th>Bowler</th>
                                            <th>Team Name</th>
                                            <th>Matches</th>
                                            <th>Overs</th>
                                            <th>Maidens</th>
                                            <th>Runs</th>
                                            <th>Wickets</th>
                                            <th>B.B</th>
                                            <th>5WI</th>
                                            <th>Average</th>
                                            <th>S/R</th>
                                            <th>R.P.O</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach( $stats AS $key => $value ) {
                                                if( $value->division == $division->division ) {
                                            ?>
                                        <tr>
                                            <td><a href="/statistics/player/index/<?php echo $value->player_id ?>"><?php echo $value->player_full_name; ?></a></td>
                                            <td><?php echo $value->team_name; ?></td>
                                            <td><?php echo $value->matches ?></td>
                                            <td><?php echo $value->overs.'.'.$value->exballs ?></td>
                                            <td><?php echo $value->maidens ?></td>
                                            <td><?php echo $value->runs ?></td>
                                            <td><?php echo $value->wickets ?></td>
                                            <td><?php echo $value->bbwkts ?></td>
                                            <td><?php echo $value->fivewi ?></td>
                                            <td><?php echo $value->average ?></td>
                                            <td><?php echo $value->strike_rate ?></td>
                                            <td><?php echo $value->rpo ?></td>                                            
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
        </div>
    </div>
</main>

<script src="/assets/scripts/vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="/assets/scripts/DT_bootstrap.js"></script>
