<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classification</title>
</head>
<body>
    <h1>Classifications</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            @foreach ($classifications as $classification )
                <tr>
                    <td>{{$classification->id}}</td>
                    <td>{{$classification->name}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
