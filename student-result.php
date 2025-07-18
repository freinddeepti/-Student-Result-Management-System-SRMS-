<?php
include 'db/config.php';

$roll = $_POST['roll_number'];
$dob = $_POST['dob'];

$query = "SELECT * FROM students WHERE roll_number='$roll' AND dob='$dob'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
  $student = mysqli_fetch_assoc($result);
  $id = $student['id'];

  $marks = mysqli_query($conn, "SELECT subject, marks FROM results WHERE student_id=$id");

  echo "<h2>Welcome, {$student['name']}</h2><table>";
  while ($row = mysqli_fetch_assoc($marks)) {
    echo "<tr><td>{$row['subject']}</td><td>{$row['marks']}</td></tr>";
  }
  echo "</table>";
} else {
  echo "Invalid details!";
}
?>
