<?php
   $mask = "../../files/*.jpg";
   array_map( "unlink", glob( $mask ) );
?>