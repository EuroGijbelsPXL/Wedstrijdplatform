<div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
	<!-- Stack the columns on mobile by making one full-width and the other half-width -->
	<div class="row">
		<div class="col-md-8 border">
			<div class="row">
				<div class="col-md-10 col-md-offset-1  border">
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
										<form class="form-signin" role="form" method="post" action="#/home" onsubmit="return checkForm(this);">
											<h1 class="form-signin-heading">Registreren</h1>
											<label for="inputEmail" class="sr-only">Email adres</label>
											<input name="inputEmail" type="email" id="inputEmail" class="form-control login-control" placeholder="Email adres" required autofocus>
											<label for="inputPassword1" class="sr-only">Wachtwoord</label>
											<input name="inputPassword1" type="password" id="inputPassword1" class="form-control login-control" placeholder="Wachtwoord" required onchange="try{setCustomValidity('')}catch(e){}">
											<label for="inputPassword2" class="sr-only">Wachtwoord herhalen</label>
											<input name="inputPassword2" type="password" id="inputPassword2" class="form-control login-control" placeholder="Wachtwoord herhalen" required onchange="try{setCustomValidity('')}catch(e){}">
											
											<button class="btn btn-lg btn-primary btn-block" name="registreren" id="registreren" type="submit">Registreer</button>
										</form>
									</div>
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


