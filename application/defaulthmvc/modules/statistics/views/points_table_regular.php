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
                                <table class="table table-bordered table-condensed table-striped table-hover no-border-radius" id="example1">
                                    <thead>
                                        <tr>
                                            <th>Team Name</th>
                                            <th>Played</th>
                                            <th>Won</th>
                                            <th>Lost</th>
                                            <th>No Result</th>
                                            <th>Bonus Points</th>
                                            <th>Total Points</th>
                                            <th>NRR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach( $stats AS $key => $value ) {
                                                if( $value->division == $division->division ) {
                                            ?>
                                        <tr>
                                            <td><a href="javascript:;" class="link"><?php echo $value->team_name; ?></a></td>
                                            <td><?php echo $value->played ?></td>
                                            <td><?php echo $value->won ?></td>
                                            <td><?php echo $value->loss ?></td>
                                            <td><?php echo $value->noresult ?></td>
                                            <td>2</td>
                                            <td><?php echo $value->points ?></td>
                                            <td>+0.7</td>
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
