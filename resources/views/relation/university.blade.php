@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Universities

                </div>

                <br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                    </tr>
                    </thead>
                    <tbody>


                    @if(isset($university) && $university -> count() > 0 )
                        @foreach($university as $university)
                        <tr>
                            <th scope="row">{{$university -> id}}</th>
                            <td>{{$university -> name}}</td>
                            <td>{!!  $university -> address !!}</td>
                            <td>
                                <a href="{{route('university.professor',$university -> id)}}" class="btn btn-success">Professor's List</a>
                            </td>
                        </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>


            </div>
        </div>
    </div>
@stop
