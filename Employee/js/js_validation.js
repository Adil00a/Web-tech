document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        let isValid = true;
        let errorMessage = "";

        const fullName = document.querySelector('input[name="fullName"]').value.trim();
        const email = document.querySelector('input[name="email"]').value.trim();
        const password = document.querySelector('input[name="password"]').value.trim();
        const phoneNumber = document.querySelector('input[name="phoneNumber"]').value.trim();
        const dob = document.querySelector('input[name="dob"]').value.trim();
        const gender = document.querySelector('select[name="gender"]').value;
        const authorization = document.querySelector('select[name="authorization"]').value;

        // Full Name Validation
        if (fullName.length < 3) {
            isValid = false;
            errorMessage += "Full name must be at least 3 characters long.\n";
        }

        // Email Validation
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            isValid = false;
            errorMessage += "Please enter a valid email address.\n";
        }

        // Password Validation (Minimum 6 characters, at least one number)
        const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
        if (!passwordPattern.test(password)) {
            isValid = false;
            errorMessage += "Password must be at least 6 characters long and contain at least one number.\n";
        }

        // Phone Number Validation (10-digit format)
        const phonePattern = /^[0-9]{10}$/;
        if (!phonePattern.test(phoneNumber)) {
            isValid = false;
            errorMessage += "Phone number must be exactly 10 digits.\n";
        }

        // Date of Birth Validation (Must be 18 or older)
        const birthDate = new Date(dob);
        const today = new Date();
        const age = today.getFullYear() - birthDate.getFullYear();
        if (age < 18) {
            isValid = false;
            errorMessage += "You must be at least 18 years old to register.\n";
        }

        // Gender & Authorization Validation
        if (gender === "" || authorization === "") {
            isValid = false;
            errorMessage += "Please select a gender and authorization type.\n";
        }

        // Prevent form submission if validation fails
        if (!isValid) {
            event.preventDefault();
            alert(errorMessage);
        }
    });
});
