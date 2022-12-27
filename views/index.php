<?php Loader::loadViews('templates/header') ; ?>
<h2 class="text-center text-muted">Gestion de stock</h2>
<div class="container border shadow-sm mt-3">
	<div class="row mt-3">
		<div class="col-md-12">
			<input type="text" class="form-control mb-2" placeholder="Nom du produit">
		</div>
	</div>
	<div class="row">
			<div class="col-md-4">
				<select class="form-control mb-2">
					<option>Choisir unite principale</option>
					<option>Kilo</option>
					<option>Sachet</option>
					<option>Carton</option>
					<option>Paquet</option>
					<option>Litre</option>
					<option>Balle</option>
					<option>Cartouche</option>
					<option>Sac</option>
				</select>
				<input type="text" class="form-control mb-2" placeholder="Prix d'achat">
				<input type="text" class="form-control mb-2" placeholder="Prix de vente">
				<input type="text" class="form-control mb-2" placeholder="Quantite">
			</div>
			<div class="col-md-4">
				<select class="form-control mb-2">
					<option>Choisir sous unite 1</option>
					<option>Kilo</option>
					<option>Sachet</option>
					<option>Carton</option>
					<option>Paquet</option>
					<option>Litre</option>
					<option>Balle</option>
					<option>Cartouche</option>
					<option>Sac</option>
				</select>
				<input type="text" class="form-control mb-2" placeholder="Prix d'achat">
				<input type="text" class="form-control mb-2" placeholder="Prix de vente">
				<input type="text" class="form-control mb-2" placeholder="Quantite">
			</div>
			<div class="col-md-4 mb-3">
				<select class="form-control mb-2">
					<option>Choisir sous unite 2</option>
					<option>Kilo</option>
					<option>Sachet</option>
					<option>Carton</option>
					<option>Paquet</option>
					<option>Litre</option>
					<option>Balle</option>
					<option>Cartouche</option>
					<option>Sac</option>
				</select>
				<input type="text" class="form-control mb-2" placeholder="Prix d'achat">
				<input type="text" class="form-control mb-2" placeholder="Prix de vente">
				<input type="text" class="form-control mb-2" placeholder="Quantite">
			</div>
	</div>
</div>
<div class="container mt-4">
	<div class="row border shadow-sm" style="height: 400px;">
		
	</div>
	<div class="row mt-3">
		<div class="col-md-12" style="padding-right: 0px;">
			<button class="btn btn-primary float-right ml-2">Facturation/Vente</button>
			<button class="btn btn-danger float-right ">Etat de stock</button>
		</div>
	</div>
</div>
<?php Loader::loadViews('templates/footer') ; ?>