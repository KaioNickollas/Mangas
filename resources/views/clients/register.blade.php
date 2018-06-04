@extends('layouts.app')
@section('title', 'Register')
@section('content')
    <form action="{{ route('client.store') }}" method="post">
        {{ csrf_field() }}
        <div class="input-field">
            <i class="material-icons prefix">person_outline</i>
            <input type="text" name="name" class="icon_prefix">
            <label> User Name </label>
        </div>
        <div class="input-field">
            <i class="material-icons prefix">mail_outline</i>
            <input type="email" name="email" class="icon_prefix">
            <label> Email Address </label>
        </div>
        <div class="input-field">
            <i class="material-icons prefix">lock_outline</i>
            <input type="password" name="password" class="icon_prefix">
            <label>Password</label>
        </div>
        <div class="input-field">
            <button class="btn waves-effect waves-light" type="submit" style="float: right;">Register</button>
        </div>
    </form>
@endsection
    
