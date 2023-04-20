
@extends('layouts.layout')

@section('content')
    <h1 class="text-center">Edit PAY Enteries</h1>
    
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">

                <form action="{{ route('personnel.update',$data->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('admin.editfields')

                </form>

            </div>
        </div>
    </div>
    </div>
@endsection