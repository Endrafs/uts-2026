<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MessageResource\Pages;
use App\Models\Message;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Pesan Visitor';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Detail Pesan')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')->label('Nama')->required()->maxLength(255),
                        Forms\Components\TextInput::make('email')->label('Email')->email()->required()->maxLength(255),
                        Forms\Components\TextInput::make('subject')->label('Subjek')->maxLength(255)->columnSpan(2),
                        Forms\Components\Textarea::make('message')->label('Pesan')->required()->rows(8)->columnSpan(2),
                        Forms\Components\Toggle::make('is_read')->label('Sudah Dibaca'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('is_read')->label('Dibaca')->boolean(),
                TextColumn::make('name')->label('Nama')->searchable()->sortable(),
                TextColumn::make('email')->label('Email')->searchable(),
                TextColumn::make('subject')->label('Subjek')->searchable()->limit(40),
                TextColumn::make('message')->label('Pesan')->limit(60),
                TextColumn::make('created_at')->label('Masuk')->dateTime('d M Y H:i')->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMessages::route('/'),
            'edit' => Pages\EditMessage::route('/{record}/edit'),
        ];
    }
}
