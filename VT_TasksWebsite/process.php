<?php
 $title = 'Your information';
 include 'header.php';
?>

<div class="body-container">
    <div class="home-banner-container">
            <img src="images/phpbanner.jpg" alt="banner" draggable="false">
    </div>
        <div class="article">
            <?php
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];

            echo "Hello ".$fname." ".$lname.". You are welcome to my site.";
            ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>