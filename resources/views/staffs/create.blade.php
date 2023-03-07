@extends('layout')

@section('create_staff')
    <div class="container" style="padding-top: 100px">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Staff</h2>
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
        <form action="{{ route('staff.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control mt-2" placeholder="Name">
                        @error('name')
                            <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                    <div class="form-group">
                        <strong>Age:</strong>
                        <input type="text" name="age" class="form-control mt-2" placeholder="Age">
                        @error('age')
                            <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                    <div class="form-group">
                        <strong>Gender</strong>
                        <select class="form-select mt-2" name="gender" aria-label="Default select example">
                            <option disabled selected>Open this select gender</option>
                            <option value="Male">male</option>
                            <option value="Female">female</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4 pt-4">
                    <div class="form-group">
                        <strong>Position</strong>
                        <select class="form-select mt-2" name="position_id" aria-label="Default select example">
                            <option disabled selected>Open this select position</option>
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->name }}</option>
                            @endforeach
                        </select>
                        @error('position_id')
                            <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                    <div class="form-group">
                        <strong>Department</strong>
                        <select class="form-select mt-2" name="department_id" aria-label="Default select example">
                            <option disabled selected >Open this select department</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        @error('department_id')
                            <div class="alert alert-danger ">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
        </form>
    </div>
@endsection
