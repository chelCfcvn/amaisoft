@extends('manager.show')

@section('staffs')
    <div class="home-content">
        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="title">List Staff of You</div>
                <div class="sales-details">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">ID</th>
                                <th class="column2"> Staff Name </th>
                                <th class="column3">Age</th>
                                <th class="column4">Gender</th>
                                <th class="column5">Position</th>
                                <th class="column6">Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffs as $staff)
                                <tr>
                                    <td class="column1">{{ $staff->id }}</td>
                                    <td class="column2">{{ $staff->name }}</td>
                                    <td class="column3">{{ $staff->age }}</td>
                                    <td class="column4">{{ $staff->gender }}</td>
                                    <td class="column5">{{ $staff->position->name }}</td>
                                    <td class="column6">{{ $staff->department->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
