@extends('user.components.layout')

@section('title', 'Event')

@section('content')

<div class="container p5">
    <div class="row g-5 justify-content-center">
        <div class="col-12 mt-5 text-center">
            <h1 class="mb-3">EVENTS</h1>
            <p>Documentation of the matches we have participated in and the medals won by the athletes.</p>
        </div>
        @foreach($events as $event)
        <div class="col-4">
            <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm">
                <div class="position-relative">
                    <img src="{{ $event->event_photo ? asset('storage/' . $event->event_photo) : 'https://via.placeholder.com/350x350?text=Image' }}" 
                        class="card-img-top img-fluid" 
                        alt="Event Image" 
                        style="height: 250px; object-fit: cover; object-position: center;">
                    <div class="position-absolute top-0 end-0 p-3">
                        <span class="badge bg-primary bg-opacity-75 rounded-pill">
                            {{ $event->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
                
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold mb-3">{{ $event->name }}</h5>
                    
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt text-primary me-3"></i>
                        <span class="text-muted">{{ $event->place }}</span>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-calendar text-primary me-3"></i>
                        <span class="text-muted">{{ $event->event_date ?? 'N/A' }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="row m-4">
{{ $events->links('pagination::bootstrap-5') }}
</div>

@endsection