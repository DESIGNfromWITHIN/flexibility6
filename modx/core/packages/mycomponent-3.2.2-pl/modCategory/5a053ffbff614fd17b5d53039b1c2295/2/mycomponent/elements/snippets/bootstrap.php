<?php
/* set start time */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);
$mem_usage = memory_get_usage();

/* @var $modx modX */

$cliMode = false;

if (!defined('MODX_CORE_PATH')) {
    $path1 = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . '/_build/build.config.php';
    if (file_exists($path1)) {
        include $path1;
    } else {
        $path2 = dirname(dirname(dirname(__FILE__))) . '/_build/build.config.php';
        if (file_exists($path2)) {
            include($path2);
        }
    }
    if (!defined('MODX_CORE_PATH')) {
        session_write_close();
        die('[bootstrap.php] Could not find build.config.php');
    }
    require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
    $modx = new modX();
    /* Initialize and set up logging */
    $modx->initialize('mgr');
    $modx->getService('error', 'error.modError', '', '');
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);
    $modx->setLogTarget(XPDO_CLI_MODE
        ? 'ECHO'
        : 'HTML');

    /* This section will only run when operating outside of MODX */
    if (php_sapi_name() == 'cli') {
        $cliMode = true;
        /* Set $modx->user and $modx->resource to avoid
         * other people's plugins from crashing us */
        $modx->getRequest();
        $homeId = $modx->getOption('site_start');
        $homeResource = $modx->getObject('modResource', $homeId);

        if ($homeResource instanceof modResource) {
            $modx->resource = $homeResource;
        } else {
            echo "\nNo Resource\n";
        }
    }
} else {
    if (!$modx->user->hasSessionContext('mgr')) {
        die ('Unauthorized Access');
    }
}

require_once $modx->getOption('mc.core_path', null, $modx->getOption('core_path') . 'components/mycomponent/') . 'model/mycomponent/mycomponentproject.class.php';
// include 'mycomponentproject.class.php';

$modx->lexicon->load('mycomponent:default');

$project = new MyComponentProject($modx);
$project->init();

//$project->removeObjects();
$project->bootstrap();

$output = $project->helpers->getOutput();

// echo print_r(ObjectAdapter::$myObjects, true);

$output .= "\n\n" . $modx->lexicon('mc_initial_memory_used') . ': ' . round($mem_usage / 1048576, 2) . ' ' .
    $modx->lexicon('mc_megabytes');
$mem_usage = memory_get_usage();
$peak_usage = memory_get_peak_usage(true);
$output .= "\n" . $modx->lexicon('mc_final_memory_used')
    . ': ' . round($mem_usage / 1048576, 2) . ' ' .
    $modx->lexicon('mc_megabytes');
$output .= "\n" . $modx->lexicon('mc_peak_memory_used')
    . ': ' . round($peak_usage / 1048576, 2) . ' ' .
    $modx->lexicon('mc_megabytes');
/* report how long it took */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tend = $mtime;
$totalTime = ($tend - $tstart);
$totalTime = sprintf("%2.4f s", $totalTime);
$output .=  "\n" . $modx->lexicon('mc_total_time') .
    ': ' . $totalTime;

if ($cliMode) {
    echo $output;
} else {
    return $output;
}
