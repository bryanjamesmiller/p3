<?php

//Sets the max possible number of users and paragraphs one can generate
$maxSize=99;
$minSize=0;

//Initialize the $_POST array
foreach($_POST as $key => $value) {
    $key='';
}

$paragraphs='';
$users='';

$randomGenerator = Faker\Factory::create();

if($_POST['numberOfParagraphs'] <= $maxSize && $_POST['numberOfParagraphs'] > $minSize)
{
    $paragraphs .= "<p class='middle'>Here are your paragraphs:</p>";
    for($i = 0; $i < $_POST['numberOfParagraphs']; $i++)
    {
        $paragraphs .= "<p class='output'>" . $randomGenerator->text . "</p>";
    }
}
else
{
    $paragraphs = "<p>Enter a # of paragraphs from 1 to 99 above<p>";
}

if($_POST['numberOfUsers'] <= $maxSize && $_POST['numberOfUsers'] > $minSize)
{
    $users .= "<p class='middle'>Here are your Users:</p>";
    for($i = 0; $i < $_POST['numberOfUsers']; $i++)
    {
        $users .= "<p class='output'>" . $randomGenerator->name . "<br>";
        if($_POST['email'] == 'true')
        {
           $users .= $randomGenerator->email . "<br>";
        }
        if($_POST['address'] == 'true')
        {
            $users .= $randomGenerator->address;
        }
        $users .= "</p>";
    }
}
else
{
    $users = "<p>Please only enter a # of Users from 1 to 99 above<p>";
}

?>