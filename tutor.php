<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
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
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
       <?php 
	   		include("header.php");
			$uniqueelement = isset($_GET['key']) ? $_GET['key'] : '';

	   ?>

        <!--section tutor-->
        <section class="section-tutor add-padding" id="tutor">
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
                        <h2>For Tutors</h2>
                    </div>
                    <div class="col-md-3 col-sm-3">
                    </div>

                    <div class="col-md-6 col-sm-6 accordions">
                        <form method="post" action="tutor_process.php">
                            <table class="table table-striped" style="margin-left:10px;"> 
                                <tr>
                                    <th align="center">Course</th>
                                    <th align="center">Certification</th>
                                    <th align="center">Board / University</th>
                                    <th align="center">%age Score</th>
                                </tr>
                                <tr>
                                    <td align="center">X</td>
                                    <td align="center">Board</td>
                                    <td align="center"><input type="text" name="x_university" style="border:1px solid ;" size="33" /></td>
                                    <td align="center"><input type="text" name="x_score" style="border:1px solid ;" /></td>

                                </tr>
                                <tr>
                                    <td align="center">XII</td>
                                    <td align="center">Board</td>
                                    <td align="center"><input type="text" name="xii_university"  style="border:1px solid ;" size="33"/></td>
                                    <td align="center"><input type="text" name="xii_score" style="border:1px solid ;" /></td>

                                </tr>
                                <tr>
                                    <td align="center">Certificate</td>
                                    <td align="center">Institute</td>
                                    <td align="center"><input type="text" name="certificate_university" style="border:1px solid ;" size="33" /></td>
                                    <td align="center"><input type="text" name="certificate_score" style="border:1px solid ;"/></td>

                                </tr>
                                <tr>
                                    <td align="center">Diploma / ITI</td>
                                    <td align="center">Institute</td>
                                    <td align="center"><input type="text" name="diploma_university" style="border:1px solid ;" size="33"/></td>
                                    <td align="center"><input type="text" name="diploma_score" style="border:1px solid ;"/></td>
                                </tr>
                                <tr>
                                    <td align="center">Graduation</td>
                                    <td align="center">
                                        <select name="grads" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="BA">B.A.</option>
                                            <option value="B.Sc">B.Sc</option>
                                            <option value="B.Com">B.Com</option>
                                            <option value="B.E / B.Tech">B.E / B.Tech</option>
                                            <option value="B.Arch">B.Arch</option>
                                            <option value="BMS">BMS</option>
                                            <option value="BCA">BCA</option>
                                            <option value="BBA">BBA</option>
                                            <option value="B.Ed">B.Ed</option>
                                            <option value="M">Multiple</option>
                                            <option value="O">Others</option>
                                        </select>
                                    </td>
                                    <td align="center"><input type="text" name="grads_university" style="border:1px solid ;" size="33"/></td>
                                    <td align="center"><input type="text" name="grads_score" style="border:1px solid ;"/></td>

                                </tr>
                                <tr>
                                    <td align="center">Post Graduation</td>
                                    <td align="center">
                                        <select name="post_grads" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="MA">M.A.</option>
                                            <option value="M.Sc">M.Sc</option>
                                            <option value="M.Com">M.Com</option>
                                            <option value="M.E / M.Tech">M.E / M.Tech</option>
                                            <option value="M.Arch">M.Arch</option>
                                            <option value="MMS">MMS</option>
                                            <option value="MCA">MCA</option>
                                            <option value="MBA">MBA</option>
                                            <option value="M.Ed">M.Ed</option>
                                            <option value="PGDM">PGDM</option>
                                            <option value="M">Multiple</option>
                                            <option value="O">Others</option>
                                        </select>
                                    </td>
                                    <td align="center"><input type="text" name="post_grads_university" style="border:1px solid ;" size="33"/></td>
                                    <td align="center"><input type="text" name="post_grads_score" style="border:1px solid ;"/></td>

                                </tr>
                                <tr>
                                    <td align="center">Professional</td>
                                    <td align="center">
                                        <select name="prof" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="MBBS">MBBS</option>
                                            <option value="MS">MS</option>
                                            <option value="CA">CA</option>
                                            <option value="CS">CS</option>
                                            <option value="ICWA">ICWA</option>
                                            <option value="M">Multiple</option>
                                            <option value="O">Others</option>
                                        </select>
                                    </td>
                                    <td align="center"><input type="text" name="prof_university" style="border:1px solid ;" size="33"/></td>
                                    <td align="center"><input type="text" name="prof_score" style="border:1px solid ;"/></td>

                                </tr>
                                <tr>
                                    <td align="center">Research</td>
                                    <td align="center">
                                        <select name="research" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="M.Phil">M.Phil</option>
                                            <option value="Ph.D.">Ph.D.</option>
                                            <option value="M">Multiple</option>
                                            <option value="O">Others</option>
                                        </select>
                                    </td>
                                    <td align="center"><input type="text" name="research_university" style="border:1px solid ;" size="33"/></td>
                                    <td align="center"><input type="text" name="research_score" style="border:1px solid ;"/></td>

                                </tr>
                                <tr>
                                    <td align="center">Foreign Education</td>
                                    <td align="center"><input type="text" placeholder="Specify degree" name="cert" style="border:1px solid ;"/></td>
                                    <td align="center"><input type="text" name="f_e_university" style="border:1px solid ;" size="33"/></td>
                                    <td align="center"><input type="text" name="f_e_score" style="border:1px solid ;"/></td>

                                </tr>										

                            </table> 
                            <br/>                                                
                            <div class="form-group">
                                <label for="hobby" class="col-md-4 control-label">Hobby</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="hobby" name="hobby" placeholder="Enter your Hobby" />
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <label for="work_experience" class="col-md-4 control-label">Work Experience</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="work_experience" name="work_experience" placeholder="Enter your Work Experience" />
                                </div>
                            </div>
                            <br/>

                            <label for="fees" class="col-md-4 control-label">Fees/Salary</label>
                            <table class="table table-striped" style="margin-left:10px;"> 
                                <tr>
                                    <th><center>Subjects</center></th>
                                    <th><center>Fees expected</center></th>
                                    <th><center>Mode</center></th>

                                </tr>

                                <tr>
                                    <td align="center">Maths</td>
                                    <td><input type="text" name="maths_fees" style="border:1px solid ;" /></td>
                                    <td align="center">
                                        <select name="opted_maths_tutor" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="/hr">per hour</option>
                                            <option value="/mnth">per month</option>
                                            <option value="/assg">per assignment</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">French</td>
                                    <td><input type="text" name="french_fees" style="border:1px solid ;" /></td>
                                    <td align="center">
                                        <select name="opted_french_tutor" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="/hr">per hour</option>
                                            <option value="/mnth">per month</option>
                                            <option value="/assg">per assignment</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Science</td>
                                    <td><input type="text" name="science_fees" style="border:1px solid ;" /></td>
                                    <td align="center">
                                        <select name="opted_science_tutor" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="/hr">per hour</option>
                                            <option value="/mnth">per month</option>
                                            <option value="/assg">per assignment</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Social Studies</td>
                                    <td><input type="text" name="sst_fees" style="border:1px solid ;" /></td>
                                    <td align="center">
                                        <select name="opted_sst_tutor" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="/hr">per hour</option>
                                            <option value="/mnth">per month</option>
                                            <option value="/assg">per assignment</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">English</td>
                                    <td><input type="text" name="english_fees" style="border:1px solid ;" /></td>
                                    <td align="center">
                                        <select name="opted_english_tutor" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="/hr">per hour</option>
                                            <option value="/mnth">per month</option>
                                            <option value="/assg">per assignment</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Hindi</td>
                                    <td><input type="text" name="hindi_fees" style="border:1px solid ;" /></td>
                                    <td align="center">
                                        <select name="opted_hindi_tutor" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="/hr">per hour</option>
                                            <option value="/mnth">per month</option>
                                            <option value="/assg">per assignment</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Marathi</td>
                                    <td><input type="text" name="marathi_fees" style="border:1px solid ;" /></td>
                                    <td align="center">
                                        <select name="opted_marathi_tutor" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="/hr">per hour</option>
                                            <option value="/mnth">per month</option>
                                            <option value="/assg">per assignment</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Sanskrit</td>
                                    <td><input type="text" name="sanskrit_fees" style="border:1px solid ;" /></td>
                                    <td align="center">
                                        <select name="opted_sanskrit_tutor" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="/hr">per hour</option>
                                            <option value="/mnth">per month</option>
                                            <option value="/assg">per assignment</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Others</td>
                                    <td>
                                        <input type="text" name="others_fees" placeholder="            Specify Subject" style="border:1px solid ;" />
                                    </td>
                                    <td align="center">
                                        <select name="opted_others_tutor" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="/hr">per hour</option>
                                            <option value="/mnth">per month</option>
                                            <option value="/assg">per assignment</option>
                                        </select>
                                    </td>
                                </tr>	
                            </table> 
                            <br/>

                            <label for="job_spec" class="col-md-4 control-label">Job Specification</label>
                            <table class="table table-striped" style="margin-left:10px;">

                                <tr>
                                    <th><center>Subjects</center></th>
                                    <th><center>Subjects you wish to teach</center></th>
                                </tr>

                                <tr>
                                    <td align="center">Maths</td>
                                    <td align="center">
                                        <select name="opted_maths_teach" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center">French</td>
                                    <td align="center">
                                        <select name="opted_french_teach" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center">Science</td>
                                    <td align="center">
                                        <select name="opted_science_teach" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center">Social Studies</td>
                                    <td align="center">
                                        <select name="opted_sst_teach" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center">English</td>
                                    <td align="center">
                                        <select name="opted_english_teach" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center">Hindi</td>
                                    <td align="center">
                                        <select name="opted_hindi_teach" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center">Marathi</td>
                                    <td align="center">
                                        <select name="opted_marathi_teach" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center">Sanskrit</td>
                                    <td align="center">
                                        <select name="opted_sanskrit_teach" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center">Others</td>
                                    <td align="center" style="padding:7.5px;">
                                        <input type="text" name="opted_others_teach" placeholder="                      Specify Subject" style="border:1px solid ;" />
                                    </td>
                                </tr>										

                            </table>

                            

                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-3 col-sm-offset-3 col-sm-3">
                                    <!--<input type="submit" class="btn btn-primary" value="Sign Up!" />-->
									<input type="hidden" value="<?php echo $uniqueelement; ?>" name="key" />
                                    <button id="submit" class="btn btn-primary" value="submit">Next <span class="glyphicon glyphicon-chevron-right"></span></button>
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
            </div><!--end container-->
        </section><!--end section login-->
    </body>
</html>
