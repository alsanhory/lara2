@extends('layouts.main2')
@section('title',$title)

@section('content')
    <h2>Contacts</h2>
    <p>Name: Elrayah Ali Alsanhory</p>
    <p>Phone: +249917789868</p>
    <p>Facebook: fb.com/elrayahali</p>
    @isset($name)
    {{$name}}
    @endisset
@endsection