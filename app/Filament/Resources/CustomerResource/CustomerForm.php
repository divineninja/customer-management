<?php

namespace App\Filament\Resources\CustomerResource;

use App\Filament\FormInterface;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class CustomerForm implements FormInterface
{
    public static function form()
    {
        return [
            TextInput::make('name')
                ->required(),
            TextInput::make('email')
                ->email()
                ->unique(ignoreRecord: true),
            TextInput::make('phone')
                ->tel(),
            Textarea::make('address')
                ->rows(10)
                ->cols(20),
        ];
    }

    public static function table()
    {
        return [
            TextColumn::make('name'),
            TextColumn::make('email'),
            TextColumn::make('phone'),
        ];
    }
}
