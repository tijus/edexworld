<!DOCTYPE html>
<html>
    <head>
        <title>Entry Pass</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/npm.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="javascript.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/validator.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#myModal').modal({
                });
            });
        </script>
        <style type="text/css">
            .bs-example{
                margin: 20px;
            }
        </style>
        <style>
            .hide { position:absolute; top:-1px; left:-1px; width:1px; height:1px; }
        </style>
    </head>

    <body style="background-color:#A8E3E3">
        <div class="bs-example">
            <div id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form data-toggle="validator" role="form" name="register" action="inputcred.php" method="post" id="register" >
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" data-error="Please enter your name" required/>
                                    <span class="help-block with-errors"></span>
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="text" class="form-control" id="dob" name="dob" data-error="Please enter your date of birth" required/>
                                    <span class="help-block with-errors"></span>
                                </div>
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" class="form-control" id="company" name="company" data-error="Please enter the name of your company" required/>
                                    <span class="help-block with-errors"></span>
                                </div>
                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input type="text" class="form-control" id="designation" name="designation" data-error="Please enter your designation" required/>
                                    <span class="help-block with-errors"></span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" data-error="Please enter your email address" required/>
                                    <span class="help-block with-errors"></span>
                                </div>
                                <div class="form-group">
                                    <label for="locality">Locality</label>
                                    <input type="text" class="form-control" id="locality" name="locality" data-error="Please enter your locality" required/>
                                    <span class="help-block with-errors"></span>
                                </div>
                                <div class="form-group">
                                    <label for="society">Society</label>
                                    <input type="text" class="form-control" id="society" name="society" data-error="Please enter the name of your society" required/>
                                    <span class="help-block with-errors"></span>
                                </div>
                                <div class="form-group">
                                    <label for="flat">Flat number</label>
                                    <input type="text" class="form-control" id="flat" name="flat" data-error="Please enter your flat number" required/>
                                    <span class="help-block with-errors"></span>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Contact Number</label>
                                    <input type="number" class="form-control" id="phone" name="phone" data-error="Please enter your Contact Number" required/>
                                    <span class="help-block with-errors"></span>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>