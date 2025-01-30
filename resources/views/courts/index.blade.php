<h1>Available Courts</h1>
@foreach ($courts as $court)
    <p>{{ $court->name }} ({{ $court->type }}) - RM {{ $court->price_per_hour }} per hour</p>
@endforeach
