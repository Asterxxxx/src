<?php 
$title = 'Task 3 - Viktor Trilar';
include 'header.php'; ?>


<link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<!-- Home body container -->
    <div class="body-container">
<!-- Banner -->
    <div class="home-banner-container">
            <img src="images/phpbanner.jpg" alt="banner" draggable="false">
    </div>

<!--Exercise 3.2 -->
        <div class="article">
            <div class="form-container">
            <form method="post" action="<?echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                First Name: <input type="text" name="fname" required> <br><br>
                Last Name: <input type="text" name="lname" required> <br><br>
                <button>Submit</button>
            </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];

        echo "Hello ".$fname." ".$lname.". You are welcome to my site.";
    }
?>
<!-- Exercise 3.4 -->
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">S.n.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Alice</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Bob</td>
                    <td>5</td>
                  </tr>
                </tbody>
            </table>
        <?php

// Exercise 3.5
            echo "<br>";
            $str1 = "Hello";
            $str2 = "World";

            echo strlen($str1 . $str2);
            echo "<br><br>";

// Exercise 3.6
            $num1 = 298;
            $num2 = 234;
            $num3 = 46;
            
            echo ($num1 + $num2 + $num3);

            echo "<br><br>";
// Exercise 3.7
            $agent = $_SERVER['HTTP_USER_AGENT'];
            echo "Your browser: ".$agent;
        ?>    
        </div>
    </div>
</body>


<?php include 'footer.php'; ?>