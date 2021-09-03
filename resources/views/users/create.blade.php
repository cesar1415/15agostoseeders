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
            <form action="{{route('users.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="">Apellido</label>
                    <input type="text" class="form-control" name="lastname">
                </div>

                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="">Celular</label>
                    <input type="number" class="form-control" name="phone">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Crear nuevo usuario</button>
                    <a href="{{url('users')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
