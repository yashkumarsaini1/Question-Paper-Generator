<?php
require_once 'vendor/autoload.php';

 $con = new mysqli("localhost","root","", "question_p_g");
$question_id_g=$_POST['question_id'];
$marks_g = $_POST['marks'];

// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();
        $fontStyle = new \PhpOffice\PhpWord\Style\Font();
        $fontStyle->setSize(14);

        $paper =  "Question Paper \n\n";

        $myTextElement = $section->addText($paper); 
foreach ($question_id_g as $key => $value) {
     
      $query_q = "SELECT * FROM question_bank WHERE ID ='$value'";
      $ques = mysqli_query($con,$query_q);
      $mark = $marks_g[$key];
      while($row = $ques->fetch_assoc())
      {
        $question = $row["question"];
        $paper =  $key.".   ".$question." (".$mark.") "."\n\n";

        $myTextElement = $section->addText($paper);        
        $myTextElement->setFontStyle($fontStyle);
      }


    }

    $section = $phpWord->addSection();
        $fontStyle = new \PhpOffice\PhpWord\Style\Font();
        $fontStyle->setSize(14);


        $paper =  "Solution of Paper \n\n";

        $myTextElement = $section->addText($paper); 

foreach ($question_id_g as $key => $value) {
     
      $query_q = "SELECT * FROM question_bank WHERE ID ='$value'";
      $ques = mysqli_query($con,$query_q);
      $mark = $marks_g[$key];
      while($row = $ques->fetch_assoc())
      {
        $solution = $row["solution"];
        $paper =  $key.".   ".$solution." (".$mark.") "."\n\n";

        $myTextElement = $section->addText($paper);        
        $myTextElement->setFontStyle($fontStyle);
      }


    }

    $section = $phpWord->addSection();
        $fontStyle = new \PhpOffice\PhpWord\Style\Font();
        $fontStyle->setSize(14);


        $paper =  "Question Paper with solutions \n\n";

        $myTextElement = $section->addText($paper); 

foreach ($question_id_g as $key => $value) {
     
      $query_q = "SELECT * FROM question_bank WHERE ID ='$value'";
      $ques = mysqli_query($con,$query_q);
      $mark = $marks_g[$key];
      while($row = $ques->fetch_assoc())
      {
        $question = $row["question"];
        $solution = $row["solution"];
        $paper =  $key.".   ".$question." (".$mark.") "."\n\n"."Ans: ".$solution."\n\n" ;

        $myTextElement = $section->addText($paper);        
        $myTextElement->setFontStyle($fontStyle);
      }


    }


    $section = $phpWord->addSection();
        $fontStyle = new \PhpOffice\PhpWord\Style\Font();
        $fontStyle->setSize(14);


        $paper =  "Question with IDs \n\n";

        $myTextElement = $section->addText($paper); 

foreach ($question_id_g as $key => $value) {
     
      $query_q = "SELECT * FROM question_bank WHERE ID ='$value'";
      $ques = mysqli_query($con,$query_q);
      $mark = $marks_g[$key];
      while($row = $ques->fetch_assoc())
      {
        $question = $row["question"];
        $id = $row["ID"];
        $paper =  $key.".   ".$question." (ID: ".$id.") "."\n\n";

        $myTextElement = $section->addText($paper);        
        $myTextElement->setFontStyle($fontStyle);
      }


    }



/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...


header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;filename="Question_Paper.doc"');

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('php://output');
?>