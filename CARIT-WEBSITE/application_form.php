<?php include 'header.php'; ?>
<main>
    <h1>Application Form for Student Assistant Positions</h1>
    <form id="applicationForm" action="process_form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br>

        <label for="program">Program:</label>
        <select id="program" name="program">
            <option value="Undergraduate">Undergraduate</option>
            <option value="Graduate">Graduate</option>
        </select><br>

        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">I accept the terms and conditions</label><br>

        <button type="submit">Submit Application</button>
    </form>
</main>
<?php include 'footer.php'; ?>

<script>
document.getElementById('applicationForm').onsubmit = function() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var terms = document.getElementById('terms').checked;

    if (name.length < 1) {
        alert("Please enter a name.");
        return false;
    }

    if (email.length < 1 || !email.includes('@')) {
        alert("Please enter a valid email.");
        return false;
    }

    if (!terms) {
        alert("You must accept the terms and conditions to proceed.");
        return false;
    }

    // Ensure that a gender option is selected
    var genderSelected = document.querySelector('input[name="gender"]:checked');
    if (!genderSelected) {
        alert("Please select a gender.");
        return false;
    }

    // Validate that a program is selected
    var program = document.getElementById('program').value;
    if (program === "") {
        alert("Please select a program.");
        return false;
    }

    return true; // form is valid for submission
};
</script>
