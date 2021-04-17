<!-- Step 1: (2 points) Include your header here -->
<?php 
  require("_header.php"); 
?>
<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
    <p>
        <a href="index.php">Home</a>
    </p>
<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
    <form action="insert.php" method="post">
        <div class="form-group">
            <label>First Name:</label>
            <input class="form-control" type="text" name="first_name">
        </div>
        <div class="form-group">
            <label>Last Name:</label>
            <input class="form-control" type="text" name="last_name">
        </div>
        <div class="form-group">
            <label>Date of Birth:</label>
            <input class="form-control" type="date" name="date_of_birth">
        </div>
        <div class="form-group">
            <label>Alias:</label>
            <input class="form-control" type="text" name="alias">
        </div>
        <div class="form-group">
            <label>Active:</label>
            <input class="form-control" type="text" name="active" placeholder="True or false">
        </div>
        <div class="form-group">
            <label>Hero:</label>
            <input class="form-control" type="text" name="hero" placeholder="True or false">
        </div>
        <button class="btn btn-primary" type="submit">Create</button>
    </form>

<!-- Step 5: (2 points) Include your footer here -->
<?php 
  require("_footer.php"); 
?>

<!-- TOTAL POINTS POSSIBLE: 24 -->