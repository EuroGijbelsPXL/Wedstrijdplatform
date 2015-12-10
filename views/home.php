<div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
	<!-- Stack the columns on mobile by making one full-width and the other half-width -->
	<div class="row">
		<div class="col-md-8 border">
			<div class="row">
				<div class=" col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 speluitleg border">
					<h1>Speluitleg</h1>
					<p> {{homeCtrl.uitleg}}</p>
				</div>			
			</div>
			<div class="row hidden-xs">
				<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1  border">
					<ul class="ch-grid">
						<li>
							<div class="ch-item ch-img-1 img-responsive">
								<div class="ch-info">
									<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
										<form class="form-signin" role="form" method="post" action="index.php">
											<h1 class="form-signin-heading">Login</h1>
											<div class="form-input-login">
												<input name="inputEmail" type="email" id="inputEmail" class="form-control login-control" placeholder="Email adres" required autofocus>
												<input name="inputPassword" type="password" id="inputPassword" class="form-control login-control" placeholder="Wachtwoord" required>
											</div>	
											<div class="checkbox">
											  <label>
												<input type="checkbox" value="remember-me"> Mij onthouden </input>
											  </label>
											</div>
											<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
										</form>
									</div>
										<p><a href="#">Wachtwoord vergeten</a></p>
										<p><a href="#">Registreer</a></p>

								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
			</div>
		</div>
		<div class="border">
			<div class="row">
				<div  ng-repeat="prijs in homeCtrl.prijzen" class="col-xs-12 col-sm-4 col-md-4 border">
					<h1 class="prijsTitel">{{prijs.type}}</h1>
					<img src="assets/img/fruit/{{prijs.afb}}" class="img-responsive banner prijs">
				</div>
			</div>	
		</div>
	</div>
</div>		
