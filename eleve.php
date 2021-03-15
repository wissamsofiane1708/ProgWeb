<?php include('include/header.php');
?>
<htlm>
<body>
<div class="container">
<div class="row gutters">
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body">
				<div class="account-settings">
					<div class="user-profile">
						<div class="user-avatar">
							<img src="zizou.jpg" alt="Maxwell Admin">
						</div>
						<h5 class="user-name">zizou</h5>
						<h6 class="user-email">zizou.zizou@zizou.com</h6>
					</div>
					<div class="about">
						<h5 class="mb-2 text-primary">A mon propos</h5>
						<p><I>Allez le foot</I></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body">
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-3 text-primary">Details personnels</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="Prénom">Prénom</label>
							<input type="text" class="form-control" id="fPrénom" placeholder="Entrez votre prénom">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="Email">Email</label>
							<input type="Email" class="form-control" id="Email" placeholder="Entrez votre adresse Email">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="téléphone">téléphone</label>
							<input type="text" class="form-control" id="téléphone" placeholder="Entrez votre numéro de téléphone">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="website">URL</label>
							<input type="url" class="form-control" id="website" placeholder="URL de votre site Web">
						</div>
					</div>
				</div>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-3 text-primary">Adresse</h6>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="Rue">Rue</label>
							<input type="name" class="form-control" id="Rue" placeholder="Entrez votre rue de résidence">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="Ville">Ville</label>
							<input type="name" class="form-control" id="Ville" placeholder="Entrez votre ville de résidence">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="Pays">Pays</label>
							<input type="text" class="form-control" id="Pays" placeholder="Entrez votre pays de résidence">
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="complément">Complément d'adresse</label>
							<input type="text" class="form-control" id="complément" placeholder="Numéro de bâtiment, d'appartement ou autre">
						</div>
					</div>
				</div>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right">
							<button type="button" id="submit" name="submit" class="btn btn-secondary">Annuler</button>
							<button type="button" id="submit" name="submit" class="btn btn-primary">Mettre à jour</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>

<?php
        include_once('include/footer.php');
        ?>