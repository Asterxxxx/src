<?php
$title = 'Update your info';
include '../VT_TasksWebsite/header.php';
?>
<link rel="stylesheet" href="../VT_TasksWebsite/style.css">

<div class="body-container">


    <div class="home-banner-container">
      <img src="/~viktor23001/web-dev-env-main/VT_TasksWebsite/images/phpbanner.jpg" alt="php-banner" draggable="false">
    <div class="article">

<?php
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<h2> Update your information below: </h2>
<form name="form1" method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First Name" name="fname" required value="<?php echo $row['fname']; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last Name" name="lname" required value="<?php echo $row['lname']; ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="City" name="city" required value="<?php echo $row['city']; ?>">
    </div>

    <div class="col">
      <input type="text" class="form-control" placeholder="Group ID" name="groupid" required value="<?php echo $row['groupid']; ?>">    
    </div>

  </div>
  <br>
  <div class="row">
    <div class="col">
      <button type="submit" class="submit-btn" name="submit">Update your Information</button>
    </div>
<br>

    <div class="col">
      <button type="submit" class="submit-btn" name="delete">Delete your Information</button>
    </div>
  </div>
</form>
<?php 
if (isset($_POST['submit'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    
    $query = mysqli_query($conn, "UPDATE studentsinfo SET fname='$fname', lname='$lname', city='$city', groupid='$groupid' WHERE id='$a'");
        if ($query) {
            echo "<h2>Your information is updated Successfully</h2>";
        } else {
            echo "Record Not modified";
        }
    }


    if (isset($_POST['delete'])) {
      
      $query = mysqli_query($conn, "DELETE FROM studentsinfo WHERE id='$a'");
      if ($query) {
          echo "Record Deleted with id: $a <br>";
      } else {
          echo "Record Not Deleted";
      }
  }

$conn->close();

?>
</div>
</div>

<?php include '../footer.php'; ?>