<?php

namespace JeffersonGoncalves\Filament\SimpleAnalytics;

use JeffersonGoncalves\Filament\SimpleAnalytics\Pages\ManageSimpleAnalyticsSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class SimpleAnalyticsPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-simple-analytics';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageSimpleAnalyticsSettings::class;
    }
}
