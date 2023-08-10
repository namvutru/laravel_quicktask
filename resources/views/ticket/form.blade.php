@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
@if(!isset($ticket))
    <form action="{{route('store')}}" method="post">
        @csrf
        <div class="form-group">
            <label id="title">Name Ticket</label>
            <input type="text" name="name"  class="form-control"  placeholder="...">
        </div>


        <input type="submit" class="btn btn-success" value="Thêm dữ liệu">
    </form>
@else
                    <form action="{{route('update',$ticket->id)}}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label id="title">Name Ticket</label>
                            <input type="text" name="name" value="{{$ticket->name}}"  class="form-control"  placeholder="...">
                        </div>

                        <input type="submit" class="btn btn-success" value="Cập nhật">
                    </form>
@endif
            </div></div></div>

@endsection
