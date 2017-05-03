<?php
/**
 * Created by PhpStorm.
 * User: ashish.sharma
 * Date: 07-04-2017
 * Time: 21:46
 */
 session_start();

if(!isset($_SESSION['Details']))
{
    header('Location: homepage.php');
}
else
{?>
    <!doctype html>
    <html>
<head>
    <title>
        Seating Arrangement Print
    </title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
</head>
<body>
<nav class="navbar navbar-default bg-primary">
    <div class="container-fluid">
        <!--header-->
        <div class="navbar-header">
            <a href="#" class="navbar-brand">SEATING ARRANGEMENT SYSTEM</a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="col-md-4 col-md-push-4">
        <div class="data">
            <h1>Seating Arrangement Ready For Print </h1>
        </div>
        <button name="Print" id="Print" onclick="printSeatArrangement()" class="btn btn-primary btn-block">Print</button><br/>
      <!-- <button name="TeacherAllot" id="TeacherAllot" onclick="move()" class="btn btn-primary btn-block" disabled>Seating Arrangement</button>-->
    </div>
</div>
<!-- Button For Seating Arrangement-->
<div>

</div>
<script>
    /*function move()
    {
        alert("Moving Teacher Allocation chart");
        window.location.assign("teacherTime.php");
    }
    */
    function printSeatArrangement()
    {
        alert("Printing Seating Arrangement For All Years");
        //document.getElementById('TeacherAllot').removeAttribute("disabled");
        window.location.assign("SeatingArrangementFormatting.php");
    }
</script>
</body>
</body>
</html>

<?php
}
?>