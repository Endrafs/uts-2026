<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationLabel = 'Biodata Website';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Navbar & Identitas')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('site_name')->label('Judul Website')->required()->maxLength(255),
                        Forms\Components\TextInput::make('navbar_name')->label('Nama di Navbar')->required()->maxLength(255),
                    ]),

                Forms\Components\Section::make('Section Biodata')
                    ->columns(2)
                    ->schema([
                        Forms\Components\FileUpload::make('photo')
                            ->label('Foto Profil')
                            ->disk('public')
                            ->directory('profile')
                            ->image()
                            ->imageEditor()
                            ->maxSize(10240)
                            ->columnSpan(2),
                        Forms\Components\TextInput::make('hero_name')->label('Nama Lengkap')->required()->maxLength(255),
                        Forms\Components\TextInput::make('hero_title')->label('Judul / Profesi')->maxLength(255),
                        Forms\Components\Textarea::make('bio')->label('Deskripsi Singkat')->rows(4)->columnSpan(2),
                        Forms\Components\Textarea::make('description')->label('Deskripsi Tambahan')->rows(4)->columnSpan(2),
                    ]),

                Forms\Components\Section::make('Kolom Pengalaman')
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('experience_years')->label('Angka Pengalaman')->maxLength(50),
                        Forms\Components\TextInput::make('experience_label')->label('Label Pengalaman')->maxLength(100),
                        Forms\Components\TextInput::make('projects_count')->label('Angka Proyek')->maxLength(50),
                        Forms\Components\TextInput::make('projects_label')->label('Label Proyek')->maxLength(100),
                        Forms\Components\TextInput::make('skills_count')->label('Angka Skill')->maxLength(50),
                        Forms\Components\TextInput::make('skills_label')->label('Label Skill')->maxLength(100),
                    ]),

                Forms\Components\Section::make('Section Apa yang Saya Kerjakan')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('work_section_title')->label('Judul Section')->required()->maxLength(255),
                        Forms\Components\Textarea::make('work_section_subtitle')->label('Deskripsi Section')->rows(3)->columnSpan(2),
                    ]),

                Forms\Components\Section::make('Section Bekerja Sama / Contact')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('contact_section_title')->label('Judul Contact')->required()->maxLength(255),
                        Forms\Components\Textarea::make('contact_section_subtitle')->label('Deskripsi Contact')->rows(3)->columnSpan(2),
                        Forms\Components\TextInput::make('email')->label('Email')->email()->maxLength(255),
                        Forms\Components\TextInput::make('phone')->label('Nomor Telepon')->tel()->maxLength(255),
                        Forms\Components\TextInput::make('address')->label('Alamat')->maxLength(255)->columnSpan(2),
                        Forms\Components\TextInput::make('instagram_url')->label('Instagram URL')->url()->maxLength(255),
                        Forms\Components\TextInput::make('linkedin_url')->label('LinkedIn URL')->url()->maxLength(255),
                        Forms\Components\TextInput::make('github_url')->label('GitHub URL')->url()->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')->label('Foto')->disk('public')->circular(),
                TextColumn::make('navbar_name')->label('Nama Navbar')->searchable(),
                TextColumn::make('hero_name')->label('Nama Biodata')->searchable(),
                TextColumn::make('updated_at')->label('Terakhir Diubah')->since()->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
