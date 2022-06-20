<?php

namespace Trace\Middleware;

use Trace\TraceId;

class WithTraceJobMiddleware
{
    public function handle($job,$next)
    {
        TraceId::newTraceId();
        return $next($job);
    }
}
