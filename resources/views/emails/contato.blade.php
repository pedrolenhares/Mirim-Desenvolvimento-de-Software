@if (!empty($dados) && is_array($dados))
@foreach ($dados as $campo => $valor)
<p><strong>{{ ucfirst($campo) }}:</strong> {{ $valor }}</p>
@endforeach
@else
<p>Dados inválidos ou não recebidos.</p>
@endif