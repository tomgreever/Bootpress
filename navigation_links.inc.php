<?php

function bootstrap_nav_link_buffer_callback($buffer)
{
  $buffer = str_replace('href', 'class="btn btn-primary span2" href', $buffer);
  return $buffer;
}

?>
<div class="navigation row">
<?php
  ob_start("bootstrap_nav_link_buffer_callback");
  posts_nav_link(' ' ,'Previous', 'Next'); 
  // Clean the buffer and stop bufferign
  ob_end_flush();
?>
</div>          
