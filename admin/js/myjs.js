function checkFullName() {
    var fullName = document.getElementById("fullName").value;
    if (fullName.trim() === "") {
        document.getElementById("errorFullName").innerHTML = "Full Name is required.";
        return false;
    } else if (fullName.length > 40) {
        document.getElementById("errorFullName").innerHTML = "Full Name must be less than 40 characters.";
        return false;
    } else {
        document.getElementById("errorFullName").innerHTML = "";
        return true;
    }
}

function checkPassword() {
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

function checkEmail() {
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

function checkPhoneNumber() {
    var phoneNumber = document.getElementById("phoneNumber").value;
    var phoneRegex = /^\d{10}$/;
    if (phoneNumber.trim() === "") {
        document.getElementById("errorPhoneNumber").innerHTML = "Phone Number is required.";
        return false;
    } else if (!phoneRegex.test(phoneNumber)) {
        document.getElementById("errorPhoneNumber").innerHTML = "Phone Number must be 10 digits.";
        return false;
    } else {
        document.getElementById("errorPhoneNumber").innerHTML = "";
        return true;
    }
}

function checkDOB() {
    var dob = document.getElementById("dob").value;
    if (dob.trim() === "") {
        document.getElementById("errorDOB").innerHTML = "Date of Birth is required.";
        return false;
    } else {
        document.getElementById("errorDOB").innerHTML = "";
        return true;
    }
}

function checkGender() {
    var gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
        document.getElementById("errorGender").innerHTML = "Please select a gender.";
        return false;
    } else {
        document.getElementById("errorGender").innerHTML = "";
        return true;
    }
}

function validation() {
    var isFullNameValid = checkFullName();
    var isPasswordValid = checkPassword();
    var isEmailValid = checkEmail();
    var isPhoneNumberValid = checkPhoneNumber();
    var isDOBValid = checkDOB();
    var isGenderValid = checkGender();

    // Form submits only if all validations pass
    return isFullNameValid && isPasswordValid && isEmailValid && isPhoneNumberValid && isDOBValid && isGenderValid;
}

function printText() {
    var text = document.getElementById("input").value;
    document.getElementById("print").innerHTML = text;
}
