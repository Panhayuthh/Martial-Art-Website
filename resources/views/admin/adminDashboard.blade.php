<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('/image/martialArtLogo.png') }}" type="image/png" >

</head>
<body>
  @include('/admin/addEvent')
  @include('/admin/editEvent')
    <x-layouts>
      <div class="container-fluid p-4">
        <div class="row align-items-center mb-4">
            <div class="col">
                <h1 class="mb-3">Event Management</h1>
            </div>
            <div class="col-auto">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventModal">
              Add Event
            </button>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach($events as $event)
            <div class="col">
                <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-lg">
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
                        
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm dropdown-toggle" 
                                        type="button" 
                                        id="eventActionsDropdown-{{ $event->id }}" 
                                        data-bs-toggle="dropdown" 
                                        aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical me-1"></i> 
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" 
                                    aria-labelledby="eventActionsDropdown-{{ $event->id }}">
                                    <li>
                                        <button type="button" 
                                                class="dropdown-item" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editEventModal-{{ $event->id }}">
                                            <i class="bi bi-pencil me-2"></i>Edit
                                        </button>
                                    </li>
                                    <li>
                                        <form action="{{ route('event.delete', ['event' => $event]) }}" 
                                            method="post" 
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" 
                                                    class="dropdown-item text-danger" 
                                                    onclick="return confirm('Are you sure you want to delete this event?')">
                                                <i class="bi bi-trash me-2"></i>Delete
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
      </div>
      <div>
        <div class="row m-4">
            <div class="col-12 d-flex justify-content-center">
                <div class="pagination pagination-sm">
                    {{ $events->links('pagination::bootstrap-5') }}
                </div>
        </div> 
        </div>     
    <x-footer></x-footer>
    </x-layouts>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
