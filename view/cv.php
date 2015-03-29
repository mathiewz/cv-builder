<div class="jumbotron">
    <div class="container">
        <?php 
            if(sizeof($profilPics)>0){
                echo '<div id="photoCV" class="pics col-xs-12 col-sm-4 col-md-3">';
                foreach ($profilPics as $picSrc){
                    echo'<img src="img/uploads/'.$picSrc.'" class="img-circle portraitCV"/>';
                }
                echo'</div>';
            } 
            ?>
        <div class="col-xs-12 col-sm-8 col-md-9">
            <h1>
            <?php 
                $date_today = new DateTime();
                $date_naissance = new DateTime(getElement('birthday'));
                $interval = $date_naissance->diff($date_today);
                $age = $interval->format('%y');
                echo getElement('prenom').' '.strtoupper(getElement('nom')).' <small>'.$age.' ans</small>'; ?></h1>
            <p><?php echo nl2br(getElement('description')); ?></p>
        </div>
    </div>
</div>

<script  type="text/javascript">
$('#photoCV').cycle('fade');
</script>