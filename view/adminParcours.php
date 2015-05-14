<div class="page-header">
    <h1>Parcours</h1>
</div>
<div class="col-xs-12">
    
    <!-- Panel de visualisation des exp pro -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Experience professionnelles</h2>
        </div>
        <table class="table table-striped">
            <tr>
                <th class="col-xs-3">Poste</th>
                <th class="col-xs-6">Entreprise</th>
                <th class="col-xs-3">Actions</th>
            </tr>
            <?php
            foreach($parcoursPro as $exp){
                echo '
                <tr>
                    <td>'.$exp['nom'].'</td>
                    <td>'.$exp['etablissement'].'</td>
                    <td><a href="#!" onclick="editExp('.$exp['id'].', 0, \''.$exp['nom'].'\', \''.$exp['etablissement'].'\', \''.$exp['description'].'\', \''.$exp['ville'].'\', \''.$exp['debut'].'\', \''.$exp['fin'].'\');">
                            <span class="hidden-xs hidden-sm">editer </span>
                            <span class="glyphicon glyphicon-pencil"/>
                        </a> 
                        <a data-toggle="modal" data-target=".delete-modal-sm" onclick="delParcours('.$exp['id'].', \''.$exp['nom'].'\', \'proDelete\');">
                            <span class="hidden-xs hidden-sm">supprimer </span>
                            <span class="glyphicon glyphicon-remove"/>
                    </a></td>
                </tr>
                ';
            }
            ?>
        </table>
    </div>

        <!-- Panel de visualisation des exp scol -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Parcours scolaire</h2>
        </div>
        <table class="table table-striped">
            <tr>
                <th class="col-xs-3">Diplome</th>
                <th class="col-xs-6">Etablissement</th>
                <th class="col-xs-3">Actions</th>
            </tr>
            <?php
            foreach($ecoles as $exp){
                echo '
                <tr>
                    <td>'.$exp['nom'].'</td>
                    <td>'.$exp['etablissement'].'</td>
                    <td><a href="#!" onclick="editExp('.$exp['id'].', 1, \''.$exp['nom'].'\', \''.$exp['etablissement'].'\', \''.$exp['description'].'\', \''.$exp['ville'].'\', \''.$exp['debut'].'\', \''.$exp['fin'].'\');">
                            <span class="hidden-xs hidden-sm">editer </span>
                            <span class="glyphicon glyphicon-pencil"/>
                        </a> 
                        <a data-toggle="modal" data-target=".delete-modal-sm" onclick="delParcours('.$exp['id'].', \''.$exp['nom'].'\', \'scolDelete\');">
                            <span class="hidden-xs hidden-sm">supprimer </span>
                            <span class="glyphicon glyphicon-remove"/>
                    </a></td>
                </tr>
                ';
            }
            ?>
        </table>
    </div>
    
    <!-- Panel de visualisation des cotégories -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 id="parcoursFormTitle" class="panel-title">Ajouter une experience</h2>
        </div>
        <div class="panel-body">
            <form action="admin-competences" method="post">
                <input type="hidden" id="parcoursForm" name="formSend" value="addParcours"/>
                <input type="hidden" id="idParcours" name="idParcours" value=""/>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <input onclick="updateFormParcours();" id="scolaire" name="scolaire" type="checkbox">Scolaire</input>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Nom du poste</div>
                        <label for="nom" class="visible-xs">Nom du poste</label>
                        <input type="text" class="form-control" name="nom" id="parcoursNom" required />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Entreprise</div>
                        <label for="boite" class="visible-xs">Entreprise</label>
                        <input id="parcoursBoite" class="form-control" type="text" name="boite" id="parcoursBoite" required />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Ville</div>
                        <label for="ville" class="visible-xs">Ville</label>
                        <input id="parcoursVille" class="form-control" type="text" name="ville" required />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Date d&eacute;but</div>
                        <label for="debut" class="visible-xs">Date d&eacute;but</label>
                        <input id="parcoursDebut" class="form-control" type="text" name="debut" required />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Date fin</div>
                        <label for="fin" class="visible-xs">Date fin</label>
                        <input id="parcoursFin" class="form-control" type="text" name="fin" required />
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Description du poste</div>
                        <label for="description" class="visible-xs">Description du poste</label>
                        <textarea rows="4" class="form-control" name="description" id="parcoursDesc" required></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <input id="ParcoursSubmit" type="submit" class="btn btn-primary col-xs-12" value="Ajouter" />
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
if(Modernizr.touch){
    $("#parcoursDebut").prop("type", "date");
    $("#parcoursFin").prop("type", "date");
} else {
    $('#parcoursDebut').datepicker({
        format: 'dd/mm/yyyy',
        viewMode: 2,
        weekStart: 1
    });
    $('#parcoursFin').datepicker({
        format: 'dd/mm/yyyy',
        viewMode: 2,
        weekStart: 1
    });
}

/**
 * Met a jour les noms des champs en fonction du type d'experience
 */
function updateFormParcours(){
    var isChecked = $('#scolaire').prop('checked');
    if(isChecked){
        $($('#parcoursNom').parent().children('label')[0]).html("Nom du diplome");
        $($('#parcoursNom').parent().children('.input-group-addon')[0]).html("Nom du diplome");

        $($('#parcoursBoite').parent().children('label')[0]).html("Etablissement");
        $($('#parcoursBoite').parent().children('.input-group-addon')[0]).html("Etablissement");

        $($('#parcoursDesc').parent().children('label')[0]).html("Description de la formation");
        $($('#parcoursDesc').parent().children('.input-group-addon')[0]).html("Description de la formation");

    } else {
        $($('#parcoursNom').parent().children('label')[0]).html("Nom du poste");
        $($('#parcoursNom').parent().children('.input-group-addon')[0]).html("Nom du poste");

        $($('#parcoursBoite').parent().children('label')[0]).html("Entreprise");
        $($('#parcoursBoite').parent().children('.input-group-addon')[0]).html("Entreprise");

        $($('#parcoursDesc').parent().children('label')[0]).html("Description du poste");
        $($('#parcoursDesc').parent().children('.input-group-addon')[0]).html("Description du poste");
    }
    return false;
}

function delParcours(id, name, type){
    var txtModal = 'undefined';
    if(type=='proDelete'){txtModal = 'Voulez vous vraiment supprimer l\'experience professionnelle ';}
    if(type=='scolDelete'){txtModal = 'Voulez vous vraiment supprimer le diplome ';}
    $('#txtModal').html(txtModal + name);
    $('#formDelete').val('deleteParcours');
    $('#idDelete').val(id);
    return false;
}

function editExp(id, scolaire, nom, etablissement, description, ville, debut, fin){
    var toCheck = (scolaire == 1);
    $('#idParcours').val(id);
    $('#scolaire').prop('checked', scolaire);
    $('#parcoursNom').val(nom);
    $('#parcoursBoite').val(etablissement);
    $('#parcoursDesc').html(description);
    $('#parcoursVille').val(ville);
    $('#ParcoursSubmit').val('Modifier');        
    $('#parcoursFormTitle').html('Editer une experience');
    $('#parcoursForm').val('editParcours');

    $('#parcoursDebut').val(debut);
    var initalValue = $('#parcoursDebut').val();
    $('#parcoursDebut').val(initalValue.substring(8,10)+'/'+initalValue.substring(5,7)+'/'+initalValue.substring(0,4));
    
    $('#parcoursFin').val(fin);
    initalValue = $('#parcoursFin').val();
    $('#parcoursFin').val(initalValue.substring(8,10)+'/'+initalValue.substring(5,7)+'/'+initalValue.substring(0,4));

    return false;
}

</script>
