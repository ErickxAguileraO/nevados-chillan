<!-- inicio Slider -->
<div class="flexslider">
<?php if(count($sliders)>0){ ?>
  <ul class="slides">
    <?php foreach($sliders as $item): ?>
    <li style="background: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta?>) no-repeat;">
      <div class="center">
      <?php if($item->url_video){ ?>
      <div class="texto-slider float-left">
        <?php if($item->link){ ?>
          <a href="<?=$item->link?>" title="<?=$item->titulo?>">
        <?php }?>
        <span><?=$item->antetitulo?></span>
        <?php if($item->link){ ?>
          </a>
        <?php }?>
        <h2><?=$item->titulo?></h2>
        <p><?=$item->bajada?></p>
      </div>
      <div class="video-slider float-right">
        <iframe width="100%" height="300px" src="<?=str_replace('watch?v=','embed/',$item->url_video)?>" frameborder="0" allowfullscreen></iframe>
      </div>
      <?php }else{ ?>
        <div class="full-texto-slider float-left">
          <?php if($item->link){ ?>
            <a href="<?=$item->link?>" title="<?=$item->titulo?>">
          <?php }?>
          <span><?=$item->antetitulo?></span>
          <?php if($item->link){ ?>
            </a>
          <?php }?>
          <h2><?=$item->titulo?></h2>
          <p><?=$item->bajada?></p>
        </div>
      <?php } ?>
      </div>
    </li>
  <?php endforeach; ?>
  </ul>
<?php }?>
</div>
<!-- Fin Slider -->
<div class="center">
  <?=$this->layout->getNav();?>
  </div>
<div class="center">
  <h2 style="display:inline-block; margin-right:15px;">Actividades</h2>
  <select id="categorias">
      <option<?php if($categoria==0){ echo " SELECTED";}?> value="0">Todas</option>
      <?php foreach($categorias as $item): ?>
        <option<?php if($categoria==$item->url){ echo " SELECTED";}?> value="<?=$item->url?>"><?=$item->nombre?></option>
      <?php endforeach; ?>
  </select>
  <div class="calendar" id='calendar'></div>
</div>
<link href='/js/jquery/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='/js/jquery/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='/js/jquery/fullcalendar/moment.min.js'></script>
<script src='/js/jquery/fullcalendar/fullcalendar.min.js'></script>
<!--<script src='/js/jquery/fullcalendar/lang-all.js'></script>-->
<script>
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek'
			},
			defaultDate: '<?=date('Y-m-d')?>',
			navLinks: true, // can click day/week names to navigate views
      //lang: currentLangCode,
			weekNumbers: true,
			weekNumbersWithinDays: true,
			weekNumberCalculation: 'ISO',

			editable: true,
			eventLimit: true, // allow "more" link when too many events
      <?php if(count($calendarios)>0){ ?>
      events: [
        <?php $i = 0; foreach($calendarios as $item):
          if($i>0){?>
            ,
          <?php } ?>
        {
					title: '<?=$item->titulo?>',
					start: '<?=$item->fecha_inicio."T".$item->hora_inicio?>',
          end: '<?=$item->fecha_termino."T".$item->hora_termino?>',
          url: 'calendario/<?=$item->codigo."-".$item->url?>'
				}
        <?php $i++; endforeach; ?>
      ]
      <?php } ?>
		});
	});
	      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
      });

</script>
