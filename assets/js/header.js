function validateForm() {
    var x = document.forms["mainsearch"]["mvalue"].value;
    if (x == null || x == "") {
        alert("Πρέπει να συμπληρώσετε το πεδίο Αναζήτησης!");
        return false;
    }
}

function checkLogin()
{
       var name=document.getElementById("Username").value;
       var email=document.getElementById("Email").value;

       if(email && name)
       {
           $.ajax({
           type: 'post',
           url: 'checkdata.php',
           data: {
             user_name:name,
             user_email:email,
           },
           success: function (response)
           {
                if(response!="OK")
                {
                  //alert(response);
                  alert("Τα στοιχεία που δώσατε δεν αντιστοιχούν σε χρήστη!\n\t\t\tΠαρακαλώ ξαναδοκιμάστε!");
                  return false;
                }
                else
                {
                  window.location.replace("index.php");
                  return true;
                }

            }
         });
        }
 }
