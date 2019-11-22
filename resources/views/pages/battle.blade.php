@extends('layouts.app')

@section('content')
    <div class="text-center text-white">
        <h3>Upload Tests</h3>
        <form action="/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="file" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control">
            </div>
        
        </form>
    </div>


@endsection