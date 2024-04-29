<?php include 'header.php'; ?>
<main>
    <h1>Thank You Your Application Submitted</h1>
    <?php
    // Server-side validation to check if all required fields are filled and valid
    if (!isset($_POST['name']) || strlen($_POST['name']) < 1) {
        die("Please enter a valid name.");
    }
    if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        die("Please enter a valid email address.");
    }
    if (!isset($_POST['gender']) || ($_POST['gender'] !== 'Male' && $_POST['gender'] !== 'Female')) {
        die("Please select a valid gender.");
    }
    if (!isset($_POST['program'])) {
        die("Please select a program.");
    }
    if (!isset($_POST['terms']) || $_POST['terms'] !== 'on') {
        die("You must accept the terms and conditions to proceed.");
    }

    // If all validations pass, display the data in a table
    echo "<table>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    foreach ($_POST as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }
    echo "</table>";
    ?>
</main>
<?php include 'footer.php'; ?>
