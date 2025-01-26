function validateSearchForm() {
    var productName = document.getElementById("search").value;

    if (productName.trim() === "") {
        document.getElementById("errorSearch").innerHTML = "Product name is required.";
        return false;
    } else {
        document.getElementById("errorSearch").innerHTML = "";
        return true;
    }
}

