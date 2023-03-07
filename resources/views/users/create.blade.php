@extends('layout')

@section('create_user')
    <div class="container" style="padding-top: 100px">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add User</h2>
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
        <form action="{{ route('user.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <select class="form-select mt-2" name="staff_id" aria-label="Default select example">
                            <option disabled selected>Open this select position</option>
                            @foreach ($staffNoUsers as $staffNoUser)
                                <option value="{{ $staffNoUser->id }}">{{ $staffNoUser->name }}</option>
                            @endforeach
                        </select>
                        @error('name')
                            <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                    <div class="form-group">
                        <strong>Email</strong>
                        <input type="text" name="email" class="form-control mt-2" placeholder="Email">
                        @error('email')
                            <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                    <div class="form-group">
                        <strong>Password</strong>
                        <input type="password" name="password" class="form-control mt-2" placeholder="Password">
                        @error('email')
                            <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
        </form>
    </div>
@endsection
