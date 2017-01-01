<?php
include("encryption.php");
if (!(isset($_GET['new_token'])))
{
  echo "<h1>Error occured.. Contact administrator.</h1>";
}
else
{
?>
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
                                    <strong>Email was sent successfully!!</strong>
                                </div>
                                <?php
                            } elseif ($_GET["status"] == "failure") {
                                ?>
                                <div class="alert alert-danger">
                                    <strong> Your credentials does not exists. Please Register</strong>
                                </div><?php
                            }
                        } else {
                            
                        }
                        ?>

                        <h2>Set Password</h2>
                    </div>
                    <div class="col-md-3 col-sm-3">
                    </div>
					<script src="js/validator.js" type="text/javascript"></script>
                    <div class="col-md-6 col-sm-6 accordions">
                        <form method="post" name="ret_pass" id="ret_pass" action="process_pass.php"  data-toggle="validator" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Enter Password:</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your new password" data-error="Please enter your new password" required />
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your Password" data-match="#password" data-match-error="Your password did not match" required />
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>						
<input type="hidden" value="<?php echo decryptIt($_GET['id']); ?>" name="email" />
<input type="hidden" value="<?php echo $_GET['cat']; ?>" name="cat" />
<input type="hidden" value="<?php echo $_GET['new_token']; ?>" name="new_token" />

                            </div>
<br />
                            <div class="form-group">

                    <div class="col-md-5 col-sm-5" align="center" style="margin-left:27.5%;">


                                    <button id="set_password" class="btn btn-primary btn-lg" style="width:500px;" type="submit">Submit</button></div>
                                
                            </div>
</div>
                        </form>

                    </div>

                    


                </div><!--end container-->
        </section><!--end section login-->
		<script src="js/validation.js" type="text/javascript" ></script>
    </body>
</html>


<?php
}
?>	