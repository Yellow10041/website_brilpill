@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="login_container">
    <form class="login_container_inner" action="{{ route('admin-login') }}" method="post">
        @csrf
        <div class="login_container_inner_title">LOGIN!</div>

        <div class="login_container_inner_input_container">
            <label for="">name</label>
            <input class="login_container_inner_input" name="login" type="text">
        </div>
        <div class="login_container_inner_input_container">
            <label class="login_container_inner_label" for="">password</label>
            <input class="login_container_inner_input" name="password" type="password">
        </div>

        <div class="login_container_inner_button_container">
            <button class="login_container_inner_button" type="submit">enter</button>
        </div>
    </form>
</div>

@stop