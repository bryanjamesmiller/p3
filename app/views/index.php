<!DOCTYPE html>
<html>
<head>
    <title>Paragraph and User Generator</title>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" type="text/css">
    <?php require 'logic.php'; ?>
</head>
<body>
<h1 id="top">
    Paragraph and User Generator
</h1>
<div class="sideColumns">
    <form method='POST' action='index.php'>
        <p class="middle"> How many paragraphs would you like to generate? (Maximum: 99)</p>
        <input type="text" value="Enter # of paragraphs here" name="numberOfParagraphs"><br>
        <p class="middle"> How many users would you like to generate? (Maximum: 99)</p>
        <input type="text" value="Enter # of Users here" name="numberOfUsers"><br>
        <input type="checkbox" name="email" value="true" id="email"><label for="email">Would you like to include an email for your User?</label><br>
        <input type="checkbox" name="address" value="true" id="address"><label for="address">Would you like to include an address for your User?</label><br>
        <input type='submit' value='Generate!' id="generateTextButton"><br>
    </form>
    <p><?php echo $paragraphs; ?></p>
    <p><?php echo $users; ?></p>
</div>

<div id="bottom">
    <img src="images/Users.PNG" alt="Users logo">
</div>
</body>
</html>
