@extends('_myBladeTemplate')

@section('title')
Generate Paragraphs
@stop

@section('content')
<h1>Placeholder Paragraphs Text Generator</h1>
@stop

@section('body')
<div class="sideColumns">
    <ol>
        <li>
            Select how many paragraphs you would like to be generated (the maximum allowed is 99 paragraphs).
        </li>
        <li>
            Click "Generate Text" and you will receive your text.
        </li>
    </ol>
    <form>// method='POST' action='index.php'>
        <p class="inputHeaders"> How many paragraphs would you like? (Maximum: 99)</p>
        <input type="text" name="numberOfParagraphs"><br>
        <input type='submit' value='Generate Text' id="generateTextButton"><br>
    </form>
    <div class="middle"><p>Here are your paragraphs:</p></div>
</div>
@stop