@extends('master')
@section('content')
      
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header"> Edit Student </div>
                <div class="card-body">
                    <form method="post" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label for="Student Name">Student Names</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="student_name" value="{{ $student->student_name }}"> 
                        </div>

                        <label for="Email">Email</label>
                        <div class="mb-3">
                             <input type="text" class="form-control" name="student_email" value="{{ $student->student_email }}">
                        </div>

                        <label for="Gender">Gender</label>
                        <div class="mb-3">
                             <select name="gender" id="" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select> 
                        </div>
                            
                            <label for="image">Student Image</label>
                        <div class="mb-3"> 
                        <img  style="border-radius:50px !important;" src="{{ asset('images/'.$student->image_url) }}" width="75">
                        <input type="hidden" name="hidden_student_image" value="{{ $student->image_url }}" />
    
                    </div>
                            <input type="file" class="form-control" name="student_image" />
                    </div>
                        
                        <div class="text-center">
                            <input type="hidden" name="hidden_id" value="{{ $student->id }}" />
                            <input type="submit" class="btn btn-primary" value="Edit Student" /> 
                            </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<script>
document.getElementsByName('gender')[0].value = "{{ $student->gender }}";
</script>

@endsection('content')