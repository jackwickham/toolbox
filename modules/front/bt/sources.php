<?php

namespace IPS\toolbox\modules\front\bt;

use IPS\Dispatcher\Controller;

if (!defined('\IPS\SUITE_UNIQUE_KEY')) {
    header(($_SERVER[ 'SERVER_PROTOCOL' ] ?? 'HTTP/1.0') . ' 403 Forbidden');
    exit;
}

class _sources extends Controller
{

}
