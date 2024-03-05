<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classification</title>
</head>
<body>
    <h1>New Classification</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors ->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="post" action="{{route('classifications.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="name">Classification Name: </label>
            <input type="text" name="name">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>
