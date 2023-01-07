<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become A Photographer</title>
    <link rel="stylesheet" href="Become_A_Photographer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>
        Become A Photographer
    </h1>
    <html>
      <head>
        <script>
          function form_val() {
            var name =
              document.forms.RegForm.Name.value;
            var email =
              document.forms.RegForm.Email.value;
            var phone =
              document.forms.RegForm.Telephone.value;
            var what =
              document.forms.RegForm.Subject.value;
            var password =
              document.forms.RegForm.Password.value;
            var address =
              document.forms.RegForm.Address.value;
            var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g; //Javascript reGex for Email Validation.
            var regPhone=/^\d{10}$/;									 // Javascript reGex for Phone Number validation.
            var regName = /\d+$/g;								 // Javascript reGex for Name validation
    
            if (name == "" || regName.test(name)) {
              window.alert("Please enter your name properly.");
              name.focus();
              return false;
            }
    
            if (address == "") {
              window.alert("Please enter your address.");
              address.focus();
              return false;
            }
            
            if (email == "" || !regEmail.test(email)) {
              window.alert("Please enter a valid e-mail address.");
              email.focus();
              return false;
            }
            
            if (password == "") {
              alert("Please enter your password");
              password.focus();
              return false;
            }
    
            if(password.length <6){
              alert("Password should be atleast 6 character long");
              password.focus();
              return false;
    
            }
            if (phone == "" || !regPhone.test(phone)) {
              alert("Please enter valid phone number.");
              phone.focus();
              return false;
            }
    
            if (what.selectedIndex == -1) {
              alert("Please enter your course.");
              what.focus();
              return false;
            }
    
            return true;
          }
        </script>
    
        <style>
          div {
            box-sizing: border-box;
            width: 100%;
            border: 100px solid black;
            float: left;
            align-content: center;
            align-items: center;
          }
    
          form {
            margin: 0 auto;
            width: 600px;
          }
        </style>
      </head>
    
      <body>
        <h1 style="text-align: center;">REGISTRATION FORM</h1>
        <form name="RegForm" onsubmit="return form_val()" enctype="multipart/form-data" method="post">
          
    <p>Name: <input type="text"
                  size="65" name="Name" /></p>
    
          <br />
          
    <p>Address: <input type="text"
                  size="65" name="Address" />
        </p>
    
          <br />
          
          <p>E-mail Address: <input type="text"
                  size="65" name="Email" /></p>
    
          <br />
          <p>Package Price(BDT): <input type="text"
                  size="65" name="package" /></p>
    
          <br />
          
    <p>Password: <input type="password"
                size="65" name="Password" /></p>
    
          <br />
          
    <p>Telephone: <input type="text"
                size="65" name="Telephone" /></p>
    
          <br />
    
          <p>Profile: <input type="file" name="profile" required/></p>
    
    <br />
    <p>Demo Images:<br> <input type="file" name="demo1" required/><br>  <input type="file" name="demo2" required/><br>  <input type="file" name="demo3" required/></p>
    
          <br />

          <p>Video Resume(Link): <input type="text" size="65" name="vr" /></p>
    
          <br />
          <p>Upload CV(Link): <input type="text" size="65" name="cv" /></p>
    
          <br />
          

    <p>
            Photographer Type:
            <select name="photographer-type" id="photographer-type">
              <option value="Wedding Photographer">Wedding</option>
              <option value="portrait Photographer">Portrait</option>
              <option value="landscape Photographer">Landscape</option>
              <option value="artistic Photographer">Artistic</option>
              <option value="journalistic Photographer">Journalistic</option>
            </select>
          </p>
    
          <br />
          <br />
          
    
          
    <p>
            <input type="submit"
              value="send" name="Submit" />
            <input type="reset"
              value="Reset" name="Reset" />
          </p>
    
        </form>
      </body>
    </html>
    
    
</body>
</html>