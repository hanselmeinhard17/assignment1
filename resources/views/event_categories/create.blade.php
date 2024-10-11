@extends('layouts.app')

@section('content')
<h1 class="text-center">{{ isset($eventCategory) ? 'Edit Event Category' : 'Create Event Category' }}</h1>

<form action="{{ isset($event_categories) ? route('event_categories.update', $eventCategory->id) : route('event_categories.store') }}" method="POST" class="container mt-4">
    @csrf
    @if(isset($eventCategory))
    @method('PUT')
    @endif

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="name" class="form-label"><strong>Category Name</strong></label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $eventCategory->name ?? '') }}" required>
        </div>
    </div>

    <div class="d-flex">
        <button type="submit" class="btn btn-create me-2">Save</button>
        <a href="{{ route('event_categories.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</form>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    /* CSS untuk tombol Create */
    .btn-create {
        background-color: transparent;
        /* Warna latar belakang transparan */
        border: 2px solid #6c757d;
        /* Border abu-abu */
        color: #6c757d;
        /* Warna teks abu-abu */
        border-radius: 0;
        /* Menghilangkan border-radius */
        padding: 0.5rem 1rem;
        /* Padding untuk tombol */
        font-weight: bold;
        /* Mengatur ketebalan font */
    }

    .btn-create:hover {
        background-color: #6c757d;
        /* Warna latar belakang saat hover */
        color: white;
        /* Mengubah warna teks menjadi putih saat hover */
    }
</style>
@endsection