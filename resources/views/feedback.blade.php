@extends ('layouts.app')

@section('title', 'feedback')

@section('content')
<style>
  body {
        background-color: #008000;
        color: #ffffff;
    }
</style>

<h3>FEEDBACK</h3>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
<form action="/feedback" method="post">
    @csrf

    <label for="name">name</label><br>
    <input type="text" name="name" value="{{ old('name') }}"><br>

    <label for="feedback">feedback</label></br>
    <textarea name="feedback" id="feedback" >{{ old('feedback') }}</textarea> </br>
    
    <button submit>submit</button>
</form>


@endsection