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
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <td><b>NOMBRE</b></td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <td><b>APELLIDO</b></td>
                    <td>{{$user->lastname}}</td>
                </tr>
                <tr>
                    <td><b>CORREO</b></td>
                    <td>{{$user->email}}</td>
                </tr>
            </table>
            <hr>
            <a href="{{url('users')}}" class="btn btn-primary">Inicio</a>
        </div>
    </div>
</div>
</body>
</html>
