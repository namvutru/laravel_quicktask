@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(!isset($user))
                    <form action="{{route('user.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label id="title">Username</label>
                            <input type="text" name="username"  class="form-control"  placeholder="...">
                        </div>

                        <div class="form-group">
                            <label id="title">Firstname</label>
                            <input type="text" name="firstname"  class="form-control"  placeholder="...">
                        </div>
                        <div class="form-group">
                            <label id="title">Lastname</label>
                            <input type="text" name="lastname"  class="form-control"  placeholder="...">
                        </div>
                        <div class="form-group">
                            <label id="title">Password</label>
                            <input type="text" name="password"  class="form-control"  placeholder="...">
                        </div>
                        <div class="form-group">
                            <label id="title">Email</label>
                            <input type="text" name="email"  class="form-control"  placeholder="...">
                        </div>
                        <div class="form-group">
                            <label id="title">Active</label>
                            <select class="form-select" name="isactive" aria-label="Default select example">
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                        </div>


                        <input type="submit" class="btn btn-success" value="Thêm dữ liệu">
                    </form>
                @else
                    <form action="{{route('user.update')}}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label id="title">Username</label>
                            <input type="text" name="username" value="{{$user->username}}"  class="form-control"  placeholder="...">
                        </div>

                        <div class="form-group">
                            <label id="title">Firstname</label>
                            <input type="text" name="firstname" value="{{$user->firstname}}"  class="form-control"  placeholder="...">
                        </div>
                        <div class="form-group">
                            <label id="title">Lastname</label>
                            <input type="text" name="lastname" value="{{$user->lastname}}" class="form-control"  placeholder="...">
                        </div>
                        <div class="form-group">
                            <label id="title">Email</label>
                            <input type="text" name="email" value="{{$user->email}}"  class="form-control"  placeholder="...">
                        </div>
                        <div class="form-group">
                            <label id="title">Active</label>
                            <select class="form-select" name="isactive" aria-label="Default select example">
                                @if($user->isactive ==1 )
                                    <option value="1" selected>Active</option>
                                    <option value="0">Not Active</option>
                                    @else
                                    <option value="1">Active</option>
                                    <option value="0"selected>Not Active</option>
                                @endif

                            </select>
                        </div>


                        <input type="submit" class="btn btn-success" value="Thêm dữ liệu">
                    </form>
                @endif
            </div></div></div>

@endsection
