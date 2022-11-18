<?php 

$majorarr = array("Bioinformation", "Chemistrys", "Applied Math", "Cyber securiry",
  "Data science");
$studyarr = array("Master", "Phd"
);
$jobarr = array("Education", "Government", "Financial", "Banking",
  "Research and contruction");
$votearr = array("Very bad", "Bad", "Medium", "Good", "Very Good");

$fullname = $_POST['fullname'];
$dateofbirth = $_POST['dateofbirth'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$major = $_POST['major'];
$study = $_POST['study'];
$job = $_POST['job'];
$vote = $_POST['vote'];
$idea = $_POST['idea'];

$servername = "localhost";
$database = "test1118";
$username = "root@localhost";
$password = null;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

