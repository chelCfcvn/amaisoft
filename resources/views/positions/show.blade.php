@extends('layout')

@section('list_position')
    <div class="home-content">
        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="title">List Position</div>
                    <a class="btn btn-success" href="{{ route('position.create.form') }}">Create</a>
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
                            @foreach ($positions as $position)
                                <tr>
                                    <td class="column1">{{ $position->id }}</td>
                                    <td class="column2">{{ $position->name }}</td>
                                    <td class="column6">
                                        <a class="btn btn-primary "
                                            href="{{route('position.update.form',$position)}}">Edit</a>
                                        <form action="{{route('position.delete',$position->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Bạn có muốn xóa {{$position->name }} ra khỏi danh sách chức vụ không?');" class="btn btn-danger">Delete</button>
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
