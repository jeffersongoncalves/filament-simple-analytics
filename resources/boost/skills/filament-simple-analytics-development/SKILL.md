---
name: filament-simple-analytics-development
description: Build and work with the Filament Simple Analytics plugin — settings page and script injection in Filament panels.
---

# Filament Simple Analytics Development

## When to use this skill

- Adding or changing the Simple Analytics integration of a Filament panel
- Customizing the Simple Analytics settings page
- Debugging a missing Simple Analytics script in a panel

## Package Overview

- **Package**: `jeffersongoncalves/filament-simple-analytics` (branch `3.x`)
- **Namespace**: `JeffersonGoncalves\Filament\SimpleAnalytics`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^3.0`, `jeffersongoncalves/laravel-simple-analytics:^1.0`

## Setup

```php
use JeffersonGoncalves\Filament\SimpleAnalytics\SimpleAnalyticsPlugin;

$panel->plugins([
    SimpleAnalyticsPlugin::make(),                        // settings page + script injection
    // SimpleAnalyticsPlugin::make()->settingsPage(false), // script injection only
]);
```

```bash
php artisan vendor:publish --tag=simple-analytics-settings-migrations
php artisan migrate
```

## Settings Fields

| Field | Component |
|-------|-----------|
| `enabled` | Toggle |
| `hostname` | TextInput |

## Troubleshooting

- **Script missing**: the settings are incomplete — `app(\JeffersonGoncalves\SimpleAnalytics\Settings\SimpleAnalyticsSettings::class)->isConfigured()`.
- **Settings page errors**: the `simple_analytics` settings group is missing — publish and run the migrations.
