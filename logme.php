<?php 
echo "<h1> test my php skills </h1>";
$pass = $_POST["password"];
$email = $_POST["email"];
date_default_timezone_set("Africa/Lagos");
$time = date("h:i:s a");
$date = date("d-m-Y");

echo "the login username is $email and the password is $pass <br> todays date is $date and current time is $time\n";
if( $email == "muhammad ameer salisu" && $pass == "textmyphpskills"){
echo "\nSuccessfully Logme";
}else{
echo "\nFaild to logme!";
}
// echo date(h);
// $myFile = fopen("./location.txt", "a");
$ips = $_SERVER["REMOTE_ADDR"];
//==========[]==========\n\tEmail: $email \n\tPswd: $pass \n\tIP_Addr: $ips \n================================\n\n
// $myDatas = "==========[]==========\n\tEmail: $email \n\tPswd: $pass \n\tIP_Addr: $ips \n================================\n\n";
// fwrite($myFile, $myDatas);
// fclose($myFile);
echo "\n<center><b>Copyright &copy; DHF </b></center>";
?>

