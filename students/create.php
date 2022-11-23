<?php include './header.php' ?>
<form class="w-50" method="POST" action="./store.php">
    <div class="mb-3">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fname" name="firstname" required>
    </div>
    <div class="mb-3">
        <label for="lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lastname" required>
    </div>
    <div class="mb-3">
        <label for="birth_date">Birthday:</label>
        <input type="date" id="birth_date" name="birth_date" required>
    </div>
    <div class="mb-3">
        <label for="gender">Gender:</label>
        <input type="radio" id="gender" name="gender" value="M"> M
        <input type="radio" id="gender" name="gender" value="F"> F
    </div>
    <div class="mb-3">
        <label for="Family_num" class="form-label">Family number:</label>
        <input type="number" class="form-control" id="Family_num" name="Family_num">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Present address:</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>
    <div class="mb-3">
        <label for="phone_number" class="form-label">Phone:</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="education_level" class="form-label">Education level:</label>
        <input type="text" class="form-control" id="education_level" name="education_level">
    </div>
    <div class="mb-3">
        <label for="gpa" class="form-label">GPA:</label>
        <input type="number" class="form-control" id="gpa" name="gpa">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include './footer.php' ?>