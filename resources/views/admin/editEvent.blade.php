<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
      @foreach($events as $event)
        <div class="modal" id="editEventModal-{{ $event->id }}" tabindex="-1" aria-labelledby="editEventModalLabel-{{ $event->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-dark ">
                        <h5 class="modal-title text-white" id="editEventModalLabel-{{ $event->id }}">Edit Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="name">Event Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $event->name }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="place">Place</label>
                                <input type="text" name="place" class="form-control" value="{{ $event->place }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="event_photo">Event Photo</label>
                                <input type="file" name="event_photo" class="form-control">
                                @if ($event->event_photo)
                                    <img src="{{ asset('storage/' . $event->event_photo) }}" alt="Event Photo" class="img-fluid mt-2" style="max-height: 200px;">
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
