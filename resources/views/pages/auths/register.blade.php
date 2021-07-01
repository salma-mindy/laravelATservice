@extends('bases.master')

@section('style')
    <link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />

    <style>
        .btn_recruteur_prestataire{
            height: 100px !important;
            width: 400px !important;
            padding: 35px;
            background-color: #39a847;
            margin: 77px;
        }

        a{
            text-decoration: none;
            color: #fff;
        }

        a:hover{
            color: aquamarine;
        }

    </style>
@endsection

@section('content')
    <!-- =====Header=============================================== -->	 
    <div class="page-title-area" style="background-image: url('bienv.png');">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2 style="font-size: 20px;">SE CREER UN COMPTE</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Login Section =============================================== -->

    <section class="banner-login">
        <div class="container">
                      <br><br>
            <div class="row text-center">
                <div class="col-lg-6">
                    <div class="btn_recruteur_prestataire">
                        Vous voulez recruter ?
                        <a href="{{ route('formRecruteur') }}"> Cliquez ici
                            <i class="icofont-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="btn_recruteur_prestataire">
                        Vous cherchez du travail ?
                        <a href="{{ route('prestataire') }}">Cliquez ici
                            <i class="icofont-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.row -->
            
        </div><!-- /.container -->
    </section><!-- /section --> 		
@endsection