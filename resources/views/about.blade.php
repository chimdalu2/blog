@extends('layouts.app')

@section('title','about')

@section('content')
<h2>ABOUT PAGE</h2>
<p>Name:{{ $name }}</p>
<p>occupation:{{ $occupation }}</p>

@endsection