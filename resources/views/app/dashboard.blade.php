@extends('layouts.panel')
@section('pagename', 'Dashboard')

@section('content')
    <div class="container border-bottom">
        {{ auth()->user()->firstname }}
    </div>
@endsection
