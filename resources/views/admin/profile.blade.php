@extends('admin.admin-layout')
@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">

                    <center>
                        <img class="rounded-circle avatar-xl mt-4" src="{{asset('backend-asset/assets/images/small/img-5.jpg')}}" alt="Card image cap">

                    </center>
                    <div class="card-body">
                        <h4 class="card-title">Name : {{ $admin->name }}</h4>
                        <p class="card-text">Email : {{ $admin->email}}</p>
                        <p class="card-text">Username : {{ $admin->username}}</p>
                        
                        <hr>

                        <a href="{{ route('admin.edit-profile') }}" class="btn btn-success btn-rounded waves-effect waves-light">Edit Profile</a>
                        
                    </div>
                </div>
            </div>

        

        </div>

    </div>
</div>

@endsection