document.getElementById('studentStatus').addEventListener('change', function() {
    var status = this.value;
    var coursesContainer = document.getElementById('coursesContainer');
    coursesContainer.innerHTML = '';
    var courses = {
        undergraduate: [
            "CSE 3203 Mobile System Overview",
            "IT 4213 Mobile Web Development",
            "IS 3060 Systems Analysis and Design",
            "IS 3920 Application Development II",
            "IS 3260 Web Development I"
        ],
        graduate: [
            "IT 7113 Data Visualization",
            "IT 6713 Business Intelligence",
            "IT 7103 Practical Data Analytics",
            "IT 7143 Cloud Analytics Technology"
        ]
    };

    courses[status].forEach(function(course, index) {
        coursesContainer.innerHTML += `<div><label for="course${index}">${course} Grade:</label><input type="text" id="course${index}" name="course${index}" class="gradeInput"></div>`;
    });
});

function evaluateEligibility() {
    var gradeInputs = document.querySelectorAll('.gradeInput');
    var totalGrades = 0;
    var count = 0;
    var gradeMap = {
        A: 4.0, B: 3.0, C: 2.0, D: 1.0, F: 0.0
    };

    gradeInputs.forEach(function(input) {
        var gradeValue = gradeMap[input.value.toUpperCase()];
        if (gradeValue !== undefined) {
            totalGrades += gradeValue;
            count++;
        }
    });

    var averageGrade = (count > 0) ? (totalGrades / count) : 0;
    var resultDiv = document.getElementById('result');
    var studentStatus = document.getElementById('studentStatus').value;
    var gradeRequirement = (studentStatus === 'undergraduate') ? 3.2 : 3.7;
    var isEligible = averageGrade >= gradeRequirement;

    if (isEligible) {
        resultDiv.innerHTML = `Congratulations! Your average grade is ${averageGrade.toFixed(2)}. You meet the eligibility requirement for our student assistant positions. <a href="application_form.php">Click here to apply</a>.`;
    } else {
        resultDiv.innerHTML = `Thank you for your interest. Your average grade is ${averageGrade.toFixed(2)}, but unfortunately, this does not meet our minimum requirement of ${gradeRequirement}.`;
    }
}
