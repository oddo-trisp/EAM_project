function checkname()
{

    var name=document.getElementById("username").value;

    if(name)
    {
         $.ajax({
        type: 'post',
        url: 'checkdata.php',
        data: {
        user_name:name,
        },
        success: function (response) {
        $( '#name_status' ).html(response);
               if(response=="OK")
                 {
                    return true;
                 }
                 else
                 {
                    return false;
                 }
               }
         });

    }
    else
    {
      $( '#name_status' ).html("");
      return false;
    }
 }

   function checkemail()
   {

    var email=document.getElementById( "email" ).value;

    if(email)
    {
        $.ajax({
        type: 'post',
        url: 'checkdata.php',
        data: {
        user_email:email,
        },
        success: function (response) {
        $( '#email_status' ).html(response);
          if(response=="OK")
              {
                 return true;
              }
              else
              {
                 return false;
              }
            }
      });


     }
     else
     {
      $( '#email_status' ).html("");
      return false;
     }

 }


 function checkall()
 {
       var namehtml=document.getElementById("name_status").innerHTML;
       var emailhtml=document.getElementById("email_status").innerHTML;
       var username=document.getElementById("username").value;
       var email=document.getElementById("email").value;
       var name=document.getElementById("name").value;
       var surname=document.getElementById("surname").value;
       var department=document.getElementById("department").value;
       var pass=document.getElementById("pass").value;
       var check_pass=document.getElementById("check_pass").value;

       if(check_pass != pass)
       {
          alert("Παρακαλώ βεβαιωθείται ότι ο κωδικός πρόσβασης\n\t\tείναι ίδιος και στα δύο πεδία!");
          return false;
      }

    if(namehtml=="OK" && emailhtml=="OK" )
    {
      $.ajax({
      type: 'post',
      url: 'checkdata.php',
      data: {
      user_email:email,
      user_username:username,
      user_name:name,
      user_surname:surname,
      user_department:department,
      user_pass:pass,
      },
      success: function (response) {
      $( '#email_status' ).html(response);
          if(response=="OK")
          {
              return true;
          }
          else
          {
              return false;
          }
        }
      });
      alert("\tΕπιτυχής εγγραφή!\nΕπιστροφή στην αρχική σελίδα!");
    }
    else
    {
        alert("Έχετε συμπληρώσει λάθος στοιχεία");
         return false;
    }
 }
