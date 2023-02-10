@extends('master')

@section('content')


@if($message = Session::get('success'))

    <div class="alert alert-success">{{ $message }}</div>

@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <strong>Students's data</strong></div>
                <div class="col-md-6">
                    <a href="{{ route('students.create') }}" class="btn btn-sm btn-primary">Add New Student</a>
                </div>
            </div>
        
    </div>
    <div class="card-body">
        <table class="table stripped">
            <tr>
                <th>Image</th>
                <th>Names</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @if(count($data) > 0)
                @foreach($data as $row)
                <tr>
                    <td><img  style="border-radius:50px !important;" src="{{ asset('images/'.$row->image_url) }}" width="75"></td>
                    <td>{{ $row->student_name }}</td>
                    <td>{{ $row->gender }}</td>
                    <td>{{ $row->student_email }}</td>
                    <td>
                        <form method="post" action="{{ route('students.destroy',$row->id) }}">
                            @csrf
                            @method('DELETE')
                            <!-- view button -->
                        <a href="{{ route('students.show',$row->id) }}" class="btn btn-sm btn-warning">View</a>

                        <!-- edit button -->
                        <a href="{{ route('students.edit',$row->id) }}" class="btn btn-sm btn-success">Edit</a>
 
                        <input type="submit" class="btn btn-sm btn-danger" value="Delete">

                        </form>
                        
                </td>
                </tr>


                @endforeach

            @else
                <tr>
                <td colspan="5" class="text-danger">No Data Found!</td>
                </tr>
          
            @endif
        

        </table>
        {!! $data->links() !!}

    </div>
</div>


@endsection