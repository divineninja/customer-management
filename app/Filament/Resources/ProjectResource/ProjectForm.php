<?php

namespace App\Filament\Resources\CustomerResource;

use App\Filament\FormInterface;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SelectColumn;
use App\Filament\Resources\CustomerResource\CustomerForm;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use App\Models\Gallery;

class ProjectForm implements FormInterface
{
    public static function form()
    {
        return [
            Section::make('Customer Information')
            ->description('Please provide the following details about the customer. This information is necessary to complete the order and ensure a smooth transaction. Make sure to fill in all the required fields accurately.')
            ->schema([
                Select::make('customer_id')
                        ->relationship(name: 'customer', titleAttribute: 'name')
                        ->searchable(['name', 'email'])
                        ->createOptionForm(CustomerForm::form())
                        ->required(),
                Select::make('event_id')
                    ->relationship(name: 'event', titleAttribute: 'name')
                    ->createOptionForm([
                        TextInput::make('name')
                    ])
                    ->required(),
                Select::make('task_id')
                    ->relationship(name: 'task', titleAttribute: 'name')
                    ->createOptionForm([
                        TextInput::make('name')
                    ])
                    ->required(),
                DatePicker::make('event_date')
                    ->required(),
                TextInput::make('venue')
                    ->required()
                    ->placeholder('Location'),
            ]),

            Section::make('Measurement')
                ->description('Please provide precise measurements for the order. Accurate measurements are crucial to ensure the final product fits perfectly and meets your expectations. Double-check your measurements and provide any additional notes or specifications if necessary.')
                ->schema([
                    ...self::prepareForm(),
                ])
                ->columns(2),

            Section::make('Galleries')
                ->description('Upload your files here')
                ->schema([
                    FileUpload::make('galleries')
                            ->imagePreviewHeight('250')
                            ->multiple()
                            ->image()
                            ->imageEditor()
                            ->columns(1)
                            ->directory('project')
                            ->openable()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])

                ])
        ];


        //
        //
    }

    public static function table()
    {
        return [
                TextColumn::make('customer.name'),
                TextColumn::make('task.name'),
                TextColumn::make('event.name'),
                TextColumn::make('event_date'),
                TextColumn::make('venue'),
            ];
    }


    private static function prepareForm()
    {
        $fields = [
            'shoulder',
            'upper_bust',
            'bust',
            'rib',
            'hip1',
            'hip2',
            'figure1',
            'figure2',
            'chest_front',
            'chest_back',
            'shoulder_to_back',
            'bust_point',
            'arms',
            'circulation_of_shoulder',
            'length_of_sleeves',
            'length_of_skirt',
            'armpit_to_floor',
            'length_of_pants',
            'crotch',
            'leg',
            'knee',
            'wrist',
            'neck',
            'head',
        ];

        $input = [];

        foreach($fields as $field) {
            $input[] =  TextInput::make($field);
        }

        return $input;
    }
}
