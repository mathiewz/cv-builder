<div class="page-header">
    <h1>Page des compétences</h1>
</div>
<div class="col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Ajoutez une catégorie</h2>
        </div>
        <div class="panel-body">
            <form action="admin-competences" method="post">
                <input type="hidden" name="formSend" value="addCategorie"/>
                <div class="form-group group-prez col-xs-12 col-md-6">
                    <div class="input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Nom</div>
                        <label for="nom" class="visible-xs">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" required />
                    </div>
                </div>
                <div class="form-group group-prez col-xs-12 col-md-6">
                    <div class="input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Couleur associée</div>
                        <label for="color" class="visible-xs">Couleur associée</label>
                        <input type="text" class="form-control" name="color" id="color" required />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<p>
    Formulaires des compétences et parcours<br/>
    TODO
</p>
<ul>
    <li>Parcours scolaire</li>
    <li>parcours pro</li>
    <li>Compétences
        <ul>
            <li>Catégories</li>
            <li>Compétences</li>
        </ul>
    </li>
</ul>

