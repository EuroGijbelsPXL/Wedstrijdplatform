<div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
	<!-- Stack the columns on mobile by making one full-width and the other half-width -->
	<div class="row">
		<div class="col-md-8 border">
			<div class="row">
				<div class="col-md-10 col-md-offset-1  border">
					<h1>Spelpagina</h1>
					<p> {{spelCtrl.msg}}</p>
				</div>			
			</div>
			<div class="row hidden-xs">
				<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1  border">
					<img src="assets/img/slotmachine.png" class="img-responsive banner">
				</div>
			</div>
			<div class="row">
			</div>
		</div>
		  <div class="border">
			<div class="row">
				<div  ng-repeat="prijs in spelCtrl.prijzen" class="col-xs-12 col-sm-4 col-md-4 border">
					<h1 class="prijsTitel">{{prijs.type}}</h1>
					<img src="assets/img/fruit/{{prijs.afb}}" class="img-responsive banner prijs">
				</div>
			</div>	
		  </div>
		</div>
</div>		
