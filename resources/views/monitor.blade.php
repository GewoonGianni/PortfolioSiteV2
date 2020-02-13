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

        .done{
            background-color: rgba(56, 193, 114, 0.5);
        }

        .not-done{
            background-color: rgba(227, 52, 47, 0.5);
        }
    </style>

    <div class="container-fluid nav-bar-fix scrollable-to-side" style="padding-top: 65px">
        <table class="table">
            <tr>
                <th>Cursus</th>
                <th>EC</th>
                <th>Toets</th>
                <th>Weging</th>
                <th>Cijfer</th>
            </tr>
            @foreach($courses as $course)
                @foreach($course->assignments as $assignment)
                    <tr>
                        @endforeach
                        <td rowspan={{count($course->assignments)}}>{{$course->course}}</td>
                        <td rowspan={{count($course->assignments)}}>{{$course->ec}}</td>
                        @foreach($course->assignments as $assignment)
                            <td class="{{$assignment->grade > 5.4 ? 'done' : 'not-done'}}">{{$assignment->assignment}}</td>
                            <td>{{$assignment->weight}}</td>
                            <td>{{$assignment->grade}}</td>
                    </tr>
                @endforeach
            @endforeach
        </table>
        <a href="/../dashboard/monitor/edit"><button class="btn btn-outline-dark mb-4">Edit</button></a>
    </div>
        <!-- TODO: Make dynamic progress bars -->

        <!-- TODO: make a "admin" edit screen -->
        <!-- TODO: make a dynamic selection form -->
@endsection
