@extends('layout')

@section('edit_staff')
    <div class="container" style="padding-top: 100px">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Staff</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="/das" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Name</strong>
                        <input type="text" name="name" value="{{ $staff->name }}" class="form-control"
                            placeholder="staff name">
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Age:</strong>
                        <input type="text" name="age" class="form-control" placeholder="staff Email"
                            value="{{ $staff->age }}">
                        @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
                    <div class="form-group">
                        <strong>Gender</strong>
                        <<select class="form-select mt-2" name="gender" aria-label="Default select example">
                            <option disabled selected>{{ $staff->gender }}</option>
                            <option value="Male">male</option>
                            <option value="Female">female</option>
                            </select>
                            @error('address')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4 pt-4">
                    <div class="form-group">
                        <strong>Position</strong>
                        <select class="form-select mt-2" name="position_id" aria-label="Default select example">
                            <option disabled selected value="{{ $staff->position_id }}">{{ $staff->position->name }}
                            </option>
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->name }}</option>
                            @endforeach
                        </select>
                        @error('address')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 pt-4">
                    <div class="form-group">
                        <strong>Department</strong>
                        <select class="form-select mt-2" name="department_id" aria-label="Default select example">
                            <option disabled selected value="{{ $staff->department_id }}">{{ $staff->department->name }}
                            </option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        @error('address')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Update</button>
            </div>
        </form>
    </div>
@endsection
