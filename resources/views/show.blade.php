@extends('master')
@section('content')

        
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header"> Student Details </div>
            <br>
            <div class="col-md-3 mx-auto">
            <a href="{{ route('students.index') }}" class="btn btn-sm btn-dark">View All</a>
            </div>
            <hr>
            <div class="card-body">
                <label for="student_name"><strong>Student Name : </strong></label>
                <div class="text">{{ $student->student_name }}</div>
                <hr>
                <label for="student_email"><strong>Student Email : </strong></label>
                <div class="text">{{ $student->student_email}}</div>
                <hr>
                <label for="student_gender"><strong>Student Gender : </strong></label>
                <div class="">{{ $student->gender }}</div>

                <hr>

                <label for="student_image"><strong>Student Image : </strong></label>
                <div class=""><img  style="border-radius:50px !important;" src="{{ asset('images/'.$student->image_url) }}" width="75"></div>

                
                
                
            </div>
        </div>
    </div>
</div>

@endsection('content')