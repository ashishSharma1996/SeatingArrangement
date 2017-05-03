<?php
session_start();
if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
else
{
?>

<!doctype html>
<html>
<head>
    <title>Exam Management System: Selection Page</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
    <script>
        function timeTable()
        {
            var val = confirm("Are you sure you want to print TimeTable?");
            if(val == true)
            {
                window.open('TimeTableSe.php');
            }
        }
        function seatingArrangement()
        {
            var val = confirm("Are you sure you want to print TimeTable?");
            if(val == true)
            {
                window.open('seatingArrangement.php');
            }
        }
        function superVisorAllot()
        {
            var val = confirm("Are you sure you want to print TimeTable?");
            if(val == true)
            {
                window.open('teacherTime.php');
            }
        }
    </script>
</head>
    <body>
    <nav class="navbar navbar-default bg-primary">
        <div class="container-fluid">
            <!--header-->
            <div class="navbar-header">
                <div class="navbar-brand">
                    SEATING ARRANGEMENT SYSTEM
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <input type="button" class="form-control btn btn-primary btn-block" onclick="timeTable()" value="Time Table"/><br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <input type="button" class="form-control btn btn-primary btn-block"  onclick="seatingArrangement()" value="Seating Arrangement"/><br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <input type="button" class="form-control btn btn-primary btn-block" onclick="superVisorAllot()" value="Allocate Supervisor"/><br/>
            </div>
        </div>
    </div>
    </body>
</html>
<?php }?>