@extends('layouts.app')

@section('title')
BBA Department
@endsection

@section('content')
<h1 class="page-title">Department of Web Development</h1>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-12">
        <table id="order-listing" class="table table-striped"  style="width:100%;">
          <thead>
            <tr>
                <th>Name</th>
                <th>Registation</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($bbaStudents as $bbaStudent)
                <tr>
                    <td>{{ $bbaStudent->studentName }}</td>
                    <td>{{ $bbaStudent->studentRegistation}}</td>
                    <td>{{ $bbaStudent->studentPhone}}</td>
                    <td>
                        @if($bbaStudent->studentDepartment==1)
                        <span>{{ 'Graphic Design' }}</span>
                        @elseif($bbaStudent->studentDepartment==2)
                        <span>{{ 'Animation' }}</span>
                        @elseif($bbaStudent->studentDepartment==3)
                        <span>{{ 'Web Development' }}</span>
                        @elseif($bbaStudent->studentDepartment==4)
                        <span>{{ 'Android App' }}</span>
                        @elseif($bbaStudent->studentDepartment==5)
                        <span>{{ 'Basic IT Course' }}</span>
                        @else
                        <span>{{ 'Not Defined' }}</span>
                        @endif
                    </td>
                    <td><img src="{{ asset($bbaStudent->studentImage) }}" alt="img" width="50px"></td>
                    <td>
                    <a href="{{ url('view/student').$bbaStudent->id }}" class="btn btn-primary"> view</a>
                    <a href="{{ url('edit/student').$bbaStudent->id }}" class="btn btn-warning"> Edit</a>
                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"> Delete</a>
                    </td>
                </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure delete this data !
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="{{ url('delete/student').$bbaStudent->id }}" class="btn btn-primary">Delete</a>
        </div>
      </div>
    </div>
  </div>
@endsection