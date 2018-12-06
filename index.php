<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz Yourself!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="css/styles.css">
    <script src="main.js"></script>
</head>
<body>


<?php

// This multi-dimensional array that contains all the qustions and answers to the quiz
$questions = array(

    1 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>Where in the body is the scapular muscle?</strong></h1></header>
          <br />
          <img class="" src="img/question1.jpg">                 ',

        'Answers' => array(

            'A' => 'Knee',

            'B' => 'Shoulder',

            'C' => 'Head',

            'D' => 'Arm'

        ),

        'CorrectAnswer' => 'B'

    ),

    2 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>What is the name of the only bone in the body not connected to another?</strong></h1></header>
            <br />
            <img class="" src="img/question 2.jpg">       ',


        'Answers' => array(

            'A' => 'Axis',

            'B' => 'Ulna',

            'C' => 'Femur',

            'D' => 'Hyoid'

        ),

        'CorrectAnswer' => 'D'

    ),

    3 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>Where is the pharynx located?</strong></h1></header>
        <br />
        <img class="" src="img/question 3.jpg">',

        'Answers' => array(

            'A' => 'Neck',

            'B' => 'Foot',

            'C' => 'Arm',

            'D' => 'Leg'

        ),

        'CorrectAnswer' => 'A'

    ),

    4 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>How many muscles control your eyeballs?</strong></h1></header>
        <br />
        <img class="" src="img/eye-muscles.png">',

        'Answers' => array(

            'A' => 'Seven',

            'B' => 'Four',

            'C' => 'Eight',

            'D' => 'Six'

        ),

        'CorrectAnswer' => 'D'

    ),

    5 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>Which of these glands produces tears?</strong></h1></header>
    <br />
    <img class="" src="img/question 5.jpg">
',

        'Answers' => array(

            'A' => '>Lachrymal',

            'B' => 'Laryngeal',

            'C' => 'Latissimal',

            'D' => 'Longitudinal'

        ),

        'CorrectAnswer' => 'A'

    ),

    6 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>What fraction of the human body is made up of blood?</strong></h1></header>
    <br />
    <img class="" src="img/question 6.png">',

        'Answers' => array(

            'A' => '1/4',

            'B' => '1/2',

            'C' => '1/27',

            'D' => '1/13'

        ),

        'CorrectAnswer' => 'D'

    ),

    7 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>What is the average temperature of a healthy human, in centigrade?</strong></h1></header>
    <br />
    <img class="" src="img/question 7.png">',

        'Answers' => array(

            'A' => '99',

            'B' => '50',

            'C' => '20',

            'D' => '37'

        ),

        'CorrectAnswer' => 'D'

    ),

    8 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>True or False, Can the body generate new brain cells?</strong></h1></header>
    <br />
    <img class="" src="img/question 8.jpg">',

        'Answers' => array(

            'A' => 'True',

            'B' => 'No',

            'C' => 'Yes',

            'D' => 'False'

        ),

        'CorrectAnswer' => 'A'

    ),

    9 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>Where is the esophagus located?</strong></h1></header>
    <br />
    <img class="" src="img/question 9.jpg">',

        'Answers' => array(

            'A' => 'Chest',

            'B' => 'Arm',

            'C' => 'Foot',

            'D' => 'Knee'

        ),

        'CorrectAnswer' => 'A'

    ),

    10 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>What Body Part changes the least throughout a person’s life?</strong></h1></header>
    <br />
    <img class="" src="img/question 10.jpg">',

        'Answers' => array(

            'A' => 'Ears',

            'B' => 'Nose',

            'C' => 'Eyes',

            'D' => 'Tongue'

        ),

        'CorrectAnswer' => 'C'

    ),

    11 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>How many hair follicles are on the average human head?</strong></h1></header>
    <br />
    <img class="" src="img/question 11.jpg">',

        'Answers' => array(

            'A' => '100,000',

            'B' => '200,000',

            'C' => '20',

            'D' => '75,000'

        ),

        'CorrectAnswer' => 'A'

    ),

    12 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>How much saliva does an average person produce in a lifetime?</strong></h1></header>
    <br />
    <img class="" src="img/question 12.jpg">',

        'Answers' => array(

            'A' => '250,000 quarts',

            'B' => '200,000 quarts',

            'C' => '10 quarts',

            'D' => '25,000 quarts'

        ),

        'CorrectAnswer' => 'D'

    ),

    13 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>At birth, how many bones do you have?</strong></h1></header>
    <br />
    <img class="" src="img/question 13.png">',

        'Answers' => array(

            'A' => '350',

            'B' => '206',

            'C' => '500',

            'D' => '411'

        ),

        'CorrectAnswer' => 'A'

    ),

    14 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>What is the most common blood type?</strong></h1></header>
    <br />
    <img class="" src="img/blood type.png">',

        'Answers' => array(

            'A' => 'AB+',

            'B' => 'B+',

            'C' => 'O+',

            'D' => 'B-'

        ),

        'CorrectAnswer' => 'C'

    ),

    15 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>If you were to stretch out your entire digestive system, how long would it be?</strong></h1></header>
    <br />
    <img class="" src="img/question 14.jpg">',

        'Answers' => array(

            'A' => '3 meters',

            'B' => '9 meters',

            'C' => '15 meters',

            'D' => '20 meters'

        ),

        'CorrectAnswer' => 'B'

    ),

    16 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>Which of the following is not an axial bone?</strong></h1></header>
    <br />
    <img class="" src="img/question 15.jpg">',

        'Answers' => array(

            'A' => 'Cranium',

            'B' => 'Shoulder',

            'C' => 'Ribs',

            'D' => 'Chest'

        ),

        'CorrectAnswer' => 'B'

    ),

    17 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>there are more bones in the hand or the foot?</strong></h1></header>
    <br />
    <img class="" src="img/question 16.jpg">',

        'Answers' => array(

            'A' => 'Hand',

            'B' => 'Foot',

            'C' => 'None',

            'D' => 'Both have the same'

        ),

        'CorrectAnswer' => 'A'

    ),

    18 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>Where are red blood corpuscles formed?</strong></h1></header>
    <br />
    <img class="" src="img/question 17.jpg">',

        'Answers' => array(

            'A' => 'The heart',

            'B' => 'The lung',

            'C' => 'The bones',

            'D' => 'The latissimus dorsi'

        ),

        'CorrectAnswer' => 'C'

    ),

    19 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>Which of these is a neurological disorder?</strong></h1></header>
    <br />
    <img class="" src="img/question 18.png">',

        'Answers' => array(

            'A' => 'Alopecia',

            'B' => 'Hashimoto Syndrome',

            'C' => 'Alzheimer',

            'D' => 'Psiatica'

        ),

        'CorrectAnswer' => 'C'

    ),

    20 => array( 'Question' => '<header class="card-header"><h1 class="card-header-title is-1 is-centered"><strong>What is the name of the system, in the human body, that transports blood?</strong></h1></header>
    <br />
    <img class="" src="img/question 6.png">',

        'Answers' => array(

            'A' => 'Respiratory',

            'B' => 'Digestive',

            'C' => 'Lymphatic',

            'D' => 'Cardiovascular'

        ),

        'CorrectAnswer' => 'D'

    )

);

$total = 0;
if (isset($_POST['answers'])){

    $answers = $_POST['answers'];




//This loop checks the answer to see if it is correct, if it is correct then the total will incremented by one

    foreach ($questions as $questionNumber => $value){

        if ($answers[$questionNumber] != $value['CorrectAnswer']){

            $total = $total;


        } else {

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
            echo '<img src="img/condition1.gif" />';
        };
        if ($total > 10 && $total < 15) {
            echo "<p>You scored average results! there is always room for improvement</p>";
            echo '<img src="img/question 7.png" />';
        };
        if ($total > 15) {
            echo "<p>Excellent! Are you perhaps related to Einstein?</p>";
            echo '<div style="width:100%;height:0;padding-bottom:55%;position:relative;"><iframe src="https://giphy.com/embed/xT9IgFXbD1smKi1IHe" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/vmas-applause-video-music-awards-xT9IgFXbD1smKi1IHe">via GIPHY</a></p>jpg" />';
        };

} else {

?>

</section>
<!-- This is where the landing page of the form starts-->

    <form action="index.php" method="post" id="quiz" class="form">

        <section class="hero is-fullheight is-bold">

            <div class="hero-body">
                <h1 class="title" id="background">THE HUMAN BODY QUIZ</h1>
            </div>

        </section>

    <br>

    <?php
    // This foreach loop outputs each question as well as the four possible answers to the questions through the use of radio buttons

        foreach ($questions as $questionNumber => $value){

    ?>
<!-- This is where the questions and possible answers are marked up and within the markup there is script that allows it to interact with the backend foreach loop -->
<div class="container">

    <li class="box">

        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        <h3 class="subtitle"><?php echo $value['Question']; ?></h3>
                    </h1>
                    <h2 class="subtitle">
                    </h2>
                </div>
            </div>
        </section>

        <?php
// This is saying that for each of the values of the possible answers that it should assign a letter to it as it was written within the arrays\
// [This is not displayed to the user, but runs in the backend for the purpose of outputting all the possible answers]

            foreach ($value['Answers'] as $letter => $answer){

            $label = 'question-'.$questionNumber.'-answers-'.$letter;

        ?>

        <div>
<!-- Radio button with the relevent naming conventions and integration of php with name and value's as well as id's -->

            <input type="radio" name="answers[<?php echo $questionNumber; ?>]" id="<?php echo $label; ?>" value="<?php echo $letter; ?>" required/>
<!-- A label gets created that contains a letter as well as a possible answer [This is what is displayed to the user] -->
            <label for="<?php echo $label; ?>"><?php echo $letter; ?>) <?php echo $answer; ?> </label>

        </div>

        <?php } ?>

    </li>

    <?php } ?>
<!-- This is my submit button -->

    <input type="submit" value="Submit Quiz" class="button is-success is-normal is-hovered"/>
    <br>
    <br>
    <br>
    </form>

<?php

}

?>

        </div>
    </body>
</html>