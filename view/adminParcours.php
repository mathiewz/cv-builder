<div class="page-header">
    <h1>Parcours</h1>
</div>
<div class="col-xs-12">
    
    <!-- Panel de visualisation des cotégories -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Parcours</h2>
        </div>
        <div class="panel-body">
            votre parcours
        </div>
    </div>
</div>

<div class="col-xs-12">
    
    <!-- Panel de visualisation des cotégories -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Ajouter une experience</h2>
        </div>
        <div class="panel-body">
            <form action="admin-competences" method="post">
                <input type="hidden" id="compForm" name="formSend" value="addParcours"/>
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
                        <label for="categorie" class="visible-xs">Entreprise</label>
                        <input id="parcoursBoite" class="form-control" type="text" name="boite" id="parcoursBoite" required />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Ville</div>
                        <label for="niveau" class="visible-xs">Ville</label>
                        <input id="parcoursVille" class="form-control" type="text" name="ville" required />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Date d&eacute;but</div>
                        <label for="niveau" class="visible-xs">Date d&eacute;but</label>
                        <input id="parcoursDebut" class="form-control" type="text" name="debut" required />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group input-group col-xs-12">
                        <div class="hidden-xs input-group-addon">Date fin</div>
                        <label for="niveau" class="visible-xs">Date fin</label>
                        <input id="parcoursFin" class="form-control" type="text" name="fin" required />
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
    } else {
        $($('#parcoursNom').parent().children('label')[0]).html("Nom du poste");
        $($('#parcoursNom').parent().children('.input-group-addon')[0]).html("Nom du poste");

        $($('#parcoursBoite').parent().children('label')[0]).html("Entreprise");
        $($('#parcoursBoite').parent().children('.input-group-addon')[0]).html("Entreprise");
    }
}
</script>
