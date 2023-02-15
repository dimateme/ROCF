<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ROCF - Connexion</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="frontend/connexion/css/style.css">


	</head>

	<body>

		<div class="wrapper">

			<div class="inner">

				<div class="image-holder">
					<img src="frontend/connexion/images/rocf_bsl_logocomplet.png" alt="">
				</div>
				<form method="POST" action="/connecter">
				@csrf
					<h3>Connexion</h3>
					<div class="form-holder">
                        {!! $errors->first('courriel', '<div class="error-message">:message</div>')!!}
						<input type="text" name="courriel" placeholder="Courriel" class="form-control">
					</div>
					<div class="form-holder">
                        {!!$errors->first('mdp', '<div class="error-message">:message</div>')!!}
						<input type="password" name="mdp" placeholder="Mot de Passe" class="form-control" style="font-size: 15px;">
					</div>
					<div class="form-login">
						<button type="submit">Connexion</button> <hr>
						<a href="{{route('accueil')}}">Retour à l'accueil</a>
					</div>
				@csrf
				</form>
			</div>
		</div>

		<script src="frontend/connexion/js/jquery-3.3.1.min.js"></script>
		<script src="frontend/connexion/js/main.js"></script>
	</body>
</html>
