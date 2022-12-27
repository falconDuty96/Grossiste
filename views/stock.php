<?php Loader::loadViews('templates/header') ; ?>
<?php 
	include 'controls/db.php' ;
	$res = $conn->query("SELECT * FROM produit ORDER BY id DESC")->fetchAll(PDO::FETCH_OBJ) ;


?>
<div class="container mt-2" style="padding-right: 0px; padding-left: 0px ;">
	<div class="col-md-12 py-2 bg-dark" >
		<h2 class="text-center text-white  ">Gestion de stock</h2>
	</div>
</div>
<div class="container mt-3">
	<div class="row">
		<div class="col-md-12" style="padding-right: 0px; padding-left: 0px;">
			<input type="text" class="form-control" placeholder="Rechercher quelques choses ...">
		</div>		
	</div>
	<div class="row mt-2 border" style="height: 600px!important; overflow-y: scroll;">
		<div class="col-md-12" style="padding-right: 0px; padding-left: 0px ;">
			<table class="table table-hover table-striped table-bordered">
				<thead id="thead-table-produit" class="text-white text-center bg-primary">
					<tr>
						<th>Date d'entree</th>
						<th>Nom produit</th>
						<th>Quantite 1</th>
						<th>Quantite 2</th>
						<th>Quantite 3</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<?php for($i = 0; $i < count($res); $i++) :?>
					<tr>
						<td><?php echo $res[$i]->dateentree ;?></td>
						<td><?php echo $res[$i]->libelle ;?></td>
						<td><?php echo $res[$i]->qte1.' '.$res[$i]->unite1 ;?></td>
						<td><?php echo $res[$i]->qte2.' '.$res[$i]->unite2 ;?></td>
						<td><?php echo $res[$i]->qte3.' '.$res[$i]->unite3 ;?></td>
						<td>
							<!-- <a href="#" class="btn btn-warning"><i class="fas fa-edit text-white"></i></a> -->
							<a href="<?php echo URL ;?>index.php?action=supprimer_produit&id=<?php echo $res[$i]->id ;?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
					<?php endfor ; ?>

				</tbody>
			</table>
		</div>
	</div>
	
</div>
<div class="container mt-2">
	
	<div class="row">
		<div class="col-md-12" style="padding-right: 0px;">
			
			<button class="btn btn-primary float-right ml-2" data-toggle="modal" data-target="#myModalVente">Vente</button>
			<button class="btn btn-danger float-right ml-2">Impression Facture</button>
			<button class="btn btn-info float-right" data-toggle="modal" data-target="#myModal">Ajout produit</button>
		</div>
	</div>
</div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Ajout produit</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<form method="POST" action="<?php echo URL ;?>index.php?action=enregistrement_produit">
						<input type="text" name="libelle_produit" class="form-control mb-2" placeholder="Nom du produit">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<select name="unite1" class="form-control mb-2">
							<option value="">Choisir unite 1</option>
							<option value="Kilo">Kilo</option>
							<option value="Sachet">Sachet</option>
							<option value="Carton">Carton</option>
							<option value="Paquet">Paquet</option>
							<option value="Litre">Litre</option>
							<option value="Balle">Balle</option>
							<option value="Cartouche">Cartouche</option>
							<option value="Sac">Sac</option>
						</select>
						<input type="text" name="qte1" class="form-control mb-2" placeholder="Quantite">
						<input type="text" name="pu1" class="form-control mb-2" placeholder="Prix d'achat unitaire">
						<input name="pt1" type="text" class="form-control mb-2" placeholder="Prix d'achat total" >
						<input type="text" name="pv1" class="form-control mb-2" placeholder="Prix de vente unitaire">
						<input type="text" name="pvt1" class="form-control mb-2" placeholder="Prix de vente total" >
						
						
					</div>
					<div class="col-md-4">
					<select name="unite2" class="form-control mb-2">
					<option value="">Choisir unite 2</option>
							<option value="Kilo">Kilo</option>
							<option value="Sachet">Sachet</option>
							<option value="Carton">Carton</option>
							<option value="Paquet">Paquet</option>
							<option value="Litre">Litre</option>
							<option value="Balle">Balle</option>
							<option value="Cartouche">Cartouche</option>
							<option value="Sac">Sac</option>
						</select>
						<input type="text" name="qte2" class="form-control mb-2" placeholder="Quantite">
						<input type="text" name="pu2" class="form-control mb-2" placeholder="Prix d'achat unitaire">
						<input name="pt2" type="text" class="form-control mb-2" placeholder="Prix d'achat total" >
						<input type="text" name="pv2" class="form-control mb-2" placeholder="Prix de vente unitaire">
						<input type="text" name="pvt2" class="form-control mb-2" placeholder="Prix de vente total">
						<input type="text" placeholder="coefficient unite 1 et 2" class="form-control mb-2" name="rapport1_2">
					</div>
					<div class="col-md-4 mb-3">
					<select name="unite3" class="form-control mb-2">
					<option value="">Choisir unite 3</option>
							<option value="Kilo">Kilo</option>
							<option value="Sachet">Sachet</option>
							<option value="Carton">Carton</option>
							<option value="Paquet">Paquet</option>
							<option value="Litre">Litre</option>
							<option value="Balle">Balle</option>
							<option value="Cartouche">Cartouche</option>
							<option value="Sac">Sac</option>
						</select>
						<input type="text" name="qte3" class="form-control mb-2" placeholder="Quantite">
						<input type="text" name="pu3" class="form-control mb-2" placeholder="Prix d'achat unitaire">
						<input name="pt3" type="text" class="form-control mb-2" placeholder="Prix d'achat total" >
						<input type="text" name="pv3" class="form-control mb-2" placeholder="Prix de vente unitaire">
						<input type="text" name="pvt3" class="form-control mb-2" placeholder="Prix de vente total">
						<input type="text" placeholder="coefficient unite 2 et 3" class="form-control mb-2" name="rapport2_3">
						
					</div>
				</div>

				


			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" >Enregistrer</button></form>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>

		</div>
	</div>
</div>



<!-- The Modal vente -->
<div class="modal fade" id="myModalVente">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Vente</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<input type="text" class="form-control mb-2" placeholder="Nom du client">

						<select id="choixProduitVente" class="form-control mb-2">
							<option>Choisir un produit</option>
							<?php
								$resChoixProduit = $conn->query("SELECT DISTINCT(libelle) FROM produit WHERE 1")->fetchAll(PDO::FETCH_OBJ) ;
							?>
							<?php for($j = 0; $j < count($resChoixProduit); $j++):?>
								<option value="<?php echo $resChoixProduit[$j]->libelle ?>"><?php echo $resChoixProduit[$j]->libelle ?></option>

							<?php endfor ; ?>
						</select>

						<select id="choixUniteVente" class="form-control mb-2">
							<option value=''>Choisir une unite</option>
							<!-- <option value='Kilo'>Kilo</option>
							<option value='Sachet'>Sachet</option>
							<option value='Carton'>Carton</option>
							<option value='Paquet'>Paquet</option>
							<option value='Litre'>Litre</option>
							<option value='Balle'>Balle</option>
							<option value='Cartouche'>Cartouche</option>
							<option value="Sac">Sac</option> -->
						</select>
						

						
						<input type="text" id="pau" class="form-control mb-2" readonly placeholder="Prix d'achat">
						<input type="text" id="pvu" class="form-control mb-2" readonly placeholder="Prix de vente">
						<input type="text" id="dispo" readonly class="form-control mb-2" placeholder="Quantite disponible">
						<input type="text" id="qte" name="qte" class="form-control mb-2" placeholder="Quantite">
						<input type="text" id="prixT" name="prixT" class="form-control mb-2" placeholder="Prix Total" readonly>
						
						<a href="#" class="btn btn-secondary btn-block mb-2">Ajouter au panier</a>
					</div>
				</div>

				<div class="row" style="height: 250px ; overflow-y: auto;">
					<div class="col-md-12">
						<table class="table table-striped table-bordered">
							<thead class="text-white text-center bg-primary">
								<tr>
									<th>Nom produit</th>
									<th>Unite 1</th>
									<th>Prix de vente 1</th>
									<th>Prix d'achat 1</th>
									<th>Quantite</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<tr>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>
										<a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>
										<a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>
										<a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>hahaha</td>
									<td>
										<a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
									</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>



			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Enregistrer</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
			</div>

		</div>
	</div>
</div>

<?php Loader::loadViews('templates/footer') ; ?>