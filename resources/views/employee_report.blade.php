<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
     <h1>Employee Report</h1>
     <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Attendance</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>
                    <ul>
                        @foreach($employee->attendances as $attendance)
                            <li>{{ $attendance->attendance_date }} {{ $attendance->status }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>

</body>
</html>