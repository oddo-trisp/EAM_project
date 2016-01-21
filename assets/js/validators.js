function validateQuickForm() {
    var x = document.forms["quicksearch"]["qsfield"].value;
    if (x == null || x == "") {
        alert("Πρέπει να συμπληρώσετε το πεδίο Αναζήτησης!");
        return false;
    }
}

function validateCombForm() {
    var x = document.forms["combsearch"]["title"].value;
    var y = document.forms["combsearch"]["type"].value;
    var z = document.forms["combsearch"]["author"].value;
    var fa = document.forms["combsearch"]["libMenu"].value;
    var fb = document.forms["combsearch"]["statusMenu"].value;
    if ((x == null || x == "") && (y == null || y == "") && (z == null || z == "") && (fa == null || fa == "empty") && (fb == null || fb == "empty")) {
        alert("Πρέπει να συμπληρώσετε τουλάχιστον ένα πεδίο!");
        return false;
    }
}

function validateCombFormLib() {
    var x = document.forms["combsearch"]["name"].value;
    var y = document.forms["combsearch"]["address"].value;
    var z = document.forms["combsearch"]["city"].value;
    if ((x == null || x == "") && (y == null || y == "") && (z == null || z == "")) {
        alert("Πρέπει να συμπληρώσετε τουλάχιστον ένα πεδίο!");
        return false;
    }
}
