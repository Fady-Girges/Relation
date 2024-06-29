@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Courses

                </div>

                <br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($courses) && $courses -> count() > 0 )
                        @foreach($courses as $courses)
                            <tr>
                                <th scope="row">{{$courses -> id}}</th>
                                <td>{{$courses -> name}}</td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>



            </div>
        </div>
    </div>

     <!-- Back Button -->
     <div class="container text-right">
        <a href="javascript:history.back()" class="btn btn-primary">Back</a>
    </div>

@stop
