@extends('layout')

@section('list_staff')
    <div class="home-content">
        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="title">List Staff</div>
                    <a class="btn btn-success" href="{{ route('staff.create.form') }}">Create</a>
                <div class="sales-details">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Name</th>
                                <th class="column2">Age</th>
                                <th class="column3">Gender</th>
                                <th class="column4">Position</th>
                                <th class="column5">Department</th>
                                <th class="column6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffs as $staff)
                                <tr>
                                    <td class="column1">{{ $staff->name }}</td>
                                    <td class="column2">{{ $staff->age }}</td>
                                    <td class="column3">{{ $staff->gender }}</td>
                                    <td class="column4">{{ $staff->position->name }}</td>
                                    <td class="column5">{{ $staff->department->name }}</td>
                                    <td class="column6">
                                        <a class="btn btn-primary "
                                            href="{{ route('staff.update.form',$staff->id) }}">Edit</a>
                                        <form action="{{ route('staff.delete', ['staff' => $staff->id ,'staff' => $staff]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Bạn có muốn xóa {{$staff->name}} ra khỏi danh sách nhân viên không?');" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
