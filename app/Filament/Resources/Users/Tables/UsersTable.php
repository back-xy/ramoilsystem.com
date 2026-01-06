<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('ناو')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->label('ئیمەیل')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('phone')
                    ->label('ژمارەی مۆبایل')
                    ->searchable()
                    ->extraAttributes(['dir' => 'ltr'])
                    ->alignment('right'),

                TextColumn::make('role')
                    ->label('ڕۆل')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'admin' => 'danger',
                        'user' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn($state) => match ($state) {
                        'admin' => 'بەڕێوەبەر',
                        'user' => 'بەکارهێنەر',
                        default => $state,
                    })
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('بەرواری دروستکردن')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->label('بەرواری نوێکردنەوە')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->label('دەستکاری'),
            ])
            ->toolbarActions([
                //
            ]);
    }
}
