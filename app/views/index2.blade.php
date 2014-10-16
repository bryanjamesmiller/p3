<!DOCTYPE html>
<html>
<head>
    <title>Developer's Best Friend</title>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" type="text/css">
    <?php  require 'logic.php'; ?>
</head>
<body>
<h1>
    A Developer's Wonderful Friend!
</h1>
<h2>
    Placeholder Text Paragraph Generator:
</h2>
<div class="sideColumns">
    <ol>
        <li>
            Select how many paragraphs you would like to be generated (the maximum allowed is 99 paragraphs).
        </li>
        <li>
            Click "Generate Text" and you will receive your text.
        </li>
    </ol>
    <form method='POST' action='index.blade.php'>
        <p class="inputHeaders"> How many paragraphs would you like? (Maximum: 99)</p>
        <input type="text" name="numberOfParagraphs"><br>
        <input type='submit' value='Generate Text' id="generateTextButton"><br>
    </form>
    <p>Here are your paragraphs:</p>

    <p>Here are your Users:</p>

</div>

<div id="bottom">

    <img src='{{URL::asset('/images/Users.png')}}' alt='Users image' />
</div>
</body>
</html>
