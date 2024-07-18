function validateForm() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (name === "" || email === "" || password === "" || confirmPassword === "") {
        alert("All fields are required.");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    alert("Sign-up successful!");
    window.location.href = "home.html"; // Redirect to home page after successful sign-up
    return false;
}

function validateSignInForm(event) {
    event.preventDefault(); // Prevent the default form submission

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (email === "" || password === "") {
        alert("All fields are required.");
        return false;
    }

    alert("Sign-in successful!");
    window.location.href = "home.html"; // Redirect to home page after successful sign-in
    return true; // Allow form submission
}

function submitForm(event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Validation (check if fields are not empty)
    if (name && email && message) {
        // Display confirmation message
        document.getElementById('confirmationMessage').style.display = 'block';

        // Optionally, clear form fields after submission
        document.getElementById('contactForm').reset();
    } else {
        alert('Please fill out all fields.');
    }
}