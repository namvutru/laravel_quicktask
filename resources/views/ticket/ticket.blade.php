@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Auth::user()->id == $id)
                    <a href="{{route('create')}}" class="btn btn-primary">Add new ticket</a>
                    @endif

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name Ticket</th>
                        <th scope="col">Create_at</th>
                        <th scope="col">Update_at</th>
                        <th scope="col">Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ticket as $key => $tic)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$tic->name}}</td>
                        <td>{{$tic->created_at}}</td>
                        <td>{{$tic->updated_at}}</td>
                        <td> <td>
                            <form action="{{route('destroy',$tic->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirmdelete();"/>
                            </form>
                            @if(Auth::user()->id == $id)
                                <a href="{{route('edit',$tic->id)}}" class="btn bg-warning">Edit</a>
                            @endif

                        </td></td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
