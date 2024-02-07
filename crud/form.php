<?php 
$title = "Task 7 - Viktor Trilar";
include '../VT_TasksWebsite/header.php'; 
?>
<link rel="stylesheet" href="../VT_TasksWebsite/style.css">

<body>
    <!-- Home body container -->
<div class="body-container">

<!-- Banner -->
    <div class="home-banner-container">
        <img src="/~viktor23001/web-dev-env-main/VT_TasksWebsite/images/phpbanner.jpg" alt="php-banner" draggable="false">
    </div>



<h2>Input Your Information Below:</h2>
<form name="form1" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
            </div>
            <div class="col">
                <label for="groupid">Group ID:</label>
                <select class="form-control" id="groupid" name="groupid">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<div class="randomcat">
                    <a href="read.php"><button class="show-cat-button">
                        Check data
                        </button></a>
                </div>
        </div>




</body>

<?php include '../VT_TasksWebsite/footer.php'; ?>