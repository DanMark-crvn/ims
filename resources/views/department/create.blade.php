<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE DEPARTMENT</title>
</head>
<body>
    <h1>Create a Department</h1>
    <form method="POST" action="{{route('department.list')}}">
        @csrf
        @method('post')
        <div>
            <label>Department Name: </label>
            <input type="text" name="dept_list" placeholder="Enter a department" />
        </div>
        <div>
            <input type="submit" value="Save" />
        </div>
    </form>
</body>
</html>