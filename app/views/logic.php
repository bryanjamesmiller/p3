<?php
$password_word_options = Array(
    'Maple',
    'Purple',
    'Spurs',
    'Prince',
    'Coconut',
    'Jamaica',
    'Disney',
    'Seal',
    'Hunchback',
    'Cactus',
    'Chess',
    'Soccer',
    'Baby',
    'Dog',
    'Porcupine',
    'Checkers',
    'Cheese',
    'Swiss',
    'German',
    'French',
    'Banana',
    'Fire',
    'Water',
    'Blue',
    'Duck',
    'Cup',
    'Frisbee',
    'Gators',
    'Moo',
    'Oatmeal',
    'Tigers',
    'Quack'
);

$password_symbol_options = Array(
    '!',
    '@',
    '#',
    '$',
    '%',
    '^',
    '&',
    '*'
);

$password_number_options = Array(
    '0',
    '1',
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9'
);

//Sets the max possible number of words to include in one's password
$maxSize=9;
$minSize=0;

//Initialize the $_POST array
foreach($_POST as $key => $value) {
    $key='';
}

$password='';
if($_POST['numberOfUsers']<=$maxSize && $_POST['numberOfUsers']>$minSize)
{
    for($i=0; $i<$_POST['numberOfUsers']; $i++)
    {
        $arrayIndex=array_rand($password_word_options);
        $password.=$password_word_options[$arrayIndex];
        if($i != $_POST['numberOfUsers']-1)
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

if($_POST['capOptions']=='allLowercase')
{
    $password=strtolower($password);
}
if($_POST['capOptions']=='allUppercase')
{
    $password=strtoupper($password);
}
?>