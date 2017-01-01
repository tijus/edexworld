<?php
session_start();
if (!(isset($_SESSION["uname"]))) {
    header("Location:/edexworld/index.php#login");
} else {
     $document_root = $_SERVER['DOCUMENT_ROOT'];
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta charset="utf-8">
            <title>Edexworld | Dashboard</title>
            <meta name="generator" content="Bootply" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <!--[if lt IE 9]>
                    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
            <link href="css/styles.css" rel="stylesheet">
        </head>
        <body>
            <!-- header -->
            <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i><?php echo $_SESSION["uname"]; ?> <span class="caret"></span></a>
                                <ul id="g-account-menu" class="dropdown-menu" role="menu">
                                    <li><a href="#">My Profile</a></li>
                                </ul>
                            </li>
                            
                            
                            <li><a href="../logout.php"><span class="glyphicon glyphicon-lock"></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /container -->
            </div>
            <!-- /Header -->

            <!-- Main -->
            <div style="padding-bottom: 200px; overflow: auto;" class="container-fluid">
                <div class="row">
                    <div style="margin-left:2.5%; margin-top:1.5%;">
                        <?php include("sidebar.php"); ?>
                    </div>

                    <div class="col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <strong>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Your Profile
                                        </a>
                                    </strong>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">


                                    <?php
                            
                                    $document_root = $_SERVER['DOCUMENT_ROOT'];

                                    include($document_root . "/config.php");
                                    include($document_root . "/functions.php");

                                    $sql = "Select * from registrations where id ='" . $_SESSION["id"] . "'";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $sql2 = "Select * from student where uniqueelement='" . $row["uniqueelement"] . "'";
                                            $result2 = $conn->query($sql2);
                                            ?>
                                            <div class="row">
                                                <div style="float:left;">
                                                    <?php
                                                    if (empty($row["image"]) || is_null($row["image"])) {
                                                        print '<tr>
                                                        <td>
                                                           <img name="avatar" src="../pics/avatar.png" class="img-thumbnail" height="140" width="140"/>   
                                                        </td>
                                                        <td></td><td></td>
                                                  </tr>';
                                                    } else {
                                                        print '<tr>
                                                        <td>
                                                          <img name="' . $row["image"] . '" src="/' . $row["image"] . '" class="img-thumbnail"   height="125" width="125"/>   
                                                        </td>
                                                        <td></td><td></td>
                                                  </tr>';
                                                    }
                                                    ?>
                                                </div>
                                                <table class="table table-hover" style="float:right;">
                                                    <tr>
                                                        <th>
                                                            <b> Name:</b>&nbsp;
                                                        </th>
                                                        <td>
                                                            <?php echo ucwords($row["first_name"]) . " " . ucwords($row["last_name"]); ?> 
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <b> Date Of Birth:</b>&nbsp;
                                                        </th>
                                                        <td>
                                                            <?php echo $row["dob"]; ?> 
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <b> Father's name:</b>&nbsp;
                                                        </th>
                                                        <td>
                                                            <?php echo ucwords($row["father_name"]); ?> 
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <b> Category:</b>&nbsp;
                                                        </th>
                                                        <td>
                                                            <?php echo $row["cat"]; ?> 
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <b> Address:</b>&nbsp;
                                                        </th>
                                                        <td>
                                                            <span id="label1"><?php echo $row["address"] . ", " . $row["state"]; ?> </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <b> Sex:</b>&nbsp;
                                                        </th>
                                                        <td>
                                                            <?php echo $row["sex"]; ?> 
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <b> Email:</b>&nbsp;
                                                        </th>
                                                        <td>
                                                            <?php echo $row["email"]; ?> 
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <b> Mobile:</b>&nbsp;
                                                        </th>
                                                        <td>
                                                            <span id="label2"><?php echo $row["mobile"]; ?> </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <b> Landline:</b>&nbsp;
                                                        </th>
                                                        <td>
                                                            <span id="label3"><?php echo $row["landline"]; ?> </span>
                                                        </td>
                                                    </tr>

                                                    <?php
                                                    if ($row["cat"] == "Student") {
                                                        while ($row2 = $result2->fetch_assoc()) {
                                                            ?>
                                                            <tr>
                                                                <th>
                                                                    <b> Standard:</b>&nbsp;
                                                                </th>
                                                                <td>
                                                                    <span id="label4">
                                                                        <?php
                                                                        switch ($row2["Standard"]) {
                                                                            case "3":
                                                                                echo "III";
                                                                                break;
                                                                            case "4":
                                                                                echo "IV";
                                                                                break;
                                                                            case "5":
                                                                                echo "V";
                                                                                break;
                                                                            case "6":
                                                                                echo "VI";
                                                                                break;
                                                                            case "7":
                                                                                echo "VII";
                                                                                break;
                                                                            case "8":
                                                                                echo "VIII";
                                                                                break;
                                                                            case "9":
                                                                                echo "IX";
                                                                                break;
                                                                            case "10":
                                                                                echo "X";
                                                                                break;
                                                                            case "11A":
                                                                                echo "XI-Arts";
                                                                                break;
                                                                            case "12A":
                                                                                echo "XII-Arts";
                                                                                break;
                                                                            case "11C":
                                                                                echo "XI-Commerce";
                                                                                break;
                                                                            case "12C":
                                                                                echo "XII-Commerce";
                                                                                break;
                                                                            case "11S":
                                                                                echo "XI-Science";
                                                                                break;
                                                                            case "12S":
                                                                                echo "XII-Science";
                                                                                break;
                                                                        }
                                                                        ?> 
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <b> School:</b>&nbsp;
                                                                </th>
                                                                <td>
                                                                    <span id="label5"><?php echo $row2["schooladdress"]; ?> </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <b> Session:</b>&nbsp;
                                                                </th>
                                                                <td>
                                                                    <span id="label6">
                                                                        <?php
                                                                        switch ($row2["Academic"]) {
                                                                            case "1":
                                                                                echo "2016-17";
                                                                                break;
                                                                            case "2":
                                                                                echo "2017-18";
                                                                                break;
                                                                            case "3":
                                                                                echo "2018-19";
                                                                                break;
                                                                        }
                                                                        ?> 
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <strong>
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Update Information
                                                </a>
                                            </strong>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <form class="form-horizontal" role="form" name="update" action="update.php" style="margin-top:20px;" method="post" id="update" enctype="multipart/form-data">
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
                                                                <input type="checkbox" id="agree" name="agree" data-error="Please check the terms and conditions of registration" required /> I agree with the Terms &amp; Conditions
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
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>
                    </div>
                </div>


                <?php include("footer.php"); ?>

            </div>
            <!-- /Main -->
            <!-- /.modal -->
            <!-- script references -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/scripts.js"></script>
        </body>
    </html>
    <?php
}
?>