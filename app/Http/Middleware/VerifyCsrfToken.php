<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
    	// Hide Url from crsf token hidden
        '/admin/update-event-category-status','/admin/update-event-status',
        '/admin/update-news-category-status','/admin/update-news-status',
        '/admin/update-subject-category-status','/admin/update-staff-status',
        '/admin/update-school-category-status','/admin/update-gallary-status',
    ];
}
