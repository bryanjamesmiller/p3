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

if($_POST['numberOfParagraphs']<=$maxSize && $_POST['numberOfParagraphs']>$minSize)
{
    for($i=0; $i<$_POST['numberOfParagraphs']; $i++)
    {
        $arrayIndex=array_rand($password_word_options);
        $password.=$password_word_options[$arrayIndex];
        if($i != $_POST['numberOfWords']-1)
        {
            if($_POST['separatorOptions']=='spaces')
            {
                $password.=' ';
            }
            if($_POST['separatorOptions']=='hyphens')
            {
                $password.='-';
            }
            if($_POST['separatorOptions']=='underscores')
            {
                $password.='_';
            }
        }
    }
    if($_POST["symbol"]=='true')
    {
        $arrayIndex=array_rand($password_symbol_options);
        $password.=$password_symbol_options[$arrayIndex];
    }
    if($_POST["number"]=='true')
    {
        $arrayIndex=array_rand($password_number_options);
        $password.=$password_number_options[$arrayIndex];
    }

}
else
{
    $password= "Please enter a # of words from 1 to 9 above";
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