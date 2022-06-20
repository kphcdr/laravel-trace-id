# laravel-trace-id

## usage

### config

```
logger.php 

        'stdout' => [
            'driver' => 'monolog',
            'handler' => StreamHandler::class,
            'with' => [
                'stream' => 'php://stdout',
            ],
            'tap' => [\Trace\TraceInvoke::class], #new line
        ],
```

### in http

append to webMiddleware group 

WithTraceHttpMiddleware::class


### in jobs
```
    public function middleware()
    {
        return [WithTraceJobMiddleware::class];
    }
```

### tracking

put header   X-Trace-Id:Any string