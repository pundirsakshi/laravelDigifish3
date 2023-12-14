<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="/update/{{$customers->id}}" method="POST">
        @csrf
        @method("PUT")
        name:<input name="name" type="text" placeholder=" name" value="{{old('name', $customers->name)}}">
        gender:<input name="gender" type="text" placeholder="gender" value="{{old('gender', $customers->gender)}}">
        address:<input name="address"type="text" placeholder="address" value="{{old('address', $customers->address)}}">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>