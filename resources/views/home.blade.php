@extends('template')

@section('content')
<div class="title m-b-md">
    Random Number Generator
</div>

<div class="links">
    <a href="{{ url( '/generate' ) }}">Generate</a>
</div>
@endsection