<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<!-- Stack the columns on mobile by making one full-width and the other half-width -->
		<div class="row">
		  <div class="col-md-8 border">
			<div class="row">
				<div class="col-md-12  border">
				<h1>Speluitleg</h1>
				<p ng-repeat="uitleg in uitleg" > {{uitleg.spel}}</p>
				</div>

				<h1>Meerdere views in een app</h1>
				<div ng-view>
					<!-- Hierin worden dynamisch de Views geladen -->
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-12  border">
					<ul class="ch-grid">
						<li>
							<div class="ch-item ch-img-1 img-responsive">
								<div class="ch-info">
									<div class="col-md-6 col-md-offset-3">
									<form class="form-signin" role="form" method="post" action="index.php">
										<h2 class="form-signin-heading">Login</h2>
										<label for="inputEmail" class="sr-only">Email adres</label>
										<input name="inputEmail" type="email" id="inputEmail" class="form-control" placeholder="Email adres" required autofocus>
										<label for="inputPassword" class="sr-only">Wachtwoord</label>
										<input name="inputPassword" type="password" id="inputPassword" class="form-control" placeholder="Wachtwoord" required>
										<div class="checkbox">
										  <label>
											<input type="checkbox" value="remember-me"> Mij onthouden
										  </label>
										</div>
										<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
									</form>
				</div>
										<p><a href="http://drbl.in/eOPF">Wachtwoord vergeten</a><a href="http://drbl.in/eOPF">Registreer</a></p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
			</div>
		  </div>
		  <div class="col-md-4 border">
			<div class="row">
				<div  ng-repeat="prijs in prijzen" class="col-xs-4 col-sm-4 col-md-12 border">
					<h1 class="prijsTitel">{{prijs.type}}</h1>
					<img src="assets/img/fruit/{{prijs.afb}}" class="img-responsive banner prijs">
				</div>

			</div>	
		  </div>
		</div>

		</div>		
	</div>
</div>

	


