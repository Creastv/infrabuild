 <?php
  if (pll_current_language() == 'en') {  $copyLeft   =  get_theme_mod('copyright-left-en'); } else {  $copyLeft   =  get_theme_mod('copyright-left');}
  if (pll_current_language() == 'en') {  $copyRight  =  get_theme_mod('copyright-right-en'); } else {  $copyRight  =  get_theme_mod('copyright-right');}
 ?>
 <div id="info">
     <div class="col">
         <?php if ($copyLeft) { ?>
         <p><?php echo $copyLeft; ?></p>
         <?php } ?>
     </div>
     <div class="col">
         <?php if ($copyRight) { ?>
         <p><?php echo $copyRight; ?></p>
         <?php } ?>
     </div>
 </div>