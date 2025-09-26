@extends('layouts.app')

@section('title','FAQ' )

@section('content')
<h3>FREQUENTLY ASKED QUESTION</h3>
<p>Question:{{ $question }}</p>
<p>Answer:{{ $answer }}</p>


@endsection