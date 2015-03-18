<div class="page-header">
	<h1>Page de pr&eacute;sentation</h1>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="panel-title">D&eacute;crivez vous</h2>
	</div>
	<div class="panel-body">
		<form action="admin-presentation" method="post">
			<input type="hidden" name="formSend" value="Description">
			<div class="form-group">
				<div class="input-group group-prez">
					<div class="hidden-xs input-group-addon">Votre nom</div>
					<label for="nom" class="visible-xs">Votre nom</label>
					<input type="text" class="form-control" name="nom" id="nom">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group group-prez">
					<div class="hidden-xs input-group-addon">Votre pr&eacute;nom</div>
					<label for="prenom" class="visible-xs">Votre pr&eacute;nom</label>
					<input type="text" class="form-control" name="prenom" id="prenom">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group group-prez">
					<div class="hidden-xs input-group-addon">Votre date de naissance</div>
					<label for="age" class="visible-xs">Votre date de naissance</label>
					<input type="text" class="form-control" name="age" id="age">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group group-prez">
					<div class="hidden-xs input-group-addon">Quelques mots sur vous</div>
					<label for="description" class="visible-xs">Quelques mots sur vous</label>		
					<textarea class="form-control" rows="4" name="description" id="description"></textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Enregistrer la description</button>
		</form>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="panel-title">Ajoutez un portrait</h2>
	</div>
	<div class="panel-body">
		<form action="admin-presentation" method="post" class="form-inline" enctype="multipart/form-data">
			<input type="hidden" name="formSend" value="UploadPhoto">
			<div class="form-group">
				<input type="file" id="photo" name="photo" accept="image/*">
			</div>
			<button type="submit" class="btn btn-primary">Enregistrer la photo</button>
		</form>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="panel-title">Mes portraits</h2>
	</div>
	<div class="panel-body">
		liste des portraits ici
	</div>
</div>