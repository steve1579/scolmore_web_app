@extends('layouts.app')

@section('content')

    @component('components.login_form')
        @slot('heading')
            Login
        @endslot
    @endcomponent

@endsection