<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuTop">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Administration</a>
		</div>
		<div class="collapse navbar-collapse" id="menuTop">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Deconnexion</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Déconnexion ?</h4>
			</div>
			<div class="modal-body">
				<p>Voulez vous vraiment vous déconnecter ?</p>
				<a class="btn btn-primary" href=".">Confirmer</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
			</div>
		</div>
	</div>
</div>