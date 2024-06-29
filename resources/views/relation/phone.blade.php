@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Phone

                </div>

                <br>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">code</th>
                        <th scope="col">number</th>

                    </tr>
                    </thead>
                    <tbody>

                    @if(isset($phone) && $phone->count() > 0 )
                        @foreach($phone as $ph)
                            <tr>
                                <th scope="row">{{$ph->id}}</th>
                                <td>{{$ph->code}}</td>
                                <td>{{$ph->number}}</td>

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
