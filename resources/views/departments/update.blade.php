@extends('layout')

@section('update_department')
    <div class="container" style="padding-top: 100px">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Update Department</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href=""> Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('department.update',$department->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control mt-2" placeholder="Name" value="{{$department->name}}">
                        @error('name')
                            <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
        </form>
    </div>
@endsection
