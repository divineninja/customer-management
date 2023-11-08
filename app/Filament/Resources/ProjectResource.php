<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SelectColumn;

use App\Filament\Resources\CustomerResource\ProjectForm;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(ProjectForm::form());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(ProjectForm::table())
            ->filters([
                SelectFilter::make('task')
                    ->options([
                        'Wedding Dress' => 'Wedding Dress',
                        'Suite' => 'Suite',
                        'Entourage' => 'Entourage',
                        'Hair and Makeup' => 'Hair and Makeup',
                        'Makeup' => 'Makeup',
                        'Bride\'s Makeup' => 'Bride\'s Makeup',
                        'Entourage Makeup' => 'Entourage Makeup',
                        'Wedding Planning' => 'Wedding Planning',
                    ]),
                SelectFilter::make('customer')
                    ->relationship('customer', 'name')
                    ->searchable()
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
