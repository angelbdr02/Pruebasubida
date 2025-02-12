<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informe de la Muestra {{ $muestra->codigo }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Informe de la Muestra #{{ $muestra->codigo }}</h1>
    <p><strong>Fecha:</strong> {{ $muestra->fecha }}</p>
    <p><strong>Órgano:</strong> {{ $muestra->organo ?? 'N/A' }}</p>
    <p><strong>Descripción de Calidad:</strong> {{ $muestra->descripcion_calidad }}</p>

    <h2>Detalles Adicionales</h2>
    <table>
        <tr>
            <th>Calidad</th>
            <td>{{ $muestra->Calidad->nombre ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Tipo de Naturaleza</th>
            <td>{{ $muestra->Tipo_naturaleza->nombre ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Formato</th>
            <td>{{ $muestra->Formato->nombre ?? 'N/A' }}</td>
        </tr>
    </table>
</body>
</html>
