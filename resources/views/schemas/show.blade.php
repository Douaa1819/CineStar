<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/booking.css">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="theatre">
        @foreach(range(1, $schema->rows) as $row)
        <div class="cinema-seats left">
            <div class="cinema-row row-{{ $row }}">
                @foreach(range(1, $seatsPerRow) as $seatNumber)
                    @php
                        $currentSeat = $seats->firstWhere('id', ($row - 1) * $seatsPerRow + $seatNumber);
                        $seatClass = $currentSeat && $currentSeat->status === 'taken' ? 'seat active' : 'seat';
                    @endphp
<div class="seat {{ $seatClass }}" data-seat-id="{{ $currentSeat ? $currentSeat->id : '' }}"></div>
@endforeach
            </div>
        </div>
    @endforeach
    
    @if($schema->sides === 'double')
        @foreach(range(1, $schema->rows) as $index => $row)
            <div class="cinema-seats left {{ $index == 0 ? 'ml-16' : '' }}">
                <div class="cinema-row row-{{ $row }}">
                    @foreach(range(1, $seatsPerRow) as $seatNumber)
                        @php
                            $currentSeat = $seats->firstWhere('id', ($row - 1) * $seatsPerRow + $seatNumber);
                            $seatClass = $currentSeat && $currentSeat->status === 'taken' ? 'seat active' : 'seat';
                        @endphp
<div class="seat {{ $seatClass }}" data-seat-id="{{ $currentSeat ? $currentSeat->id : '' }}"></div>
@endforeach
                </div>
            </div>
        @endforeach
    @endif
    
    
    </div>

    <!-- Reserve Form -->
    <form id="reserve-form" method="POST" action="{{ route('seats.update', ['id' => ':seatId']) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="seat_id" id="seat-id">
        <button type="submit" id="reserve-btn" class="bg-white">Reserve</button>
    </form>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var seats = document.querySelectorAll('.seat');
    seats.forEach(function(seat) {
        seat.addEventListener('click', function() {
            this.classList.toggle('active');
            var seatId = this.dataset.seatId;
            document.getElementById('seat-id').value = seatId;
            var formAction = "/seats/update/" + seatId; // Define the route dynamically
            document.getElementById('reserve-form').setAttribute('action', formAction);
        });
    });
});

    </script>
</body>
</html>
