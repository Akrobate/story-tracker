<!-- Template pages/index -->
<!--
.active 	Applies the hover color to a particular row or cell
.success 	Indicates a successful or positive action
.info 	Indicates a neutral informative change or action
.warning 	Indicates a warning that might need attention
.danger 	Indicates a dangerous or potentially negative action-->

 <div class="row">
        
        <div class="col-sm-5">

			<div class="panneau1">
				<? foreach ($data as $d): ?>
					<div class="element">
							<?=$d['rank']?>
							<?=$d['uid']?>
							<?=utf8_encode($d['name'])?>
							<?=$d['effort']?>
					</div>
				<? endforeach; ?>
			</div>
		</div>

        <div class="col-sm-5">

			<div class="panneau2" style="with:300px; height:300px; border: 1px dotted grey">
				
			</div>
		</div>
	</div>
