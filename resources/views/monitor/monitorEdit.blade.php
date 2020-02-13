@extends('layout')

@section('title')
    Studie voortgang
@endsection

@section('content')
    <div class="container-fluid" style="padding-top: 65px">
        <h2>
            Cijfer toevoegen
        </h2>
        <form method="POST" action="/blog/monitor">
            @csrf
            @method('PUT')

            <div class="m-4">
                <label class="label" for="courseSelect">Cursus</label>
                <select name="courseSelect" id="courseSelect" class="form-control @error('course') is-invalid @enderror"
                        size="5">
                    @foreach($courses as $course)
                        <option value="{{$course->course}}">{{$course->course}}</option>
                    @endforeach
                    <option value="volvo">Volvo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-outline-dark mb-4 mt-4">Submit</button>
        </form>
    </div>
@endsection
