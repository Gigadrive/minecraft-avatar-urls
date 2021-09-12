# Minecraft Avatar URLs

This library provides PHP utilities to generate URLs to Minecraft Avatars in different formats with the ability to easily change between avatar services.

## Requirements

* PHP 7.1 or higher
* Composer

## Installation

```
composer require gigadrive/minecraft-avatar-urls
```

## Usage

```php
use Gigadrive\MinecraftAvatar\MinecraftAvatar;

// Set default service to use
MinecraftAvatar::setDefaultService(MinecraftAvatar::SERVICE_MINOTAR); // minotar.net
MinecraftAvatar::setDefaultService(MinecraftAvatar::SERVICE_CRAFATAR); // crafatar.com
MinecraftAvatar::setDefaultService(MinecraftAvatar::SERVICE_CRAFTHEAD); // crafthead.net
MinecraftAvatar::setDefaultService(MinecraftAvatar::SERVICE_MCHEADS); // mc-heads.net
MinecraftAvatar::setDefaultService(MinecraftAvatar::SERVICE_CRAVATAR); // cravatar.eu

// Retrieve the default service class
$service = MinecraftAvatar::getDefaultService();

// Retrieve the default service class through global function
$service = avatar();

// Manually retrieve a service class
$service = MinecraftAvatar::getServices()[MinecraftAvatar::SERVICE_MINOTAR]; // minotar.net
$service = MinecraftAvatar::getServices()[MinecraftAvatar::SERVICE_CRAFATAR]; // crafatar.com
$service = MinecraftAvatar::getServices()[MinecraftAvatar::SERVICE_CRAFTHEAD]; // crafthead.net
$service = MinecraftAvatar::getServices()[MinecraftAvatar::SERVICE_MCHEADS]; // mc-heads.net
$service = MinecraftAvatar::getServices()[MinecraftAvatar::SERVICE_CRAVATAR]; // cravatar.eu

// Use service class
// Not all formats are available on all classes, check their websites for documentation
// Functions include phpDoc blocks.
$service->face("73b417dcd1e645d8af06895eeb5222a5", 16, true); // Returns a URL 16x16 face image of a player including the helm layer
```

## Copyright and License

This program was developed by [Mehdi Baaboura](https://github.com/Zeryther) and published by [Gigadrive UG](https://gigadrivegroup.com) under the MIT License. For more information click [here](https://github.com/Gigadrive/minecraft-avatar-urls/blob/master/LICENSE).