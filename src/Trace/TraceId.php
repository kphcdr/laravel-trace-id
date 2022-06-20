<?php

namespace Trace;

class TraceId
{
    public static $traceId;

    public static function newTraceId(string $traceId = ""): string
    {
        if ($traceId) {
            self::$traceId = $traceId;
        } else {
            self::$traceId = self::generate();
        }
        return $traceId;
    }

    public static function getTraceId(): string
    {
        if (!self::$traceId) {
            self::$traceId = self::generate();
        }
        return self::$traceId;
    }

    public static function generate(): string
    {
        return uniqid();
    }
}
