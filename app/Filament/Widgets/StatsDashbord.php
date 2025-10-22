<?php

namespace App\Filament\Widgets;

use App\Models\Dosens;
use App\Models\Mahasiswa;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashbord extends BaseWidget
{
    protected function getStats(): array
    {
        $countDosens = Dosens::count();
        $countMahasiswa = Mahasiswa::count();
        $countUser = User::count();
        return [
            Stat::make('Jumlah Dosen', $countDosens . ' Orang'),
            Stat::make('Jumlah Mahasiswa', $countMahasiswa . ' orang'),
            Stat::make('Jumlah User', $countUser . ' Orang'),
        ];
    }
}
