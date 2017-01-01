<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>



        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <meta charset="utf-8"></meta>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <link rel="icon" href="img/logo.png"  sizes="16x16"> <title>Educational Excellence Worldwide</title>     

        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="css/bootstrap-datepicker.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700|Roboto:400,700,400italic' rel='stylesheet' type='text/css' />                        <!-- Latest compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="imageuploader/css/fileinput.css" />




        <!-- <link rel="stylesheet" href="http://basehold.it/24">  -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                  
        <![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/google-code-prettify/prettify.js"></script>
        <script src="js/jquery.js"></script>
        <script src="imageuploader/js/fileinput.js"></script>
        <script src="imageuploader/js/fileinput_locale_ar.js"></script>
        <style>
            .kv-avatar .file-preview-frame,.kv-avatar .file-preview-frame:hover {
                margin: 0;
                padding: 0;
                border: none;
                box-shadow: none;
                text-align: center;
            }
            .kv-avatar .file-input {
                display: table-cell;
                max-width: 220px;
            }
        </style>
    </head>

    <body>
		<?php include("header.php");?>
        <br />

        <!--section login-->
        <section class="section-register add-padding" id="register">
            <div class="container">

                <div class="row">

                    <div class="heading text-center">
                        <?php
                        if (isset($_GET["status"])) {
                            if ($_GET["status"] == "success") {
                                ?>
                                <div class="alert alert-success">
                                    <strong>Your registration is successfull!!</strong>
                                </div>
                                <?php
                            } elseif ($_GET["status"] == "exists" || $_GET["status"] == "failure") {
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Error processing registration. Username or email already exists....</strong>
                                </div><?php
                            }
                        } else {
                            
                        }
                        ?>

                        <h2>Register</h2>
                    </div>
                    <div class="col-md-3 col-sm-3">
                    </div>
					<script src="js/validator.js" type="text/javascript"></script>
                    <div class="col-md-6 col-sm-6 accordions">
                        <form method="post" name="register" id="register" action="signup.php" enctype="multipart/form-data" data-toggle="validator" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="first_name" class="col-md-4 control-label">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your First Name" data-error="Please enter your First Name" required/>
                                    <span class="help-block with-errors"></span>
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="col-md-4 control-label">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your Last Name" data-error="Please enter your Last Name" required />
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="father_name" class="col-md-4 control-label">Father's Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="last_name" name="father_name" placeholder="Enter your Father's Name" data-error="Please enter your Father's Name" required />
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="col-md-4 control-label">Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your Address" data-error="Please enter your Address" required />
                                    <span class="help-block with-errors"></span>
                                </div> 
                            </div>    

                            <div class="form-group">
                                <label for="state" class="col-md-4 control-label">State/Province</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="state" name="state" placeholder="Enter your state" data-error="Please enter your State" required />
                                    <span class="help-block with-errors"></span>
                                </div> 
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" data-error="Please enter a valid Email Id" required />
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mobile" class="col-md-4 control-label">Mobile No.</label>
                                <div class="col-md-8">
                                    <input type="tel" pattern=".{10,10}" class="form-control" id="mobile" name="mobile" placeholder="Enter your Mobile Number" data-error="Please enter a valid Mobile Number" required />
                                    <span class="help-block with-errors">Your mobile number should be of 10 digit</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-md-4 control-label">Username</label>
                                <div class="col-md-8">
                                    <input type="text" pattern=".{6,}" class="form-control" id="username" name="username" placeholder="Enter your Username" data-error="Please enter a valid Username" required/>
                                    <span class="help-block with-errors">Your username should be of atleast 6 characters</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" pattern=".{6,}" id="password" name="password" placeholder="Enter your Password" data-error="Please enter a valid Password of minimum six characters" required />
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password" class="col-md-4 control-label">Confirm</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your Password" data-match="#password" data-match-error="Your Password did not match" required />
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>						
                            <div class="form-group">
                                <label for="sex" class="col-md-4 control-label">Sex</label>
                                <div class="col-md-8">
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" id="sex" value="Male" data-error="Please select your Gender" required/> Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" id="sex" value="Female" required /> Female                                                                       
                                    </label>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="dob" class="col-md-4 control-label">Date of birth</label>
                                <div class="col-md-8">
                                    <input class="span2" size="16" type="date" id="date" name="dob" data-error="Enter your DOB" required/>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>					
                            <div class="form-group" >
                                <label for="image" class="col-md-4 control-label">Profile Pic</label>
                                <div class="col-md-8" style="margin-bottom:10px;" >
                                    <input type="file" class="file" name="fileToUpload" id="fileToUpload" /></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="landline" class="col-md-4 control-label">Landline No.</label>
                                <div class="col-md-8" style="margin-bottom:10px;">
                                    <input type="text" class="form-control" id="landline" name="landline" placeholder="Enter your Landline Number (Optional)" />
                                </div><br>
                            </div>
                            <div class="form-group" >
                                <label for="cat" class="col-md-4 control-label">Category</label>
                                <div class="col-md-8" >
                                    <select class="form-control" name="cat" id="cat" required>
                                        <option value="">Select</option>
                                        <option value="Student">Student</option>
                                        <option value="Tutor">Tutor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-8"  style="margin-bottom:20px;">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="agree" name="agree" data-error="Please check the terms and conditions of registration" required /> I agree with the <a href="tnc.php">Terms &amp; Conditions</a>
                                            <span class="help-block with-errors"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-3 col-sm-offset-3 col-sm-3">
                                    <!--<input type="submit" class="btn btn-primary" value="Sign Up!" name="submit" id="submit"/>-->
                                    <button id="submit" class="btn btn-primary" type="submit" value="submit">Next <span class="glyphicon glyphicon-chevron-right"></span></button>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <button id="reset" class="btn btn-primary" type="reset">Reset <span class="glyphicon glyphicon-refresh"></span></button>
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
                    <div class="row">
                        <div class="col-md-3 col-sm-3" style="margin-left:55px;">
                        </div>


                        <div class="col-md-3 col-sm-3">

                        </div>

                    </div><!--end row-->

                </div><!--end container-->
        </section><!--end section login-->
		<script src="js/validation.js" type="text/javascript" ></script>
    </body>
</html>
