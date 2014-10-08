<style>
.news-list {
    padding: 0;
}
.news-list li {
    cursor: pointer;
    display: inline-block; 
    padding: 5px 10px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    background: #fff;
    margin: 10px 10px 0px 0;
   float: left;
    display: block;
	width: 150px;
	height: 90px;  
}
.news-list.interested li {
    background: #74ce9c;
}
.source-news h3 {
    font-size: 13px;
    margin: 0;
}
.interested-in {
    background: #e9f5f1;
    border-radius: 4px;
    -moz-border-radius: 4px;
    padding: 13px 18px;
    margin: 18px 0 0 0;
}
.interested-in h3 {
    color: #74ce9c;
    font-size: 13px;
    margin: 0;
}

.ui-sortable-placeholder { border: 2px dotted grey; visibility: visible !important; }
.categories-sortable {  overflow: scroll; overflow-x: hidden; overflow-y: auto-scroll; height: 400px;}
}




</style>

<script>
$(document).ready(function() {

	$('.categories-sortable').bind('resize', function() { 
			console.log( 'Height changed to' + $(this).height() );
	});
});
</script>

<script>
$(window).load(function() {
    //call the equalize height function
    equalHeight($(".-categories-sortable"));

    //equalize function
    function equalHeight(group) {
        tallest = 0;
        group.each(function() {
            thisHeight = $(this).height();
            if(thisHeight > tallest) {
                tallest = thisHeight;
            }
        });
        group.height(tallest);
    }
});
</script>

 <div class="row">
        
        <div class="col-sm-6">



		<div class='source-news'>
			 <h3>BackLogs</h3>

			<ul id="categories-source" class='news-list categories-sortable'>
				<? foreach ($data as $d): ?>
					<li class="ui-state-default">
							<?=$d['rank']?>
							<?=$d['uid']?>
							<?=utf8_encode($d['name'])?>
							<?=$d['effort']?>
					</li>
					<li class="ui-state-default">
							<?=$d['rank']?>
							<?=$d['uid']?>
							<?=utf8_encode($d['name'])?>
							<?=$d['effort']?>
					</li>
				<? endforeach; ?>
			
				
			</ul>
			
		</div>

</div>

        <div class="col-sm-6">

			<div class='interested-in'>
				 <h3>Panneau</h3>

				<ul id="categories-chosen" class='news-list interested categories-sortable'>
					<li class="ui-state-default">I have been chosen</li>
					<li class="ui-state-default">Another chosen</li>
					
					
				</ul>
				
			</div>



</div>
</div>
