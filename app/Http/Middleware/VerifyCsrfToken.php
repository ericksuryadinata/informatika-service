<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '649626703:AAHlOkVuO0nv7QkSmXnRyeNDjtsgKo0IB0Q/webhook',
        'ACb73704def1b950dba007ab425a499a5e/webhook'
    ];
}
