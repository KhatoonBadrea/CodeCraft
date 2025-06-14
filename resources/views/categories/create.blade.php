<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> create new category </h1>
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <label for="name">category name :</label>
        <input type="text" name='name'><br><br>

        <input type="submit" value='submit'>
    </form>
</body>
</html>