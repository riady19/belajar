<?php

namespace App\Filament\Widgets;

use App\Models\Dosens;
use App\Models\Mahasiswa;
use App\Models\User;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
      $countDosens = Dosens::count();
      $countMahasiswa = Mahasiswa::count();
      $countUser = User::count();
        return [
             'datasets' => [
            [
                'label' => 'Blog posts created',
                'data' => [$countDosens, $countMahasiswa, $countUser],
                'backgroundColor' => '#36A2EB',
                'borderColor' => '#9BD0F5',
            ],
        ],
        'labels' => ['Dosen', 'Mahasiswa', 'User'],
    ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
