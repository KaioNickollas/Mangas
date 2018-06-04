@extends('layouts.app')
@section('title', 'Edit')
@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <h3 class="col l4 offset-l4">Edit User</h3>
        </div>
    </div>
    <form action="{{ route('client.update', ['id' => $client->id]) }}" method="post">
        {{ csrf_field() }}
        <div class="input-field">
            <i class="material-icons prefix">person_outline</i>
            <input type="text" name="name" value=" {{ $client->name }} ">
            <label> User Name </label>
        </div>
        <div class="input-field">
            <i class="material-icons prefix">mail_outline</i>
            <input type="email" name="email" value=" {{ $client->email }} ">
            <label> Email Address </label>
        </div>
        <button type="submit" class="btn btn-waves" style="float: right;">Atualizar</button>
        <a href="">Change Password</a>
    </form>
@endsection
    
