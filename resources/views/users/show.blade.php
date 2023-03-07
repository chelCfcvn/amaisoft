@extends('layout')

@section('list_user')
    <div class="home-content">
        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="title">List Staff</div>
                    <a class="btn btn-success" href="{{route('user.create.form')}}">Create</a>
                <div class="sales-details">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Select</th>
                                <th class="column2"> Staff Name </th>
                                <th class="column3">Email</th>
                                <th class="column5">Role</th>
                                <th class="column6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="column1">
                                        <input type="checkbox">
                                    </td>
                                    <td class="column2">{{ $user->staff->name }}</td>
                                    <td class="column3">{{ $user->email }}</td>
                                    <td class="column5">{{ $user->role->name }}</td>
                                    <td class="column6">
                                        <a class="btn btn-primary "
                                            href="{{ route('user.update.form',$user->id) }}">Reset Password</a>
                                        <form action="{{ route('user.delete', $user->id)  }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Bạn có muốn xóa tài khoản của {{$user->staff->name}} ra khỏi danh sách không?');" class="btn btn-danger">Delete</button>
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
