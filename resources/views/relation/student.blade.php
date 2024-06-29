@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Students

                </div>

                <br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($student) && $student -> count() > 0 )
                        @foreach($student as $student)
                            <tr>
                                <th scope="row">{{$student -> id}}</th>
                                <td>{{$student -> name}}</td>
                                <td>{{$student -> age}}</td>
                                <td><a href="{{route('student.courses',$student -> id)}}" class="btn btn-success">Course's List</a></td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>


            </div>
        </div>
    </div>
@stop
