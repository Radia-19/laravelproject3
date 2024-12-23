@extends('layouts.app')

@section('title')
Add Teacher
@endsection

@section('content')
<div class="">
    <h1 class="page-title">Add New Teacher</h1>
    <div class="row mb-2">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" action="{{ route('storeTeacher') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Teacher Name: *</label>
                @error('teacherName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="teacherName" placeholder=" Name *"/>
              </div>
              <div class="form-group">
                <label>Teacher Registation No: *</label>
                @error('teacherRegistation')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="teacherRegistation" placeholder=" Registation *"/>
              </div>
              <div class="form-group">
                <label>Teacher Phone No: *</label>
                @error('teacherPhone')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="teacherPhone" placeholder=" Phone *"/>
              </div>
              <div class="form-group">
                <label>Teacher E-mail: *</label>
                @error('teacherEmail')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="email" class="form-control" name="teacherEmail" placeholder=" E-mail *"/>
              </div>
              <div class="form-group">
                <label>Teacher Address: *</label>
                @error('teacherAddress')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="teacherAddress" placeholder=" Address *"/>
              </div>
              <div class="form-group">
                <label>Teacher Department: *</label>
                @error('teacherDepartment')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <select name="teacherDepartment" class="form-control">
                    <option value="">Select *</option>
                    <option value="1">Graphic Design</option>
                    <option value="2">Animation</option>
                    <option value="3">Web development</option>
                    <option value="4">Android App</option> 
                    <option value="5">Basic IT Course</option>
                </select>
                
              </div>
              <div class="form-group">
                <label>Teacher Image: *</label>
                @error('teacherImage')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="file" class="form-control" name="teacherImage" placeholder=" Image *"/>
              </div>


                <input type="submit" class=" btn btn-primary enter-btn" value="Save Teacher" name="teacherSubmit"/>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection