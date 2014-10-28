<div class="row">
  
  <div class="col-md-4">
  </div>
  
  <div class="col-md-4">
	<? if (@$error_msg != "") : ?>
		<div class="error_msg">
			<?=$error_msg?>
		</div>
	<? endif; ?>
		<form class="form-horizontal" role="form" method="post">
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Login</label>
			<div class="col-sm-10">
			  <input class="form-control" name="login" placeholder="Email">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Mot de passe</label>
			<div class="col-sm-10">
			  <input type="password" class="form-control" placeholder="Password" name="password">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Connection</button>
			</div>
		  </div>
		</form>
	</div>
	
	<div class="col-md-4">
	</div>
  	
</div>
