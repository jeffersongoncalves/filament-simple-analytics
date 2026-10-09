<?php

namespace JeffersonGoncalves\Filament\SimpleAnalytics\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;
use JeffersonGoncalves\SimpleAnalytics\Settings\SimpleAnalyticsSettings;

class ManageSimpleAnalyticsSettings extends SettingsPage
{
    protected static string $settings = SimpleAnalyticsSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function getNavigationLabel(): string
    {
        return __('filament-simple-analytics::pages.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return AbstractAnalyticsPlugin::navigationGroupFor('filament-simple-analytics') ?? __('filament-simple-analytics::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-simple-analytics::pages.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-simple-analytics::pages.sections.simple_analytics.heading'))
                    ->description(__('filament-simple-analytics::pages.sections.simple_analytics.description'))
                    ->schema([
                        Toggle::make('enabled')
                            ->label(__('filament-simple-analytics::pages.fields.enabled.label'))
                            ->helperText(__('filament-simple-analytics::pages.fields.enabled.helper')),
                        TextInput::make('hostname')
                            ->label(__('filament-simple-analytics::pages.fields.hostname.label'))
                            ->helperText(__('filament-simple-analytics::pages.fields.hostname.helper'))
                            ->placeholder('example.com')
                            ->regex('/^[a-z0-9.-]+\.[a-z]{2,}$/i')
                            ->maxLength(253)
                            ->nullable(),
                    ]),
            ]);
    }
}
