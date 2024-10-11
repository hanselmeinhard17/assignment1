@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Event Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="d-flex align-items-center">
            <h1 class="me-3"><strong>Event Categories</strong></h1>
            <a href="{{ route('event_categories.create') }}" class="btn btn-create">+ Create</a>
        </div>
        <br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="no-column">No</th>
                    <th class="name-column">Category Name</th>
                    <th class="action-column">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventCategories as $index => $category)
                    <tr>
                        <td class="no-column">{{ $index + 1 }}</td>
                        <td class="name-column">{{ $category->name }}</td>
                        <td class="action-column">
                            <a href="{{ route('event_categories.edit', $category->id) }}" class="btn btn-warning">✏️</a>
                            <form action="{{ route('event_categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
/* CSS untuk tombol Create */
         .btn-create {
            background-color: transparent; /* Warna latar belakang transparan */
            border: 2px solid #6c757d; /* Border abu-abu */
            color: #6c757d; /* Warna teks abu-abu */
            border-radius: 0; /* Menghilangkan border-radius */
            padding: 0.5rem 1rem; /* Padding untuk tombol */
            font-weight: bold; /* Mengatur ketebalan font */
        }

        .btn-create:hover {
            background-color: #6c757d; /* Warna latar belakang saat hover */
            color: white; /* Mengubah warna teks menjadi putih saat hover */
        }
    </style>
@endsection
