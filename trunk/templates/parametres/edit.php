<div class="row">
  
  <div class="col-md-4">
  </div>
  
  <div class="col-md-4">

		<form role="form" method="get" >
			<input type="hidden" name="controller" value="parametres" />
			<input type="hidden" name="action" value="save" />	
	
			  <div class="form-group">
				<label for="sprintId1">Entrez l'identifiant du sprint</label>
				<input  class="form-control" id="sprintId1" name="sprint_id" placeholder="sprint id" value="<?=@$sprint_id?>">
			  </div>

			<button type="submit" class="btn btn-default">Enregistrer</button>

		</form>
	  </div>
	
	<div class="col-md-4">
	</div>
  	
</div>
