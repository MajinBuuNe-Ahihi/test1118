<?php 

$majorarr = array("Bioinformation", "Chemistrys", "Applied Math", "Cyber securiry",
  "Data science");
$studyarr = array("Master", "Phd"
);
$jobarr = array("Education", "Government", "Financial", "Banking",
  "Research and contruction");
$votearr = array("Very bad", "Bad", "Medium", "Good", "Very Good");

$fullname = $_POST('fullname');
$dateofbirth = $_POST('dateofbirth');
$email = $_POST('email');
$phone = $_POST('phone');
$major = $_POST('major');
$study = $_POST('study');
$job = $_POST('job');
$vote = $_POST('vote');
$idea = $_POST('idea');

$conn = mysqli_connect("localhost","root","","test1118");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user(fullname, dateofbirth, email,phone,major,study,job,vote,idea)
VALUES ($fullname, $dateofbirth, $email,$phone,$majorarr[$major],$studyarr[$study],$jobarr[$job],$votearr[$vote],$idea)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();