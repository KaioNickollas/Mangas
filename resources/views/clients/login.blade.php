@extends('layouts.app')
@section('title', 'Register')
@section('content')
    <form action="{{ route('client.postLogin') }}" method="post">
        {{ csrf_field() }}
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
        <button type="submit" class="btn btn-waves" style="float: right;">Sing in</button>
    </form>
@endsection