@extends('adminlte::page')

@section('title', 'SCGPCPT')

@section('content_header')

<div class="content">
    
    <div class="list-group-item">

        <h1>Dashboard</h1>
        
        @include('pages.home')
        
</div>

@stop

@section('content')
    <p>You are logged in!</p>
@stop