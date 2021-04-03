@extends('dashboard.layouts.layout')

@section('content')


<form id="arts_item_form" action="{{route('api.art')}}" class="m-0" method="POST" enctype="multipart/form-data">
  <div class="modal" id="new_art_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Art</h5><button class="close" type="button" data-dismiss="modal"
            aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <div class="d-none">
            <input class="id form-control" name="id" />
          </div>
          <div class="form-group"><label>Title :</label>
            <input class="title form-control" name="title" type="text" placeholder="Titre" required="required" />
          </div>
          <div class="form-group"><label>Description :</label>
            <input class="description form-control" name="description" type="text" placeholder="Description"
              required="required" />
          </div>

          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
              </div>
              <input class="form-control datepicker" name="year" placeholder="Date" type="text">
            </div>
          </div>
          <div class="form-group">
            <label>Images</label>
            <div class="file">
              <input type="file" multiple class="custom-file-input" name="arts[]" id="customFileLang" lang="en">
            </div>
          </div>

          <div class="d-flex flex-column" style="height: 150px;overflow-y: scroll;">

            @foreach ($designers as $designer)
            <div class="input-group">
              <label class="m-2" for="designer{{$designer->id}}">{{$designer->full_name}}</label>
              <input class="m-2" type="checkbox" name="designer[]" id="designer1" value="{{$designer->id}}">
            </div>
            @endforeach

          </div>


        </div>
        <div class="modal-footer"><button class="btn btn-secondary" type="button"
            data-dismiss="modal">Close</button><button class="btn btn-primary" id="save_product" type="submit">Save
            changes</button></div>
      </div>
    </div>
  </div>
</form>
<!-- Page content-->

@error('form')

<div class="alert alert-danger" role="alert">
  <strong>Error :</strong> {{ $message }}
</div>

@enderror

<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Arts</h6>
          <nav class="d-none d-md-inline-block ml-md-4" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="/dashboard/arts">Arts</a></li>
              <li class="breadcrumb-item active" aria-current="page">Toutes</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div><!-- Page content-->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header border-0 d-flex justify-content-between">
          <h3 class="mb-0">Arts</h3><button class="btn btn-sm btn-neutral" id="new_art">New</button>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">titre</th>
                <th scope="col">date</th>
                <th scope="col">description</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody class="arts_list">
              @if(!count($arts))
              <tr>
                <td class="text-center" colspan="4">Aucune Dessinateur Existe ...</td>
              </tr>
              @else
              @csrf
              @foreach($arts as $art)
              <tr>
                <td>{{($art->id) }} </td>
                <td>{{($art->title) }} </td>
                <td>{{($art->year) }} </td>
                <td>{{($art->description) }} </td>

                <td>
                  <button class="ed_button btn btn-sm btn-icon-only text-primary" data-id="{{$art->id}}">
                    <div class="fas fa-edit"></div>
                  </button>

                  <button class="rm_button btn btn-sm btn-icon-only text-danger" data-id="{{$art->id}}">

                    <div class=" fas fa-trash-alt">
                    </div>
                  </button>

                </td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>
  @include('dashboard.partials.footer')
</div>


@endsection


@section("optionJs")

<script src="{{asset('/dash/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

@endsection

@section('pagescripts')

<script src="{{asset('/dash/custom/arts.js')}}"></script>



<script>
$(document).ready(function() {
  initArtsPage([], "{{ route('api.designer_remove','')}}");
})
</script>
@endsection