<?php

declare(strict_types=1);

use Phel\Phel;

$projectRootDir = dirname(__DIR__);
require $projectRootDir . '/vendor/autoload.php';

$appFile = $projectRootDir . "/out/realworld/app.php";

$phelMode = getenv('PHEL_MODE') ?: 'fast';
if ($phelMode === 'fast' && file_exists($appFile)) {
    require_once $projectRootDir . "/out/realworld/app.php";
} else {
    Phel::run($projectRootDir, 'realworld\app');
}

