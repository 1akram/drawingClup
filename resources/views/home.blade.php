@extends('masterLayout.master')
@section('head')
@endsection

@section('content')


    <!-- SlideShow -->
    <div class="slide-holder container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <div class="container ">
                  <div class="row">
                        <div class="col-6 d-flex justify-content-center">
                            <div class="slide-text d-flex  flex-column">
                                <div class="text-item title">
                                    Best
                                </div>
                                <div class="text-item sub-title">
                                    Equipment &
                                    Consumables
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="slide-image">
                            <img src="{{asset('/img/slide-2.jpg')}}" class="d-block w-100" alt="..."></div>
                        </div>
                    </div>
              </div>
          </div>
          
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
    
    <!-- about -->
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

    <!-- gallery -->
    <div id="gallery" class="gallery-holder container-fluid">
        <div class="gallery container">
            <div class="row section-title">
                <div class="text-center">
                    Galerie :
                </div>
            </div>
            <div class="row section-title">
                @for ($i = 0; $i < 6; $i++)
                    
                <div class="col-sm-12 col-md-6 col-lg-4 gallery-item">
                    <div class="gallery-item-inner">
                        <img class="img img-responsive" src="{{asset('img/gallery.jpg')}}" alt="gallery">
                        <div class="gallery-item-text">
                            <div class="item-title">
                                Name Table
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            {{--     <div class="col-sm-12 col-md-6 col-lg-4 gallery-item">
                    <div class="gallery-item-inner">
                        <img class="img img-responsive" src="assets/img/gallery.jpg" alt="gallery">
                        <div class="gallery-item-text">
                            <div class="item-title">
                                Name Table
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 gallery-item">
                    <div class="gallery-item-inner">
                        <img class="img img-responsive" src="assets/img/gallery.jpg" alt="gallery">
                        <div class="gallery-item-text">
                            <div class="item-title">
                                Name Table
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 gallery-item">
                    <div class="gallery-item-inner">
                        <img class="img img-responsive" src="assets/img/gallery.jpg" alt="gallery">
                        <div class="gallery-item-text">
                            <div class="item-title">
                                Name Table
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 gallery-item">
                    <div class="gallery-item-inner">
                        <img class="img img-responsive" src="assets/img/gallery.jpg" alt="gallery">
                        <div class="gallery-item-text">
                            <div class="item-title">
                                Name Table
                            </div>
                        </div>
                    </div>
                </div> --}}
        
            </div>
            <div class="row justify-content-center align-items-center">
                <a class="btn btn-primary btn btn-show-all btn-secondary m-auto" href="#">SHOW ALL</a>
            </div>
 
        </div>
    </div>
@endsection

@section('extr')
    
@endsection