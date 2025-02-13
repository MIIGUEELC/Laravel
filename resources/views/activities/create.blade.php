<!-- resources/views/activities/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Actividad</title>
</head>
<body>
    <h1>Crear Nueva Actividad</h1>

    <form action="{{ route('activities.store') }}" method="POST">
        @csrf
        <label for="type">Tipo de actividad:</label>
        <input type="text" id="type" name="type" required><br><br>

        <label for="datetime">Fecha y hora:</label>
        <input type="datetime-local" id="datetime" name="datetime" required><br><br>

        <label for="paid">Pagado:</label>
        <input type="checkbox" id="paid" name="paid"><br><br>

        <label for="notes">Notas:</label>
        <textarea id="notes" name="notes"></textarea><br><br>

        <label for="satisfaction">Satisfacción (1 a 5):</label>
        <input type="number" id="satisfaction" name="satisfaction" min="1" max="5"><br><br>

        <button type="submit">Crear actividad</button>
    </form>

    <a href="{{ route('activities.index') }}">Volver a la lista de actividades</a>
</body>
</html>
