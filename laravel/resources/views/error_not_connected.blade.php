 @extends('layout.Projet')
 @section('content')

<h1 style="color:red;">You are not connected</h1>
<a id="back_btn" href="{{url(route('auth'))}}">❮ Log in</a><br>

@endsection