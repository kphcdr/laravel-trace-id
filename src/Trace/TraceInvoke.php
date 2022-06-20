<?php

namespace Trace;

use Monolog\Handler\RotatingFileHandler;

class TraceInvoke
{
    /**
     * 自定义给定的日志实例。
     *
     * @param  \Illuminate\Log\Logger  $logger
     * @return void
     */
    public function __invoke($logger)
    {
        /** @var RotatingFileHandler $handler */
        foreach ($logger->getHandlers() as $handler) {
            $handler->setFormatter(new TraceFormatter());
            $handler->pushProcessor(
                function ($record) {
                    $record["traceId"] = TraceId::getTraceId();
                    return $record;
                }
            );
        }
    }
}
