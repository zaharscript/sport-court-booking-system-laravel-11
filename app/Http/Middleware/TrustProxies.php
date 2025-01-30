<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Contracts\Foundation\Application;
use Symfony\Component\HttpFoundation\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);

        // You can specify your proxies here, for example:
        // $this->proxies = '*'; // Trust all proxies
        // $this->proxies = '192.168.1.1'; // Trust a specific IP
        // $this->proxies = ['192.168.1.1', '192.168.1.2']; // Trust multiple IPs

        // Example for trusting all proxies from a specific subnet:
        // $this->proxies = '192.168.1.0/24';
    }
}
