<?php

namespace Gigadrive\MinecraftAvatar;

use Gigadrive\MinecraftAvatar\Service\AbstractMinecraftAvatarGenerator;

class MinecraftAvatar extends AbstractMinecraftAvatarGenerator {
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
	 * @var array SERVICES
	 */
	public const SERVICES = [
		self::SERVICE_MINOTAR,
		self::SERVICE_CRAFATAR,
		self::SERVICE_CRAFTHEAD
	];

	/**
	 * @var string $defaultService
	 */
	protected static $defaultService = self::SERVICE_MINOTAR;

	/**
	 * Changes the default service to use for generating avatar URLs.
	 * @param string $service
	 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
	 */
	public static function setDefaultService(string $service) {
		self::$defaultService = $service;
	}

	/**
	 * Gets the default service for generating avatar URLs.
	 * @return string
	 */
	public static function getDefaultService(): string {
		return self::$defaultService;
	}
}