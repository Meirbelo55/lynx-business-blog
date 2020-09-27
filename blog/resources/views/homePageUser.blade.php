@extends('main')
<form method="POST" action="addData">
    @csrf
    <div>
    welcome {{$user}}
    <label>Ecrivez  nous !!</label>
    </div>
    <textarea name="content" id="" cols="30" rows="10" placeholder="inserez votre message"></textarea>
        <div>
            <button class="btn btn-primary">Poster</button>
            <button class="btn btn-warning">Modifier mon post</button>
            <button class="btn btn-danger">Supprimer mon post</button>
        </div>
    @error('email', 'login')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</form>
<body>
