@extends('layouts.layout')

@section('content')
    <h1 class="text-center">PAY Enteries</h1>

    <div class="box box-primary">
        <div class="box-body">
            <div class="row">

                <form action="{{ route('personnel.store') }}" method="post">
                    @csrf
                    @include('admin.fields')

                </form>

            </div>
        </div>
    </div>
    </div>
@endsection
