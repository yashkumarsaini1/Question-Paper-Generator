<?php 
  $con = new mysqli("localhost","root","", "question_p_g");
   $form_script="<script type='text/javascript'>
    document.getElementById('form_edit').style.display = 'none';
    document.getElementById('form_before').style.display = 'block';</script>";
   if(isset($_POST ['chap_id']))
          {
            
            
            $chap_id = $_POST['chap_id'];

            $sqli = "SELECT * FROM chapters WHERE ID='$chap_id'";

            $result = $con->query($sqli);

            if ($result->num_rows > 0)
            {
              $form_script="<script type='text/javascript'>
            document.getElementById('form_edit').style.display = 'block';
            document.getElementById('form_before').style.display = 'block';</script>";
              // output data of each row
              while($row = $result->fetch_assoc()) 
              {
                 $chap_class_fe = $row["class"];
                 $chap_subject_fe = $row["subject"];
                 $chap_no_fe = $row["chap_no"];
                 $chap_name_fe = $row["chap_name"];
              }
            }
            else
            {
              $form_script="<script type='text/javascript'>
            document.getElementById('form_edit').style.display = 'none';
            document.getElementById('form_before').style.display = 'block';</script>";
            }
          }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
     <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

    <title>Question Paper Generator</title>
    <style type="text/css">
        #menu_block
        {
            cursor: pointer;
        }
        #menu_cross
        {
            cursor: pointer;
        }
        body 
        {
                
                padding-top: 4.2rem;
                font-family: 'Nunito', sans-serif;
            }
     .menu_itm:hover
     {
        background-color: #0023ff;
        color: white;
     }

    </style>
  </head>
  <body>
    

    <div class="container-fluid bg-white shadow-lg fixed-top " style="z-index: 3">
    
        <h5 style="padding: 10px;"><span id="menu_block" class="animated fadeInRight" onclick="show_menu('1');"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-border-width" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
</svg></span>
<span id="menu_cross" class="animated fadeInLeft"  onclick="show_menu('2');" style="display: none;"><svg  width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></span>

<span style="text-align: center;"> Add Chapters </span> <svg style="color:#0023ff " width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
</svg></h5>
    <div id="menu_block_item" class="bg-white shadow-lg animated fadeInLeft"  style="height: 100%;position: fixed;width: 250px;z-index: 2;display: none;margin-left: -15px;margin-top: -0px;">
        <ul class="list-group" style="text-align: center;cursor: pointer;border-width: 0px;">
          <a href="home.php"><li class="list-group-item menu_itm " style="border-width: 0px;"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg> Home</li></a><br>
          <a href="generate_paper.php"><li class="list-group-item menu_itm " style="border-width: 0px;"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
  <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
  <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V7.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 7.707V11.5a.5.5 0 0 0 .5.5z"/>
</svg> Generate Paper</li></a><br>
          <a href="question_filter.php"><li class="list-group-item menu_itm " style="border-width: 0px;"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-filter" fill="currentColor" xmlns="http://www.w3.org/2000/svg">  <path fill-rule="evenodd" d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg> Question Filter</li></a><br>
          <a href="add_que_to_bank.php"><li class="list-group-item menu_itm " style="border-width: 0px;"> <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
  <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
</svg>Add Questions</li></a><br>
          <a href="update_question.php"><li class="list-group-item menu_itm " style="border-width: 0px;"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-journal-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
  <path fill-rule="evenodd" d="M8 11a.5.5 0 0 0 .5-.5V6.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 .5.5z"/>
</svg> Update Question</li></a>
        </ul>
    </div>

    </div>


<div class="container mt-4 shadow-lg bg-white">
  <div class="row">
    <div class="col-sm-12">
      <h4 style="text-align: center;">Select Class and Subject to See Chapters</h4>
      <form method="post" action="addchapter.php">
        <div class="form-group" style="text-align: center;">
          <div class="row">
            <div class="col-sm-4">
          <label >Select Class </label>
              <select name="class_f" class="form-control" >
                <option value="10" >10</option>
                <option value="11" >11</option>
                <option value="12" >12</option>
              </select>
            </div>
            <div class="col-sm-4">
            <label >Select Subject</label>
              <select name="subject_f" class="form-control">
                <option value="Maths" >Maths</option>
                <option value="Science" >Science</option>
              </select>
            </div>
            <div class="col-sm-4 mt-4">
              <button class="btn btn-dark btn-block mt-2 mb-2">Filter</button>
            </div>
        </div>
      </div>
      </form>
    </div>
    <div class="col-sm-12">
      <h3 class="mt-2 mb-2 ml-2 mr-2" style="text-align: center;"><span style="text-align: left;"> <?php if(isset($_POST ['class_f']))
          { $class_f = $_POST['class_f'];
            $subject_f = $_POST['subject_f'];
            echo " Class : ( $class_f ) "." Subject : "." ( $subject_f )";}?></h3>
      <div class="table-responsive" id='chap_list' style="display: none;">

        <table class="table mt-2 mb-2" style="border-style: solid;border-width: 1px;border-color: black;text-align: center;">
          <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Chapter Nubmer</th>
            <th scope="col">Chapter Name</th>
          </tr>
        </thead>
        <?php 
          if(isset($_POST ['class_f']))
          {
            echo "<script type='text/javascript'>
            document.getElementById('chap_list').style.display = 'block';</script>";
            
            $class_f = $_POST['class_f'];
            $subject_f = $_POST['subject_f'];

            $sql = "SELECT * FROM chapters WHERE class='$class_f' && subject='$subject_f' ORDER BY chap_no ASC";

            $result = $con->query($sql);

            if ($result->num_rows > 0)
            {
              // output data of each row
              while($row = $result->fetch_assoc()) 
              {
                  echo "
                  <tr>
                    <td>". $row["ID"]."</td>
                    <td>". $row["chap_no"]."</td>
                    <td>". $row["chap_name"] . "</td>
                  </tr>";
              }
            }
            else
            {
              echo "<tr><td>Not Found</td>
                    <td>-</td>
                    <td>-</td>";
            }
          }
        ?>
          
        </table>
      </div>
    </div>
  </div>
</div>
    
<div class="container">
  <div class="row">
    
    <div class="col-sm-6 mt-2 shadow-lg bg-white mt-2">
      <h4 style="text-align: center;" class="mt-2">Add Chapter</h4>
      <form action="addchapter_f.php" method="post">
        <div class="form-group mt-2" style="text-align: center;padding: 10px;">
            <label >Select Class</label>
              <select name="class" class="form-control" >
                <option value="10" >10</option>
                <option value="11" >11</option>
                <option value="12" >12</option>
              </select>

            <label >Select Subject</label>
              <select name="subject" class="form-control">
                <option value="Maths" >Maths</option>
                <option value="Science" >Science</option>
              </select>
            <label  class="mt-3">Enter Chapter Number</label><br>
              <input class="form-control" type="number" min="1" name="chap_no" required>
            <label  class="mt-3">Enter Chapter Name</label>
              <input class="form-control" type="text" name="chap_name" required>
              <button type="submit" class="btn btn-success btn-block mt-3">Add Chapter</button>
        </div>

      </form>
    </div>
    
    
    <div class="col-sm-6 mt-2 shadow-lg bg-white mt-2" >
      <h4 style="text-align: center;" class="mt-2">Update Chapter</h4>
      <div id="form_before" >
      <form method="post" action="addchapter.php" style="text-align: center;" >
        <div class="row">
          <div class="col-sm-6 mb-3">
         <input class="form-control" type="number" min="1" name="chap_id" required placeholder="Enter Chapter ID" >
       </div>
       <div class="col-sm-6 mb-3">
         <button type="submit" class="btn btn-warning btn-block ">Edit</button>
       </div>
       </div>
      </form>
    </div>
    <div id="form_edit" style="display: none;" >
      <form action="addchapter_e.php" method="post" >
        <div class="form-group" style="text-align: center;padding: 10px;">
          <input class="form-control" type="number" name="chap_id_e" value='<?php echo"$chap_id"?>' style="display: none;" >
          <div class="row">
            <div class="col-sm-6">
            <label >Select Class</label>
              <select name="class_e" class="form-control" >
                <option value="<?php echo"$chap_class_fe"?>"><?php echo"$chap_class_fe"?></option>
                <option value="10" >10</option>
                <option value="11" >11</option>
                <option value="12" >12</option>
              </select>
            </div>
              <div class="col-sm-6">
            <label >Select Subject</label>
              <select name="subject_e" class="form-control">
                <option value='<?php echo"$chap_subject_fe"?>'><?php echo"$chap_subject_fe"?></option>
                <option value="Maths" >Maths</option>
                <option value="Science" >Science</option>
              </select>
            </div>
          </div>
            <label  class="mt-3">Edit Chapter Number</label><br>
            <input class="form-control" type="number" min="1" name="chap_no_before" required contenteditable="true" value='<?php echo"$chap_no_fe"?>' style="display: none;" >
              <input class="form-control" type="number" min="1" name="chap_no_e" required contenteditable="true" value='<?php echo"$chap_no_fe"?>' >
            <label  class="mt-3">Edit Chapter Name</label>
              <input class="form-control" type="text" name="chap_name_e" required contenteditable="true" value='<?php echo"$chap_name_fe"?>'>
              <button type="submit" class="btn btn-success btn-block mt-3">Update</button>
        </div>

      </form>
    </div>
    </div>
    
  </div>
</div>
<footer>
<div class="container-fluid bg-white shadow-lg mt-5">
    <div class="row">
        <div class="col-sm-6 mb-2 mt-3">
            <p style="text-align: center;"> @Question Paper Generator</p>
        </div>
        <div class="col-sm-6 mb-2 mt-3">
            <p style="text-align: center;"> Designed and Developed by Yash Kumar Saini </p>
        </div>
    </div>
</div>
</footer>
    <script type="text/javascript">
        function show_menu(value)
        {
            if(value==1)
            {
                document.getElementById('menu_block_item').style.display = "block";
                document.getElementById('menu_block').style.display = "none";
                document.getElementById('menu_cross').style.display = "inline";
            }
            else if(value==2)
            {
                document.getElementById('menu_block_item').style.display = "none";
                document.getElementById('menu_block').style.display = "inline";
                document.getElementById('menu_cross').style.display = "none";
            }
        } 
    </script>
    <?php 
 echo "$form_script";
?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

    Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
  </body>
</html>