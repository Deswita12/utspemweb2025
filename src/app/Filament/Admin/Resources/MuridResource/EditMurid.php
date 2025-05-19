<?php

namespace App\Filament\Admin\Resources\MuridResource\Pages;

use App\Filament\Admin\Resources\MuridResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditMurid extends EditRecord
{
    protected static string $resource = MuridResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}



