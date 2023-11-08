<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Customer;
use App\Models\Project;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            stat::make('Total Customers', Customer::all()->count()),
            stat::make('Total Projects', Project::all()->count()),
        ];
    }
}
