<?php

namespace Gigadrive\MinecraftAvatar;

use Gigadrive\MinecraftAvatar\Service\AbstractMinecraftAvatarGenerator;
use Gigadrive\MinecraftAvatar\Service\CrafatarGenerator;
use Gigadrive\MinecraftAvatar\Service\CraftheadGenerator;
use Gigadrive\MinecraftAvatar\Service\CravatarGenerator;
use Gigadrive\MinecraftAvatar\Service\MCHeadsGenerator;
use Gigadrive\MinecraftAvatar\Service\MinotarGenerator;
use function is_null;

class MinecraftAvatar {
	/**
	 * @var string SERVICE_MINOTAR
	 */
	public const SERVICE_MINOTAR = "minotar";

	/**
	 * @var string SERVICE_CRAFATAR
	 */
	public const SERVICE_CRAFATAR = "crafatar";

	/**
	 * @var string SERVICE_CRAFTHEAD
	 */
	public const SERVICE_CRAFTHEAD = "crafthead";

	/**
	 * @var string SERVICE_MCHEADS
	 */
	public const SERVICE_MCHEADS = "mcheads";

	/**
	 * @var string SERVICE_CRAVATAR
	 */
	public const SERVICE_CRAVATAR = "cravatar";

	/**
	 * @var array SERVICES
	 */
	protected static $services = null;

	/**
	 * @var string $defaultService
	 */
	protected static $defaultService = self::SERVICE_MINOTAR;

	/**
	 * Gets the default service for generating avatar URLs.
	 * @return AbstractMinecraftAvatarGenerator
	 */
	public static function getDefaultService(): AbstractMinecraftAvatarGenerator {
		return self::getServices()[self::$defaultService];
	}

	/**
	 * Changes the default service to use for generating avatar URLs.
	 * @param string $service
	 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
	 */
	public static function setDefaultService(string $service) {
		self::$defaultService = $service;
	}

	/**
	 * @return AbstractMinecraftAvatarGenerator[]
	 */
	public static function getServices(): array {
		if (is_null(self::$services)) {
			self::$services = [
				self::SERVICE_MINOTAR => new MinotarGenerator,
				self::SERVICE_CRAFATAR => new CrafatarGenerator,
				self::SERVICE_CRAFTHEAD => new CraftheadGenerator,
				self::SERVICE_MCHEADS => new MCHeadsGenerator,
				self::SERVICE_CRAVATAR => new CravatarGenerator
			];
		}

		return self::$services;
	}
}