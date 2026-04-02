@foreach ($dados as $campo => $valor)
    <p><strong>{{ ucfirst($campo) }}:</strong> {{ $valor }}</p>
@endforeach