function validateEmail() {
    var email = document.getElementById("email").value;
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (email.trim() === "") {
        document.getElementById("errorEmail").innerHTML = "Email is required.";
        return false;
    } else if (!emailRegex.test(email)) {
        document.getElementById("errorEmail").innerHTML = "Invalid email format.";
        return false;
    } else {
        document.getElementById("errorEmail").innerHTML = "";
        return true;
    }
}

function validatePassword() {
    var password = document.getElementById("password").value;

    if (password.trim() === "") {
        document.getElementById("errorPassword").innerHTML = "Password is required.";
        return false;
    } else if (password.length < 6) {
        document.getElementById("errorPassword").innerHTML = "Password must be at least 6 characters.";
        return false;
    } else {
        document.getElementById("errorPassword").innerHTML = "";
        return true;
    }
}

function validateLoginForm() {
    var isEmailValid = validateEmail();
    var isPasswordValid = validatePassword();

    // Return true only if both validations pass
    return isEmailValid && isPasswordValid;
}
