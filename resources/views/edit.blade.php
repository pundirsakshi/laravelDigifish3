<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <form action ="/update/{{$customers->id}}" method="POST"  class="p-5 border">
        @csrf
        @method("PUT")

        <h1 class=" p-3  mb-2 bg-secondary text-white">UPDATE DATA</h1>
        <div class="mb-3" class="col-auto">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" placeholder=" name" value="{{old('name', $customers->name)}}"  class="form-control">
        </div>

        <div class="mb-3" class="col-auto">
            <label for="name" class="form-label">Gender</label>
            <input name="gender" type="text" placeholder="gender" value="{{old('gender', $customers->gender)}}"  class="form-control">
        </div>

        <div class="mb-3" class="col-auto">
            <label for="name" class="form-label">Address</label>
            <input name="address"type="text" placeholder="address" value="{{old('address', $customers->address)}}"  class="form-control">
        </div>

        <button type="submit" class="btn btn-primary" class="col-auto">SUBMIT</button>
    </form>
</body>
</html>