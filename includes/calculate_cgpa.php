<?php 
// define variables and set to empty values
$cgpa = $tch = 0;
$totalCredit = 0;
$totalGradePoints = 0;
$sgpa = $tgp = $ttcredit = $ttgp = $totalcgpa = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$cgpa = test_input($_POST["cgpa"]);
$tch = test_input($_POST["tch"]);

if (empty($_POST["grade1"])) {
    $grade1 = 0;
  } else {
    $grade1 = test_input($_POST["grade1"]);
  }

if (empty($_POST["ch1"])) {
    $ch1 = 0;
  } else {
    $ch1 = test_input($_POST["ch1"]);
  }

if (empty($_POST["grade2"])) {
    $grade2 = 0;
  } else {
    $grade2 = test_input($_POST["grade2"]);
  }

if (empty($_POST["ch2"])) {
    $ch2 = 0;
  } else {
    $ch2 = test_input($_POST["ch2"]);
  }

if (empty($_POST["grade3"])) {
    $grade3 = 0;
  } else {
    $grade3 = test_input($_POST["grade3"]);
  }

if (empty($_POST["ch3"])) {
    $ch3 = 0;
  } else {
    $ch3 = test_input($_POST["ch3"]);
  }

if (empty($_POST["grade4"])) {
    $grade4 = 0;
  } else {
    $grade4 = test_input($_POST["grade4"]);
  }

if (empty($_POST["ch4"])) {
    $ch4 = 0;
  } else {
    $ch4 = test_input($_POST["ch4"]);
  }

if (empty($_POST["grade5"])) {
    $grade5 = 0;
  } else {
    $grade5 = test_input($_POST["grade5"]);
  }

if (empty($_POST["ch5"])) {
    $ch5 = 0;
  } else {
    $ch5 = test_input($_POST["ch5"]);
  }

if (empty($_POST["grade6"])) {
    $grade6 = 0;
  } else {
    $grade6 = test_input($_POST["grade6"]);
  }

if (empty($_POST["ch6"])) {
    $ch6 = 0;
  } else {
    $ch6 = test_input($_POST["ch6"]);
  }

if (empty($_POST["grade7"])) {
    $grade7 = 0;
  } else {
    $grade7 = test_input($_POST["grade7"]);
  }

if (empty($_POST["ch7"])) {
    $ch7 = 0;
  } else {
    $ch7 = test_input($_POST["ch7"]);
  }

if (empty($_POST["grade8"])) {
    $grade8 = 0;
  } else {
    $grade8 = test_input($_POST["grade8"]);
  }

if (empty($_POST["ch8"])) {
    $ch8 = 0;
  } else {
    $ch8 = test_input($_POST["ch8"]);
  }

  $totalCredit = $ch1 + $ch2 + $ch3 + $ch4 + $ch5 + $ch6 + $ch7  + $ch8 ;
  $totalGradePoints = ($grade1*$ch1) + ($grade2*$ch2) + ($grade3*$ch3) + ($grade4*$ch4) + ($grade5*$ch5) + ($grade6*$ch6) + ($grade7*$ch7) + ($grade8*$ch8);
  $sgpa = $totalGradePoints/$totalCredit;
  $tgp = $tch * $cgpa;
  $ttcredit = $totalCredit + $tch;
  $ttgp = $tgp + $totalGradePoints;
  $totalcgpa = $ttgp/$ttcredit;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>