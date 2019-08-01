@extends('layout')
           {{--  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
        @section('content')
            <div class="content has-text-centered is-horizontal">
                <div class="title m-b-md">
                    SheiDeal Vendors
                </div>

                @if(Route::has('login'))
                    @auth
                        <div class="links">
                            <a class="button is-link is-outlined" href="/reports">Sells Report</a>
                            <a class="button is-link is-outlined" href="/contact">Your Suggession</a>
                        </div>
                    @else
                        <div class="links">
                            <a class="button is-link is-outlined" href="{{route('login')}}">Login</a>
                        </div>
                    @endauth
                @endif
            </div>
        @endsection