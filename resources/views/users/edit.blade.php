<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('users.update', $user->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label for="">Apellido</label>
                    <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}">
                </div>

                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" class="form-control" name="email" value="{{$user->email}}">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Actualizar</button>
                    <a href="{{url('users')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
