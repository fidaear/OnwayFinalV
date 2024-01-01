@extends('layouts.app')
@section('title','OnWay | Community ')
@section('links')
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

@endsection
@section('content')

    <div class="container mt-9">
        <div class="content">
            <div class="row d-flex justify-content-between mt-5">
                <x-community.mycontact /> 
                <x-community.communitypost />
                <x-community.sidebar />
            </div>
        </div>
    </div>


@endsection
