<?php
$a=$_POST['email'];
$b=$_POST['name'];
$c=$_POST['reg-no'];
$d=$_POST['number'];
$e=$_POST['wumber'];
$f=$_POST['gender'];
$g=$_POST['hostel'];
$h=$_POST['block'];
$i=$_POST['rno'];
$j=$_POST['programme'];
$k=$_POST['bname'];
$l=$_POST['field'];
$m=$_POST['referal'];
$servername = "localhost";
$username = "spadelpu_spadelpu";
$password = "vishal2000";

// Create connection
$conn = new mysqli($servername, $username, $password,"spadelpu_registrations");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql = "INSERT INTO `mrd`(`Email`, `Name`, `Registration_No`, `Contact`, `Whatsapp`, `Gender`, `Hostel`, `Block`, `RoomNo.`, `Programme`, `Branch Name`, `Field Of Interest`, `refferal`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')";
}
if ($conn->query($sql) === TRUE) {
    echo "Thank You, Registered Sucessfully  |  ";
    echo "<br><br>";
    echo "<a href='https://www.spadelpu.com'>Click here to Go back to Home Page</a>";
    echo "<br><br>";
    echo "Or If you wish to Register again, then <a href='https://mrd.spadelpu.com'>click here</a>";
    echo "<br><br>";
    echo "You can feel free to contact us at <a href='tel:+919182280129'>+91 91822 80129</a> .";
    echo "<br><br>";
    echo "Please do visit our social media handle with id spadelpu.";
}

$conn->close();

?>
