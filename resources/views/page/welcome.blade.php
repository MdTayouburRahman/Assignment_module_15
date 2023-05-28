
{{-- Task 8: Blade Template Engine

Create a Blade view called welcome.blade.php that 
includes a navigation bar and a section displaying the text "Welcome to Laravel!". 

Answer - 8
--}}

@extends('Layout.app')

@section('title', 'Home Page')
@section('description', 'this is homepage Description')
@section('keyowrds','comma, separated, list, of, relevant, keywords')

@section('content')
   @include('component.welcomehero')
@endsection
