@extends('bases.master')

@section('styles')
<link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />

<style>
    #btn-postuler{
    display: none !important;
}
</style>
@stop

@section('content')

<!-- la bannière -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
            <div class="container">
                <div class="page-title-text">
                <h2>Details des offres</h2>
                <ul>
                    <li><a href="index.html">Offres</a></li>
                    <li><i class="icofont-simple-right"></i></li>
                    <li>Femme de ménage</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- la bannière -->

<!-- description de l'offre (debut) -->
    <div class="job-details-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="job-details-item">
                        <div class="job-description">
                            <h1>Description de l'offre</h1>
                            <h6> <b style="color: #4cce5c">Salaire</b> : 80 000 Fr - 100 000 Fr <br>
                            <b style="color: #4cce5c">Lieu</b> :  Côte d'Ivoire, Abidjan, Angré 7 ème tranche 
                            </h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
                        </div>
                        <div class="job-knowledge">
                            <h2>Profil recherché</h2>
                            <ul>
                            <li>
                                <i class="icofont-hand-drawn-right"></i>
                                Etre rigoureux dans le travail
                            </li>
                            <li>
                                <i class="icofont-hand-drawn-right"></i>
                                Savoir utiliser des équipements tels que...
                            </li>
                            <li>
                                <i class="icofont-hand-drawn-right"></i>
                                Lorem ipsum dorlo sit amet consector...
                            </li>
                            <li>
                                <i class="icofont-hand-drawn-right"></i>
                                Lorem ipsum dorlo sit amet consector...
                            </li>
                            <li>
                                <i class="icofont-hand-drawn-right"></i>
                                Lorem ipsum dorlo sit amet consector...
                            </li>
                            <li>
                                <i class="icofont-hand-drawn-right"></i>
                                Lorem ipsum dorlo sit amet consector...
                            </li>
                            </ul>
                        </div>

                        <div class="text-center">
                            <a class="job-details-btn" onclick="myFunction()">Postuler</a>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4">
                    <div class="job-details-item">
                        <div class="job-overview">
                            <h3>Catégories d'Offre</h3>
                            <ul>
                                <li><p>Femme de ménage</p></li>
                                <li><p>Cuisinier</p></li>
                                <li><p>Technicien</p></li>
                                <li><p>Qualification</p></li>
                                <li><p>Lorem lorem lorem</p></li>
                                <li><p>Lorem lorem lorem</p></li>
                                <li><p>Lorem lorem lorem</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        <!-- formulaire -->
        <div class="create-account-area pt-100 pb-100" id="btn-postuler">
            <div class="container">
                <form>
                    <div class="create-education">
                        <div class="create-education-wrap">
                            <div class="create-education-left">
                                <h3 style="font-family:	'Engravers MT'; font-size: 20px;">Renseigner vos informations s'il vous plaît</h3>
                            </div>
                        </div>
                        <!-- <form> -->
                        <div class="row">

                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <div class="row">
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="lastname">PRENOM</label>
                                            <input type="text" name="prenom" id="lastname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="lastname">PRENOM</label>
                                            <input type="text" name="prenom" id="lastname" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">VOTRE EMAIL</label>
                                            <input type="email" placeholder="Adresse Mail" name="email" id="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="password">MOT DE PASSE</label>
                                            <input type="password" placeholder="Votre mot de passe" name="password" id="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="conf" class="label-file">CONFIRMER </label>
                                            <input type="password" placeholder="Mot de passe confirmation" name="password" id="password" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-1"></div>

                        </div>
                        <!-- </form> -->
                        <!-- <div class="create-education"> -->
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <button type="submit" class="btn btn-primary" style="width: 100%">ENREGISTRER</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-danger" style="width: 100%">ANNULER</button>
                            </div>
                        </div>
                    <!-- </div> -->
                    </div>

                    
                </form>
            </div>
	    </div>
        <!-- formulaire -->

        </div>
    </div>
   
<!-- description de l'offre (fin) -->

@stop

@section('script')
<script>
    function myFunction() {
        var x = document.getElementById("btn-postuler");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
@stop