<!-- Template pages/index -->
<!--
.active 	Applies the hover color to a particular row or cell
.success 	Indicates a successful or positive action
.info 	Indicates a neutral informative change or action
.warning 	Indicates a warning that might need attention
.danger 	Indicates a dangerous or potentially negative action-->
<table class="table table-hover">
	<tr>
		<th>
			
		</th>
		<th>
			ID
		</th>
		<td>
		
		</th>
		<th>
			Estimation
		</th>
	</tr>	
	<? foreach ($data as $d): ?>
		<tr class="object">
			<td>
				<?=$d['rank']?>
			</td>
			<td>
				<?=$d['uid']?>
			</td>
			<td>
				<?=utf8_encode($d['name'])?>
			</td>
			<td>
				<?=$d['effort']?>
			</td>

		</tr>	
	<? endforeach; ?>
</table>

