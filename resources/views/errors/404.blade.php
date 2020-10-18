@extends('auth.layouts.base')

@section('page-content')
    <style>
        .card-center {
            position: relative;
            top: 30%;
            width: 100vw;
            max-width: 400px;
        }

    </style>

    <div class="page-content header-clear-medium">
        <div data-card-height="cover" class="card">
            <div class="card-center text-center">
                {{-- <i class="fa fa-cog fa-spin fa-9x color-highlight mb-5"></i>
                --}}
                <img src="{{ asset('assets/images/search.gif') }}" class="mb-5"/>
                <h1>Oops! You're lost....</h1>
                <p class="boxed-text-l">
                    The page you are looking for was not found.
                </p>
            </div>
        </div>
    @endsection
