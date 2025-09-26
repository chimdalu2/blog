@extends('layouts.app')

@section('title','contact')

@section('content')
<h3>CONTACT US</h3>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
<form action="/contact" method="POST">
    @csrf

    <label for="name">full Name:</label></br>
    <input type="text" name="name" value="{{ old ('name') }}" ></br>

    <label for="message">Message:</label></br>
    <textarea name="message" id="message">{{ old ('message') }}</textarea> </br>

    <button type="submit">SEND</button>
</form>

@endsection