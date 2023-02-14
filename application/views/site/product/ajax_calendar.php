<html>
<body>
<section class="month_calendar">
  
</section>
<script src="<?php echo base_url();?>js/site/jquery.min.js"></script>
<script>
$.get('month.php',{},function(data){
	$(".month_calendar").html(data);
});
$(document).ready(function(){
$(document).on('click','#nav_prev,#nav_next',function(){ 
$.get($(this).attr('data-value'),{},function(data){
	$(".month_calendar").html(data);
});
});
});
</script>
</body>
</html>