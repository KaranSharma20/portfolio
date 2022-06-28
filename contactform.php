<?php
include('conn.php');
$msg="";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$comment=mysqli_real_escape_string($con,$_POST['comment']);
	
	mysqli_query($con,"insert into contact(name,email,comment) values('$name','$email','$comment')");
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<script type="text/javascript">
  var count = 5; // Timer
  var redirect = "./"; // Target URL

  function countDown() {
    var timer = document.getElementById("timer"); // Timer ID
    if (count > 0) {
      count--;
      timer.innerHTML = "This page will redirect in " + count + " seconds."; // Timer Message
      setTimeout("countDown()", 1000);
    } else {
      window.location.href = redirect;
    }
  }
</script>

    <div class="animated fast fadeInUp">
      <div class="icon"></div>
      <h1>Thank you</h1>
    </div>

    <div class="notice animated fadeInUp">
      <p class="lead">Your message has been successfully sent. We will contact you ASAP!</p>
      If your web browser does not redirect you in 5 seconds, click <a href="./">here</a>.
    </div>

    <div class="footer animated slow fadeInUp">
      <p id="timer">
        <script type="text/javascript">
          countDown();
        </script>
      </p>
    </div>

</body>
</html>