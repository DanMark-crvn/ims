<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
</head>
<body>
    <h1>Department List</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>DeptList</th>
            </tr>
            @foreach($department as $department)
                <tr>
                    <td>{{$department->id}}</td>
                    <td>{{$department->dept_list}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>