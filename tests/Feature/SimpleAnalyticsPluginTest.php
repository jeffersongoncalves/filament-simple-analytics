<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Filament\SimpleAnalytics\Pages\ManageSimpleAnalyticsSettings;
use JeffersonGoncalves\Filament\SimpleAnalytics\SimpleAnalyticsPlugin;
use JeffersonGoncalves\SimpleAnalytics\Settings\SimpleAnalyticsSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageSimpleAnalyticsSettings::class)
        ->and(SimpleAnalyticsPlugin::make()->getId())->toBe('filament-simple-analytics');
});

it('uses translated labels', function () {
    expect(ManageSimpleAnalyticsSettings::getNavigationLabel())->toBe('Simple Analytics');

    app()->setLocale('pt_BR');

    expect((new ManageSimpleAnalyticsSettings)->getTitle())->toBe('Configurações do Simple Analytics');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageSimpleAnalyticsSettings::class)
        ->fillForm(['enabled' => true, 'hostname' => 'example.com'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect(app(SimpleAnalyticsSettings::class)->refresh()->isConfigured())->toBeTrue()
        ->and(app(SimpleAnalyticsSettings::class)->refresh()->enabled)->toBe(true)
        ->and(app(SimpleAnalyticsSettings::class)->refresh()->hostname)->toBe('example.com');
});

it('rejects an invalid value', function () {
    Livewire::test(ManageSimpleAnalyticsSettings::class)
        ->fillForm(['enabled' => true, 'hostname' => 'bad host"'])
        ->call('save')
        ->assertHasFormErrors(['hostname']);
});

it('injects the Simple Analytics script into the panel once configured', function () {
    $settings = app(SimpleAnalyticsSettings::class);
    $settings->enabled = true;
    $settings->hostname = 'example.com';
    $settings->save();

    expect((string) FilamentView::renderHook(PanelsRenderHook::HEAD_START))->toContain('simpleanalyticscdn.com');
});
