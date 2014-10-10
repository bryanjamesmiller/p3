<!DOCTYPE html>
<html>
<head>
    <title>Developer's Best Friend</title>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <?php require 'logic.php'; ?>
</head>
<body>
<h1>
    A Developer's Best Friend!
</h1>
<h2>
    Lorem Ipsum Generator:
</h2>
<div class="sideColumns">
    <ol>
        <li>
            Select how many words you would like in your password (maximum size is 9 words)
        </li>
        <li>
            Select if you would like to include a symbol
        </li>
        <li>
            Click "Submit" and you will receive your password!
        </li>
    </ol>

    <h2>
        Random User Generator:
    </h2>
    <ol>
        <li>
            Select how many words you would like in your password (maximum size is 9 words)
        </li>
        <li>
            Select if you would like to include a symbol
        </li>
        <li>
            Click "Submit" and you will receive your password!
        </li>
    </ol>

    <form method='POST' action='index.php'>
        <p class="radioHeaders"> How many paragraphs would you like? </p>
        <input type='generateText' value='Generate Text' id="generateText"><br>
        <input type="text" name="numberOfWords"><br>
        <input type="checkbox" name="symbol" value="true" id="symbol"><label for="symbol">Would you like to include a symbol in your password?</label><br>
        <input type="checkbox" name="number" value="true" id="number"><label for="number">Would you like to include a number in your password?</label><br>
        <p class="radioHeaders"> Choose one option for your spacing: </p>
        <input type="radio" name="separatorOptions" value="noSeparator" id="noSeparator" checked><label for="noSeparator">No Separators</label><br/>
        <input type="radio" name="separatorOptions" value="spaces" id="spaces"><label for="spaces">Spaces</label><br/>
        <input type="radio" name="separatorOptions" value="underscores" id="underscores"><label for="underscores">Underscores</label><br/>
        <input type="radio" name="separatorOptions" value="hyphens" id="hyphens"><label for="hyphens">Hyphens</label>
        <p class="radioHeaders"> Choose one option for your capitalization: </p>
        <input type="radio" name="capOptions" value="initialCaps" checked id="initialCaps"><label for="initialCaps">Initial Caps</label><br/>
        <input type="radio" name="capOptions" value="allLowercase" id="allLowercase"><label for="allLowercase">Lower Case</label><br/>
        <input type="radio" name="capOptions" value="allUppercase" id="allUppercase"><label for="allUppercase">Upper Case</label><br/>
        <p class="radioHeaders">Click to receive your new password: </p>
        <input type='submit' value='Submit' id="submit"><br>
    </form>

    <p>Here is your new password:</p>
</div>

<div id="passwordOutput"><?php echo $password; ?></div>

<div id="bottom">
    <img src="images/passphrase-cartoon.PNG" alt="Cartoon from lecture" />
</div>
</body>
</html>
