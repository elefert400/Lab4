<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$Q1 = $_POST["Question1"];
$Q2 = $_POST["Question2"];
$Q3 = $_POST["Question3"];
$Q4 = $_POST["Question4"];
$Q5 = $_POST["Question5"];

echo "Question 1: What is 2 + 2?" . "<br>";
echo "Your Answer: " . $Q1 . "<br>";
echo "Correct Answer: 4" . "<br>";

echo "Question 2: Is a mouse small?" . "<br>";
echo "Your Answer: " . $Q2 . "<br>";
echo "Correct Answer: yes" . "<br>";

echo "Question 3: What color is purple?" . "<br>";
echo "Your Answer: " . $Q3 . "<br>";
echo "Correct Answer: purple" . "<br>";

echo "Question 4: What year is it?" . "<br>";
echo "Your Answer: " . $Q4 . "<br>";
echo "Correct Answer: 2018" . "<br>";

echo "Question 5: What is doggo's favorite website?" . "<br>";
echo "Your Answer: " . $Q5 . "<br>";
echo "Correct Answer: Reddit" . "<br>";

$answers = 0;

if($Q1 == "4")
{
    $answers = $answers + 1;
}
if($Q2 == "yes")
{
    $answers = $answers + 1;
}
if($Q3 == "purple")
{
    $answers = $answers + 1;
}
if($Q4 == "2018")
{
    $answers = $answers + 1;
}
if($Q5 == "Reddit")
{
    $answers = $answers + 1;
}
$grade = $answers / 5;
$grade = $grade * 100;
echo "You got " . $answers . " out of 5. Your grade is: " . "<br>";
echo $grade .  "%";
?>