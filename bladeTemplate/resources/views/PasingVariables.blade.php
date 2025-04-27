<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users List</title>
    <style>
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">User Details</h2>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>City</th>
            <th>Phone</th>
            <th>Show Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $id => $user) {{-- Change the variable order --}}
        <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['city'] }}</td>
            <td>{{ $user['phone'] }}</td>
            <td><a href="{{ route('view.user', ['id' => $id]) }}">Show</a></td> {{-- Pass only the id --}}
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
