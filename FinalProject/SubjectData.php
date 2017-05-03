<?php
session_start();
$conn = mysqli_connect('localhost','root','root') or die();
$db = mysqli_select_db($conn,'seatingarrangement');
$yr = $_GET["Year"];
$Sem = $_SESSION['Details']["Semester"];
$SemPattern;
if($Sem =="odd")
{
   $SemPattern = "[1,3,5,7]";
}
if($Sem == "even")
{
   $SemPattern = "[2,4,6,8]";
}
/*
 REGEXP '^[TE].*[2,4,6,8]..$'
*/
$sql = "Select ShortNames from Subject where SubjectCode REGEXP '^[".$_GET["Year"]."].*".$SemPattern."..$'";
$sqlResult = mysqli_query($conn,$sql);
$i=0;
$subject = "subject" . $_GET["subject"];

if($sqlResult!=false)
{
echo"<select name=".$subject." class=\"form-control\">";
 while ($row = mysqli_fetch_array($sqlResult)) {
print <<<end
<option value="$row[0]">$row[0]</option>
end;
}
echo"</select>";  
}

else
echo"Error in Fetching data";

mysqli_close($conn);
?>
