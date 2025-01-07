<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Sign up</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="fName" id="fName" placeholder="First Name" required>
            <label for="fName">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>

        <!-- Role Selection -->
        <div class="input-group">
            <label for="role">Register as:</label><br>
            <input type="radio" name="role" id="role_admin" value="admin" required>
            <label for="role_admin">Admin</label>
            <input type="radio" name="role" id="role_user" value="user" required>
            <label for="role_user">User</label>
        </div>

        <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>

    <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
    </div>
</div>






    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>

           <!-- Role Selection -->
        <div class="input-group">
            <label for="role">Register as:</label><br>
            <input type="radio" name="role" id="role_admin" value="admin" required>
            <label for="role_admin">Admin</label>
            <input type="radio" name="role" id="role_user" value="user" required>
            <label for="role_user">User</label>
        </div>

          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        
       
        <div class="links">
          <h5>Don't have account yet?</h5>
          <button id="signUpButton">Sign Up | </button>
        </div>
      </div>




      <script src="script.js"></script>
</body>
</html>
