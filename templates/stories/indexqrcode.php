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
		<th>QRLink</th>

		
		<th></th>
		<th>QRLink</th>	

	</tr>	
	
	<? for($i=0; $i < count($data); $i++) :  ?>
	
	
		<tr class="object">
		<? $d = $data[$i]; ?>			
			<td>
				<span class="badge alert-danger">Rank: <?=$d['rank']?></span><br />
				<span class="badge alert-info">Id: <?=$d['uid']?> <?=utf8_encode($d['name'])?></span><br />
				
				<span class="badge alert-danger">Effort: <?=$d['effort']?></span><br />
				<span class="badge alert-success"><?=$d['status']?></span><br />
				<? if ($d['created']):?> 
					<span class="badge">
						Il y à <?= html::secondsToRemainingTime(time() - strtotime($d['created']))  ?>
					</span>			
				<? endif; ?>
			</td>
			<td>
				<img src="<?=PATH_CACHE . $d['uid'] . '.png' ?>" />
			</td>
		
		
		<? if (isset($data[$i+1])): ?>
		
			<? $i++; ?>
			<? $d = $data[$i]; ?>
			<td>
				<span class="badge alert-danger">Rank: <?=$d['rank']?></span><br />
				<span class="badge alert-info">Id: <?=$d['uid']?> <?=utf8_encode($d['name'])?></span><br />
				
				<span class="badge alert-danger">Effort: <?=$d['effort']?></span><br />
				<span class="badge alert-success"><?=$d['status']?></span><br />
				<? if ($d['created']):?> 
					<span class="badge">
						Il y à <?= html::secondsToRemainingTime(time() - strtotime($d['created']))  ?>
					</span>			
				<? endif; ?>
			</td>
			<td>
				<img src="<?=PATH_CACHE . $d['uid'] . '.png' ?>" />
			</td>
		
		<? else: ?>
		
			<td></td>
			<td></td>
			
		
		<?endif; ?>
		
		</tr>
	<? endfor; ?>
	
</table>

