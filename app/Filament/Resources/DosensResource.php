<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DosensResource\Pages;
use App\Filament\Resources\DosensResource\RelationManagers;
use App\Models\Dosens;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DosensResource extends Resource
{
    protected static ?string $model = Dosens::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
         
             ->schema([
                
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(100),
                   
                Forms\Components\TextInput::make('nip')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(100),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->required(),
                Forms\Components\TextInput::make('jenis_kelamin')
                    ->required()
                    ->maxLength(1),
                Forms\Components\Textarea::make('alamat')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('no_hp')
                    ->columnSpanFull(),
                     FileUpload::make('gambar')
                      ->image()
                       ->panelLayout('grid')
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->date('d M, Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_hp')
                    ->searchable(),
                    Tables\Columns\ImageColumn::make('gambar')
                   ->searchable(''),
                   
                   
   
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDosens::route('/'),
            'create' => Pages\CreateDosens::route('/create'),
            'edit' => Pages\EditDosens::route('/{record}/edit'),
        ];
    }
}
