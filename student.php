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

        <!--section student-->
        <section class="section-student add-padding" id="student">
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
                        <h2>For Students</h2>
                    </div>
                    <div class="col-md-3 col-sm-3">
                    </div>

                    <div class="col-md-6 col-sm-6 accordions">
                        <form method="post" action="student_process.php">

                            <div class="form-group">
                                <label for="academic" class="col-md-4 control-label">Academic Session</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="academic" id="academic">
                                        <option value="0">Select</option>
                                        <option value="1">2016-17</option>
                                        <option value="2">2017-18</option>
										<option value="3">2018-19</option>
                                    </select>
                                    <br/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="standard" class="col-md-4 control-label">Standard</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="standard" id="standard">
                                        <option value="none">Select</option>
                                        <option value="3">III</option>
                                        <option value="4">IV</option>
                                        <option value="5">V</option>
                                        <option value="6">VI</option>
                                        <option value="7">VII</option>
                                        <option value="8">VIII</option>
                                        <option value="9">IX</option>
                                        <option value="10">X</option>
                                        <option value="11A">XI-Arts</option>
                                        <option value="12A">XII-Arts</option>
                                        <option value="11C">XI-Commerce</option>
                                        <option value="12C">XII-Commerce</option>
                                        <option value="11S">XI-Science</option>
                                        <option value="12S">XII-Science</option>
                                    </select>
                                    <br/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="schooladdress" class="col-md-4 control-label">School Name & Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="schooladdress" name="schooladdress" placeholder="Enter your School Name & Address" />
                                    <br/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="board" class="col-md-4 control-label">Board of Affiliation</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="board" id="board">
                                        <option value="na">Select</option>  
                                        <option value="1">Andhra Pradesh Board of Secondary Education</option>
                                        <option value="2">Andhra Pradesh Board of Secondary Education</option>
                                        <option value="3">Andhra Pradesh Board of Intermediate Education</option>
                                        <option value="4">Assam Higher Secondary Education Council</option>
                                        <option value="5">Assam Board of Secondary Education</option>
                                        <option value="6">Board of Secondary Education, Madhya Pradesh</option>
                                        <option value="7">Board of Secondary Education, Madhya Bharat, Shanti Niketan Satya Dev Nagar Gwalior</option>
                                        <option value="8">Bihar School Examination Board</option>
                                        <option value="9">Bihar Intermediate Education Council</option>
                                        <option value="10">Central Board of Secondary Education</option>
                                        <option value="11">Council for the Indian School Certificate Examination</option>
                                        <option value="12">Chhattisgarh Board of Secondary Education</option>
                                        <option value="13">Goa Board of Secondary & Higher Secondary Education</option>
                                        <option value="14">Gujarat Secondary Education Board</option>
                                        <option value="15">Haryana Board of Education</option>	
                                        <option value="16">Himachal Pradesh Board of School Education</option>
                                        <option value="17">J&K State Board of School Education</option>
                                        <option value="18">Jharkhand Academic Council</option>
                                        <option value="19">Karnataka Secondary Education Examination Board</option>
                                        <option value="20">Karnataka Board of the Pre-University Education</option>
                                        <option value="21">Kerala Board of Public Examinations</option>
                                        <option value="22">Maharashtra State Board of Secondary and Higher Secondary Education</option>
                                        <option value="23">Manipur Board of Secondary Education</option>
                                        <option value="24">Manipur Council of Higher Secondary Education</option>
                                        <option value="25">Meghalaya Board of School Education</option>
                                        <option value="26">Mizoram Board of School Education</option>
                                        <option value="27">Nagaland Board of School Education</option>
                                        <option value="28">National Institute of Open Schooling</option>
                                        <option value="29">Orissa Board of Secondary Education</option>
                                        <option value="30">Orissa Council of Higher Secondary Education</option>
                                        <option value="31">Punjab School Education Board</option>
                                        <option value="32">Board of Secondary Education, Rajasthan</option>
                                        <option value="33">Tamil Nadu Board of Secondary Education</option>
                                        <option value="34">Tamil Nadu Board of Higher Secondary Education</option>
                                        <option value="35">Tripura Board of Secondary Education</option>
                                        <option value="36">Uttar Pradesh Board of High School and Intermediate Education</option>
                                        <option value="37">West Bengal Board of Secondary Education</option>
                                        <option value="38">West Bengal Council of Higher Secondary Education</option>
                                        <option value="39">Uttarakhand Board of School Education</option>
                                        <option value="40">Others</option>
                                    </select>
                                    <br/>
                                </div>
                            </div>

                            <table class="table table-striped" style="margin-top:250px; margin-left: 10px;">
                                <tr>
                                    <th><center>Subjects</center></th>
                                    <th><center>Marks/Grade obtained</center></th>
                                    <th><center>Marks/Grade Expected</center></th>
                                    <th><center>Tuition Required</center></th>
                                </tr>
                                <tr>
                                    <td align="center">Maths</td>
                                    <td align="center"><input type="text" name="maths_marksobt" style="border:1px solid;" /></td>
                                    <td align="center"><input type="text" name="maths_marksexp" style="border:1px solid;" /></td>
                                    <td align="center">
                                        <select name="opted_maths" style="border:1px solid;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">French</td>
                                    <td align="center"><input type="text" name="french_marksobt" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center"><input type="text" name="french_marksexp" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center">
                                        <select name="opted_french" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Science</td>
                                    <td align="center"><input type="text" name="science_marksobt" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center"><input type="text" name="science_marksexp" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center">
                                        <select name="opted_science" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">S. St.</td>
                                    <td align="center"><input type="text" name="sst_marksobt" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center"><input type="text" name="sst_marksexp" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center">
                                        <select name="opted_sst" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">English</td>
                                    <td align="center"><input type="text" name="english_marksobt" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center"><input type="text" name="english_marksexp" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center">
                                        <select name="opted_english" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Hindi</td>
                                    <td align="center"><input type="text" name="hindi_marksobt" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center"><input type="text" name="hindi_marksexp" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center">
                                        <select name="opted_hindi" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Marathi</td>
                                    <td align="center"><input type="text" name="marathi_marksobt" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center"><input type="text" name="marathi_marksexp" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center">
                                        <select name="opted_marathi" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Sanskrit</td>
                                    <td align="center"><input type="text" name="sanskrit_marksobt" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center"><input type="text" name="sanskrit_marksexp" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center">
                                        <select name="opted_sanskrit" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">Others</td>
                                    <td align="center"><input type="text" name="others_marksobt" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center"><input type="text" name="others_marksexp" align="middle" style="border:1px solid ;"/></td>
                                    <td align="center">
                                        <select name="opted_others" style="border:1px solid ;">
                                            <option value="NA">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
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
