@extends('layouts.app')

@section('content')


    <div class="row mt-4">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <!-- left side  -->
        <div class="col-md-6 mt-4">
            <vidshare></vidshare>

        </div>
        <div class="col-md-6 mt-4">
            <generalchat></generalchat>

        </div>


    </div>



@endsection