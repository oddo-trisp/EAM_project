function validateForm() {
    var x = document.forms["mainsearch"]["mvalue"].value;
    if (x == null || x == "") {
        alert("Πρέπει να συμπληρώσετε το πεδίο Αναζήτησης!");
        return false;
    }
}
