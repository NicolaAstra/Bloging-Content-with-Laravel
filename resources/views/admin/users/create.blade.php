@extends('layouts.app')

@section('content')

@include('admin.include.eror')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new User
        </div>
        <div class="panel-body">
            <form action="{{ route('user.store')}} " method="POST" >
                   {{ csrf_field() }} 
                   
                   <div class="form-group">
                       <label for="name">Name</label>
                       <input type="text" name="name" class="form-control">
                   </div>

                   <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                 <div class="form-group">
                   <div class="text-center">
                       <button class="btn btn-success" type="submit">
                            Add New User
                       </button>
                   </div>
                 </div>

            </form>
        </div>
    </div>
@endsection