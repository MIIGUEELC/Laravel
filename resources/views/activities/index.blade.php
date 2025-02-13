<!-- resources/views/activities/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
</head>
<body>
    <h1>Lista de Actividades</h1>

    @if($activities->isEmpty())
        <p>No hay actividades disponibles.</p>
    @else
        <ul>
            @foreach($activities as $activity)
                <li>{{ $activity->type }} - {{ $activity->datetime }} - 
                    <a href="{{ route('activities.show', $activity->id) }}">Ver detalles</a> |
                    <a href="{{ route('activities.edit', $activity->id) }}">Editar</a> |
                    <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('activities.create') }}">Crear nueva actividad</a>
</body>
</html>
