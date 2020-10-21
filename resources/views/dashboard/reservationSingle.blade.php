@extends('index')
@section('title', 'Edit Reservation')
@section
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>You're all booked for the {{ $hotelInfo->name }} in {{ $hotelInfo->location }}!</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{$hotelInfo->image}}" class="img-fluid" alt="Front of hotel">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                             {{ $hotelInfo->name }} - <small>{{ $hotelInfo->location }}</small>
                        </h3>
                         <p class="card-text">{{ $hotelInfo->description }}</p>
                        <p class="card-text"><strong>到着: </strong>{{ $reservation->arrival }}</p>
                        <p class="card-text"><strong>出発: </strong>{{ $reservation->departure }}</p>
                        <p class="card-text"><strong>部屋: </strong>{{ $reservation->room['type'] }}</p>
                        <p class="card-text"><strong>人数: </strong>{{ $reservation->num_of_guests }}</p>
                        <p class="card-text"><strong>料金: </strong>${{ $reservation->room['price'] }}</p>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-lg btn-success">予約を変更</a>
                    <a href="/dashboard/reservations/{{ $reservation->id }}/delete" class="btn btn-lg btn-danger">取り消し</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection