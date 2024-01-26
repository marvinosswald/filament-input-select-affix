<?php

use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Select;
use Illuminate\Support\Str;
use Marvinosswald\FilamentInputSelectAffix\Tests\Fixtures\Livewire;
use Marvinosswald\FilamentInputSelectAffix\TextInputSelectAffix;

it('it works without a select like a normal text field', function () {
    $field = (new TextInputSelectAffix($name = Str::random()))
        ->container(ComponentContainer::make(Livewire::make()));

    expect($field)
        ->getStatePath()->toBe($name);

    expect($field)
        ->hasSelect()->toBeFalse();
});

it('accepts select', function () {
    $field = (new TextInputSelectAffix($name = Str::random()))
        ->container(ComponentContainer::make(Livewire::make()));

    $field->select(Select::make('select'));

    expect($field)
        ->hasSelect()->toBeTrue();
});
