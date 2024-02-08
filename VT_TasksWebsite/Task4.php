<?php 
$title = "Task 4 - Viktor Trilar";
include 'header.php'; ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Home body container -->
<div class="body-container">

    <!-- Banner -->
    <div class="home-banner-container">
        <img src="images/phpbanner.jpg" alt="php-banner" draggable="false">
    </div>

    <!-- Exercise 4.1 -->
    <div class="article">
        <div class="form-container">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                Name: <input type="text" name="name" required> <br><br>
                Age: <input type="number" name="age" required> <br><br>
                Enter your number:<input type="number" name="number" required> <br><br>
                <button>Submit</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $age = $_POST["age"];

                if ($age >= 18) {
                    echo "Hello " . $name . ". You are eligible to vote.";
                } else {
                    echo "Hello " . $name . ". You are not eligible to vote";
                }
            }
            ?>

            <!-- Exercise 4.2 -->
            <?php
            $currentMonth = date('n');
            $monthName = date('F');

            switch ($currentMonth) {
                case 8:
                    echo "It's August, so it's still holiday.";
                    break;
                default:
                    echo "<br><br>It's not August yet, it's $monthName so I don't have any holidays.";
                    echo "<br><br>";
            }
            ?>

            <!-- Exercise 4.4 -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST["number"];

                echo "<p>Multiplication for $number:</p>";
                echo "<ul>";
                for ($i = 1; $i <= 10; $i++) {
                    $result = $number * $i;
                    echo "<li>$number x $i = $result</li>";
                }
                echo "</ul>";
            }
            ?>

            <!-- Exercise 4.5 -->

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $n = $_POST["number"];

                echo "<p>Numbers from 1 to $n:</p>";
                $i = 1;
                while ($i <= $n) {
                    echo "<li>$i</li>";
                    $i++;
                }
            }
            echo "<br><br>"
            ?>

            <!-- Exercise 4.6 -->
            <?php
            $myarray=array("HTML", "CSS", "PHP", "JavaScript");

            echo "<p>Task 4.6</p>";
            foreach ($myarray as $element) {
                echo "<li>$element</li>";
            }
            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
