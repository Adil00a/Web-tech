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

function validateMessage() {
    var message = document.getElementById("message").value;

    if (message.trim() === "") {
        document.getElementById("errorMessage").innerHTML = "Message is required.";
        return false;
    } else {
        document.getElementById("errorMessage").innerHTML = "";
        return true;
    }
}

function validateContactForm() {
    var isEmailValid = validateEmail();
    var isMessageValid = validateMessage();

    // Only allow form submission if all validations pass
    return isEmailValid && isMessageValid;
}
