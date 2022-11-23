<?php
include './header.php';
$student = get_student($_GET['id']);
if(!$student)
die("student is not existed");
?>
<!-- <div class="mb-5">
    <a class="btn btn-warning mr-3" href="./edit.php?id=<?= $customer['id'] ?>">Edit</a>
    <a class="btn btn-danger" href="./delete.php?id=<?= $customer['id'] ?>">Delete</a>
</div> -->
<h1 class="text-center">STUDENT INFO</h1>
<p>
    <strong>ID:</strong>
    <?= $student['id'] ?>
</p>
<p>
    <strong>First Name:</strong>
    <?=$student["firstname"] ?>
</p>
<p>
    <strong>Last Name:</strong>
    <?= $student["lastname"] ?>
</p>
<p>
    <strong>birth date:</strong>
    <?= $student["birth_date"] ?>
</p>
<p>
    <strong>Gender:</strong>
    <?= $student["Gender"] ?>
</p>
<p>
    <strong>Family number:</strong>
    <?= $student["Family_num"] ?>
</p>
<p>
    <strong>Present Address:</strong>
    <?= $student["address"] ?>
</p>
<p>
    <strong>phone number:</strong>
    <?= $student ["phone_number"] ?>
</p>
<p>
    <strong>email:</strong>
    <?= $student["email"] ?>
</p>
<p>
    <strong>education level:</strong>
    <?= $student["education_level"] ?>
</p>
<p>
    <strong>GPA:</strong>
    <?= $student["GPA"] ?>
</p>



<?php include './footer.php' ?>