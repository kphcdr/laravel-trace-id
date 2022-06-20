<?php

namespace Trace;

use PHPUnit\Framework\TestCase;

class TraceIdTest extends TestCase
{

    public function testGenerate()
    {
        $d = TraceId::generate();
        self::assertIsString($d);
    }

    public function testNewTraceId()
    {
        $s = uniqid();
        $traceId = TraceId::newTraceId($s);
        self::assertEquals($s, $traceId);
        $traceId = TraceId::getTraceId();
        self::assertEquals($s, $traceId);
    }

    public function testGetTraceId()
    {
        $traceId = TraceId::getTraceId();
        self::assertIsString($traceId);
        self::assertLessThan(strlen($traceId), 6);
    }
}
