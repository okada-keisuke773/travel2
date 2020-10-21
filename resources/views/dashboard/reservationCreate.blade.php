@extends('index')
@section('title', 'Create reservation')
@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h2>{{$hotelInfo->name}} - <small class="text-muted">{{$hotelInfo->location}}</small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-body"></h5>
            <p class="caard-text">世界でも最も壮大なリゾートです</p>
            <form action="{{route('reservations.store')}}" method="POST">
                 @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                @csrf
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="room">部屋のタイプ</label>
                            <select class="form-control" name="room_id">
                                @foreach ($hotelInfo->rooms as $option)
                                <option value="{{$option->id}}">{{$option->type}} -  ¥{{$option->price}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="guests">人数</label>
                            <input class="form-control" name="num_of_guests" placeholder="1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="arrival">到着</label>
                            <input type="date" class="form-control" name="arrival" placeholder="03/21/2020">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="departure">出発</label>
                            <input type="date" class="form-control" name="departure" placeholder="03/23/2020">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">予約する</button>
            </form>
        </div>
    </div>
</div>
@endsection