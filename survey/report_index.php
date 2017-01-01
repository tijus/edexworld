<!DOCTYPE html>
<html>
    <head>
        <title>EDEXWORLD | Lifeskills</title>
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
                        <div class="modal-header">
                            <h4 class="modal-title">Please select from the following:</h4>
                        </div><form data-toggle="validator" role="form" name="register" action="report.php" method="post" id="register" >
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="class">Standard</label>
                                    <input type="text" class="form-control" id="class" name="class" data-error="Please enter your standard" />
                                    <span class="help-block with-errors"></span>
                                </div>
                                <div class="form-group">
                                    <label for="school">School</label>
                                    <input type="text" class="form-control" id="school" name="school" data-error="Please enter your school" />
                                    <span class="help-block with-errors"></span>
                                </div>
                                <div class="form-group">
                                    <label for="society">Society</label>
                                    <input type="text" class="form-control" id="society" name="society" data-error="Please enter your society" />
                                    <span class="help-block with-errors"></span>
                                </div>
                                <div class="form-group">
                                    <label for="area">Area</label>
                                    <input type="text" class="form-control" id="area" name="area" data-error="Please enter your area" />
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