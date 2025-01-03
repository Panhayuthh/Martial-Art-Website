@extends('user.components.layout')

@section('title', 'Event')

@section('content')

<div class="container p5">
    <div class="container text-center mt-3">
        <h1 class="lead">Let's get to know the members and administrators of</h1>
        <h1><strong>GAGAK PUTIH INDONESIA!</strong></h1>
    </div>
    <table class="mt-5 table table-bordered">
        <thead>
          <tr>
            <th scope="col">NO.</th>
            <th scope="col">PROFILE</th>
            <th scope="col">NAME</th>
            <th scope="col">SCHOOL</th>
            <th scope="col">GENDER</th>
            <th scope="col">BELT</th>
            <th scope="col">MEDAL</th>
          </tr>
        </thead>
        @foreach($members as $member)
        <tbody>
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>
                    <img src="{{ $member->member_photo ? asset('storage/' . $member->member_photo) : 'https://via.placeholder.com/350x350?text=Image' }}" 
                        class="img-fluid" 
                        alt="Member Image" 
                        style="height: 100px; object-fit: cover; object-position: center;">
                </td>
                <td>{{ $member->member_name }}</td>
                <td>{{ $member->member_school }}</td>
                <td>{{ $member->member_gender }}</td>
                <td>{{ $member->member_belt }}</td>
                <td>{{ $member->member_medal }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    
    <div class="row m-4">
    {{ $members->links('pagination::bootstrap-5') }}
    </div>
</div>


@endsection