## Filament Simple Analytics

Filament plugin for Simple Analytics with a settings page powered by Spatie Laravel Settings. The script is injected at `PanelsRenderHook::HEAD_START` of every panel page once the settings are complete.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-simple-analytics:"^2.0"
php artisan vendor:publish --tag=simple-analytics-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\SimpleAnalytics\SimpleAnalyticsPlugin;

$panel->plugins([
    SimpleAnalyticsPlugin::make(),
]);
</code-snippet>
@endverbatim

### Architecture
- `SimpleAnalyticsPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin` and registers `ManageSimpleAnalyticsSettings` (disable with `->settingsPage(false)`)
- `SimpleAnalyticsServiceProvider` extends `AbstractAnalyticsServiceProvider` and injects the `simple-analytics::script` view from `jeffersongoncalves/laravel-simple-analytics`
- `ManageSimpleAnalyticsSettings` is a `SettingsPage` bound to `JeffersonGoncalves\SimpleAnalytics\Settings\SimpleAnalyticsSettings`
- Translations live under `filament-simple-analytics::pages.*`
