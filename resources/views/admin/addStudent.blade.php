@extends('layouts.app')

@section('title')
Add Student
@endsection

@section('content')
<div class="">
    <h1 class="page-title">Add New Student</h1>
    <div class="row mb-2">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="POST" action="{{ route('storeStudent') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Student Name: *</label>
                @error('studentName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentName" placeholder=" Name *"/>
              </div>
              <div class="form-group">
                <label>Student Registation No: *</label>
                @error('studentRegistation')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentRegistation" placeholder=" Registation *"/>
              </div>
              <div class="form-group">
                <label>Student Father's Name: *</label>
                @error('studentFatherName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentFatherName" placeholder=" Father's Name *"/>
              </div>
              <div class="form-group">
                <label>Student Mother's Name: *</label>
                @error('studentMotherName')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentMotherName" placeholder=" Mother's Name *"/>
              </div>
              <div class="form-group">
                <label>Student Phone No: *</label>
                @error('studentPhone')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentPhone" placeholder=" Phone *"/>
              </div>
              <div class="form-group">
                <label>Student Address: *</label>
                @error('studentAddress')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="text" class="form-control" name="studentAddress" placeholder=" Address *"/>
              </div>
              <div class="form-group">
                <label>Student Department: *</label>
                @error('studentDepartment')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <select name="studentDepartment" class="form-control">
                    <option value="">Select *</option>
                    <option value="1">Graphic Design</option>
                    <option value="2">Animation</option>
                    <option value="3">Web development</option>
                    <option value="4">Android App</option> 
                    <option value="5">Basic IT Course</option>\
                    <option value="6">Digital Marketing</option>
                </select>
                
              </div>
              <div class="form-group">
                <label>Student Image: *</label>
                @error('studentImage')
                    <div class="mb-2 text-danger"><i>{{ $message }}</i></div>
                @enderror
                <input type="file" class="form-control" name="studentImage" placeholder=" Image *"/>
              </div>


                <input type="submit" class=" btn btn-primary enter-btn" value="Save Student" name="studentSubmit"/>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection