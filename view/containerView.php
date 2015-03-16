<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
        	<?php 
        	foreach ($viewsContainer as $viewName){
        		include('view/'.$viewName.'.php'); 
        	}
        	?>
		</div>
	</div>     	
</div>