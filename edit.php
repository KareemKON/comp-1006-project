<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  require("_connect.php");
  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $res = mysqli_query($conn, "SELECT * FROM supers WHERE id = {$_GET['id']}");
  $row = mysqli_fetch_assoc($res);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php 
  require("_header.php"); 
?>
<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
    <p>
        <a href="index.php">Home</a>
    </p>
<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
  <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <div class="form-group">
      <label>First Name:</label>
      <input class="form-control" type="text" name="first_name" value=<?= $row['first_name'] ?>>
    </div>
    <div class="form-group">
      <label>Last Name:</label>
      <input class="form-control" type="text" name="last_name" value=<?= $row['last_name'] ?>>
    </div>
    <div class="form-group">
      <label>Date of Birth:</label>
      <input class="form-control" type="date" name="date_of_birth" value=<?= $row['date_of_birth'] ?>>
    </div>
    <div class="form-group">
      <label>Alias:</label>
      <input class="form-control" type="text" name="alias" value=<?= $row['alias'] ?>>
    </div>
    <div class="form-group">
      <label>Active:</label>
      <input class="form-control" type="text" name="active" value=<?= $row['active'] ?>>
    </div>
    <div class="form-group">
      <label>Hero:</label>
      <input class="form-control" type="text" name="hero" value=<?= $row['hero'] ?>>
    </div>
    <button class="btn btn-primary" type="submit">Update</button>
  </form>

<!-- Step 8: (2 points) Include your footer here -->
<?php 
  require("_footer.php"); 
?>

<!-- TOTAL POINTS POSSIBLE: 44 -->