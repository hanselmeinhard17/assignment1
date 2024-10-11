@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Detail Organizer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center"><strong>Detail Organizer</strong></h1>
        <h2><strong>{{ $organizer->name }}</strong></h2>

        <!-- Action Buttons -->
        <div class="d-flex mt-3">
            <a href="{{ route('organizers.edit', $organizer->id) }}" class="btn btn-warning me-2">✏️</a>
            <form action="{{ route('organizers.destroy', $organizer->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">🗑️</button>
            </form>
        </div>
        
       <!-- Links in aligned rows -->
<div class="row mt-3">
    <div class="col-1">
        <strong>Facebook:</strong>
    </div>
    <div class="col">
        <a href="http://m.facebook.com/dummy" style ="color : black">{{ $organizer->facebook_link }}</a>
    </div>
</div>
<div class="row">
    <div class="col-1">
        <strong>X:</strong>
    </div>
    <div class="col">
        <a href="http://x.com/dummy" style ="color : black">{{ $organizer->x_link }}</a>
    </div>
</div>
<div class="row">
    <div class="col-1">
        <strong>Website:</strong>
    </div>
    <div class="col">
        <a href="http://dummy.com" style ="color : black">{{ $organizer->website_link }}</a>
    </div>
</div>


        <h4 class="mt-4"><strong>About</strong></h4>
        <p>{{ $organizer->description }}</p>

        <a href="{{ route('organizers.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
