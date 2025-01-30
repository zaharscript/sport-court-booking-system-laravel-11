<h1>Make a Booking</h1>
<form method="POST" action="{{ route('bookings.store') }}">
    @csrf
    <label>Select Court:</label>
    <select name="court_id">
        @foreach ($courts as $court)
            <option value="{{ $court->id }}">{{ $court->name }}</option>
        @endforeach
    </select>
    <label>Date:</label>
    <input type="date" name="date" required>
    <label>Start Time:</label>
    <input type="time" name="start_time" required>
    <label>End Time:</label>
    <input type="time" name="end_time" required>
    <button type="submit">Book Now</button>
</form>
