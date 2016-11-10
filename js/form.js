function validateForm() {
    var x = document.forms["myForm"]["first"]["last"]["address1"]["city"]["zip"].value;
    if (x == null || x == "") {
        alert("Please fill out the required fields");
        return false;
    }
}