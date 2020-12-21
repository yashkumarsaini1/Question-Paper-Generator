<?php 
  $con = new mysqli("localhost","root","", "question_p_g");

  $script_f_topic = "<script type='text/javascript'>document.getElementById('topic_btn').style.display='none';</script>";
  $script_list_topic = "<script type='text/javascript'>document.getElementById('topic_list').style.display='none';</script>";
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


    <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

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
                font-family: arial;
            }
     .menu_itm:hover
     {
        background-color: #0023ff;
        color: white;
     }
     .table
     {

     }

    </style>
  </head>
  <body>
    

    <div class="container-fluid bg-white shadow-lg fixed-top  " style="z-index: 3">
    
        <h5 style="padding: 10px;"><span id="menu_block" class="animated fadeInRight" onclick="show_menu('1');"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-border-width" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
</svg></span>
<span id="menu_cross" class="animated fadeInLeft"  onclick="show_menu('2');" style="display: none;"><svg  width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></span>

<span style="text-align: center;"> Question Filter </span> <svg style="color:#0023ff " width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
<div class="container mt-5 bg-white shadow-lg " style="text-align: center; border-radius: 15px;">

  <h4 style="text-align: center;" class="mt-4">Select Detail and Filter Questions</h4>
      <form method="post" action="question_filter.php">
  <div class="row">
            <div class="col-sm-2 ">
          <label >Select Class </label>
              <select name="class_t" class="form-control" >
                <?php 
                if(isset($_POST ['class_t']))
                    {
                      $class_f = $_POST['class_t'];
                      $subject_f =$_POST['subject_t'];

                      $sql = "SELECT * FROM chapters WHERE class='$class_f' && subject='$subject_f' ";
                      $result = $con->query($sql);
                      $row = $result->fetch_assoc();

                      $class_current = $row["class"];
                      echo "<option value='$class_current'>$class_current</option>";
                    }
                ?>
                <option value="10" >10</option>
                <option value="11" >11</option>
                <option value="12" >12</option>
              </select>
            </div>
            <div class="col-sm-3">
            <label >Select Subject</label>
              <select name="subject_t" class="form-control">
                <?php 
                if(isset($_POST ['class_t']))
                    {
                      $class_f = $_POST['class_t'];
                      $subject_f =$_POST['subject_t'];

                      $sql = "SELECT * FROM chapters WHERE class='$class_f' && subject='$subject_f' ";
                      $result = $con->query($sql);
                      $row = $result->fetch_assoc();

                      $subject_current = $row["subject"];
                      echo "<option value='$subject_current'>$subject_current</option>";
                    }
                ?>
                <option value="Maths" >Maths</option>
                <option value="Science" >Science</option>
              </select>
            </div>
            <div class="col-sm-1 mt-4" >
              <button type="submit" class="btn btn-info btn-block mt-2 mb-2"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></button>
            </div>
          </form>
            <div class="col-sm-5" id="select_ch">
<form method="post" action="question_filter.php">
            <label >Select Chapter</label>
              <select name="que_ch_name" class="form-control">
                <?php
                  if(isset($_POST ['class_t']))
                    {
                      $class_f = $_POST['class_t'];
                      $subject_f =$_POST['subject_t'];

                      $sql = "SELECT * FROM chapters WHERE class='$class_f' && subject='$subject_f' ORDER BY chap_no ASC ";
                      $result = $con->query($sql);
                      
                      if ($result->num_rows > 0)
                      {
                        $script_f_topic = "<script type='text/javascript'>document.getElementById('topic_btn').style.display='block';</script>";
                        while($row = $result->fetch_assoc()) 
                          {
                            $chapter_name = $row["chap_name"];                            
                            $chapter_number = $row["chap_no"];
                            echo "<option  value='$chapter_name'>$chapter_number . $chapter_name</option>";
                          }
                      }
                      else
                      echo "<option value=' '>No Chapters Found</option>";

                    
                    }
                    if(isset($_POST ['que_ch_name']))
                    {
                      $class_topic1 = $_POST['topic_class'];
                      $subject_topic1 =$_POST['topic_subject'];                      
                      $chapter_name1 = $_POST['que_ch_name'];

                      $sql1 = "SELECT * FROM chapters WHERE chap_name='$chapter_name1'";
                       $result3 = $con->query($sql1);
                       $row1 = $result3->fetch_assoc();
                       $chapter_number = $row1["chap_no"];

                      echo"<option  value='$chapter_name1'>$chapter_number . $chapter_name1</option>";    
                    }
                ?>

              </select>
            </div>
            <div class="col-sm-1 mt-4" id="topic_btn">
              <input class="form-control " type="text" name="topic_class" value="<?php echo"$class_f";?>" readonly style="display: none;">
              <input class="form-control " type="text" name="topic_subject" value="<?php echo"$subject_f";?>" readonly style="display: none;">
              <button type="submit" class="btn btn-dark btn-block mt-2 mb-2"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></button>

          </form>
            </div>
          </div>

            <div class="row"  id="topic_list">
              <div class="row" style="padding: 10px;">
            <div class="col-sm-4 mb-4 mt-3" >
              <form method="post" action="question_filter.php">
               <label >Select Topic</label>
              <select name="q_topic" class="form-control">
                <option value="0"> </option>
                <?php
                  if(isset($_POST ['que_ch_name']))
                    {
                      $class_topic = $_POST['topic_class'];
                      $subject_topic =$_POST['topic_subject'];
                      $chapter_name = $_POST['que_ch_name'];

                      $sql = "SELECT * FROM topics WHERE class='$class_topic' && subject='$subject_topic' && chap_name='$chapter_name' ORDER BY topic_no ASC ";
                      $result1 = $con->query($sql);
                      
                      $script_list_topic = "<script type='text/javascript'>document.getElementById('topic_list').style.display='block';</script>";
                      if ($result1->num_rows > 0)
                      {
                         
                        while($row = $result1->fetch_assoc()) 
                          {
                            $topic_name = $row["topic_name"];                            
                            $topic_number = $row["topic_no"];
                            echo "<option value='$topic_name'>$topic_number . $topic_name</option>";
                          }
                      }
                      else
                      echo "<option value=' '>No Topics Found</option>";

                    } 
                ?>

              </select>
            </div>
            <div class="col-sm-3 mb-4 mt-3">

              <input type="number" name="q_class" value="<?php echo"$class_topic"?>" style="display: none;">
              <input type="text" name="q_subject" value="<?php echo"$subject_topic"?>" style="display: none;">
              <input type="text" name="q_chapter" value="<?php echo"$chapter_name"?>" style="display: none;">
              <label>Select Type</label>
              <select name='q_type' class='form-control'>
                      <option value="0"> </option>
                      <option value='mcq'>MCQ</option>
                      <option value='vsa'>VSA</option>
                      <option value='sa1'>SA - I</option>
                      <option value='sa2'>SA - II</option>
                      <option value='la1'>LA - I</option>
                      <option value='la2'>LA - II</option>
                   </select>
            </div>
            <div class="col-sm-2 mb-4 mt-3">
              <label>Select Level</label>
              <select name='q_level' class='form-control'>
                <option value="0"> </option>
                <option value="1">I</option>
                <option value="2">II </option>
                <option value="3">III</option>
                   </select>
                 </div>
                 <div class="col-sm-3 mt-4">
                  <button class="btn btn-block btn-success mt-4">Filter</button>
                 </div>
                </form>
               </div>
             </div>
             </div>
           </div>
           <div class="container">
            <div class="row">
               <div class="table-responsive rounded mt-3">
      <?php 
      if(isset($_POST["q_type"]))
      {
      $f_class= $_POST["q_class"];
      $f_subject =$_POST["q_subject"];
      $f_chap = $_POST["q_chapter"];
      $f_topic = $_POST["q_topic"];
      $f_type = $_POST["q_type"];
      $f_level = $_POST["q_level"];



      $sql1 = "SELECT * FROM chapters WHERE chap_name = '$f_chap'";
      $result1 = mysqli_query($con,$sql1);
      $row1 = $result1->fetch_assoc();
      $q_chapter_id = $row1["ID"];

      if($f_topic!="0"){
            $sql2 = "SELECT * FROM topics WHERE topic_name = '$f_topic'";
            $result2 = mysqli_query($con,$sql2);
            $row2 = $result2->fetch_assoc();
            $q_topic_id = $row2["ID"];}
    if($f_type!="0"){
      if($f_level=="0" && $f_topic=="0")
      {
        $filter1 ="SELECT * FROM question_bank WHERE class='$f_class'&& subject='$f_subject'&& chapter_id ='$q_chapter_id'&& question_type='$f_type'";
        $result_1 = mysqli_query($con,$filter1);
        $output_1 = mysqli_num_rows($result_1);


      if($output_1>0)
      {
        echo "
        <div><h3 class='mt-3 mb-2'>Class : ($f_class)&nbsp;&nbsp; Subject: ($f_subject)&nbsp;&nbsp; Chapter Name :($f_chap) </h3></div><table border='2' class='table mt-2 rounded' style='text-align:left;border-color: black;'>
            <thead class='thead'>
            <tr  class='bg-light'>
            <th style='width:80px'>Que_Id</th>
            <th style='width:80px'>Que Type</th>
            <th style='width:60%;'>Question</th>
            <th style='width:40%;'>Solution</th>
            </tr>
            </thead>";
        while($row = $result_1->fetch_assoc())
        {
          $question_id = $row["ID"];
          $question_output = $row["question"];
          $solution_output = $row["solution"];
          $question_type = $row["question_type"];
          $question_type = $row["question_type"];
          echo "<tr>
          <td>$question_id</td>
          <td>$question_type</td>
          <td>$question_output</td>
          <td>$solution_output</td>
          </tr>";
        }
        echo "</table>";
      }
      else{
            echo "<h3 style='text-align:center'>No Questions Found</h3>";}
      }
      else if($f_level=="0")
      {

        $filter2 ="SELECT * FROM question_bank WHERE class='$f_class'&& subject='$f_subject'&& chapter_id ='$q_chapter_id'&& question_type='$f_type'&&
         topic_id='$q_topic_id'";
        $result_2 = mysqli_query($con,$filter2);
        $output_2 = mysqli_num_rows($result_2);


      if($output_2>0)
      {
        echo "
        <div><h3 class='mt-3 mb-2'>Class : ($f_class)&nbsp;&nbsp; Subject: ($f_subject)&nbsp;&nbsp; Chapter Name :($f_chap) </h3></div><table border='2' class='table mt-2 rounded' style='text-align:left;border-color: black;'>
            <thead class='thead'>
            <tr  class='bg-light'>
            <th style='width:80px'>Que_Id</th>
            <th style='width:80px'>Que Type</th>
            <th style='width:60%;'>Question</th>
            <th style='width:40%;'>Solution</th>
            </tr>
            </thead>";
        while($row = $result_2->fetch_assoc())
        {
          $question_id = $row["ID"];
          $question_output = $row["question"];
          $solution_output = $row["solution"];
          $question_type = $row["question_type"];
          echo "<tr>
          <td>$question_id</td>
          <td>$question_type</td>
          <td>$question_output</td>
          <td>$solution_output</td>
          </tr>";
        }
        echo "</table>";
      }
      else{
            echo "<h3 style='text-align:center'>No Questions Found</h3>";}
      }
      else if($f_topic=="0")
      {

        $filter3 ="SELECT * FROM question_bank WHERE class='$f_class'&& subject='$f_subject'&& chapter_id ='$q_chapter_id'&& question_type='$f_type'&& que_level='$f_level'";
        $result_3 = mysqli_query($con,$filter3);
        $output_3 = mysqli_num_rows($result_3);


      if($output_3>0)
      {
        echo "
        <div><h3 class='mt-3 mb-2'>Class : ($f_class)&nbsp;&nbsp; Subject: ($f_subject)&nbsp;&nbsp; Chapter Name :($f_chap) </h3></div><table border='2' class='table mt-2 rounded' style='text-align:left;border-color: black;'>
            <thead class='thead'>
            <tr  class='bg-light'>
            <th style='width:80px'>Que_Id</th>
            <th style='width:80px'>Que Type</th>
            <th style='width:60%;'>Question</th>
            <th style='width:40%;'>Solution</th>
            </tr>
            </thead>";
        while($row = $result_3->fetch_assoc())
        {
          $question_id = $row["ID"];
          $question_output = $row["question"];
          $solution_output = $row["solution"];
          $question_type = $row["question_type"];
          echo "<tr>
          <td>$question_id</td>
          <td>$question_type</td>
          <td>$question_output</td>
          <td>$solution_output</td>
          </tr>";
        }
        echo "</table>";
      }
      else{
            echo "<h3 style='text-align:center'>No Questions Found</h3>";}
      }
      else
      {

        $filter4 ="SELECT * FROM question_bank WHERE class='$f_class'&& subject='$f_subject'&& chapter_id ='$q_chapter_id'&& question_type='$f_type'&& que_level='$f_level'&& topic_id='$q_topic_id'";
        $result_4 = mysqli_query($con,$filter4);
        $output_4 = mysqli_num_rows($result_4);


      if($output_4>0)
      {
        echo "
        <div><h3 class='mt-3 mb-2'>Class : ($f_class)&nbsp;&nbsp; Subject: ($f_subject)&nbsp;&nbsp; Chapter Name :($f_chap) </h3></div>
        <table border='2' class='table mt-2 rounded' style='text-align:left;border-color: black;'>
            <thead class='thead'>
            <tr  class='bg-light'>
            <th style='width:80px'>Que_Id</th>
            <th style='width:80px'>Que Type</th>
            <th style='width:60%;'>Question</th>
            <th style='width:40%;'>Solution</th>
            </tr>
            </thead>";
        while($row = $result_4->fetch_assoc())
        {
          $question_id = $row["ID"];
          $question_output = $row["question"];
          $solution_output = $row["solution"];
          $question_type = $row["question_type"];
          echo "<tr>
          <td>$question_id</td>
          <td>$question_type</td>
          <td>$question_output</td>
          <td>$solution_output</td>
          </tr>";
        }
        echo "</table>";
      }
      else{
            echo "<h3 style='text-align:center'>No Questions Found</h3>";}
      }
    }
    else
    {

      if($f_level=="0" && $f_topic=="0")
      {
        $filter1 ="SELECT * FROM question_bank WHERE class='$f_class'&& subject='$f_subject'&& chapter_id ='$q_chapter_id'";
        $result_1 = mysqli_query($con,$filter1);
        $output_1 = mysqli_num_rows($result_1);


      if($output_1>0)
      {
        echo "
        <div><h3 class='mt-3 mb-2'>Class : ($f_class)&nbsp;&nbsp; Subject: ($f_subject)&nbsp;&nbsp; Chapter Name :($f_chap) </h3></div><table border='2' class='table mt-2 rounded' style='text-align:left;border-color: black;'>
            <thead class='thead'>
            <tr  class='bg-light'>
            <th style='width:80px'>Que_Id</th>
            <th style='width:80px'>Que Type</th>
            <th style='width:60%;'>Question</th>
            <th style='width:40%;'>Solution</th>
            </tr>
            </thead>";
        while($row = $result_1->fetch_assoc())
        {
          $question_id = $row["ID"];
          $question_output = $row["question"];
          $solution_output = $row["solution"];
          $question_type = $row["question_type"];
          echo "<tr>
          <td>$question_id</td>
          <td>$question_type</td>
          <td>$question_output</td>
          <td>$solution_output</td>
          </tr>";
        }
        echo "</table>";
      }
      else{
            echo "<h3 style='text-align:center'>No Questions Found</h3>";}
      }
      else if($f_level=="0")
      {

        $filter2 ="SELECT * FROM question_bank WHERE class='$f_class'&& subject='$f_subject'&& chapter_id ='$q_chapter_id'&&
         topic_id='$q_topic_id'";
        $result_2 = mysqli_query($con,$filter2);
        $output_2 = mysqli_num_rows($result_2);


      if($output_2>0)
      {
        echo "
        <div><h3 class='mt-3 mb-2'>Class : ($f_class)&nbsp;&nbsp; Subject: ($f_subject)&nbsp;&nbsp; Chapter Name :($f_chap) </h3></div><table border='2' class='table mt-2 rounded' style='text-align:left;border-color: black;'>
            <thead class='thead'>
            <tr  class='bg-light'>
            <th style='width:80px'>Que_Id</th>
            <th style='width:80px'>Que Type</th>
            <th style='width:60%;'>Question</th>
            <th style='width:40%;'>Solution</th>
            </tr>
            </thead>";
        while($row = $result_2->fetch_assoc())
        {
          $question_id = $row["ID"];
          $question_output = $row["question"];
          $solution_output = $row["solution"];
          $question_type = $row["question_type"];
          echo "<tr>
          <td>$question_id</td>
          <td>$question_type</td>
          <td>$question_output</td>
          <td>$solution_output</td>
          </tr>";
        }
        echo "</table>";
      }
      else{
            echo "<h3 style='text-align:center'>No Questions Found</h3>";}
      }
      else if($f_topic=="0")
      {

        $filter3 ="SELECT * FROM question_bank WHERE class='$f_class'&& subject='$f_subject'&& chapter_id ='$q_chapter_id'&& que_level='$f_level'";
        $result_3 = mysqli_query($con,$filter3);
        $output_3 = mysqli_num_rows($result_3);


      if($output_3>0)
      {
        echo "
        <div><h3 class='mt-3 mb-2'>Class : ($f_class)&nbsp;&nbsp; Subject: ($f_subject)&nbsp;&nbsp; Chapter Name :($f_chap) </h3></div><table border='2' class='table mt-2 rounded' style='text-align:left;border-color: black;'>
            <thead class='thead'>
            <tr  class='bg-light'>
            <th style='width:80px'>Que_Id</th>
            <th style='width:80px'>Que Type</th>
            <th style='width:60%;'>Question</th>
            <th style='width:40%;'>Solution</th>
            </tr>
            </thead>";
        while($row = $result_3->fetch_assoc())
        {
          $question_id = $row["ID"];
          $question_output = $row["question"];
          $solution_output = $row["solution"];
          $question_type = $row["question_type"];
          echo "<tr>
          <td>$question_id</td>
          <td>$question_type</td>
          <td>$question_output</td>
          <td>$solution_output</td>
          </tr>";
        }
        echo "</table>";
      }
      else{
            echo "<h3 style='text-align:center'>No Questions Found</h3>";}
      }
      else
      {

        $filter4 ="SELECT * FROM question_bank WHERE class='$f_class'&& subject='$f_subject'&& chapter_id ='$q_chapter_id'&& que_level='$f_level'&& topic_id='$q_topic_id'";
        $result_4 = mysqli_query($con,$filter4);
        $output_4 = mysqli_num_rows($result_4);


      if($output_4>0)
      {
        echo "
        <div><h3 class='mt-3 mb-2'>Class : ($f_class)&nbsp;&nbsp; Subject: ($f_subject)&nbsp;&nbsp; Chapter Name :($f_chap) </h3></div>
        <table border='2' class='table mt-2 rounded' style='text-align:left;border-color: black;'>
            <thead class='thead'>
            <tr  class='bg-light'>
            <th style='width:80px'>Que_Id</th>
            <th style='width:80px'>Que Type</th>
            <th style='width:60%;'>Question</th>
            <th style='width:40%;'>Solution</th>
            </tr>
            </thead>";
        while($row = $result_4->fetch_assoc())
        {
          $question_id = $row["ID"];
          $question_output = $row["question"];
          $solution_output = $row["solution"];
          $question_type = $row["question_type"];
          echo "<tr>
          <td>$question_id</td>
          <td>$question_type</td>
          <td>$question_output</td>
          <td>$solution_output</td>
          </tr>";
        }
        echo "</table>";
      }
      else{
            echo "<h3 style='text-align:center'>No Questions Found</h3>";}
      }
    }
  }
      ?>
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
    echo "$script_f_topic";
    echo "$script_list_topic";
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