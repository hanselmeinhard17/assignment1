@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events in Surabaya</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        @foreach($events as $event)
        <div class="col-md-4 mb-4">
            <a href="#">
            <img class = "rounded-t-lg img-fluid w-100" src="https://picsum.photos/500?random={{ $loop->index}}" alt="Event Banner">
            </a>
        
            <div class="card">
               
                <div class="card-body">
                    <h5 class="card-title">
                    <a href="{{ route('events.show', $event->id) }}" style="color: black;">{{ $event->title }}</a>

                    </h5>
                    <br>
                    <p class="card-text">
                        <strong>{{ \Carbon\Carbon::parse($event->date)->format('D, M d Y') }} - {{ \Carbon\Carbon::parse($event->start_time)->format('H:i A') }}</strong><br>
                        {{ $event->venue }}<br>
                        <br>
                        Free<br>
                        Organizer: {{ $event->organizer->name }}<br>
                       
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




    </div>

    <!-- Include Bootstrap JS and Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
