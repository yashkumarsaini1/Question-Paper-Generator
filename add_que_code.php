<?php
$conn = new mysqli("localhost","root","", "question_p_g");

$q_class = $_POST ['q_class'];
$q_subject = $_POST ['q_subject'];
$q_chapter = $_POST ['q_chapter'];
$q_topic = $_POST ['q_topic'];
$q_type =$_POST ['q_type'];
$q_level = $_POST ['q_level'];
$question = $_POST ['question'];
$solution = $_POST['solution'];

$sql1 = "SELECT * FROM chapters WHERE chap_name = '$q_chapter'";
$result1 = mysqli_query($conn,$sql1);
$row1 = $result1->fetch_assoc();
$q_chapter_id = $row1["ID"];

$sql2 = "SELECT * FROM topics WHERE topic_name = '$q_topic'";
$result2 = mysqli_query($conn,$sql2);
$row2 = $result2->fetch_assoc();
$q_topic_id = $row2["ID"];

$sql = "SELECT * FROM question_bank WHERE class='$q_class' && subject='$q_subject' && chapter_id='$q_chapter_id' && topic_id='$q_topic_id' &&
 question_type='$q_type' && que_level ='$q_level' && question='$question' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num==0)
{
	$reg = "INSERT INTO question_bank(class,subject,chapter_id,topic_id,question_type,que_level,question,solution) VALUES
	('$q_class','$q_subject','$q_chapter_id','$q_topic_id','$q_type','$q_level','$question','$solution')";

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
            <h6 class='card-subtitle mb-2 alert alert-success' style='text-align: center;'>Question Added Succesfully</h6>
            <a href='add_que_to_bank.php'><button class='btn btn-success float-right'><span>&#8678;</span>Go Back</button></a>
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
            <h6 class='card-subtitle mb-2 alert alert-danger' style='text-align: center;'>This question is already added in the bank.</h6>
            <a href='add_que_to_bank.php'><button class='btn btn-danger float-right'><span>&#8678;</span>Go Back</button></a>
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