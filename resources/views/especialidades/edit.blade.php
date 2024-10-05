<!-- resources/views/especialidades/edit.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Especialidad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Especialidad</h1>

        <form action="{{ route('especialidades.update', $especialidad->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{ $especialidad->nombre }}" required>
            </div>

            <button type="submit" class="btn btn-warning">Actualizar</button>
        </form>

        <a href="{{ route('especialidades.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>
