<?php

function random_float ($min,$max) {
   return ($min+lcg_value()*(abs($max-$min)));
}
?>