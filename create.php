<html lang="en" dir="ltr">   
  <head> 
      <meta charset="utf-8">  
  <title > Register Page </title>  
  <link rel="stylesheet" type="text/css" href="./samp.css">
  </head>
  <body>
      <div cass="login-form" style="margin-top:150px;margin-left: auto;margin-right: auto;">
          <h1>Register</h1>
          <form action="insert.php" method="POST">

             <p>Username*</p>
            <input type="text" name="username" placeholder="Enter username">
               <br>
               
              <p>Email*</p>
                  <input type="text" name="email" placeholder="Enter mail">
                  <br>

                  <p>Password*</p>
               <input type="password" name="password" placeholder="Enter password">
               <br>
               <p>Phone Number*</p>
               <input type="text" name="phonenumber" placeholder="Enter phone number">
               <br>


               <p> Gender</p>
               <br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>
               <br>
                  <button type="submit" value="submit">Submit</button>
                  <button type="login" ><a href="login.html" target="_blank">Login</a></button>

          </form>
      </div>
  </body>
  </html>
