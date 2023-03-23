<link rel='stylesheet' href='assets/css/header.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="contact.php">Contact</a>
  <a href="register.php">Register</a>
  <a href="login.php">Login</a>
  <a href="logged_in.php">Edit Profile</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>