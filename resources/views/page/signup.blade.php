@extends('Layout.app')

@section('title',"Register new user!");
@section('description', 'this is homepage Description')
@section('keyowrds','comma, separated, list, of, relevant, keywords')

@section('content')

@include('component.signupform')
    
@endsection