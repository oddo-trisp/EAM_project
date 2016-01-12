function validateQuickForm() {
    var x = document.forms["quicksearch"]["qsfield"].value;
    if (x == null || x == "") {
        alert("Πρέπει να συμπληρώσετε το πεδίο Αναζήτησης!");
        return false;
    }
}

function validateCombForm() {
    var x = document.forms["combsearch"]["title"].value;
    var y = document.forms["combsearch"]["author"].value;
    var z = document.forms["combsearch"]["publisher"].value;
    if ((x == null || x == "") && (y == null || y == "") && (z == null || z == "")) {
        alert("Πρέπει να συμπληρώσετε τουλάχιστον ένα πεδίο!");
        return false;
    }
}
