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
    <div class="p-3  mb-2 bg-secondary text-white " style="display:flex !important;">
        <h1 >CRUD|Fetch Data from Database</h1>
        <a href="add" class="btn btn-success p-2 " style="margin-left:20rem !important; height: 4rem;width:10rem; text-align:center;font-size:30px;">ADD</a>
    </div>
    <!-- <a href="auth">auth</a> -->

    <table  class="table table-striped">
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">gender</th>
            <th scope="col">address</th>
            <th scope="col">Action</th>
            <th>Delete</th>
            
        </tr>
        @foreach($customers as $e)
        <tr>
          <td>{{$e['id']}}</td>
          <td>{{$e['name']}}</td>
          <td>{{$e['gender']}}</td>
          <td>{{$e['address']}}</td>
          <td>
            <a href="edit/{{ $e['id'] }}" class="btn btn-primary">Edit</a>
        </td>
          <td>
            <form action="delete/{{ $e['id'] }}" method="POST">
                @csrf
                @method('DELETE')
          <button type="submit" class="btn btn-danger">delete</button></td>
          </form>
        </tr>
        @endforeach
    </table>
    
</body>
</html>

