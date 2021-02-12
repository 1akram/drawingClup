@extends('masterLayout.master')
@section('head')
@endsection

@section('content')
@if ($errors->any())
<div class="alert alert-danger alert-dismissible  " style="position: fixed; z-index:50; top:0;left:0;">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <ul >
        @foreach ($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
    
</div>
 @endif
    <!-- arst  -->

    
        <!-- add arts  -->
        <div class="container">
            <div class="mt-5">add art </div>
            <div class="row mt-5">
                <form action="{{route('uploadArts')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input class="d-block mb-3" type="text" name="title" placeholder="title">
                    <textarea name="description" cols="30" rows="10" placeholder="description"></textarea>
                    <div class="input-group">
                        <label class="m-2">select arts </label>
                        <input class="d-block mt-2" type="file" multiple name="arts[]" accept=".jpg,.png,.jpeg">
                    </div>
                    <div class="input-group ">
                        <label class="m-2" for="">year</label>
                        <input class="m-2" name="year" type="number">
                    </div>
                    <span class="d-block mb-1 mt-5 font-weight-bold">select desiners </span>
                    <div class="d-flex flex-column" style="height: 150px;overflow-y: scroll;">

                        @foreach ($desiners as $desiner)
                        <div class="input-group">
                            <label class="m-2" for="desiner{{$desiner->id}}">{{$desiner->full_name}}</label>
                            <input class="m-2" type="checkbox" name="desiners[]" id="desiner1" value="{{$desiner->id}}">
                        </div>
                        @endforeach

                    </div>


                    <input type="submit" class="btn mt-3 btn-primary w-50 m-auto" value="add">
                </form>
            </div>
        </div>
        <!-- end add arts  -->

        <div class="mt-5 mb-5" style="width: 100%;height: 2px; background-color: #000;"></div>

        <!-- display arts  -->
        <div class="container mt-5">
            <h1 id="arts"> arts </h1>
            <div class="row mb-5">
                <div class="col-sm-4">image</div>
                <div class="col-sm-4">title</div>
                <div class="col-sm-4">action</div>
            </div>
            @foreach ($arts as $art)
                
            <div class="row mb-5">
                <div class="col-sm-4"><img width="100px" height="100px" src="{{asset( Storage::url($art->url))}}" alt="{{$art->title}}"></div>
                <div class="col-sm-4">{{$art->title}}</div>
                <div class="col-sm-4"><a class="btn btn-danger" href="#">delete</a> <a class="btn btn-info"
                        href="#">edit</a></div>
            </div>
            @endforeach
            {{$arts->onEachSide(1)->links()}}
        </div>
        <!-- end display arts  -->

    <!-- end arst  -->
@endsection

@section('extr')
    
@endsection