	<div class="col-md-8 col-md-offset-2">
		<!-- Stack the columns on mobile by making one full-width and the other half-width -->
		<div class="row">
		  <div class="col-md-8 border col-md-offset-3">
			<div ng-repeat="prijs in prijsCtrl.prijzen" class="row prijzen border">
				<div class="col-md-4 prijs_img border">
						<img src="assets/img/prijzen/{{prijs.afb}}" class="img-responsive ">
				</div>
				<div class="col-md-4  border">
					<h1>{{prijs.type}}</h1>
						<p>
							{{ prijs.omschrijving}}
						</p>
						<p>
							{{ prijs.aantal}}
						</p>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-12  border">

				</div>
			</div>
			<div class="row">
			</div>
		  </div>
		</div>

	</div>		
