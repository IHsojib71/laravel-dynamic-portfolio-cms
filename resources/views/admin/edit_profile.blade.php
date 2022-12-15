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
                            <h4 class="card-text text-center">Edit Profile</h4>
                            <form action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') ?? $admin->name }}" placeholder="Full Name">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') ?? $admin->email }}" placeholder="Email">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{ old('username') ?? $admin->username }}" placeholder="Email">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image" id="image" onChange="img_pathUrl(this);">
                                </div>
                                <br>
                                <div class="form-group" >
                                    
                                    <img id="imageShow" class="rounded avatar-lg mt-4" src="" alt="Profile image preview">
                                   
                                </div>
                                <hr>
                                
                                    <a href="{{ route('admin.profile') }}" class="btn btn-danger btn-rounded waves-effect waves-light">Back</a>
                                    <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Update</button>
                               
                               
                            </form>
                           
    
                           
    
                            
                        </div>
                    </div>
                
               
            </div>

        

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</div>
<script type="text/javascript">
function img_pathUrl(input){
    
        $('#imageShow')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
    }
</script>
@endsection