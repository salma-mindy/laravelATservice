@extends('bases.master')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">	
<link type="text/css" href="{{ asset('assets/css/login.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
	<style>
		.label-file {
		    cursor: pointer;
		    color: #00b1ca;
		    font-weight: bold;
		}
		.label-file:hover {
		    color: #25a5c4;
		}

		.input-file {
		    display: none;
		}

		/* .multi_select_box{
			width: 400px;
			margin: 80px auto;
		}

		.multi_select_box select{
			width: 100%;
		}

		.multi_select_box button{
			background-color: blue !important;
			color: #fff !important;
			padding: 25px; */
		/* } */
	</style>
@stop

@section('content')
	<div class="page-title-area" style="background-image: url('bienv.png');">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2 style="font-size: 20px;">TROUVEZ DES POSTES CHEZ NOUS</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="create-account-area pt-100 pb-100">
	    <div class="container">
	    	<form>
		    	<div class="create-information">
					
					<h3 style="font-family:	'Engravers MT'; font-size: 20px;">Informations de contact</h3>
						<!-- <div class="create-information-btn">
							<a href="#">Upload Cover Photo</a>
							<a href="#">Upload Your CV</a>
						</div> -->
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label for="name">NOM</label>
								<input type="text" name="nom" id="name" class="form-control">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="lastname">PRENOM</label>
								<input type="text" name="prenom" id="lastname" class="form-control">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="phone">NUMERO</label>
								<input type="tel" name="phone" id="phone" class="form-control">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="dateN">DATE DE NAISSANCE</label>
								<input type="date" name="date_naiss" id="dateN" class="form-control">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="pays">PAYS</label>
								<select name="pays" id="pays" class="form-control">
									<option value="">S??lectionnez le pays</option>
									<option value="">C??te d'Ivoire</option>
									<option value="">Mali</option>
								</select>
							</div>
						</div>
						<!-- <div class="col-lg-4">
							<div class="form-group">
								<label for="ville">VILLE</label>
								<input type="text" id="ville" class="form-control">
							</div>
						</div> -->
						<div class="col-lg-4">
							<div class="form-group">
								<label for="ville">VILLE</label>
								<select name="ville" id="ville" class="form-control">
									<option value="">S??lectionnez la ville</option>
									<option value="">Abidjan</option>
									<option value="">Daloa</option>
								</select>
							</div>
						</div>
						{{--
						<div class="col-lg-6">
							<div class="form-group">
								<label>Address:</label>
								<input type="text" class="form-control">
							</div>
						</div>
						
						<div class="col-lg-12">
							<div class="form-group">
								<div class="gender-area">
									<span>Gender</span>
						 			<input type="radio" name="gender" id="male" value="male" checked>
									<label for="male">Male</label>
									<input type="radio" name="gender" id="female" value="female">
									<label for="female">Female</label>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Description</label>
								<textarea id="your_message" class="form-control" rows="8"></textarea>
							</div>
						</div>
						--}}
					</div>
					<!-- </form> -->
				</div>

				<div class="create-education">
					<div class="create-education-wrap">
						<div class="create-education-left">
							<h3 style="font-family:	'Engravers MT'; font-size: 20px;">Informations d'Identification</h3>
						</div>
						<!-- <div class="create-education-right">
							<a href="#">Add Education</a>
						</div> -->
					</div>
					<!-- <form> -->
					<div class="row">
						<div class="col-lg-8">
							<div class="row">
								
								<div class="col-lg-6">
									<div class="form-group">
										<label for="work">TYPE TRAVAIL</label>
										<select name="work" id="work" class="form-control">
											<option value="">Votre domaine activit?? *</option>
											<option value="1">Plomberie</option>
											<option value="2">Menuiserie</option>
											<option value="3">Carrelage</option>
											<option value="4">Peinture</option>
											<option value="5">Ma??onnerie</option>
											<option value="6">Feronnerie</option>
											<option value="7">M??canique</option>
											<option value="8">Vitrerie</option>
											<option value="9">Devis et plan de maison</option>
											<option value="10">Prestation informatique</option>
											<option value="12">Tapisserie</option>
											<option value="13">Electricit??</option>
											<option value="15">Electronique</option>
											<option value="16">Serigraphie</option>
											<option value="21">M??nag??re</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="dateN">AUTRES A PRECISER</label>
										<input type="text" placeholder="Autre(s) domaine activit?? ?? preciser" name="date_naiss" id="dateN" class="form-control">
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

						<div class="col-lg-4">
							<div class="row">
								<div class="col-lg-10">
									<div class="form-group">
										<label for="file" class="label-file">PHOTO DE PROFIL</label>
										<div class="card" style="height: 207px; width: 250px;"></div>
									</div>
								</div>
								<div class="col-lg-10">
									<div class="form-group">
										<input type="file" class="form-control" id="customFile" />
									</div>
								</div>
							</div>
							<!-- <div class="">
								<strong>Select Language:</strong>
								<select id="multiple-checkboxes" multiple="multiple">
									<option value="php">PHP</option>
									<option value="javascript">JavaScript</option>
									<option value="java">Java</option>
									<option value="sql">SQL</option>
									<option value="jquery">Jquery</option>
									<option value=".net">.Net</option>
								</select>
							</div> -->
  
						</div>

					</div>
					<!-- </form> -->
				</div>

				<!-- <div class="create-education"> -->
					<div class="row">
						<div class="col-lg-6">
							<button type="submit" class="btn btn-primary" style="width: 100%">ENREGISTRER</button>
						</div>
						<div class="col-lg-6">
							<button type="submit" class="btn btn-danger" style="width: 100%">ANNULER</button>
						</div>
					</div>
				<!-- </div> -->
			</form>
		</div>
	</div>
@stop


@section('script')
	{{--<script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script src="assets/js/jquery.min.js"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

	<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>

	<script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>

	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

	<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

	<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>

	<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>

	<script src="{{ asset('assets/js/wow.min.js') }}"></script>

	<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>

	<script src="{{ asset('assets/js/custom.js') }}"></script>--}}
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script> -->


	<!-- <script>
		    $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });
    });
	</script> -->
@stop