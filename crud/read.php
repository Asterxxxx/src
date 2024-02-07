<?php 
$title = "Task 7 - Viktor Trilar";
include '../VT_TasksWebsite/header.php'; 
?>
<link rel="stylesheet" href="../VT_TasksWebsite/style.css">


<body>
<div class="body-container">


<div class="home-banner-container">
    <img src="/~viktor23001/web-dev-env-main/VT_TasksWebsite/images/phpbanner.jpg" alt="php-banner" draggable="false">

<div class = "article">

<?php
include 'db.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM studentsinfo";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Group ID</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id={$row['id']}'>{$row['id']}</a></td>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['city']}</td>
                <td>{$row['groupid']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>
</div>
</div>
<?php include '../VT_TasksWebsite/footer.php'; ?>