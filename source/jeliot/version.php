<?php // $Id: version.php,v 1.5 2007/04/01 22:57:16 stronk7 Exp $

/**
 * Code fragment to define the version of newmodule
 * This fragment is called by moodle_needs_upgrading() and /admin/index.php
 *
 * @author 
 * @version $Id: version.php,v 1.5 2007/04/01 22:57:16 stronk7 Exp $
 * @package newmodule
 **/

$plugin->version  = 20008051555;  // The current module version (Date: YYYYMMDDXX)
$plugin->requires  = 2014110400;
$plugin->cron     = 0;           // Period for cron to check this module (secs)

?>