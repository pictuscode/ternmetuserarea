<?php $this->load->view('site/common/header');	?>
		<section>
		<div class="clearfix"></div>
			<div class="servicer_detail_base">
                     <div class="container">
                            <div class="service_detail_inner">
                                    <h1><?php echo get_common_details(CMS_LANG,'title',$content1->row()->id,$lang_key);?></h1>
                                    <div>
										<?php echo html_entity_decode(get_common_details(CMS_LANG,'content',$content1->row()->id,$lang_key))?>
									</div>
                            </div>
                     </div>   
			</div>
			<div class="clearfix"></div>
			
	</section>
	<script>
	$(document).ready(function(){
		var total_height=($(window).height());
	var tot=($('footer').height())+($('header').height());
	var main=total_height-tot; 
	$('.service_detail_inner').prop('style','min-height:'+main+'px !important');
	});

</script>
<?php $this->load->view('site/common/footer');?>