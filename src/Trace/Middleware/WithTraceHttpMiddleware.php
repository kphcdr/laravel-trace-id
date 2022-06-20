<?php

namespace Trace\Middleware;

use Trace\TraceId;

class WithTraceHttpMiddleware
{
    public function handle($request, \Closure $next)
    {
        $traceId = $request->header("X-Trace-Id","");
        TraceId::newTraceId($traceId);

        return $next($request);
    }
}
