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
                <div class="col-xs-12 col-md-6">
                    <input type="hidden" class="form-control" name="color" id="color" value="#428bca" required />
                    <a class="btn btn-primary col-xs-12 col-sm-4" data-toggle="modal" data-target=".color-modal-sm">Couleur</a>
                    <div class="col-xs-12 col-sm-8">
                        <div id="colorDemoProgress" class="progress">
                            <div class="progress-bar progress-bar-striped active fb-callback" style="width: 100%">
                            </div>
                        </div>
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

<!-- La fenetre modale de selection de couleur -->
<div class="modal fade color-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Séléctionner une couleur</h4>
            </div>
            <div class="modal-body">
                <div id="colorpicker"></div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal">Selectionner</button>
                <button class="btn col-xs-5 fb-callback">&nbsp;</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#colorpicker').farbtastic('#color');
  });
</script>