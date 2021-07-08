@extends('bases.master')

@section('style')
	<link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />

    <style>
        .service {
            position: relative !important;
            width: 100% !important;
        }

        .service .card {
            width: 96% !important;
            height: 270px !important;
            border: 2px solid #39a947;
            border-radius: 0% !important;
            margin-bottom: 20px;
            text-align: center;
        }


        .service .card h3 {
            font-size: 20px !important;
            font-weight: 400 !important;
            color: #39a947 !important;
        }

        h3{
            margin-top: 20%;

        }

        .service .card a.btn {
            margin-top: 138px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px !important;
            text-transform: uppercase !important;
            color: #fff !important;
            border-radius: 0 !important;
            background: #121518 !important;
            transition: .3s !important;
        }

        .service .card:hover a.btn {
            color: #fff !important;
            background-image: linear-gradient(to left,#39a947, #4cce5c) !important;
        }
    </style>
@stop

@section('content')
	<div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2 style="font-size: 20px;">NOS SERVICES</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header mt-3">
                <h2>Nos différents Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Lorem
                            </h3>
                            <a class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Design</h3>
                            <a class="btn" data-bs-toggle="modal" data-bs-target="#exampleMDld">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Design</h3>
                            <a class="btn" data-bs-toggle="modal" data-bs-target="#modal3">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Design</h3>
                            <a class="btn" data-bs-toggle="modal" data-bs-target="#modal4">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Design</h3>
                            <a class="btn" data-bs-toggle="modal" data-bs-target="#modal5">Lire plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Projets</h3>
                            <a class="btn" data-bs-toggle="modal" data-bs-target="#modal6">Lire plus</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Gestion de contenu</h3>
                            <a class="btn" data-bs-toggle="modal" data-bs-target="#modal7">Lire plus</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="card">
                            <h3>Formation</h3>
                            <a class="btn" data-bs-toggle="modal" data-bs-target="#modal8">Lire plus</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<!-- Les modals (debut) -->
<!-- Modal 1-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lorem 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="color: red;">
            Lorem 1 ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta. <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta.
        </p>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<!-- modal 1 -->


<!-- modal 2 -->
<div class="modal fade" id="exampleMDld" tabindex="-1" aria-labelledby="exampleMDldLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleMDld">Lorem 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="color: red;">
            Lorem 2 ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta. <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta.
        </p>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<!-- modal 2 -->


<!-- modal 3 -->
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal3">Lorem 3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="color: red;">
            Lorem 3 ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta. <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta.
        </p>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<!-- modal 3 -->

<!-- modal 4 -->
<div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal4">Lorem 4</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="color: red;">
            Lorem 4 ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta. <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta.
        </p>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<!-- modal 4 /-->

<!-- modal 5 -->
<div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="modal5Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal5">Lorem 5</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="color: red;">
            Lorem 5 ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta. <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta.
        </p>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<!-- modal 5 -->

<!-- modal 6 -->
<div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="modal6Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal6">Lorem 6</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="color: red;">
            Lorem 6 ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta. <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta.
        </p>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<!-- modal 6 -->

<!-- modal 7 -->
<div class="modal fade" id="modal7" tabindex="-1" aria-labelledby="modal7Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal7">Lorem 7</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="color: red;">
            Lorem 7 ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta. <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta.
        </p>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<!-- modal 7 -->

<!-- modal 8 -->
<div class="modal fade" id="modal8" tabindex="-1" aria-labelledby="modal8Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal8">Lorem 8</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="color: red;">
            Lorem 8 ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta. <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptates ratione fugiat officiis labore voluptatibus magnam! Necessitatibus, 
            non ducimus nesciunt amet aliquid doloribus reiciendis recusandae fugit exercitationem, 
            porro ipsum debitis soluta.
        </p>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
<!-- modal 8 -->
<!-- Les modals (fin) -->


    <!-- Service End -->
@stop