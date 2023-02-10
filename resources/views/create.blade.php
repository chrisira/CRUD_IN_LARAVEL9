@extends('master')

@section('content')


<!-- displaying the message of error that can be provided -->

@if($errors->any())

<div class="col-md-6 mx-auto">
<div class="alert alert-danger">
    <ul>
        
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>


        @endforeach
    </ul>
</div>

</div>



@endif


        
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header"> Add new Student </div>
            <div class="card-body">
                <form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
                     @csrf 
                     <label for="Student Name">Student Names</label>
                    <div class="mb-3"> <input type="text" class="form-control" name="student_name"> </div>
                    
                    <label for="Email">Email</label>
                    <div class="mb-3"> <input type="text" class="form-control" name="student_email"> </div>
                    
                    <label for="Gender">Gender</label>
                    <div class="mb-3"> <select name="gender" id="" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select> </div> 
                        
                        <label for="image">Student Image</label>
                    <div class="mb-3"> <input type="file" class="form-control" name="student_image"> </div>
                    <div class="text-center"> <input type="submit" class="btn btn-primary" value="Save Student" /> </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection