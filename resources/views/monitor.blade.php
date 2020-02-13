@extends('layout')

@section('title')
    Studie voortgang
@endsection

@section('content')
    <style>
        @media only screen and (max-width: 600px) {
            .scrollable-to-side {
                overflow-x: scroll;
            }
        }
    </style>

    <div class="container-fluid nav-bar-fix scrollable-to-side" style="padding-top: 65px">
        <table class="table">
            <tr>
                <th>Cursus</th>
                <th>Toets</th>
                <th>Weging</th>
                <th>EC</th>
                <th>Cijfer</th>
            </tr>
            @foreach($courses as $course)
                @foreach($course->assignments as $assignment)
                    <tr>
                        @endforeach
                        <td rowspan={{count($course->assignments)}}>{{$course->course}}</td>
                        @foreach($course->assignments as $assignment)
                            <td>{{$assignment->assignment}}</td>
                            <td>{{$assignment->weight}}</td>
                            <td>{{$course->ec}}</td>
                            <td>{{$assignment->grade}}</td>
                    </tr>
                @endforeach
            @endforeach
        </table>

        <!-- TODO: Make dynamic progress bars -->

        <!-- TODO: make a "admin" edit screen -->
    </div>
@endsection
