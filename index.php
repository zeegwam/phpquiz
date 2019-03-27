<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

<?php

echo "<h1>Geography Quiz Time</h1><br>";
$questions =array(array("<b>Question 1: Which country first produced bananas?",
                  "Question 2: Which country was previously known as Rhodesia?",
                  "Question 3: Which country prduces the maximum sugar in the world?",
                  "Question 4: What is the capital of Moroco?",
                  "Question 5: 'Death Valley' is located in",
                  "Question 6: ...is sometimes referred to as 'the land of white elephants",
                  "Question 7: 90% loss from floods occurs in the...",
                  "Question 8: A cataract is a...",
                  "Question 9: Colombo is the capital of",
                  "Question 10: Cometsare luminous celestial bodies moving around the...",
                  "Question 11: Commercial fishing is best developed in",
                  "Question 12: Congo is situated on the... coast of Africa",
                  "Question 13: 'Sick man of Europe' is the nickname for...",
                  "Question 14: Cambodia was earlier known as",
                  "Question 15: How many days does the moon take to rotate round the earth?",
                  "Question 16: Which is tha largest island in the world?",
                  "Question 17: Loti is the currency of...",
                  "Question 18: Where is Mount Everest located?",
                  "Question 19: What is the shape of the earth's orbit around the sun?",
                  "Question 20: Which of the following countries has the largest area in the world?"),
                  array("question1","question2","question3","question4","question5","question6","question7","question8",
                  "question9","question10","question11","question12","question13","question14","question15","question16",
                  "question17","question18","question19","question20"),
                  array(array("RSA","India","Mozambique","Mexico"),
                     array("Namibia","Malawi","Zimbabwe","Lesotho"),
                     array("USA","India","Cuba","Brazil"),
                     array("Muscat","Managua","Ulan Bator","Rabat"),
                     array("California US","Kerala,India","Israel","Saudi Arabia"),
                     array("Tanzania","India","Thailand","Sri Lanka"),
                     array("Coastal plains","Deccan plateau","North plains","None of the above"),
                     array("Huge waterfall","Marshy creek","Mountain pass","Currency"),
                     array("Japan","China","Sri Lanka","Thailand"),
                     array("Sun","Moon","Earth","Jupiter"),
                     array("China","Japan","South Korea","Russia"),
                     array("North","South","West","East"),
                     array("Rome","Turkey","Italy","Oxford"),
                     array("Mauritania","Persia","Kampuchea","None of the above"),
                     array("26","27","28","29"),
                     array("Australia","Greenland","New Guinea","None of the above"),
                     array("Burundi","Libya","Sudan","Lesotho"),
                     array("India","China","Nepal","Bhutan"),
                     array("Circular","Hyperbolic","Elliptical","Parabolic"),
                     array("Canada","China","USA","Russia</b>"))
);

for ($x=0; $x<=19 ; $x++) { 
   echo $questions[0][$x] ."<br>";
   for ($z=0; $z<=3; ++$z) {
      echo "\n<input type=\"radio\" name=\"". $questions[1][$x]. "\"value=\"". $questions[2][$x][$z]. "\">\"". $questions[2][$x][$z]."\"";
    } echo "<br><br>";
  };


  if(isset($_POST['submit'])){
   $x=0;
   
 if (isset($_POST['question1']) && $_POST['question1']==="India"  ){
   $x++;
 }
 
 if (isset($_POST['question2']) && $_POST['question2']==="Zimbabwe"){
     $x++;
 }
   
 if (isset($_POST['question3']) && $_POST['question3']==="India"){
     $x++;
 }
 if (isset($_POST['question4']) && $_POST['question4']==="Rabat"){
     $x++;
 }
 if (isset($_POST['question5']) && $_POST['question5']==="California US"){
   $x++;
 }
 if (isset($_POST['question6']) && $_POST['question6']==="Tailand"){
     $x++;
 }
 if (isset($_POST['question7']) && $_POST['question7']==="Huge Waterfall"){
     $x++;
 }
 if (isset($_POST['question8']) && $_POST['question8']==="China"){
   $x++;
 }
 if (isset($_POST['question9']) && $_POST['question9']==="Earth"){
   $x++;
 }
 if (isset($_POST['question10']) && $_POST['question10']==="Japan"){
   $x++;
 }
 if (isset($_POST['question11']) && $_POST['question12']==="North"){
   $x++;
 }
 if (isset($_POST['question13']) && $_POST['question13']==="Turkey"){
   $x++;
 }
 if (isset($_POST['question14']) && $_POST['question14']==="Kampuchea"){
   $x++;
 }
 if (isset($_POST['question15']) && $_POST['question15']==="27"){
   $x++;
 }
 if (isset($_POST['question16']) && $_POST['question16']==="Greenland"){
   $x++;
 }
 if (isset($_POST['question17']) && $_POST['question17']==="Lesotho"){
   $x++;
 }
 if (isset($_POST['question18']) && $_POST['question18']==="Nepal"){
   $x++;
 }
 if (isset($_POST['question19']) && $_POST['question19']==="Elliptical"){
   $x++;
 }
 if (isset($_POST['question20']) && $_POST['question20']==="Russia"){
   $x++;
 }
   echo "Your score is $x <br>";
   if ($x>15) {
     echo "Well done";
   }elseif ($x>10) {
     echo "Nice try";
   }else{
     echo "Better luck next time";
   }
  
 }


?>

<input type="submit" value="submit" name="submit">
</form>

</body>
</html>