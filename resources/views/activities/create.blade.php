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
        
        <!-- Tipo de actividad -->
        <label for="type">Tipo de actividad:</label>
        <select id="type" name="type" required>
            <option value="surf">Surf</option>
            <option value="windsurf">Windsurf</option>
            <option value="kayak">Kayak</option>
            <option value="atv">ATV</option>
            <option value="hot air balloon">Globo Aerostático</option>
        </select><br><br>

        <!-- Campo de texto para 'user_id' -->
        <label for="user_id">ID del Usuario:</label>
        <input type="number" id="user_id" name="user_id" required><br><br>

        <!-- Fecha y hora -->
        <label for="datetime">Fecha y hora:</label>
        <input type="datetime-local" id="datetime" name="datetime" required><br><br>

        <!-- Pagado (checkbox) -->
        <label for="paid">Pagado:</label>
        <input type="checkbox" id="paid" name="paid"><br><br>

        <!-- Notas -->
        <label for="notes">Notas:</label>
        <textarea id="notes" name="notes"></textarea><br><br>

        <!-- Satisfacción -->
        <label for="satisfaction">Satisfacción (1 a 5):</label>
        <input type="number" id="satisfaction" name="satisfaction" min="1" max="5"><br><br>

        <button type="submit">Crear actividad</button>
    </form>

    <a href="{{ route('activities.index') }}">Volver a actividades</a>
</body>
</html>
