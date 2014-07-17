@extends('_master')

@section('title')
	|:
@stop

@section('content')

<div class="index-content">


    <div class="content-400">
	   <h2 class='title green'>Lorem Ipsum</h2>
        <div class="centeredtext"><label for="number_of_paragraphs">number of paragraphs</label></div>
        <div class="centeredtext top-margin"><input type="text" name="number_of_paragraphs" id="number_of_paragraphs" class="inputbox" maxlength="3"></div>
        <div class="centeredtext top-margin"><input type="submit" class="button" value="Generate Lipsum" onclick="location.href='/lipsum/'+document.getElementById('number_of_paragraphs').value;"></div>
    </div>

    <div class="content-400 left-margin">
	   <h2 class='title green'>Randomly Generated User</h2>
        <div class="centeredtext"><label for="users">number of users</label></div>
        <div class="centeredtext top-margin"><input type="text" name="users" id="users" class="inputbox" maxlength="3"></div>
        <div class="centeredtext top-margin"><input type="submit" class="button" value="Generate Users" onclick="location.href='/newuser/'+document.getElementById('users').value;"></div>
    </div>

</div>

@stop