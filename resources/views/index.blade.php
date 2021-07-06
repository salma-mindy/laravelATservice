@extends('bases.master')

@section('style')
    <style>
        .tab-content{
          background: #51CE60;
        }
        
        .img_box_left{
          width: 80%;
          border-radius: 20px;
          padding-top: 30px;
          padding-bottom: 30px;
        }
        
        .img_box_right{
          width: 80%;
          padding-top: 30px;
          padding-bottom: 30px;
        }
    
        .box .nav button{
          color: #130a02 !important;
          font-size: 16px;
          border: 1px solid #000000;
          margin-right: 30px;
          border-radius: 0% !important;
        }


        .box .nav button.active {
            color: #ffffff !important;
            background-color: #51CE60 !important;
        }

        .btn1{
            color: #ffffff !important;
            margin-top: 150px;
            margin-bottom: 10px !important;
        }
        .btn{
            color: #ffffff !important;
        }
    </style>
@stop

@section('content')

    <div class="banner-area banner-area-three">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-text">
                        <h1>Rechercher ici pour <span>Mieux</span> Employer</h1>
                        <p>Travailler, Récruter & opportunités de carrière futures</p>
                        <div class="banner-form-area">
                            <form>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Titre emploi">
                                            <label>
                                                <i class="icofont-search-1"></i>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <select class="form-select" aria-label="Default select example">
                                                <option>Categorie</option>
                                                <option>Aide ménagère</option>
                                                <option>Nousnous</option>
                                                <option>Electricien</option>
                                                <option>Plombier</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn banner-form-btn">Réchercher</button>
                            </form>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img src="{{ asset('assets/img/home-3/banner.png') }}" alt="Banner">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jobseeker-area">
        <div class="container">
            <div class="row job-wrap">

                <div class="col-sm-6 col-lg-6">
                    <div class="jobseeker-item">
                        <div class="jobseeker-icon">
                            <i class="flaticon-job-search"></i>
                        </div>
                        <div class="jobseeker-inner">
                            <span></span>
                            <h3>Vous cherchez du travail ?</h3>
                        </div>
                        <a href="{{ route('prestataire') }}">Cliquer ici
                            <i class="icofont-arrow-right"></i>
                        </a>
                    </div>
                </div>

				<!-- <div class="col-sm-4 col-lg-4">
                    <div class="jobseeker-item">
                        <div class="jobseeker-icon">
                            <i class="flaticon-job-search"></i>
                        </div>
                        <div class="jobseeker-inner">
                            <span></span>
                            <h3>Vous voulez recruter ?</h3>
                        </div>
                        <a href="create-account.html">Cliquer ici
                            <i class="icofont-arrow-right"></i>
                        </a>
                    </div>
                </div> -->

                <div class="col-sm-6 col-lg-6">
                    <div class="jobseeker-item">
                        <div class="jobseeker-icon">
                            <i class="flaticon-recruitment"></i>
                        </div>
                        <div class="jobseeker-inner">
                            <span></span>
                            <h3>Vous voulez recruter ?</h3>
                        </div>
                        <a href="{{ route('formRecruteur') }}"> Cliquer ici
                            <i class="icofont-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('include.section-bas')

<!-- section "nos partenaies" (debut)-->
<section class="companies-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Nos partenaires</h2>
        </div>

        <div class="companies-slider owl-theme owl-carousel">
            <div class="companies-item">
                <img src="{{ asset('orange.png') }}" alt="partenaire">
                <h3>
                    <a href="#">Orange</a>
                </h3>
            </div>
            <div class="companies-item">
                <img src="{{ asset('vas-technologies.png') }}" alt="partenaire">
                <h3>
                    <a href="#">Vas Technologies</a>
                </h3>
                <!-- <a class="companies-btn" href="create-account.html">Hiring</a> -->
            </div>
            <div class="companies-item">
                <img src="{{ asset('agiles-telecoms.png') }}" alt="partenaire">
                <h3>
                    <a href="company-details.html">Agiles Telecoms</a>
                </h3>
            </div>
            <div class="companies-item">
                <img src="{{ asset('orange.png') }}" alt="partenaire">
                <h3>
                    <a href="#">Orange</a>
                </h3>
            </div>
            <div class="companies-item">
                <img src="{{ asset('vas-technologies.png') }}" alt="partenaire">
                <h3>
                    <a href="#">Vas Technologies</a>
                </h3>
                <!-- <a class="companies-btn" href="create-account.html">Hiring</a> -->
            </div>
            <div class="companies-item">
                <img src="{{ asset('agiles-telecoms.png') }}" alt="partenaire">
                <h3>
                    <a href="company-details.html">Agiles Telecoms</a>
                </h3>
            </div>
            <div class="companies-item">
                <img src="{{ asset('orange.png') }}" alt="partenaire">
                <h3>
                    <a href="#">Orange</a>
                </h3>
            </div>
            <div class="companies-item">
                <img src="{{ asset('vas-technologies.png') }}" alt="partenaire">
                <h3>
                    <a href="#">Vas Technologies</a>
                </h3>
                <!-- <a class="companies-btn" href="create-account.html">Hiring</a> -->
            </div>
            <div class="companies-item">
                <img src="{{ asset('agiles-telecoms.png') }}" alt="partenaire">
                <h3>
                    <a href="company-details.html">Agiles Telecoms</a>
                </h3>
            </div>
        </div>
        
    </div>
</section>
<!-- section "nos partenaies" (fin)-->

@stop
