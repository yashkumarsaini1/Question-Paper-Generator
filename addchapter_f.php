<?php
$conn = new mysqli("localhost","root","", "question_p_g");

$class = $_POST ['class'];
$subject = $_POST ['subject'];
$chap_no = $_POST ['chap_no'];
$chap_name = $_POST ['chap_name'];

$sql = "SELECT * FROM chapters WHERE chap_no='$chap_no' && class='$class' && subject='$subject' && chap_name ='$chap_name'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num==0)
{
	$reg = "INSERT INTO chapters(class,subject,chap_no,chap_name) VALUES
	('$class','$subject','$chap_no','$chap_name')";

	mysqli_query($conn,$reg);

	echo "<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>

    <title>Success</title>
  </head>
  <body class='bg-white'>

    <div class='container mt-5'>
      <div class='row'>
        <div class='col-sm-3'>
        </div>
        <div class='col-sm-6'>
          <div class='shadow-lg  mb-1 bg-light rounded' style='font-family: arial;color: white'>
          <div class='card bg-light'>
          <div class='card-body'>
            <h2 class='card-title alert alert-success' style='text-align: center;'>Well Done</h2>
            <h6 class='card-subtitle mb-2 alert alert-success' style='text-align: center;'>New Chapter Added Successfully</h6>
            <a href='addchapter.php'><button class='btn btn-success float-right'><span>&#8678;</span>Go Back</button></a>
            </div>
        </div>
        </div>
        </div>
        <div class='col-sm-3'>
        </div>
      </div>
    </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>
  </body>
</html>";
}
else
{
	echo "
	<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>

    <title>Success</title>
  </head>
  <body class='bg-white'>

    <div class='container mt-5'>
      <div class='row'>
        <div class='col-sm-3'>
        </div>
        <div class='col-sm-6'>
          <div class='shadow-lg  mb-1 bg-light rounded' style='font-family: arial;color: white'>
          <div class='card bg-light'>
          <div class='card-body'>
            <h2 class='card-title alert alert-danger' style='text-align: center;'>ERROR</h2>
            <h6 class='card-subtitle mb-2 alert alert-danger' style='text-align: center;'>This chapter is already added in the bank.</h6>
            <a href='addchapter.php'><button class='btn btn-danger float-right'><span>&#8678;</span>Go Back</button></a>
            </div>
        </div>
        </div>
        </div>
        <div class='col-sm-3'>
        </div>
      </div>
    </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>
  </body>
</html>";
}
	
 ?>