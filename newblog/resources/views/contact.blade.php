<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="contacts"method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text"name="name"class="form-controll">
            <div>{{$errors->first('name')}}</div>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</body>
</html>
