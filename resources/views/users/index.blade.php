<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <a href="{{url('users/create')}}" class="btn btn-primary mb-3">Añadir usuario</a>
            @if (session('success'))
                    <div class="alert alert-success mt-3" role="success" >
                      {{ session('success') }}
                    </div>
                    @endif
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>CORREO</th>
                            <th>FECHA CREACION</th>
                            <th>FECHA ACTUALIZACION</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td><a href="users/{{$user->id}}">{{$user->id}}</a></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>
                                <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="users/{{$user->id}}"><i class="fas fa-eye" title="Ver detalles"></i></a>
                                    <a href=""><i class="fas fa-edit" title="Editar"></i></a>
                                    <button type="submit" title="Eliminar">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            {{$users->links()}}
        </div>
    </div>
</div>
</body>
</html>
