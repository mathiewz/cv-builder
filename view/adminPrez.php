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
			foreach ($forms as $key => $value) {
				echo'
				<div class="form-group">
					<div class="input-group group-prez col-xs-12">
						<div class="hidden-xs input-group-addon">'.$value.'</div>
						<label for="'.$key.'" class="visible-xs">'.$value.'</label>';
				if($key == 'description'){	//Si c'est le champ de la description, on met un textArea
					echo '<textarea class="form-control" rows="4" name="'.$key.'" id="'.$key.'" required>'.getElement($key).'</textarea>';
				} else {
					echo '<input type="text" class="form-control" name="'.$key.'" id="'.$key.'" value="'.getElement($key).'" required/>';
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
<div class="col-xs-12 col-md-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2 class="panel-title">Ajoutez un portrait</h2>
		</div>
		<div class="panel-body">
			<form action="admin-presentation" method="post" class="form-inline" enctype="multipart/form-data">
				<input type="hidden" name="formSend" value="UploadPhoto"/>
				<div class="form-group group-prez col-xs-12">
					<input type="file" id="photo" name="photo" class="file" accept="image/*" />
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-xs-12 col-md-8">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2 class="panel-title">Mes portraits</h2>
		</div>
		<div class="panel-body">
			<?php 
			if(sizeof($profilPics)>0){
				foreach ($profilPics as $picSrc){
					echo'<div class="file-preview-frame col-xs-12 col-sm-6 col-md-4 col-lg-3" id="imgTable">
						<img src="img/uploads/'.$picSrc.'" />
					</div>';
				}
			} else {
				echo 'pas encore de portrait mis en ligne';
			}

			?>
		</div>
	</div>
</div>

<script type="text/javascript">
$('#birthday').datepicker({
	format: 'dd/mm/yyyy',
	viewMode: 2,
	weekStart: 1
});

$("#photo").fileinput({
	browseClass: "btn btn-primary btn-block",
	showCaption: false,
});

var initalValue = $('#birthday').val();
$('#birthday').val(initalValue.substring(8,10)+'/'+initalValue.substring(5,7)+'/'+initalValue.substring(0,4));
</script>