@extends('layout')

@section('list_reset')
    <div class="home-content">
        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="title">Reset Password</div>
                <div class="sales-details">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Select</th>
                                <th class="column2"> Staff Name </th>
                                <th class="column3">Email</th>
                                <th class="column5">Role</th>
                                <th class="column6"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="{{ route('users.reset') }}" method="post">
                                @csrf
                                <input type="submit" class="btn btn-primary" value=" Reset Password">
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="column1">
                                            <input type="checkbox" name="list[]" value="{{ $user->email }}">
                                        </td>
                                        <td class="column2">{{ $user->staff->name }}</td>
                                        <td class="column3">{{ $user->email }}</td>
                                        <td class="column5">{{ $user->role->name }}</td>
                                        <th class="column6"></th>
                                    </tr>
                                @endforeach
                                
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
