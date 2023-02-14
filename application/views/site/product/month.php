<link rel="stylesheet" href="<?php echo base_url();?>css/site/calendar.css" type="text/css" />
<div class="month_calendar custom_calendar">
<section class="month">
<div class="select_month_base">
<p>  <?php if(date('Y-m',strtotime($prevMonth->year()->int().'-'.$prevMonth->int().'-'."01"))>=date("Y-m") ) {?> <span class="prev_date"> <a id="nav_prev" class="arrow" href="javascript:void(0);" data-value="<?php echo $prevMonthURL ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.77 15.04"><path d="M0,7.52a.46.46,0,0,0,.15.34l7,7a.49.49,0,0,0,.35.15.5.5,0,0,0,.35-.15l.75-.76a.46.46,0,0,0,.15-.34.49.49,0,0,0-.15-.35L2.7,7.52,8.62,1.6a.48.48,0,0,0,0-.7L7.87.15A.5.5,0,0,0,7.52,0a.49.49,0,0,0-.35.15l-7,7A.49.49,0,0,0,0,7.52Z" style="fill:#383838"/></svg></a> </span> <?php } ?> 

    <span class="next_date">  <?php if(date('Y-m',strtotime($currentMonth->year()->int().'-'.($currentMonth->int()).'-'."01"))<date("Y-m",strtotime("+1 year")) ) {?> <a class="arrow" id="nav_next" href="javascript:void(0);" data-value="<?php echo $nextMonthURL ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.77 15.04"><path d="M8.77,7.52a.46.46,0,0,1-.15.34l-7,7a.48.48,0,0,1-.7,0l-.75-.76A.46.46,0,0,1,0,13.79a.49.49,0,0,1,.15-.35L6.07,7.52.15,1.6a.48.48,0,0,1,0-.7L.9.15a.48.48,0,0,1,.7,0l7,7A.49.49,0,0,1,8.77,7.52Z" style="fill:#383838"/></svg></a><?php } ?></p> </span>
  <h1>
    <?php echo get_lang_site_key($lang_key,"common_lang",strtolower($currentMonth->name())); ?> <?php echo $currentMonth->year()->int() ?>
  </h1>
  </div>
  <div class="custom_calendar_responsive">
  <table id="beforepublish">
    <tr>
      <?php foreach($currentMonth->weeks()->first()->days() as $weekDay): ?>
      <th><?php echo get_lang_site_key($lang_key,"common_lang",strtolower($weekDay->shortname()));  ?></th>
      <?php endforeach ?>
    </tr>
    <?php $i=1; foreach($currentMonth->weeks(6) as $week): ?>
    <tr>  
      <?php  foreach($week->days() as $day): 
	  $mon=strlen($currentMonth->int())==1?'0'.$currentMonth->int():$currentMonth->int();
	  $days=strlen($day->int())==1?'0'.$day->int():$day->int();
	  ?>
      <td data-id="<?php echo $i;?>" data-value="<?php echo $currentMonth->year()->int().'-'.$mon."-".$days;?>" class="data_id<?php echo $i;?><?php if($day->status==1){ echo " block";}?><?php if($day->status==3){ echo " uibooked";}?><?php if(date('Y-m-d',strtotime($currentMonth->year()->int().'-'.$currentMonth->int().'-'. $day->int()))<date("Y-m-d")){ echo " past_date";}?><?php if($day->month() != $currentMonth) echo ' inactive' ?>" title="<?php echo $day->title;?>"> <div class="date_day"> <?php echo ($day->isToday()) ? '<strong>' . $day->int() . '</strong>' : $day->int() ?> </div> <div class="date_price"> <label><?php echo $day->price;?></label></div>
	  <?php if($day->status==3){ ?><span class="bar_active"></span><img src="https://yt3.ggpht.com/-XCo4_kfc9s0/AAAAAAAAAAI/AAAAAAAAAAA/3iqadUa55p4/s88-c-k-no-mo-rj-c0xffffff/photo.jpg"><?php } ?>
	  </td>
      <?php $i++;  endforeach ?>  
    </tr>
    <?php  endforeach ?>
  </table>
</div>
</section>
</div>

