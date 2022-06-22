<?php

namespace Trace\Traits;

use Trace\Middleware\WithTraceJobMiddleware;

trait WithTrace
{
    public function middleware()
    {
        return [WithTraceJobMiddleware::class];
    }
}
