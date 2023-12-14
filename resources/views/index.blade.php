<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:2px solid black;
            border-collapse:collapse;
        }
        th{
            border:3px solid black;
        }
        td{
            border:2px solid black;
        }
    </style>
</head>
<body>
    <h1>CRUD|Fetch Data from Database</h1>
    <a href="add">add</a>
    <a href="auth">auth</a>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>gender</th>
            <th>address</th>
        </tr>
        @foreach($customers as $e)
        <tr>
          <td>{{$e['id']}}</td>
          <td>{{$e['name']}}</td>
          <td>{{$e['gender']}}</td>
          <td>{{$e['address']}}</td>
          <td>
            <a href="edit/{{ $e['id'] }}">Edit</a>
        </td>
          <td>
            <form action="delete/{{ $e['id'] }}" method="POST">
                @csrf
                @method('DELETE')
          <button type="submit">delete</button></td>
          </form>
        </tr>
        @endforeach
    </table>
    
</body>
</html>

Customer::where('id',$id)->update(['name'=>$req->name,'gender'=>$req->gender,'address'=>$req->address]);
              return redirect('data');