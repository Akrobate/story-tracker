<!-- template ajouter page -->
<script>

	$(document).ready(function() {
	
		$('.status').click(function(){
			var status = $(this).data('status');			
			$('.statusInput').val(status);
			$('.status').removeClass('active');
			$(this).addClass('active');
			
		});
		
		$('.submit').click(function(){

			$('.statusForm').submit();

		});
		
		
		var previousStatus = $('.previousStatusInput').val();
		if (previousStatus != "") {
			$('.status').removeClass('btn-primary');
			$('.status'+previousStatus).addClass('btn-primary');
		}	
	});
	
</script>


<div class="row">

	<form name="status" method="post" class="statusForm">
	<div class="col-md-4 col-md-offset-4">

		<button type="button" class="btn btn-default btn-lg btn-block status status10" data-status="10">dév</button>
		<button type="button" class="btn btn-default btn-lg btn-block status status20" data-status="20">tests tech</button>
		<button type="button" class="btn btn-default btn-lg btn-block status status30" data-status="30">tests</button>
		<button type="button" class="btn btn-default btn-lg btn-block status status40" data-status="40">retours recette</button>
		<button type="button" class="btn btn-default btn-lg btn-block status status50" data-status="50">Terminé</button>
		<button type="button" class="btn btn-default btn-lg btn-block status status60" data-status="60">Stand By</button>
	
		<input type="hidden" value="" name="status" class="statusInput" />
		<input type="hidden" value="<?=$previousStatus?>" name="previousstatus" class="previousStatusInput" />
		<input type="hidden" value="<?=$id_story?>" name="id_story" />
		
		<br /> <br/>

		<button type="button" class="btn btn-success btn-lg btn-block submit" data-status="10">Valider</button>

		<a href="<?=url::internal("stories", "index")?>" type="button" class="btn btn-danger btn-lg btn-block cancel" data-status="10">Annuler</a>

	</div>
	</form>
</div>
