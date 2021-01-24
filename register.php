<head>
  <link rel="stylesheet" href="custom.css">
  <title>Vision</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

/* span.psw {
  float: right;
  padding-top: 16px;
} */

/* Change styles for span and cancel button on extra small screens */
/*@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}*/

h3 {text-align: center;}

</style>
</head>
<body>
  <ul class="nav nav-tabs nav-justified">
    <li class="nav-item">
      <a class="nav-link" href="table.php"><b>Home</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="groups.html"><b>Groups</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="register.php"><b>Account Creation</b></a>
    </li>
  </ul>
  <h1>Profile</h1>

<h3>Create Account</h3>

<form action="includes/register-inc.php" method="post">
  <p> Already have an account? <a href="login.php">Login!</a></p>
  <div class="container">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirmPassword" placeholder="Confirm password">
    <input type="text" name="phoneNumber" placeholder="1234567890">
    <input type="text" name="email" placeholder="john_doe@brown.edu">
    <input type="text" name="classes" placeholder="CSCI 0190">
    <button type="submit" name="submit">REGISTRER</button>
  </div>
  </form>
</body>

<?php
require_once 'includes/footer.php';
?>
