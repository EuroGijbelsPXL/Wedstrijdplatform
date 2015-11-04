		<div class="col-md-8 col-md-offset-2">
		<!-- Stack the columns on mobile by making one full-width and the other half-width -->
			<div class="col-md-6">
				<div class="form-group">
					<h1>Contactinformatie</h1>
					<label for="adres" class="col-sm-8 control-label">Adres: Acaciastraat 21 2440 Geel</label>
					<label for="email" class="col-sm-8 control-label">E-mail: info@eurogijbels.be</label>
					<label for="adres" class="col-sm-8 control-label">Telefoon: 014 86 61 01</label>
					<label for="adres" class="col-sm-8 control-label">Website: http://eurogijbels.be/</label>
					<hr>
					<div class="fb-page" data-href="https://www.facebook.com/EuroGijbels/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/EuroGijbels/"><a href="https://www.facebook.com/EuroGijbels/">Euro Gijbels</a></blockquote></div></div>
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.5";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
				</div>
			</div>
			<div class="col-md-6 borderleft">
					<h1>Contactformulier</h1> 
					<form class="form-horizontal" role="form" method="post" action="index.php">
						<div class="form-group">
							<label for="name" class="col-sm-3 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" name="name" placeholder="Voor- en achternaam" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="contact_email" class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="example@domain.com" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-sm-3 control-label">Bericht</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" name="bericht"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="human" class="col-sm-3 control-label">2 + 3 = ?</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="human" name="human" placeholder="Jouw antwoord">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
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
