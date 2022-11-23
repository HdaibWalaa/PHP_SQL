<?php 
include './header.php';
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Gender</th>
      <th scope="col">Family Number</th>
      <th scope="col">Present Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Education level</th>
      <th scope="col">GPA</th>
      <th scope="col">Check student</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach (get_students() as $students) : ?>
    <tr>
      <th scope="row"><?= $students['id'] ?></th>
      <td><?= $students["firstname"] ?></td>
      <td><?= $students["lastname"] ?></td>
      <td><?= $students["birth_date"] ?></td>
      <td><?= $students["Gender"] ?></td>
      <td><?= $students["Family_num"] ?></td>
      <td><?= $students["address"] ?></td>
      <td><?= $students ["phone_number"] ?></td>
      <td><?= $students["email"] ?></td>
      <td><?= $students["education_level"] ?></td>
      <td><?= $students["GPA"] ?></td>
      <td>
                    <a href="./student.php?id=<?= $students['id'] ?>" class="btn btn-success">
                        Check student
                    </a>
                </td>
    </tr>
        <?php endforeach; ?>
  </tbody>
</table>
<?php include './footer.php' ?>