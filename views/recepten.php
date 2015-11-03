<div class="col-md-8 col-md-offset-2">
	<h1>Lekkere Recepten</h1>
	<div ng-repeat="recept in receptCtrl.recepten" class="border row recepten">
		<div class="row"> 
			<div class="col-md-3 border">
				<img src="assets/img/recepten/{{recept.afb}}" class="recept_img  img-responsive ">
			</div>
			<div class="col-md-9 border">
				<h1>{{ recept.titel}}</h1>
				<h2>{{ recept.soort}} - {{ recept.aantalPers}} personen - {{ recept.tijd}}</h2>
				Click me: <input type="checkbox" ng-model="checked" aria-label="Toggle ngHide"><br/>
			</div>
		</div>
		<div class="row check-element animate-show" ng-show="checked"> 
			<div class="col-md-3 border lijst">
				<h3>Ingrediënten</h3>
					<ul>
					  <li>Coffee</li>
					  <li>Tea</li>
					  <li>Milk</li>
					</ul>
				<h3>Materialen</h3>
					<ul>
					  <li>Coffee</li>
					  <li>Tea</li>
					  <li>Milk</li>
					</ul>
			</div>
			<div class="col-md-9 border">
				<h1>Bereiding</h1>
				<p>
					{{ recept.bereiding}}
				</p>
			</div>
		</div>
	</div>
</div>		
