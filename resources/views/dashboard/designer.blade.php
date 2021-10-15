@extends('dashboard.layouts.layout')

@section('custom_heading')
<?php 
  $page_title = "Painter";
?>

<link rel="stylesheet" href='{{asset("/dash/pond/filepond.min.css")}}'>
<link rel="stylesheet" href='{{asset("/dash/pond/filepond-plugin-image-preview.min.css")}}'>
<link rel="stylesheet" href='{{asset("/dash/pond/plugins/filepond-plugin-file-poster.css")}}'>

<style>
  .form-control{
    border: 1px solid #d2d6da70;
  }
  /*
  * FilePond Custom Styles
  */

  .filepond--drop-label {
    color: #4c4e53;
  }

  .filepond--label-action {
    text-decoration-color: #babdc0;
  }

  .filepond--panel-root {
    background-color: #edf0f4;
  }


  .filepond--root {
    max-width:300px;
    margin: 0 auto;
  }
  .save-form {
    margin-left: auto;
  }


</style>
@endsection

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href='{{asset("/dashboard/designers")}}'>Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{$designer->name}}</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">{{$designer->name}}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <form action="" method="GET">
              <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input name="search" type="text" class="form-control" placeholder="Search Painter...">
              </div>
            </form>
          </div>

          
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
    <div class="container-fluid py-4">
    <div class="row">

     <div class="col-12 col-xl-8">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-0">Profile Information</h6>
              </div>
              <div class="col-md-4 text-end">
                <a href="javascript:;">
                  <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                </a>
              </div>
            </div>
          </div>
          <form action="/v1/designer" method="POST" class="profile-form card-body p-3">
            @csrf
            <div class="d-none">
              <input type="text" name="user_id" value="{{$designer->id}}">
            </div>
            <div class="mb-3 text-sm">
              <label for="">
                <strong class="text-dark">Full Name:</strong>
              </label>
              <input name="name" type="text" value="{{$designer->name}}" class="form-control" placeholder="Full Name" aria-label="Full Name" aria-describedby="fullname-addon">
            </div>
            <div class="mb-3 text-sm">
              <label for="">
                <strong class="text-dark">Email:</strong>
              </label>
              <input name="email" type="text" value="{{$designer->email}}" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="Email-addon">
            </div>
            <div class="mb-3 text-sm">
              <label for="">
                <strong class="text-dark">Descreption:</strong>
              </label>
              <textarea rows="2" name="descreption" type="text" class="form-control" placeholder="descreption" aria-label="descreption" aria-describedby="descreption-addon">{{$designer->descreption}}</textarea>
           
            </div>
            <button class="save-form btn d-block bg-gradient-dark mb-0 ml-auto " >
              <i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Save Information
            </button>  
          </form>
        </div>
      </div>


      <div class="col-12 col-xl-4 mt-4 mt-xl-0">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <h6 class="mb-0">Image Profile</h6>
          </div>
          <div class="card-body p-3">
            <div class="image-selecter">
            <input type="file" 
              class="image_uploader"
              name="picture"
              accept="image/png, image/jpeg, image/gif"/>
    
            </div>
          </div>

        </div>
      </div>

  
      <div class="col-12 mt-4">
        <div class="card mb-4">
          <div class="card-header pb-0 p-3">
            <h6 class="mb-1">Paints</h6>
            <p class="text-sm">Paints that {{$designer->name}} participated in</p>
          </div>
          <div class="card-body p-3">
            <div class="row">
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img src="/dash/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <p class="text-gradient text-dark mb-2 text-sm">Project #2</p>
                    <a href="javascript:;">
                      <h5>
                        Modern
                      </h5>
                    </a>
                    <p class="mb-4 text-sm">
                      As Uber works through a huge amount of internal management turmoil.
                    </p>
                    <div class="d-flex align-items-center justify-content-between">
                      <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                      <div class="avatar-group mt-2">
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                          <img alt="Image placeholder" src="/dash/assets/img/team-1.jpg">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                          <img alt="Image placeholder" src="/dash/assets/img/team-2.jpg">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                          <img alt="Image placeholder" src="/dash/assets/img/team-3.jpg">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                          <img alt="Image placeholder" src="/dash/assets/img/team-4.jpg">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img src="/dash/assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <p class="text-gradient text-dark mb-2 text-sm">Project #1</p>
                    <a href="javascript:;">
                      <h5>
                        Scandinavian
                      </h5>
                    </a>
                    <p class="mb-4 text-sm">
                      Music is something that every person has his or her own specific opinion about.
                    </p>
                    <div class="d-flex align-items-center justify-content-between">
                      <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                      <div class="avatar-group mt-2">
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                          <img alt="Image placeholder" src="/dash/assets/img/team-3.jpg">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                          <img alt="Image placeholder" src="/dash/assets/img/team-4.jpg">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                          <img alt="Image placeholder" src="/dash/assets/img/team-1.jpg">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                          <img alt="Image placeholder" src="/dash/assets/img/team-2.jpg">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img src="/dash/assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <p class="text-gradient text-dark mb-2 text-sm">Project #3</p>
                    <a href="javascript:;">
                      <h5>
                        Minimalist
                      </h5>
                    </a>
                    <p class="mb-4 text-sm">
                      Different people have different taste, and various types of music.
                    </p>
                    <div class="d-flex align-items-center justify-content-between">
                      <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                      <div class="avatar-group mt-2">
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                          <img alt="Image placeholder" src="/dash/assets/img/team-4.jpg">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                          <img alt="Image placeholder" src="/dash/assets/img/team-3.jpg">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                          <img alt="Image placeholder" src="/dash/assets/img/team-2.jpg">
                        </a>
                        <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                          <img alt="Image placeholder" src="/dash/assets/img/team-1.jpg">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card h-100 card-plain border">
                  <div class="card-body d-flex flex-column justify-content-center text-center">
                    <a href="javascript:;">
                      <i class="fa fa-plus text-secondary mb-3"></i>
                      <h5 class=" text-secondary"> New project </h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>


    
  </main>
@endsection


@section('custom_script')
  <script src='{{asset("/dash/pond/plugins/filepond-plugin-file-encode.min.js")}}'></script>

  <script src='{{asset("/dash/pond/plugins/filepond-plugin-file-validate-type.min.js")}}'></script>
  <script src='{{asset("/dash/pond/plugins/filepond-plugin-image-preview.min.js")}}'></script>
  <script src='{{asset("/dash/pond/plugins/filepond-plugin-file-poster.js")}}'></script>
  <script src='{{asset("/dash/pond/filepond.min.js")}}'></script>


  <script>

    FilePond.registerPlugin(
      FilePondPluginFileValidateType,
      FilePondPluginImagePreview,
      FilePondPluginFilePoster
    );

    let impageUploader = FilePond.create(
      document.querySelector('input.image_uploader'),
      {
        labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
        imageCropAspectRatio: '1:1',
        stylePanelLayout: 'compact circle',
        styleLoadIndicatorPosition: 'center bottom',
        styleProgressIndicatorPosition: 'right bottom',
        styleButtonRemoveItemPosition: 'left bottom',
        styleButtonProcessItemPosition: 'right bottom',
        files: [
          {
              // the server file reference
              source: '12345',

              // set type to local to indicate an already uploaded file
              options: {
                  type: 'local',

                  // optional stub file information
                  file: {
                      name: 'my-file.png',
                      size: 3001025,
                      type: 'image/png',
                  },

                  // pass poster property
                  metadata: {
                      poster:"{{asset(Storage::url($designer->picture))}}",
                  },
              },
          },
        ],
      }
    );

    impageUploader.setOptions({
      server:{
        url:'/v1/upload/painter',
        headers:{
          'X-CSRF-TOKEN':'{{ csrf_token() }}',
          'user_id':'{{$designer->id}}'
        },        
      },


    });

    formJsSumbit('form.profile-form');

  </script>

@endsection