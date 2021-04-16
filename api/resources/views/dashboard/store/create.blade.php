@extends('layouts.app')

@section('content')
<div class="container-fluid px-0 py-0 my-0 pls-70">
    <div id="store-banner" method="post" action="/dashboard/store/franchise/store" enctype="multipart/form-data" class="dash-store-panel w-100 d-flex flex-column" style="background: url('{{ asset('img/banner.png') }}'); background-size: cover ; background-position: center ;">
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
        <div class="w-100 h-100 d-flex align-items-end" style="background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0) 100%);">
            <div class="w-100 d-flex">
                <div class="" style="width: 70px ;height: 70px ;">
                    <div id="store-image" class="d-flex justify-content-center align-items-center" style="width: 50px ;height: 50px ;border-radius: 50% ;margin: 10px ;background: url('{{ asset('img/store.png') }}'); background-size: cover ; background-position: center ;">
                        <label for="image" class="d-flex justify-content-center align-items-center m-0" style="width: 50px ;height: 50px ;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#1DBECD" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>
                        </label>
                    </div>
                    
                </div>
                <div class="w-100 d-flex flex-column">
                    <div class="w-100 h-100 d-flex justify-content-start align-items-center">
                        <input name="franchise" id="franchise" placeholder="Nombre tienda" type="text" value="" class="w-100 border-0 bg-transparent text-white ml-3" style="outline: 0px !important ;font-size: 18px ;">
                    </div>
                    <div class="w-100 h-100 d-flex justify-content-start align-items-center">
                        <input name="franchise" id="franchise" placeholder="Sector" type="text" value="" class="w-100 border-0 bg-transparent text-white ml-3" style="outline: 0px !important ;font-size: 14px ;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-0 m-0">
        <div class="col p-0 m-0 d-flex">
            <div class="w-100">
                <h5 class="ml-2 mt-4 font-weight-bold text-center century">Seleccione categorias</h5>
                <div class="row m-0 p-0" id="categorias"></div>
            </div>
            <!--<div class="w-100">
                <h5 class="ml-2 mt-2 font-weight-bold century">Tiempo de preparacion</h5>
                <div class="d-flex m-2 p-2 rounded-pill bg-primary" style="width: 180px;">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                        </svg>
                    </div>
                    <div class="d-flex flex-column ml-2">
                        <div class="w-100 h-100 d-flex ">
                            <input type="number" placeholder="00" class="border-0 bg-transparent text-white h-100" style="outline: 0px ;font-size: 44px ;width: 60px;">
                            <div class="w-100 h-100 text-white d-flex align-items-center" style="font-size: 18px ;">
                                min
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
        <!--<div class="w-100">
            <h5 class="ml-2 mt-2 font-weight-bold century">Seleccione ubicacion</h5>
            <div class="w-100" style="height: 500px ;">
                <div id="map"></div>
            </div>
        </div>-->
    </div>
    <div class="row p-0 m-0">
        <div class="col p-0 m-0">
            <h5 class="ml-2 mt-2 font-weight-bold century">Tiempo de preparacion</h5>
                <div class="d-flex m-2 p-2 rounded-pill bg-primary" style="width: 180px;">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                        </svg>
                    </div>
                    <div class="d-flex flex-column ml-2">
                        <div class="w-100 h-100 d-flex ">
                            <input type="number" placeholder="00" class="border-0 bg-transparent text-white h-100" style="outline: 0px ;font-size: 44px ;width: 60px;">
                            <div class="w-100 h-100 text-white d-flex align-items-center" style="font-size: 18px ;">
                                min
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<script>
    let map;

    function initMap() {
      map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8,
      });
    }
</script>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNtwjTrvyPZFzE6XbUhSccljXgIUMWdK0&callback=initMap&libraries=&v=weekly"
      async
    ></script>
<script>
    $(function(){

        categorias = {!! $categories !!};
        console.log( categorias );
        for( $i = 0 ; $i < categorias.length ; $i++ ){
                console.log(categorias[$i].parent_id);
                if( categorias[$i].parent_id == null ){
                    $("#categorias").append(`
                    <div class="col-md-3 my-2">
                        <ul class="list-group">
                        <li class="list-group-item border-0 m-0 p-0 pl-3" data-parent="null">
                            <div class="custom-control form-control-lg custom-checkbox my-0 py-0" style="height: auto ;">  
                                <input name="categorias[]" value="${categorias[$i].id}" onChange="checkCategoria(this)" type="checkbox" class="custom-control-input" data-id="${categorias[$i].id}" id="categoria${categorias[$i].id}">  
                                <label id="label-${categorias[$i].id}" class="custom-control-label text-primary" for="categoria${categorias[$i].id}">${categorias[$i].name}</label>  
                            </div>
                            <ul class="list-group m-0 p-0" id="lista-categoria${categorias[$i].id}"></ul>
                        </li>
                    </ul>
                    </div>
                    
                        
                    `);
                    /*
                    <li class="list-group-item border-0 m-0 p-0 pl-3">
                            <div class="custom-control form-control-lg custom-checkbox my-0 py-0" style="height: auto ;">  
                                <input type="checkbox" class="custom-control-input" id="customCheck1">  
                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>  
                            </div>
                        </li>
                    */
                    /*$("#categorias").append(`
                    <li style="list-style:none;" data-parent="null" >
                        <div class="form-check">
                            <input name="categorias[]" value="${categorias[$i].id}" onChange="checkCategoria(this)" type="checkbox" class="form-check-input custom-control-input check-categoria" data-id="${categorias[$i].id}" id="categoria${categorias[$i].id}">
                            <label class="form-check-label custom-control-label" for="categoria${categorias[$i].id}">${categorias[$i].name}</label>
                        </div>
                        <ul id="lista-categoria${categorias[$i].id}"></ul>
                    </li>`);*/
                }
            }

        $("#image").on("change",function(){
            
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    console.log( e.target.result);
                    $("#store-image")
                    .css("background",`url(${e.target.result})`)
                    .css("background-size","cover")
                    .css("background-position","center");
                }
                reader.readAsDataURL(this.files[0]);
            }
        });

        $("#bg_image").on("change",function(){
            
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    console.log( e.target.result);
                    $("#store-banner")
                    .css("background",`url(${e.target.result})`)
                    .css("background-size","cover")
                    .css("background-position","center");
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    });

    function checkCategoria(e){
                $(`#label-${$(e).attr("data-id")}`).addClass("font-weight-bold")
                for( $i = 0 ; $i < categorias.length ; $i++ ){
                    if(categorias[$i].parent_id == parseInt( $(e).attr("data-id") ) ){
                        
                        if(e.checked) {
                            //alert(`#lista-categoria${categorias[i].parent_id}`);
                            $(`#lista-categoria${categorias[$i].parent_id}`).append(`
                            <li class="list-group-item border-0 m-0 p-0 pl-3" data-parent="null">
                            <div class="custom-control form-control-lg custom-checkbox my-0 py-0" style="height: auto ;">  
                                <input name="categorias[]" value="${categorias[$i].id}" onChange="checkCategoria(this)" type="checkbox" class="custom-control-input" data-id="${categorias[$i].id}" id="categoria${categorias[$i].id}">  
                                <label class="custom-control-label" id="label-${categorias[$i].id}" for="categoria${categorias[$i].id}">${categorias[$i].name}</label>  
                            </div>
                            <ul class="list-group m-0 p-0" id="lista-categoria${categorias[$i].id}"></ul>
                        </li>
                            `);
                            /*$(`#lista-categoria${categorias[i].parent_id}`).append(`
                            <li style="list-style:none;" data-parent="null" >
                                <div class="form-check">
                                    <input name="categorias[]" value="${categorias[i].id}" name="categorias[]" onChange="checkCategoria(this)" type="checkbox" class="form-check-input custom-control-input check-categoria" data-id="${categorias[i].id}" id="categoria${categorias[i].id}">
                                    <label class="form-check-label custom-control-label" for="categoria${categorias[i].id}">${categorias[i].name}</label>
                                </div>
                                <ul id="lista-categoria${categorias[i].id}"></ul>
                            </li>
                            `);*/
                        } else {
                            //if(categorias[$i].parent_id != null){
                                $(`#label-${$(e).attr("data-id")}`).removeClass("font-weight-bold");
                            //}
                            
                            $(`#lista-categoria${categorias[$i].parent_id}`).empty();
                        }

                        
                    }
                }
            }
</script>
@endsection