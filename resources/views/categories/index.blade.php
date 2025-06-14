<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> All Category</h1>
    <a href={{route('categories.create')}}>create categories</a> <br><br>

    <table border="1">
        <tr>
            <th>index</th>
            <th>name</th>
            <th></th>
           
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$category->name}}</td>
            <td>
                <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
            </td>
            <td>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
</body>
</html>