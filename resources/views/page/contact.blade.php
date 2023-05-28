@extends('Layout.app')

@section('title',"Contact us");
@section('description', 'this is homepage Description')
@section('keyowrds','comma, separated, list, of, relevant, keywords')

@section('content')

@include('component.contactform')
    
@endsection