@extends('layouts.admin')

@section('title', 'Admin Dashobard')

@section('content')
<div class="container mt-5">
    <h1>Admin Dashobard</h1>
    <p>Welcome to the admin area.</p>

    <button type="button" class="btn btn-primary">Add items</button>
    
    <div class="mt-3">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($shopItems as $item)
                <tr>
                  <th scope="row">{{ $item->id }}</th>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->description }}</td>
                  <td>{{ $item->price }}</td>
                </tr>
                @empty
                <tr>
                  <td colspan="4">No items found.</td>
                </tr>
                @endforelse
            </tbody>
          </table>
          {{ $shopItems->links() }}
    </div>
</div>


@endsection