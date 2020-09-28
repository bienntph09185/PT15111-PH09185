<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Student</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Active</th>
            </thead>

            <tbody>
                @foreach($students as $student)
                <tr>
                    <th>{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>
                        @if($student->gender == 0)
                        Bê đuê
                        @elseif($student->gender == 1)
                        Đực
                        @else
                        Đũy
                        @endif
                    </td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->is_active == 0 ? 'No' : 'Yes'}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>