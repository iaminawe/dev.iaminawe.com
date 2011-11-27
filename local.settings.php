
<?php
/**
* Add the domain module setup routine.
*/
include 'modules/domain/settings.inc';

/**
* Domain module
*
*/
if (file_exists('sites/dev.iaminawe.com/modules/domain/settings.inc')) {
  require_once "sites/dev.iaminawe.com/modules/domain/settings.inc";
} 