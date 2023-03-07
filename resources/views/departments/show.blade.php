@extends('layout')

@section('list_department')
    <div class="home-content">
        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="title">List Department</div>
                    <a class="btn btn-success" href="{{ route('department.create.form') }}">Create</a>
                <div class="sales-details">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">ID</th>
                                <th class="column2">Name</th>
                                <th class="column6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $department)
                                <tr>
                                    <td class="column1">{{ $department->id }}</td>
                                    <td class="column2">{{ $department->name }}</td>
                                    <td class="column6">
                                        <a class="btn btn-primary "
                                            href="{{route('department.update.form',$department)}}">Edit</a>
                                        <form action="{{route('department.delete',$department->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Bạn có muốn xóa {{$department->name}} ra khỏi danh sách phòng ban không?');" class="btn btn-danger">Delete</button>
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
