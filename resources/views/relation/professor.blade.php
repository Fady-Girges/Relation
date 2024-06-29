@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Professors
                </div>

                <br>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($professor) && $professor -> count() > 0 )
                            @foreach($professor as $prof)
                                <tr>
                                    <th scope="row">{{$prof -> id}}</th>
                                    <td>{{$prof -> name}}</td>
                                    <td>{{$prof -> title}}</td>
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
