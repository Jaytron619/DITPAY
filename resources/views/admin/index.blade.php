@extends('layouts.layout')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alertSuccess" role="alert">
            <h2>
                {{ $message }}
            </h2>
        </div>
    @elseif($message = Session::get('error'))
        <div class="alertDanger " role="alert">
            <h2>

                {{ $message }}
            </h2>
        </div>
    @endif

    <div class="mini-container">
        <h1 class="text-center">DIT PERSONNEL DETAILS</h1>
        <button class="btnadd">
            <a href="{{ route('personnel.create') }}" class="text-light">Add user</a>
        </button>

        <form action="{{ url('search') }}" method="get" class="search">
            @csrf
            <input class="btnsearch" type="search" name="search" placeholder="Search Something" value="{{  old('search') }}">
            <input class="btn" type="submit" value="search">
        </form>

        @include('admin.table')
    </div>
@endsection
