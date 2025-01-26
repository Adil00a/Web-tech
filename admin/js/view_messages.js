function validateID() {
    var id = document.getElementById("id").value;

    if (id.trim() === "") {
        document.getElementById("errorID").innerHTML = "Message ID is required.";
        return false;
    } else {
        document.getElementById("errorID").innerHTML = "";
        return true;
    }
}

function validateSearchForm() {
    return validateID(); // Form submits only if the ID field is valid
}
