@extends('layouts.app')

@section('content')
  <!-- Demo styles -->
  <style>
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;

    }
  </style>
<div class="container-fluid px-0 py-0 my-0 pls-70">
    <form id="form-franchise" method="post" action="/dashboard/store/franchise/store" enctype="multipart/form-data" class="dash-store-panel w-100 d-flex flex-column" style="background: url('@if( Auth::user()->bg_image == null ) {{ asset('img/bg_default.jpg') }} @else {{ asset(Auth::user()->bg_image) }} @endif'); background-size: cover ; background-position: center ;">
        @csrf
        <input type="file" name="bg_image" id="bg_image" style="width: 0px ;height: 0px ;">
        <input type="file" name="image" id="image" style="width: 0px ;height: 0px ;">
        <div class="w-100 h-100 d-flex justify-content-end">
            <label for="bg_image" class="p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#1DBECD" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                </svg>
            </label>
        </div>
        <div class="w-100 h-100 d-flex align-items-end" style="background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);">
            <div class="w-100 d-flex">
                <div class="" style="width: 70px ;height: 70px ;">
                    <!--<img src="@if( Auth::user()->image == null ) {{ asset('img/logo_blue.png') }} @else {{ asset(Auth::user()->image) }} @endif" style="width: 50px ;height: 50px ;border-radius: 50% ;margin: 10px ;" alt="">-->
                    <div class="d-flex justify-content-center align-items-center" style="width: 50px ;height: 50px ;border-radius: 50% ;margin: 10px ;background: url('@if( Auth::user()->image == null ) {{ asset('img/logo_blue.png') }} @else {{ asset(Auth::user()->image) }} @endif'); background-size: cover ; background-position: center ;">
                        <label for="image" class="d-flex justify-content-center align-items-center" style="width: 50px ;height: 50px ;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#1DBECD" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                        </label>
                    </div>
                </div>
                <div class="w-100 d-flex align-items-center">
                    <input name="franchise" id="franchise" placeholder="Nombre tienda" type="text" value="{{Auth::user()->franchise}}" class="w-100 border-0 bg-transparent text-white ml-3" style="outline: 0px !important ;font-size: 18px ;">
                    <i id="editFranchise" class="px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#1DBECD" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg>
                    </i>
                </div>
            </div>
        </div>
    </form>
      <!-- Swiper -->
    <div class="row m-0 p-0">
        <div class="col text-right m-0 p-0">
            <a href="/dashboard/store/create" type="button" class="btn btn-primary font-weight-bold m-3">CREAR TIENDA</a>
        </div>
    </div>
    <div class="row m-0 p-0">
        <div class="col m-0 p-0">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @for( $i = 0; $i < 10 ; $i++ )
                        <div class="swiper-slide d-flex align-items-end" style="background-image:url({{ asset(Auth::user()->bg_image) }})">
                            <div class="w-100 d-flex" style="background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);">
                                <div class="">
                                    <div class="" style="width: 50px ;height: 50px ;margin: 10px ;">
                                        <img class="rounded-circle" width="100%" height="100%" src="{{ asset(Auth::user()->bg_image) }}" alt="">
                                    </div>
                                </div>
                                <div  class="w-100 d-flex align-items-start justify-content-center flex-column">
                                    <h5 class="text-left text-white p-0 m-0">Hola</h5>
                                    <p class="text-left text-white p-0 m-0">Mundo</p>
                                </div>
                            </div>
                        </div>
                    @endfor    
                </div>
                <!-- Add Pagination -->
                <!--<div class="swiper-pagination"></div>-->
              </div>
        </div>
    </div>
  
</div>   
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script> 
<script>
    $(function(){
        $("#image, #bg_image").on("change",function(){
            $("#form-franchise").submit();
        });

        $("#editFranchise").on("click",function(){
            $("#franchise").focus();
        });

    })
</script>
@endsection

@section('javascript')

@endsection