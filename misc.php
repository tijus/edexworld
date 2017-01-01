<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"></meta>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <link rel="icon" href="img/logo.png"  sizes="16x16"> <title>Educational Excellence Worldwide</title>     

        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700|Roboto:400,700,400italic' rel='stylesheet' type='text/css' />                        <!-- Latest compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
        <link href="css/styles.css" rel="stylesheet" />

        <!-- <link rel="stylesheet" href="http://basehold.it/24">  -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
       <?php 
	   		include("header.php");
			$uniqueelement = isset($_GET['key']) ? $_GET['key'] : '';

	   ?>

        <!--section misc-->
        <section class="section-misc add-padding" id="misc">
            <div class="container">
                <div class="row">

                    <div class="heading text-center">
						<?php
                        if (isset($_GET["status"])) {
                           
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Form process failed. Contact Administrator.</strong>
                                </div>
                               <?php
                            
                        } else {
                            
                        }
                        ?>
                        <h2>For All</h2>
                    </div>
                    <div class="col-md-3 col-sm-3">
                    </div>

                    <div class="col-md-6 col-sm-6 accordions">
                        <form method="post" action="misc_process.php">
                            <div class="form-group">
                                <label for="comments" class="col-md-4 control-label">Comments</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="comments" name="comments" />
                                </div>
                                <br/>
                            </div>

                            <div class="form-group">
                                <label for="suggestions" class="col-md-4 control-label">Suggestions</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="suggestions" name="suggestions" />
                                </div>
                                <br/>
                            </div>

                            <span style="margin-left:100px;"><strong>Other Expectations</strong></span>
                            <table style="margin-left:125px;">
                                <tr>
                                    <td><input type="checkbox" name="expt_handwriting" />&nbsp;&nbsp;Handwriting Improvement</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="expt_problem_solving" />&nbsp;&nbsp;Problem Solving(As per Brouchure)</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="expt_weekly_monthly_test" />&nbsp;&nbsp;Weekly/Monthly Test</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="expt_howmework" />&nbsp;&nbsp;Home Work Assignment</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="expt_daily_tracking" />&nbsp;&nbsp;Daily Tracking</td>
                                </tr>
                            </table>

                            <span style="margin-left:100px;"><strong>I came to know about Edexworld through<span style="color:#FF0000;">*</span></strong></span>
                            <table style="margin-left:125px;">
                                <tr>
                                    <td><input type="checkbox" name="know_hoarding" />&nbsp;&nbsp;Hoarding</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="know_handwill" />&nbsp;&nbsp;Handwill</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="know_letter_email" />&nbsp;&nbsp;Letter/E-mail from Edexworld</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="know_recommendation" />&nbsp;&nbsp;Recommendation/Ex-students of Edexworld</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="know_internet" />&nbsp;&nbsp;Internet</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="know_newspaper" />&nbsp;&nbsp;Newspaper Advertisement</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="know_seminar" />&nbsp;&nbsp;Seminars by Edexworld</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="know_friends" />&nbsp;&nbsp;Parents/Siblings/Friends</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="know_others" />&nbsp;&nbsp;Others</td>
                                </tr>

                            </table>

                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-3 col-sm-offset-3 col-sm-3">
                                    <!--<input type="submit" class="btn btn-primary" value="Sign Up!" />-->
									<input type="hidden" value="<?php echo $uniqueelement; ?>" name="key" />
                                    <button id="submit" class="btn btn-primary" value="submit">Sign Up!</button>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <input type="reset" class="btn btn-primary" value="Reset" />							
                                </div>
                            </div>
                        </form>
                    </div>
                   
                    <div class="clearfix visible-lg"></div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3" style="margin-left:55px;">
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <h3 align="center">Already have an account?</h3>
                        <p>
                            <form action="login.php" align="center" method="post">
                                <a href="index.php#login"><input type="button" value="Log In" style="width:500px;" class="btn btn-primary" /></a>
                            </form>
                        </p>
                    </div>


                    <div class="col-md-3 col-sm-3">

                    </div>

                </div><!--end row-->
            </div>
        </section>
    </body>
</html>
