<?php
$servername = "mysql.hostinger.in";
$username = "u581423896_sujit";
$password = "1sujitamit*";
$dbname = "u581423896_survy";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sel_sql = "SELECT * FROM users";
$sel_res = mysqli_query($conn, $sel_sql) or die(mysqli_error($conn));
?>
<html>
    <head>
        <title>User Information</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" type="text/css" />
    </head>
    <body style="padding: 25px;" >
        <h6>
            <table id="example" style="font-size: 12px;" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>DOB</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Roll No.</th>
                        <th>School</th>
                        <th>Syllabus</th>
                        <th>Society</th>
                        <th>Area</th>
                        <th>Email</th>
                        <th>Contact No.</th>
                        <th>Filename</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($sel_row = mysqli_fetch_assoc($sel_res)) {
                        $table = "<tr>"
                                . "<td>" . $sel_row['id'] . "</td>"
                                . "<td>" . $sel_row['name'] . "</td>"
                                . "<td>" . $sel_row['dob'] . "</td>"
                                . "<td>" . $sel_row['class'] . "</td>"
                                . "<td>" . $sel_row['section'] . "</td>"
                                . "<td>" . $sel_row['roll_no'] . "</td>"
                                . "<td>" . $sel_row['school'] . "</td>"
                                . "<td>" . $sel_row['syllabus'] . "</td>"
                                . "<td>" . $sel_row['society'] . "</td>"
                                . "<td>" . $sel_row['area'] . "</td>"
                                . "<td>" . $sel_row['email'] . "</td>"
                                . "<td>" . $sel_row['contact'] . "</td>"
                                . "<td><a href = 'reports/" . $sel_row['filename'] . "'>" . $sel_row['filename'] . "</a></td>"
                                . "<td>" . $sel_row['time'] . "</td>"
                                . "</tr>";
                        echo $table;
                    }
                    ?>
                </tbody>
            </table>
        </h6>
    </body>
</html>