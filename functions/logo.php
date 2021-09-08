<?php

function otm_custom_logo(){
  if (function_exists('the_custom_logo')){
    the_custom_logo();
  }
}