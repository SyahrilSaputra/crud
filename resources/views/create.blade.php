<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <br>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label for="name">name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="address">address:</label><br>
        <input type="text" id="address" name="address"><br>
        <label for="website">website:</label><br>
        <input type="text" id="website" name="website"><br>
        <label for="email">email:</label><br>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>