<?php
  //-----------------------------connect database----------------------------------
function connect(){
$servername = "localhost";
$username = "root";
$password = "root";
$database = "coh9_php";

// ---------------Create connection-----------------
$conn = mysqli_connect($servername, $username, $password, $database);
// ---------------Check connection------------------
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
return $conn;

}
//--------------------------Bring all the data from database--------------------------------------
function get_students()
{
$sql = "SELECT * FROM student";
$result = mysqli_query(connect(), $sql);

$students=array();

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result))
    {
        $students[]=$row;
    }

}
return $students;

}

//--------------------------Bring single data from database by id --------------------------------------
function get_student($id)
{
    $sql = "SELECT * FROM student WHERE id=$id";
    $result = mysqli_query(connect(), $sql);

    return mysqli_fetch_assoc($result);
}
//-----------------------------creat data-----------------------------------------------------------------
function create_student($firstname, $lastname, $birth_date,$gender,$Family_num,$address,$phone_number,$email, $education_level, $gpa)
{
    $familynum = !empty($familynum) ? (int) $familynum : 0;
    $gpa = !empty($gpa) ? (float) $gpa : 0;
    $sql = "INSERT INTO student (firstname, lastname, birth_date,gender,family_num,address,phone_number, email, education_level,gpa) VALUE ('$firstname', '$lastname',$birth_date,$gender,$Family_num,'$address','$phone_number','$email', '$education_level', $gpa)";
    $result = mysqli_query(connect(), $sql);
}

