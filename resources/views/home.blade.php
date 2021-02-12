@extends('masterLayout.master')
@section('head')
@endsection

@section('content')


    {{-- <!-- SlideShow --> --}}
    <div class="slide-holder container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            {{-- slider(carousel) items  --}}
          @for ($i = 0; $i < count($randomArts); $i++)
            <div class="carousel-item @if ($i==0)active @endif ">
                <div class="container ">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center">
                            <div class="slide-text d-flex  flex-column">
                                {{-- name of art  --}}
                                <div class="text-item title">
                                    {{$randomArts[$i]->title}}
                                </div>
                                {{-- end name of art  --}}
                                {{-- name of  desiners who desine this art  --}}
                                <div class="text-item sub-title">
                                    @foreach ($randomArts[$i]->desiners as $desiner)
                                        {{$desiner->full_name}},
                                    @endforeach
                                </div>
                                {{-- end  name of  desiners who desine this art  --}}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="slide-image">
                                <img src="{{asset(Storage::url($randomArts[$i]->url))}}" class="d-block w-100" alt="{{$randomArts[$i]->title}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
          @endfor
            {{-- end slider(carousel) items  --}}



        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      <div class="shapes">
          <div class="box"></div>
          <div class="circle"></div>
      </div>
    </div>
    
    {{-- <!-- about --> --}}
    <div id="about" class="container-fluid about-holder">
            <div class="container about">
                <div class="row">
                    <div class="col-md-6 about-img">
                   <img src="{{asset('img/intro-1-570x410.png')}}" alt="">
                    </div>
                    <div class="col-md-6 about-text d-flex flex-column justify-content-center">
                         <div class="text-title">Titre Titre Titre Titre</div>
                         <div class="text-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias fuga quo sed omnis. Saepe beatae soluta modi laborum voluptatum nemo magni assumenda, optio quod sequi. Recusandae illo natus totam molestias!</div>
                    </div>
                </div>
            </div>
    </div>

    {{-- <!-- gallery --> --}}
    <div id="gallery" class="gallery-holder container-fluid">
        <div class="gallery container">
            <div class="row section-title">
                <div class="text-center">
                    Galerie :
                </div>
            </div>
            <div class="row section-title">
                 @foreach ($arts as $art)
                    <div class="col-sm-12 col-md-6 col-lg-4 gallery-item">
                        <div  class="gallery-item-inner">
                            <img class="img img-responsive" src="{{asset(Storage::url($art->url))}}" alt="{{$art->title}}">
                            <div class="gallery-item-text">
                                <div class="item-title">
                                    {{$art->title}}
                                </div>
                            </div>
                        </div>
                    </div>
                     
                 @endforeach
                
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="pagination-links">{{$arts->onEachSide(1)->links()}}</div>
                {{-- <a class="btn btn-primary btn btn-show-all btn-secondary m-auto" href="#">SHOW ALL</a> --}}
            </div>
 
        </div>
    </div>
@endsection

@section('extr')
    
@endsection