<?php

namespace App\Livewire;

use Filament\Widgets\ChartWidget;

class BlogPostsChartG extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected static ?string $pollingInterval = null;

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
