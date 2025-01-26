function validateUserID() {
    var userID = document.getElementById("id").value;

    if (userID.trim() === "") {
        document.getElementById("errorUserID").innerHTML = "User ID is required.";
        return false;
    } else if (!/^\d+$/.test(userID)) { // Only allow numeric values
        document.getElementById("errorUserID").innerHTML = "User ID must be a number.";
        return false;
    } else {
        document.getElementById("errorUserID").innerHTML = "";
        return true;
    }
}



function validateShowUsersForm() {
    var isUserIDValid = validateUserID();


    // Return true only if all validations pass
    return isUserIDValid ;
}
