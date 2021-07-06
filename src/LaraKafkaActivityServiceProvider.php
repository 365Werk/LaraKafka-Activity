<?php

namespace Werk365\LaraKafkaActivity;

use Illuminate\Support\ServiceProvider;
use Spatie\Activitylog\Models\Activity as ActivityLog;
use Werk365\LaraKafkaActivity\Observers\ActivityLogObserver;

class LaraKafkaActivityServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Start observing spatie activitylogger
        ActivityLog::observe(ActivityLogObserver::class);
    }
}
