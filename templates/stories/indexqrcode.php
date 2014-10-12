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
		<th></th>
		
		<th>Status Acutel</th>
		<th>Status Action</th>	
		<th></th>
	</tr>	
	
	<? foreach ($data as $d): ?>
		<tr class="object">
			<td><?=$d['rank']?></td>
			<td><?=$d['uid']?></td>
			<td><?=utf8_encode($d['name'])?></td>
			
			<td>
				<span class="badge alert-danger"><?=$d['effort']?></span><br />
				<span class="badge alert-success"><?=$d['status']?></span><br />
				<? if ($d['created']):?> 
					<span class="badge">
						Il y à <?= html::secondsToRemainingTime(time() - strtotime($d['created']))  ?>
					</span>			
				<? endif; ?>
			</td>
			
			<td>
				<a class="glyphicon glyphicon-book" href="<?=url::internal("statuses", "view", $d['uid'])?>" ></a>
				<a class="glyphicon glyphicon-edit" href="<?=url::internal("statuses", "add", $d['uid'])?>" ></a>
			</td>
			<td>
				<img src="<?=PATH_CACHE . $d['uid'] . '.png' ?>" />
			</td>
		</tr>	
	<? endforeach; ?>
	
</table>

