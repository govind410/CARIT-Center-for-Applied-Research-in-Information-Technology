<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eligibility Evaluation - CARIT</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <h1>Eligibility Evaluation for Student Assistant Positions</h1>
        <p>Fill in your details to evaluate your eligibility for our student assistant positions.</p>
        <form id="eligibilityForm">
            <label for="studentStatus">Student Status:</label>
            <select id="studentStatus" name="studentStatus">
                <option value="undergraduate">Undergraduate</option>
                <option value="graduate">Graduate</option>
            </select>
            <div id="coursesContainer">
            </div>
            <button type="button" onclick="evaluateEligibility()">Evaluate</button>
        </form>
        <div id="result"></div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="eligibility.js?v=<?php echo time(); ?>"></script>
</body>
</html>
