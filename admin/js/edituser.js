function validateID() {
    var id = document.getElementById("id").value;

    if (id.trim() === "") {
        document.getElementById("errorID").innerHTML = "ID is required.";
        return false;
    } else {
        document.getElementById("errorID").innerHTML = "";
        return true;
    }
}

function validateFullName() {
    var fullName = document.getElementById("fullName").value;

    if (fullName.trim() === "") {
        document.getElementById("errorFullName").innerHTML = "Name is required.";
        return false;
    } else {
        document.getElementById("errorFullName").innerHTML = "";
        return true;
    }
}

function validateEditUserForm() {
    var isIDValid = validateID();
    var isFullNameValid = validateFullName();


    return isIDValid && isFullNameValid;
}
