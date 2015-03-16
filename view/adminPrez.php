<div class="page-header">
	<h1>Page de présentation</h1>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="panel-title">Ajouter un portrait</h2>
	</div>
	<div class="panel-body">
		<form action="admin-presentation" method="post" enctype="multipart/form-data">
			<input type="hidden" name="formSend" value="UploadPhoto">
			<div class="form-group">
				<label for="photo">Sélectionnez un portrait de vous</label>
				<input type="file" id="photo" name="photo">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>