<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuTop">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="administrator">Administration</a>
        </div>
        <div class="collapse navbar-collapse" id="menuTop">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestion du CV<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="admin-presentation">Pr&eacute;sentation</a></li>
                        <li><a href="admin-competences">Parcours et comp&eacute;tences</a></li>
                        <li><a href="#">Portefolio</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>
                <li><a href="#">Theme</a></li>
                <li><a href="#">Administrateurs</a></li>
                <li><a href="#">Base de donn&eacute;es</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><button type="button" class="btn btn-danger navbar-btn" data-toggle="modal" data-target=".bs-example-modal-sm">D&eacute;connexion</button></li>
            </ul>
        </div>
    </div>
</nav>

<!-- La fenetre modale de déconnexion -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">D&eacute;connexion ?</h4>
            </div>
            <div class="modal-body">
                <p>Voulez vous vraiment vous d&eacute;connecter ?</p>
                <form action="." method="post">
                    <input type="hidden" value="true" name="deco" />
                    <input type="submit" class="btn btn-danger" value="Confirmer" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                </form>
            </div>
        </div>
    </div>
</div>