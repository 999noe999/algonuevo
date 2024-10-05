<!-- resources/views/doctores/edit.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Doctor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Doctor</h1>

        <form action="{{ route('doctores.update', $doctor->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{ $doctor->nombre }}" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" class="form-control" name="correo" value="{{ $doctor->correo }}" required>
            </div>

            <div class="form-group">
                <label for="especialidadesId">Especialidad:</label>
                <select name="especialidadesId" class="form-control" required>
                    @foreach ($especialidades as $especialidad)
                        <option value="{{ $especialidad->id }}" {{ $especialidad->id == $doctor->especialidadesId ? 'selected' : '' }}>
                            {{ $especialidad->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-warning">Actualizar</button>
        </form>

        <a href="{{ route('doctores.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>
