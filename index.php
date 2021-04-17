<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  require("_connect.php");

  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "SELECT * FROM supers");
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php 
  require("_header.php"); 
?>
<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
  <div>
    <a class="btn btn-primary" href="index.php">Home</a>
    <a class="btn btn-primary" href="new.php">Create a person</a>
  </div>
<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->
<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->
<!-- CREATE YOUR TABLE BELOW THIS LINE -->
<table class="table table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Alias</th>
        <th>Active</th>
        <th>Hero</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($rows as $row): ?>
      <tr>
        <td><?= $row['first_name'] ?></td>
        <td><?= $row['last_name'] ?></td>
        <td><?= $row['date_of_birth'] ?></td>
        <td><?= $row['alias'] ?></td>
        <td><?= $row['active'] ?></td>
        <td><?= $row['hero'] ?></td>
        <td>
          <a href="./edit.php?id=<?= $row['id'] ?>">Edit</a>
          <a href="./delete.php?id=<?= $row['id'] ?>">Delete</a>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
</table>

<!-- Step 7: (2 points) Include your footer here -->
<?php 
  require("_footer.php"); 
?>
<!-- TOTAL POINTS POSSIBLE: 34 -->