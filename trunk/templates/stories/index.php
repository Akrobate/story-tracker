<!-- Template pages/index -->
<!--
.active 	Applies the hover color to a particular row or cell
.success 	Indicates a successful or positive action
.info 	Indicates a neutral informative change or action
.warning 	Indicates a warning that might need attention
.danger 	Indicates a dangerous or potentially negative action-->
<table class="table table-hover">
	<tr>
		<th></th>
		<th>ID</th>
		<td></th>
		<th>Estim.</th>

		<th>Status Acutel</th>
		<th>Status Action</th>	

	</tr>	
	
	<? foreach ($data as $d): ?>
		<tr class="object">
			<td><?=$d['rank']?></td>
			<td><?=$d['uid']?></td>
			<td><?=utf8_encode($d['name'])?></td>
			<td><span class="badge alert-danger"><?=$d['effort']?></span></td>
			<td><span class="badge alert-success"><?=$d['status']?></span>
			
<? if ($d['created']):?> 
<span class="badge">
Il y à <?= html::secondsToRemainingTime(time() - strtotime($d['created']))  ?><? endif; ?></td>
</span>			
			
			<td>
				<a class="glyphicon glyphicon-book" href="<?=url::internal("statuses", "view", $d['uid'])?>" ></a>
				<a class="glyphicon glyphicon-edit" href="<?=url::internal("statuses", "add", $d['uid'])?>" ></a>
			</td>
			
		</tr>	
	<? endforeach; ?>
	
</table>

