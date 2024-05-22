document.getElementById('admissionForm').addEventListener('submit', function(event) {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var dob = document.getElementById('dob').value;
    var address = document.getElementById('address').value;
    var gender = document.getElementById('gender').value;
    var highest_qualification = document.getElementById('highest_qualification').value;
    var institution = document.getElementById('institution').value;
    var graduation_year = document.getElementById('graduation_year').value;
    var allergies = document.getElementById('allergies').value;
    var existing_conditions = document.getElementById('existing_conditions').value;
    var course = document.getElementById('course').value;

    if (!name || !email || !phone || !dob || !address || !gender || !highest_qualification || !institution || !graduation_year || !allergies || !existing_conditions || !course) {
        alert('Please fill out all required fields.');
        event.preventDefault();
    }

    // Additional client-side validation can be added here
});
