<?php

namespace Modules\Main\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class ControllerAbstract extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
