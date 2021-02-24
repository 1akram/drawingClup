@extends('dashboard.layouts.layout')

@section('content')


<form id="desinger_item_form" action="{{route('api.designer')}}" class="m-0">
    <div class="modal" id="new_desinger_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Designer</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="d-none">
                        <input class="id form-control" name="id" />
                    </div>
                    <div class="form-group"><label>Nom Complet :</label>
                        <input class="full_name form-control" name="full_name" type="text" placeholder="nom complet" required="required" />
                    </div>
                    <div class="form-group"><label>Email :</label>
                        <input class="email form-control" name="email" type="text" placeholder="Email" required="required" />
                    </div>

                </div>
                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" id="save_product" type="submit">Save changes</button></div>
            </div>
        </div>
    </div>
</form><!-- Page content-->



<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dessinateurs</h6>
                    <nav class="d-none d-md-inline-block ml-md-4" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/dashboard/designers">Dessinateurs</a></li>
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

                    <h3 class="mb-0">Dessinateur</h3><button class="btn btn-sm btn-neutral" id="new_designer">New</button>

                </div><!-- Light table-->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="designers_list">
                            @if(!count($designers))
                            <tr>
                                <td class="text-center" colspan="4">Aucune Dessinateur Existe ...</td>
                            </tr>
                            @else
                            @csrf
                            @foreach($designers as $designer)
                            <tr>
                                <td>{{($designer->id) }} </td>
                                <td>{{($designer->full_name) }} </td>
                                <td>{{($designer->email) }} </td>

                                <td>
                                    <button class="ed_button btn btn-sm btn-icon-only text-primary" data-id="{{$designer->id}}">
                                        <div class="fas fa-edit"></div>
                                    </button>

                                    <button class="rm_button btn btn-sm btn-icon-only text-danger" data-id="{{$designer->id}}">

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

@section('pagescripts')
<script src="{{asset('/dash/custom/designers.js')}}"></script>
<script>
    $(document).ready(function() {
        initDesignersPage(@json($designers), "{{ route('api.designer_remove','')}}");
    })
</script>
@endsection