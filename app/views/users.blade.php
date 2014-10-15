@extends('_myBladeTemplate')

@section('title')
Generate Users
@stop

@section('content')
<div id="top">
    <h1>Random User Generator</h1>
</div>
@stop

@section('body')
<ol>
    <li>
        Select how many Users you would like to be generated (the maximum allowed is 99 Users).
    </li>
    <li>
        Click "Generate Users" and you will receive your list.
    </li>
</ol>
<form>// method='POST' action='index.php'>
    <p class="middle"> How many users would you like? (Maximum: 99)</p>
    <input type="text" name="numberOfUsers"><br>
    <input type="checkbox" name="birthday" value="true" id="birthday"><label for="birthday">Would you like to include a birthday?</label><br>
    <input type="checkbox" name="profile" value="true" id="profile"><label for="profile">Would you like to include a profile?</label><br>
    <input type='submit' value='Generate Users' id="generateUsersButton"><br>
</form>

<p class="middle">Here are your Users:</p>

</div>

<div id="bottom">
    <img src='{{URL::asset('/images/Users.png')}}' alt='Users image' />
</div>
@stop