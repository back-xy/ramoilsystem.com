<?php

namespace App\Filament\Resources\Cities\Pages;

use App\Filament\Resources\Cities\CityResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageCities extends ManageRecords
{
    protected static string $resource = CityResource::class;

    protected static ?string $title = 'شارەکان';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('دروستکردنی شار'),
        ];
    }
}
