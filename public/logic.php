<?php

//Sets the max possible number of users and paragraphs one can generate
$maxSize=99;
$minSize=0;

//Initialize the $_POST array
foreach($_POST as $key => $value) {
    $key='';
}

$_POST = array(
  "numberOfParagraphs" => 0,
    "users" => 0,
    "birthday" => 0,
    "profile" => 0,
);

$paragraphs='';

$randomGenerator = Faker\Factory::create();

// generate data by accessing properties
echo $randomGenerator->name;
// 'Lucy Cechtelar';
echo $randomGenerator->address;
// "426 Jordy Lodge
// Cartwrightshire, SC 88120-6700"
echo $randomGenerator->text;

if($_POST['numberOfParagraphs']<=$maxSize && $_POST['numberOfParagraphs']>$minSize)
{
    for($i = 0; $i < $_POST['numberOfParagraphs']; $i++)
    {
                $paragraphs .= $randomGenerator->text;
    }
}
else
{
    $password= "Please enter a # of paragraphs from 1 to 99 above";
}

if($_POST['birthday']=='allLowercase')
{
    $password=strtolower($password);
}
if($_POST['profile']=='allUppercase')
{
    $password=strtoupper($password);
}
?>