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

$conn = mysqli_connect("localhost", "root@localhost",null,"test1118");
mysql_set_charset($ketnoi,’utf8’);
echo "connect";