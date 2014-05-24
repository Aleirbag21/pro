<div class="columna_izq">
	<div class="bloque_pagina bloqueMargin txt_centrado">
		<h3><?php echo TXT_TUTORIAL_YOUTUBE_TIT?></h3>
		<p>
		<div class="video_560 txt_centrado">
			<div id="ytapiplayer2" style="display:none;">
			</div>
			<img src="/img/prev_video_principal.jpg" id="imageID" style="cursor:pointer" alt="Haz click para ver el vídeo"/>
			<script>
			document.getElementById('imageID').onclick = function(){
				document.getElementById('ytapiplayer2').style.display="inherit";
				document.getElementById('ytapiplayer2').innerHTML += '<iframe width="560" height="315" src="http://www.youtube.com/embed/7-Xvmz-jNrg?autoplay=1" frameborder="0" allowfullscreen></iframe>';
				document.getElementById('imageID').style.display="none";
			};
			</script>
		</div>
		<p>
		<?php echo TXT_TUTORIAL_YOUTUBE_DESC?>
	</div>

	<div class="bloque_pagina bloqueMargin">
		<div class="txt_centrado">
			<?php echo TXT_ARRASTRA_BOOKMARKLET?><p>
			<a href="<?php echo BOOKMARKLET?>" class="bookmarklet" target="_blank"><?php echo TXT_BOOKMARKLET?></a>
		</div><p>
		<?php echo TXT_BOOKMARKLET_DESC?>
	</div>
	<div class="bloque_pagina bloqueMargin">
		<h3><?php echo TXT_COMO_DESCARGAR_VIDEOS_TIT?></h3><p>
		<?php echo TXT_COMO_DESCARGAR_VIDEOS_DESC?>
		<p>
		
		<h3><?php echo TXT_COMO_DESCARGAR_VIDEOS_2_TIT?></h3><p>
		<?php echo TXT_COMO_DESCARGAR_VIDEOS_2_DESC?>
		<p>
		
		<h3><?php echo TXT_CANALES_SOPORTADOS_TIT?></h3><p>
		<?php echo TXT_CANALES_SOPORTADOS_DESC?>
	</div>
	<div class="bloque_pagina bloqueMargin">
		<h3><?php echo TXT_NO_PUEDO_DESCARGAR_TIT?></h3><p>
		<?php echo TXT_NO_PUEDO_DESCARGAR_DESC?>
	</div>
</div>
<div class="columna_der">
	<div class="bloque_pagina bloqueMargin txt_centrado">
		<a class="twitter-timeline"  href="https://twitter.com/descargavids"  data-widget-id="367404729648705536">Tweets por @descargavids</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	<div class="bloque_pagina bloqueMargin txt_centrado">
		<?php echo TXT_BLOQUE_DV_EN_TU_WEB?>
	</div>
	<div class="bloque_pagina bloqueMargin txt_centrado">
		<?php echo TXT_BLOQUE_DONACION?>
	</div>
</div>