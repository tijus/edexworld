<!DOCTYPE>
<html>
<head>
<script src="jquery/jquery-1.10.2.min.js"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link href="bootstrap-dialog/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
        <script src="bootstrap-dialog/js/bootstrap-dialog.min.js"></script>
<title>RTLS TEST ALERT</title>
</head>
<body style="background-color:#A8E3E3">
<div id="modal-container"></div>
        <script type="text/javascript">
            /**
             * This example demonstrates how to append modal stuff to a div other than body.
             */   
        
            $(function() {
                var types = [ BootstrapDialog.TYPE_DANGER];
                     
        $.each(types, function(index, type){
            BootstrapDialog.show({
                type: type,
                title: 'MISSED SOMETHING', 
                message: 'You might be missing something. Please go back',
                buttons: [{
                    label: '<a href="javascript:history.back()">Go back</a>',
                }]
            });     
        });
                dialog.realize();
                $('#modal-container').append(dialog.getModal());
                dialog.open();
            });
        </script>
</body>
</html>
