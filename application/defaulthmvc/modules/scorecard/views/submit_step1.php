<?php
$two_teams  =   array(
    ''  =>   'Select Team',
    $match_details->home_team_id => $match_details->home_team_name,
    $match_details->visiting_team_id => $match_details->visiting_team_name
);

?>
<main role="main">
    <div class="container">
        <div class="score-card page1">
            <h3 class="sub-head-grey">Lagaan Cricket Club vs Caricom Sports &amp; Cultural Club at Franklin I 0n 04 May 2013 </h3>
            <p class="text-grey">Lorem ipsum dolor sit amet, ocurreret deterruisset ne mei. Laudem dignissim eos ne, nam dicat vivendum vituperatoribus eu. Ex primis salutandi cum, nam brute bonorum et, vim ne erat quodsi. An cum officiis adipisci signiferumque, vel in probatus cotidieque. Pro option impetus ei, graeco insolens vel et, an nibh viderer petentium sed. </p>
            <h3 class="red-head">General Match Information</h3>
            <!-- Form Starts  -->
            <form class="form-horizontal">
                <fieldset class="white-form-section">

                    <!-- column wrapper -->
                    <div class="row-fluid">
                        <!-- first column -->
                        <div class="span6">
                            <div class="clearfix control-group">
                                <label class="control-label" for="id-hteam">Home Team</label>
                                <div class="controls">
                                    <input type="text" name="hteam" value="<?php echo $match_details->home_team_name; ?>" id="id-hteam"/>
                                </div>
                            </div>
                            <div class="clearfix control-group">
                                <label class="control-label" for="id-ground">Ground</label>
                                <div class="controls">
                                    <label><?php echo $match_details->venue_name; ?></label>
                                </div>
                            </div>
                            <div class="clearfix control-group">
                                <label class="control-label" for="id-bfirst">Batted First</label>
                                <div class="controls">
                                    <?php echo form_dropdown('first_batting', $two_teams, $match_details->first_batting); ?>
                                </div>
                            </div>
                            <div class="clearfix control-group">
                                <label class="control-label" for="id-result">Result</label>
                                <div class="controls">
                                    <select id="id-result" class="selectbox span6">
                                        <option value="1">Result 1</option>
                                        <option value="2">Result 2</option>
                                        <option value="3">Result 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix control-group">
                                <label class="control-label" for="id-umpire1">Umpire 1</label>
                                <div class="controls">
                                    <select id="id-umpire1" class="selectbox span6">
                                        <option value="1">Umpire 1</option>
                                        <option value="2">Umpire 2</option>
                                        <option value="3">Umpire 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix control-group last">
                                <label class="control-label" for="id-scorer1">Scorer 1</label>
                                <div class="controls">
                                    <select id="id-scorer1" class="selectbox span6">
                                        <option value="1">Scorer</option>
                                        <option value="2">Scorer</option>
                                        <option value="3">Scorer</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- second column -->
                        <div class="span6">
                            <div class="clearfix control-group">
                                <label class="control-label" for="id-vteam">Visiting Team</label>
                                <div class="controls">
                                    <input type="text" name="vteam" value="<?php echo $match_details->visiting_team_name; ?>" id="id-vteam"/>
                                </div>
                            </div>

                            <div class="clearfix control-group">
                                <label class="control-label" for="id-tosswon">Toss Won by</label>
                                <div class="controls">
                                    <?php echo form_dropdown('team_won', $two_teams, $match_details->team_won); ?>
                                </div>
                            </div>

                            <div class="clearfix control-group">
                                <label class="control-label" for="id-bsecond">Batted Second</label>
                                <div class="controls">
                                    <?php echo form_dropdown('second_batting', $two_teams); ?>
                                </div>
                            </div>

                            <div class="clearfix control-group">
                                <label class="control-label" for="id-wonby">Won by</label>
                                <div class="controls">
                                    <div class="row-fluid">
                                        <div class="span4">
                                            <select id="id-wonby" class="selectbox span12">
                                                <option value="0">Runs</option>
                                                <option value="1">Runs</option>
                                            </select>
                                        </div>
                                        <div class="span6">
                                            <input type="text" class="span3" name="hteam" id="id-hteam"/>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix control-group">
                                <label class="control-label" for="id-umpire2">Umpire 2</label>
                                <div class="controls">
                                    <select id="id-umpire2" class="selectbox span6">
                                        <option value="1">Umpire 1</option>
                                        <option value="2">Umpire 2</option>
                                        <option value="3">Umpire 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix control-group last">
                                <label class="control-label" for="id-scorer2">Scorer 2</label>
                                <div class="controls">
                                    <select id="id-scorer2" class="selectbox span6">
                                        <option value="1">Scorer</option>
                                        <option value="2">Scorer</option>
                                        <option value="3">Scorer</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </fieldset>
                <h3 class="red-head">Submitted by</h3>
                <fieldset class="white-form-section">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="clearfix control-group">
                                <label class="control-label" for="id-commentorName">Your Name</label>
                                <div class="controls">
                                    <input type="text" name="commentorName" id="id-commentorName"/>
                                </div>
                            </div>
                            <div class="clearfix control-group last">
                                <label class="control-label" for="id-comments">Comments</label>
                                <div class="controls">
                                    <textarea class="input-xlarge textarea span10" style="height: 150px;" name="comments" id="id-comments"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-actions">
                    <div class="pull-right">
                        <button type="button" class="btn btn-red">Next Page</button>
                        <button type="reset" class="btn btn-grey">Reset</button>
                    </div>
                </div>
            </form>

            <!-- Form Ends -->
        </div>
    </div>
</main>