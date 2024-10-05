<!-- resources/views/especialidades/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Especialidad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Agregar Especialidad</h1>

        <form action="{{ route('especialidades.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>

        <a href="{{ route('especialidades.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>
