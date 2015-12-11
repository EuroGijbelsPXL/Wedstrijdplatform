	<div class="col-md-12 col-md-offset-0">
		<!-- Stack the columns on mobile by making one full-width and the other half-width -->
		<div class="row">
			<div class="col-xs-10 col-xs-offset-5 col-sm-10 col-sm-offset-5 col-md-12 col-md-offset-5">
				<h1>Prijzen</h1>
			</div>
		</div>
		<div class="row">
		  <div class="col-xs-10 col-xs-offset-2 col-sm-10 col-sm-offset-1 col-sm-offset-2 col-md-12 border col-md-offset-1 col-lg-10 col-lg-offset-2">
			<div ng-repeat="prijs in prijsCtrl.prijzen" class="row prijzen border ">
				<div class="col-xs-8 col-sm-6 col-md-6 col-lg-6 prijs_img border">
						<img src="assets/img/prijzen/{{prijs.afb}}" class="img-responsive prijs-img">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 border">
					<h1>{{prijs.type}}</h1>
						<p>
							{{ prijs.omschrijving}}
						</p>
						<p>
							{{ prijs.aantal}}
						</p>
				</div>
			</div>
		  </div>

	</div>		
