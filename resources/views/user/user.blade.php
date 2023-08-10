@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{route('user.create')}}" class="btn btn-primary">Add new user</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{__('UserName')}}</th>
                        <th scope="col">{{__('FirstName')}}</th>
                        <th scope="col">{{__('LastName')}}</th>
                        <th scope="col">{{__('Email Address')}}</th>
                        <th scope="col">{{__('Active')}}</th>
                        <th scope="col">{{__('created_at')}}</th>
                        <th scope="col">{{__('updated_at')}}</th>
                        <th scope="col">{{__('Manage')}}</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listuser as $key => $user)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$user->username}}</td>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if($user->isactive==1)
                                {{__('Active')}}
                            @else
                                {{__('Not Active')}}
                            @endif

                        </td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                            <form action="{{route('user.destroy',$user->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirmdelete();"/>
                            </form>
                            <a href="{{route('show',$user->id)}}" class="btn bg-warning">View User Ticket</a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
