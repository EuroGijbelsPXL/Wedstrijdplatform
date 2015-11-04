	<div class="col-md-8 col-md-offset-2">
		<!-- Stack the columns on mobile by making one full-width and the other half-width -->
		<div class="row profiel_dim">
			<div class="col-md-2 profiel_nav">
				<div  class="row">
					<h1 ng-click="profiel=true; ww=false; email=false" ng-init="profiel=true"><a href="">Profiel</a></h1>
				</div>
				<div class="row">
					<h1 ng-click="ww=true; profiel=false; email=false" ng-init="ww=false"><a href="">Wachtwoord</a></h1>
				</div>
				<div class="row">
					<h1 ng-click="email=true; profiel=false; ww=false" ng-init="email=false"><a href="">E-mail</a></h1>
				</div>
			</div>
			<div ng-show="profiel" class="col-md-10 borderleft">
				<div class="row">
					<div class="col-md-12 border">
						<form class="form-horizontal" role="form" method="post" action="index.php">
							<h1>Profiel aanpassen</h1>
							<!--Voornaam-->
							<div class="row">
								<div class="col-md-8 border">
									<div class="col-md-12 border">
										<div class="form-group">
											<label for="voornaam" class="col-sm-3 control-label">Voornaam</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" id="voornaam" name="voornaam" placeholder="Voornaam" value="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Achternaam-->
							<div class="row">
								<div class="col-md-8 border">
									<div class="col-md-12 border">
										<div class="form-group">
											<label for="achternaam" class="col-sm-3 control-label">Achternaam</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" id="achternaam" name="achternaam" placeholder="Achternaam" value="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Adres-->							
							<div class="row">
									<div class="col-md-8 border">
										<div class="col-md-6 border">
											<div class="form-group">
												<label for="straat" class="col-sm-6 control-label">Straat</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="straat" name="straat" placeholder="Voorbeeldstraat" value="">
												</div>
											</div>
										</div>
										<div class="col-md-3 border">
											<div class="form-group">
												<label for="nummer" class="col-sm-3 control-label">Nr.</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="nummer" name="nummer" placeholder="" value="">
												</div>
											</div>
										</div>
										<div class="col-md-3 border">
											<div class="form-group">
												<label for="bus" class="col-sm-3 control-label">Bus</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="bus" name="bus" placeholder="" value="">
												</div>
											</div>
										</div>
									</div>
							</div>
							<!--Gemeente-->							
							<div class="row">
									<div class="col-md-8 border">
										<div class="col-md-6 border">
											<div class="form-group">
												<label for="gemeente" class="col-sm-6 control-label">Gemeente</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="gemeente" name="gemeente" placeholder="" value="">
												</div>
											</div>
										</div>
										<div class="col-md-4 border">
											<div class="form-group">
												<label for="postcode" class="col-sm-6 control-label">Postcode</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="postcode" name="postcode" placeholder="" value="">
												</div>
											</div>
										</div>
									</div>
							</div>
							<!--Geboortedatum-->
							<div class="row">
								<div class="col-md-8 border">
									<div class="col-md-12 border">
										<div class="form-group">
											<label for="gebDatum" class="col-sm-3 control-label">Geboortedatum</label>
											<div class="col-sm-4">
												<input type="date" class="form-control" id="gebDatum" name="gebDatum" placeholder="" value="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Geslacht-->
							<div class="row">
								<div class="col-md-8 border">
									<div class="col-md-12 border">
										<div class="form-group">
											<label for="lastName" class="col-sm-3 control-label">Geslacht</label>
											<div class="col-sm-4">
												<select id="geslacht" name="geslacht" class="c-select select-size">
												  <option selected>Geslacht</option>
												  <option value="1">Man</option>
												  <option value="2">Vrouw</option>
												  <option value="3">Andere</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Burgerlijke staat-->
							<div class="row">
								<div class="col-md-8 border">
									<div class="col-md-12 border">
										<div class="form-group">
											<label for="staat" class="col-sm-3 control-label">Staat</label>
											<div class="col-sm-4">
												<select id="staat" name="staat" class="c-select select-size">
												  <option selected>Staat</option>
												  <option value="1">Single</option>
												  <option value="2">Getrouwd</option>
												  <option value="3">In een relatie</option>
												  <option value="4">Andere</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--GSM-->
							<div class="row">
								<div class="col-md-8 border">
									<div class="col-md-12 border">
										<div class="form-group">
											<label for="gsm" class="col-sm-3 control-label">GSM</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" id="gsm" name="gsm" placeholder="0477/00 00 00" value="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<!--Favoriete Winkel-->
							<div class="row">
								<div class="col-md-8 border">
									<div class="col-md-12 border">
										<div class="form-group">
											<label for="favWinkel" class="col-sm-3 control-label">Favoriete Winkel</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" id="favWinkel" name="favWinkel" placeholder="" value="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Nieuwsbrief ontvangen-->
							<div class="row">
								<div class="col-md-8 border">
									<div class="col-md-12 border">
										<div class="form-group">
											<label for="lastName" class="col-sm-3 control-label">Abonneren nieuwsbrief</label>
											<div class="col-sm-4">
												<label class="c-input c-checkbox">
												  <input type="checkbox">
												  <span class="c-indicator"></span>
												  Abonneren
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<input id="submit" name="annuleer" type="button" value="Annuleer" class="btn btn-primary">
									<input id="submit" name="submit" type="submit" value="Opslaan" class="btn btn-primary">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<! Will be used to display an alert to the user>
								</div>
							</div>
						</form>

					</div>
				</div>	
			</div>
			<div ng-show="ww" class="col-md-8 borderleft">
				<div class="row">
						<div class="col-md-12 border">
							<form class="form-horizontal" role="form" method="post" action="index.php">
								<div class="row">
									<div class="col-md-12 border">
										<h1>Wachtwoord Wijzigen</h1>
										<!--Wachtwoord-->
										<div class="row">
											<div class="col-md-8 border">
												<div class="col-md-12 border">
													<div class="form-group">
														<label for="nieuw-wachtwoord" class="col-sm-6 control-label">Nieuw wachtwoord</label>
														<div class="col-sm-6">
															<input type="password" class="form-control" id="nieuw-wachtwoord" name="nieuw-wachtwoord" placeholder="" value="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8 border">
												<div class="col-md-12 border">
													<div class="form-group">
														<label for="herh-wachtwoord" class="col-sm-6 control-label">Herhaal wachtwoord</label>
														<div class="col-sm-6">
															<input type="password" class="form-control" id="herh-wachtwoord" name="herh-wachtwoord" placeholder="" value="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="col-sm-10 col-sm-offset-2">
												<input id="submit" name="annuleer" type="button" value="Annuleer" class="btn btn-primary">
												<input id="submit" name="submit" type="submit" value="Opslaan" class="btn btn-primary">
											</div>
										</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div ng-show="email" class="col-md-8 borderleft">
				<div class="row">
						<div class="col-md-12 border">
							<form class="form-horizontal" role="form" method="post" action="index.php">
								<div class="row">
									<div class="col-md-12 border">
										<h1>E-mail Wijzigen</h1>
											<!--Email-->
											<div class="row">
												<div class="col-md-8 border">
													<div class="col-md-12 border">
														<div class="form-group">
															<label for="nieuw-email" class="col-sm-6 control-label">Nieuw e-mailadres</label>
															<div class="col-sm-6">
																<input type="email" class="form-control" id="nieuw-email" name="nieuw-email" placeholder="voorbeeld@gmail.com" value="">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8 border">
													<div class="col-md-12 border">
														<div class="form-group">
															<label for="herh-email" class="col-sm-6 control-label">Herhaal e-mailadres</label>
															<div class="col-sm-6">
																<input type="email" class="form-control" id="herh-email" name="herh-email" placeholder="voorbeeld@gmail.com" value="">
															</div>
														</div>
													</div>
												</div>
											</div>
											<hr>
											<div class="form-group">
												<div class="col-sm-10 col-sm-offset-2">
													<input id="submit" name="annuleer" type="button" value="Annuleer" class="btn btn-primary">
													<input id="submit" name="submit" type="submit" value="Opslaan" class="btn btn-primary">
												</div>
											</div>
									</div>
								</div>
							</form>
						</div>
				</div>
			</div>
		</div>
	</div>		
