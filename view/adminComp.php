<div class="page-header">
    <h1>Page des compétences</h1>
</div>
<div class="col-xs-12">
    <!-- Panel d'ajout d'une categorie -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Ajoutez une catégorie</h2>
        </div>
        <div class="panel-body">
            <input type="hidden" name="formSend" value="addCategorie"/>
            <form action="admin-competences" method="post">
                <div class="form-group col-xs-12">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group input-group col-xs-12">
                            <div class="hidden-xs input-group-addon">Nom</div>
                            <label for="nom" class="visible-xs">Nom</label>
                            <input type="text" class="form-control" name="nom" id="nom" required />
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <a class="btn btn-primary col-xs-12 col-sm-4" data-toggle="modal" data-target=".color-modal-sm">Couleur</a>
                        <div class="col-xs-12 col-sm-8">
                            <input type="hidden" class="form-control" name="color" id="color" value="#428bca" required />
                            <div id="colorDemoProgress" class="progress">
                                <div class="progress-bar progress-bar-striped active fb-callback" style="width: 100%">
                                    <!--La progressBar est générée ici par Bootstrap ! -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="addCatButton" class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <input type="submit" class="btn btn-primary col-xs-12" value="Ajouter" />
                </div>
            </form>
        </div>
    </div>
    
    <!-- Panel d'ajout d'une competence -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Ajoutez une competence</h2>
        </div>
        <div class="panel-body">
            <form action="admin-competences" method="post">
                <input type="hidden" name="formSend" value="addCompetence"/>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Nom</div>
                        <label for="nom" class="visible-xs">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" required />
                    </div>
                </div>
                
                <!-- Ce select contient toutes les catégories rentrées plus tot -->
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Catégorie</div>
                        <label for="categorie" class="visible-xs">Catégorie</label>
                        <select name="categorie" class="form-control">
                            <?php
                            foreach($categories as $id => $name){
                                echo '<option value="'.$id.'">'.$name.'</option> ';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Nom</div>
                        <label for="nom" class="visible-xs">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" required />
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Niveau (en %)</div>
                        <label for="niveau" class="visible-xs">Niveau (en %)</label>
                        <input id="niveau" type="text" value="55" name="niveau">
                    </div>
                </div>
                <div id="addCatButton" class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <input type="submit" class="btn btn-primary col-xs-12" value="Ajouter" />
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
            <li>Compétences</li>
        </ul>
    </li>
</ul>

<!-- La fenetre modale de selection de couleur -->
<div class="modal fade color-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
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

    $("#niveau").TouchSpin({
        min: 0,
        max: 100,
        boostat: 5,
        maxboostedstep: 10
    });
</script>