<?php

namespace Trace;

use PHPUnit\Framework\TestCase;

class FormatterTest extends TestCase
{
    public function testFormat()
    {
        $formatter = new TraceFormatter();
        $format = $formatter->format([]);

        self::assertStringContainsString("traceId", $format);
    }
}