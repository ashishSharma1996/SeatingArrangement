<?php
/*
 * Unset the session vaariable since it is the first page and the session starts here
 */
session_start();
session_unset();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $_SESSION['Details']=$_POST;
    $str=<<< _alert
<script>
alert('Moving To Prepare TimeTable');
window.location.assign("TimeTableSe.php");
</script>
_alert;
echo $str;
}
else
{
?>
<!doctype html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
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
<!--        <div class="row">-->
<!--        <header class="col-md-6 col-md-push-3">-->
<!--            <h1>SEATING ARRANGEMENT SYSTEM</h1>-->
<!--        </header>-->
<!--        </div>-->
        <div class="form-group col-md-4 col-md-push-4">
        <form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="form1" >
            <div>
                <label>Exam</label> &nbsp;
                <select name="Exam" title="exam" class="form-control">
                    <option value="Unit Test 1" >Unit Test 1</option>
                    <option value= "Unit Test 2">Unit Test 2</option>
                </select><br/>
                <label>Semester</label>
                <select name="Semester" id="sem" title="Semester" class="form-control">
                    <option value="odd">Odd Semester</option>
                    <option value= "even">Even Semester</option>
                </select>
                <br/>
            </div>
            <div class="row">
                <div id="slot1">
                    <header class="col-md-12"><label>First Slot</label></header>
                    <div class="col-md-6">
                    <label for="startTime1">Start Time:</label><input type="time" name="startTime1" title="startTime1" class="form-control" required /><br/>
                    </div>
                    <div class="col-md-6">
                    <label for="endTime1">End Time:</label><input type="time" name="endTime1" title="endTime1" class="form-control" required/><br/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="slot2">
                    <header class="col-md-12"><label>Second Slot</label></header>
                    <div class="col-md-6">
                        <label for="startTime2">Start Time:</label><input type="time" name="startTime2" title="startTime2" class="form-control" required/><br/>
                    </div>
                    <div class="col-md-6">
                        <label for="endTime2">End Time:</label><input type="time" name="endTime2" title="endTime2" class="form-control" required/><br/>
                    </div>
                </div>
            </div>
            <label for="noClass">Available Class Room</label><input type="number" min="0" max="5" title="noClass" name="noClass" pattern="^[1-5]$" class="form-control" required/><br/>
            <input type="submit" value="Start" class="form-control btn btn-primary">
        </form>
        </div>
    </div>
    </body>
</html>
<?php }
?>