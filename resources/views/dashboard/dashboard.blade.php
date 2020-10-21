@extends('index')
@section('title', 'Dashboard')
@section('content')
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">予約管理</h4>
                    <p class="card-text">予約の変更</p>
                    <a href="/dashboard/reservations" class="btn btn-primary">予約一覧</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">部屋を探す</h4>
                    <p class="card-text">一流ホテルのカタログを見る</p>
                    <a href="/hotels" class="btn btn-primary">当ホテル</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection