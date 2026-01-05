<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('changePassword')
                ->label('گۆڕینی وشەی نهێنی')
                ->icon('heroicon-o-key')
                ->color('gray')
                ->modalHeading('گۆڕینی وشەی نهێنی')
                ->modalSubmitActionLabel('نوێکردنەوە')
                ->schema([
                    TextInput::make('new_password')
                        ->label('وشەی نهێنی نوێ')
                        ->password()
                        ->revealable()
                        ->required()
                        ->minLength(6),

                    TextInput::make('new_password_confirmation')
                        ->label('پشتڕاستکردنی وشەی نهێنی نوێ')
                        ->password()
                        ->revealable()
                        ->same('new_password')
                        ->required(),
                ])
                ->action(function (array $data, $record) {
                    $record->update([
                        'password' => Hash::make($data['new_password']),
                    ]);

                    Notification::make()
                        ->success()
                        ->title('سەرکەوتوو')
                        ->body('وشەی نهێنی نوێ کرایەوە')
                        ->send();
                }),

            DeleteAction::make(),
        ];
    }
}
