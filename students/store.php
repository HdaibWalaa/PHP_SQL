<?php
session_start();
include "./function.php";

$_SESSION['error'] = null;
//----------------validation-------------------------------
if ($_SERVER['REQUEST_METHOD'] != "POST" || empty($_POST))
    die("You are a bad guy and you are trying to access this code directly!");

$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
$birth_date = isset($_POST['birth_date']) ? $_POST['birth_date'] : null;
$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
$Family_num = isset($_POST['Family_num']) ? $_POST['Family_num'] : null;
$address = isset($_POST['address']) ? $_POST['address'] : null;
$phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$education_level = isset($_POST['education_level']) ? $_POST['education_level'] : null;
$gpa = isset($_POST['gpa']) ? $_POST['gpa'] : null;

$error = false;
$error_msg = '';


if (!empty($firstname) && !empty($lastname)&&!empty($birth_date)) {
    $new_student_id = create_student($firstname, $lastname, $birth_date,$gender,$Family_num,$address,$phone_number,$email, $education_level, $gpa);
} else {
    $error_msg = "Please fillout the required information (First Name, Last Name)";
    $error = true;
}

if ($error) {
    $_SESSION['error'] = $error_msg;
    header("Location: ./create.php");
} else {
    header("Location: ./student.php?id= $new_student_id");
}
