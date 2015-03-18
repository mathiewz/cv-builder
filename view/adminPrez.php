<div class="page-header">
	<h1>Page de pr&eacute;sentation</h1>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="panel-title">D&eacute;crivez vous</h2>
	</div>
	<div class="panel-body">
		<form action="admin-presentation" method="post">
			<input type="hidden" name="formSend" value="Description"/>
			<?php
				$formNames = array();
				$forms['nom'] = 'Votre nom';
				$forms['prenom'] = 'Votre prenom';
				$forms['date'] = 'Votre date de naissance';
				$forms['description'] = 'Quelques mots sur vous';
				foreach ($forms as $key => $value) {
					echo'
					<div class="form-group">
						<div class="input-group group-prez">
							<div class="hidden-xs input-group-addon">'.$value.'</div>
							<label for="'.$key.'" class="visible-xs">'.$value.'</label>';
					if($key == 'description'){	//Si c'est le champ de la description, on met un textArea
						echo '<textarea class="form-control" rows="4" name="'.$key.'" id="'.$key.'"></textarea>';
					} else {
						echo '<input type="text" class="form-control" name="'.$key.'" id="'.$key.'"/>';
					}
					echo '</div>
					</div>
					';
				}
			?>
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
			<input type="hidden" name="formSend" value="UploadPhoto"/>
			<div class="form-group">
				<input type="file" id="photo" name="photo" accept="image/*" />
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