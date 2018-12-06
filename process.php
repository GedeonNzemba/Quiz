<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="css/styles.css">
    <script src="main.js"></script>
</head>
<body>
<?php
  $total = 0;
if (isset($_POST['answers'])){

    $Answers = $_POST['answers'];




//This loop checks the answer to see if it is correct, if it is correct then the total will incremented by one

    foreach ($Questions as $QuestionNumber => $Value){

        if ($Answers[$QuestionNumber] != $Value['CorrectAnswer']){

            $total = $total;

        }
        else {

            $total++;

        }

    }

//Once your quiz has been submitted, the conditional statements will respond according to your result
    echo "You score is $total /20";
    echo "<br/>";
    echo "<br/>";
        if ($total <= 10) {
            echo "<p>You should try harder next time :( </p>
            </br>";
            echo '<img src="images/goldfish.jpg" />';
        };
        if ($total > 10 && $total < 15) {
            echo "<p>You scored average results!</p>";
            echo '<img src="images/average.jfif" />';
        };
        if ($total > 15) {
            echo "<p>Excellent! Are you perhaps related to Einstein?</p>";
            echo '<img src="images/einstein.gif" />';
        };

} else {

?>

 <?php
    // This foreach loop outputs each question as well as the four possible answers to the questions through the use of radio buttons

        foreach ($Questions as $QuestionNumber => $Value){

    ?>

     <?php
// This is saying that for each of the values of the possible answers that it should assign a letter to it as it was written within the arrays\
// [This is not displayed to the user, but runs in the backend for the purpose of outputting all the possible answers]

                        foreach ($Value['Answers'] as $Letter => $Answer){

                        $Label = 'question-'.$QuestionNumber.'-answers-'.$Letter;

                ?>