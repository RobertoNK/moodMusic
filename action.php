<?php

  //  answers

$question_1 = $_POST['question1'];
$question_2 = $_POST['question2'];
$question_3 = $_POST['question3'];
$question_4 = $_POST['question4'];
$question_5 = $_POST['question5'];
$question_6 = $_POST['question6'];
$question_7 = $_POST['question7'];
$question_8 = $_POST['question8'];
$question_9 = $_POST['question9'];
$question_10 = $_POST['question10'];
$question_11 = $_POST['question11'];
$question_12 = $_POST['question12'];
$question_13 = $_POST['question13'];
$question_14 = $_POST['question14'];
$question_15 = $_POST['question15'];



// list of moods

$moodList = array ("bored","calm","excited","tense");

// gathering answers

$moodAnswers =  array($question_1,$question_2,$question_3,$question_4,$question_5,$question_6,$question_7,$question_8,$question_9,$question_10,$question_11,$question_12,$question_13,$question_14,$question_15);

// determining mood

$moodcounter = array(0,0,0,0);
for($i =0; $i < sizeof($moodList); $i++){
    for($k = 0 ; $k < sizeof($moodAnswers); $k++){

        if(strcmp($moodAnswers[$k],$moodList[$i])){
            $moodcounter[$i]=$moodcounter[$i] + 1;
        }

    }
}

$maxValue = max($moodcounter);
$index;
for ($i = 0; $i < sizeof ($moodList); $i++){
    if($maxValue == $moodcounter[$i]){
        $index = $i;
    }
}

$mood = $moodList[$index];





//////////////////////////// DATABASE CONNECTION /////////////////////////////////////

require_once('dbConnection.php');
require_once('gettingSongs.php');
require_once("arrayOfSongs.php");

?>
