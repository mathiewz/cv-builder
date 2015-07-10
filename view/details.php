<div id="competences">
    <section class="container" id="detail-cv">
        <div class="row">

            <div class="col-md-12">
                <h1>Curriculum Vitae</h1>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Formations Académiques</h2>
                    </div>
                    <div class="panel-body">
                        <?php
                            if($data['studies']):
                            foreach($data['studies'] as $result):
                        ?>
                        <div class="panel-formation">
                            <div class="col-xs-10 col-sm-7">
                                <div class="row">
                                    <h3><?php echo $result['nom']; ?></h3>
                                </div>
                            </div>
                            <div class="hidden-xs col-sm-3">
                                <span class="town"><?php echo $result['ville']; ?></span>
                            </div>
                            <div class="col-xs-2 col-sm-2 date">
                                <div class="row">
                                    <span class="label label-primary"><?php echo substr($result['debut'], 0, 4); ?><br><?php echo substr($result['fin'], 0, 4); ?></span>
                                </div>
                            </div>
                            <p class="clearfix">
                                <?php echo $result['description']; ?>
                            </p>
                        </div>
                        <?php
                            endforeach;
                            else:
                                echo 'Aucune formations Académiques renseignées actuellement.';
                            endif;
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Compétences</h2>
                    </div>
                    <div class="panel-body">
                        <div class="competences">
                            <ul class="nav nav-pills hidden-print" role="tablist">
                            <?php
                            if($data['categories']):
                            foreach($data['categories'] as $k => $result):
                            ?>
                                <li <?php echo($k == 0)?'class="active"':''; ?>>
                                    <a href="#competences-<?php echo $result['id']; ?>" role="tab" data-toggle="tab"><?php echo $result['name']; ?></a>
                                </li>
                            <?php
                            endforeach;
                            else:
                                echo "Il n'y a aucune catégorie actuellement.";
                            endif;
                            ?>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <?php
                            if($data['categories']):
                            foreach($data['categories'] as $k => $result):
                            ?>
                                <div class="tab-pane <?php echo($k == 0)?'active':''; ?>" id="<?php echo 'competences-' . $result['id']; ?>">
                                    <table class="table">
                                        <colgroup>
                                            <col class="col-xs-3">
                                            <col class="col-xs-9">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th style="text-align : right;">Technologie</th>
                                                <th class="hidden-print">Niveau de maitrise</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align : right;">

                                        <?php 
                                            if($data['competences']):
                                            foreach($data['competences'] as $n => $competence):
                                            if($competence['idCateg'] == $result['id']):
                                        ?>

                                            <tr>
                                                <td><?php echo $competence['name']; ?></td>
                                                <td>
                                                    <div class="progress" style="margin-bottom: 0;">
                                                        <div class="progress-bar progress-bar-striped active hidden-print" role="progressbar" style="width: <?php echo $competence['niveau']; ?>%;background-color:<?php echo $result['color']; ?>">
                                                            <span class="sr-only"><?php echo $competence['niveau']; ?>% Complete</span>
                                                        </div>
                                                        <span class="visible-print-inline"><?php echo $competence['niveau']; ?>% Complete</span>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php
                                            endif;
                                            endforeach;
                                            endif;
                                        ?> 
                                        
                                        </tbody>
                                    </table>
                                </div>
                            <?php
                            endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Experiences Professionelles</h2>
                    </div>
                    <div class="panel-body experience">
                        <?php
                            if($data['pro']):
                            foreach($data['pro'] as $result):

                            setlocale(LC_TIME, 'fr_FR.utf8','fra');
                            $datedebut = utf8_encode(strftime("%B %Y", strtotime($result['debut'])));
                            $datefin = utf8_encode(strftime("%B %Y", strtotime($result['fin'])));

                        ?>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="list-group-item-heading">
                                    <a style="color: black;" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#experience-<?php echo $result['id']; ?>">
                                        <?php echo $result['nom'] . ' - ' . $result['etablissement']; ?>
                                        <span class="pull-right col-xs-4 col-md-6 hidden-xs">
                                            <small class="col-xs-offset-9 col-md-offset-0 col-xs-5 col-lg-6"><?php echo $result['ville']; ?></small>
                                            <span class="col-xs-offset-6 col-md-offset-0 col-xs-7 col-lg-6 label label-primary hidden-sm"><?php echo $datedebut . ' - ' . $datefin; ?></span>
                                        </span>
                                    </a>
                                </h4>                                   
                            </div>
                            <div id="experience-<?php echo $result['id']; ?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php echo $result['description']; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                            endforeach;
                            else:
                                echo 'Aucune expériences professionnelles renseignées actuellement.';
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>