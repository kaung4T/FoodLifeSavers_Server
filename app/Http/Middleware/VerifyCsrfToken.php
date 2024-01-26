<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        'http://localhost/EV-Power/notify',
        'https://localhost/EV-Power/notify',
        'http://foodlifesavers.com/notify',
        'https://foodlifesavers.com/notify'
    ];
}
