@extends('layout')

@section('title')
    Studie voortgang
@endsection

@section('content')
    <div class="container-fluid" style="padding-top: 65px">
        <h2>
            Cijfer toevoegen
        </h2>
        <form method="POST" action="/dashboard/monitor">
            @csrf
            @method('PUT')

            <div class="m-4">
                <label class="label" for="courseSelect">Cursus</label>
                <select name="courseSelect" id="courseSelect" class="form-control @error('course') is-invalid @enderror"
                        size="10">
                    @foreach($courses as $course)
                        @foreach($course->assignments as $assignment)
                            <option value="{{$assignment->id}}">{{$course->course}} - {{$assignment->assignment}}</option>
                        @endforeach
                    @endforeach
                </select>
                @error('grade')
                <span class="text-danger">{{$errors->first('courseSelect')}}</span>
                @enderror

                <label class="label" for="grade">Cijfer</label>
                <input placeholder="Cijfer" class="form-control @error('grade') is-invalid @enderror" id="grade" type="number" step="0.1" name="grade" value="{{old('grade')}}">

                @error('grade')
                <span class="text-danger">{{$errors->first('grade')}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-outline-dark mb-4 mt-4">Submit</button>
        </form>
    </div>
@endsection
