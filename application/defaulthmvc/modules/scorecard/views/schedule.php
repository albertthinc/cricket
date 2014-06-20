<main role="main">
    <div class="container">
        <div class="schedule">
            <div class="well well-sm no-border-radius">
                <div class="row-fluid">
                    <div class="span8">
                        <form class="form-horizontal" role="form">
                            <div class="row-fluid">
                                <label class="span3">Select Season</label>
                                <div class="span2">
                                    <?php
                                        echo form_dropdown('season', $seasons, $this->input->get("season"), "class='selectbox'" );
                                    ?>
                                </div>
                                <label class="span3">Select Team</label>
                                <div class="span4">
                                    <?php
                                        echo form_dropdown('team', $teams, $this->input->get("team"), "class='selectbox'" );
                                    ?>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <p class="last">You may sort on any column by clicking on the column title. Winning team is listed in <span class="blue-text">blue</span>. Matches without a winner (tied, drawn, no decision) is listed in <span class="green-text">green</span>.</p>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <table class="table cTable table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Home Team</th>
                                <th>Visiting Team</th>
                                <th>Venue</th>
                                <th>Umpire</th>
                                <th>Umpire</th>
                                <th>Scorecard</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($match_details AS $key => $match) { ?>
                            <tr>
                                <td><?php echo date("d M, Y", strtotime($match->match_date)) ?></td>
                                <td><?php echo date("H:i A", strtotime($match->start_time)) ?></td>
                                <td><?php echo $match->home_team_name ?></td>
                                <td><?php echo $match->visiting_team_name ?></td>
                                <td><a href="javascript:;" class="link"><?php echo $match->venue_name ?></a></td>
                                <td><?php echo $match->umpire1_name ?></td>
                                <td><?php echo $match->umpire2_name ?></td>
                                <td>
                                    <?php if( $match->scard_available == 'Y' ) { ?>
                                    <a href="javascript:;" class="link"><strong>View<strong></a>
                                    <?php } else { ?>
                                    <a href="/scorecard/submit/step1/<?php echo $match->match_id ?>" class="link"><strong>Submit<strong></a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>