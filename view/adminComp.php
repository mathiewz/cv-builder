<div class="page-header">
    <h1>Page des compétences</h1>
</div>
<div class="col-xs-12">
    
    <!-- Panel de visualisation des cotégories -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Catégories de compétences</h2>
        </div>
        <table class="table table-striped">
            <tr>
                <th class="col-xs-3">Nom</th>
                <th class="col-xs-6">Couleur</th>
                <th class="col-xs-3">Actions</th>
            </tr>
            <?php
            foreach($categories as $cat){
                echo '
                <tr id="cat'.$cat['id'].'">
                    <td>'.$cat['name'].'</td>
                    <td><div class="progress no-margin"><div class="progress-bar progress-bar-striped active" style="width: 100%; background-color: '.$cat['color'].';"></div></div></td>
                    <td><a href="#!" onclick="editCat('.$cat['id'].', \''.$cat['name'].'\', \''.$cat['color'].'\')">
                            <span class="hidden-xs hidden-sm">editer </span>
                            <span class="glyphicon glyphicon-pencil"/>
                        </a> 
                        <a href="#!">
                            <span class="hidden-xs hidden-sm">supprimer </span>
                            <span class="glyphicon glyphicon-remove"/>
                    </a></td>
                </tr>
                ';
            }
            ?>
        </table>
    </div>
    
    <!-- Panel d'ajout d'une categorie -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 id="catTitle" class="panel-title">Ajouter une catégorie</h2>
        </div>
        <div class="panel-body">
            <form action="admin-competences" method="post">
                <input type="hidden" id="catForm" name="formSend" value="addCategorie"/>
                <input type="hidden" id="catId" name="id" value=""/>
                <div class="form-group col-xs-12">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group input-group col-xs-12">
                            <div class="hidden-xs input-group-addon">Nom</div>
                            <label for="nom" class="visible-xs">Nom</label>
                            <input type="text" class="form-control" name="nom" id="catNom" required />
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <a class="btn btn-primary col-xs-12 col-sm-4" data-toggle="modal" data-target=".color-modal-sm">Couleur</a>
                        <div class="col-xs-12 col-sm-8">
                            <input type="hidden" class="form-control" name="color" id="catColor" value="#428bca" required />
                            <div id="colorDemoProgress" class="progress">
                                <div class="progress-bar progress-bar-striped active fb-callback" style="width: 100%">
                                    <!--La progressBar est générée ici par Bootstrap ! -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="addCatButton" class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <input type="submit" id="catSubmit" class="btn btn-primary col-xs-12" value="Ajouter" />
                </div>
            </form>
        </div>
    </div>
    
        <!-- Panel de visualisation des cotégories -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Liste des compétences</h2>
        </div>
        <table class="table table-striped">
            <tr>
                <th class="col-xs-3">Nom</th>
                <th class="col-xs-4">Categorie</th>
                <th class="col-xs-2">Niveau</th>
                <th class="col-xs-3">Actions</th>
            </tr>
            <?php
            foreach($competences as $comp){
                echo '
                <tr>
                    <td>'.$comp['name'].'</td>
                    <td>'.$comp['categName'].'</td>
                    <td>'.$comp['niveau'].'%</td>
                    <td><a href="#!" onclick="editComp('.$comp['id'].', \''.$comp['name'].'\', \''.$comp['idCateg'].'\', '.$comp['niveau'].')">
                            <span class="hidden-xs hidden-sm">editer </span>
                            <span class="glyphicon glyphicon-pencil"/>
                        </a> 
                        <a href="#!">
                            <span class="hidden-xs hidden-sm">supprimer </span>
                            <span class="glyphicon glyphicon-remove"/>
                    </a></td>
                </tr>
                ';
            }
            ?>
        </table>
    </div>
    
    <!-- Panel d'ajout d'une competence -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title" id="comptitle">Ajouter une competence</h2>
        </div>
        <div class="panel-body">
            <form action="admin-competences" method="post">
                <input type="hidden" id="compForm" name="formSend" value="addCompetence"/>
                <input type="hidden" id="compId" name="id" value=""/>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Nom</div>
                        <label for="nom" class="visible-xs">Nom</label>
                        <input type="text" class="form-control" name="nom" id="compNom" required />
                    </div>
                </div>
                
                <!-- Ce select contient toutes les catégories rentrées plus tot -->
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Catégorie</div>
                        <label for="categorie" class="visible-xs">Catégorie</label>
                        <select id="compCat" name="categorie" class="form-control">
                            <?php
                            foreach($categoriesSelect as $id => $name){
                                echo '<option value="'.$id.'">'.$name.'</option> ';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Niveau (en %)</div>
                        <label for="niveau" class="visible-xs">Niveau (en %)</label>
                        <div>
                            <input id="compNiveau" type="text" value="" name="niveau">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <input id="compSubmit" type="submit" class="btn btn-primary col-xs-12" value="Ajouter" />
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
    <li>Afficher, modifier et supprimer une compétence & categorie</li>
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
        launchNumberEditor();
        $('#colorpicker').farbtastic('#catColor');
        $('.fb-callback').css('background-color', $.farbtastic('#colorpicker').color);
        $.farbtastic('#colorpicker').linkTo('.fb-callback');
    });

    function launchNumberEditor(){
        $("#compNiveau").TouchSpin({
            min: 0,
            max: 100,
            boostat: 5,
            maxboostedstep: 10
        });
    }

    function editCat(id, name, color){
        $('#catForm').val('editCategorie');
        $('#catId').val(id);
        $('#catNom').val(name);
        $('#catColor').val(color);
        $('#catSubmit').val('Modifier');
        $('#catTitle').html('Editer une catégorie');
        $('.fb-callback').css('background-color', color);
        $.farbtastic('#colorpicker').setColor(color);
        $.farbtastic('#colorpicker').linkTo('.fb-callback');
        return false;
    }

    function editComp(id, name, cat, lvl){
        $('#compId').val(id);
        $('#compNom').val(name);
        $('#compCat').val(cat);        
        $('#compNiveau').val(lvl);
        $('#compSubmit').val('Modifier');
        $('#comptitle').html('Modifier une compétence');
        launchNumberEditor();
        return false;
    }
</script>