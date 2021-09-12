<?php

namespace Gigadrive\MinecraftAvatar\Service;

use function sprintf;

/**
 * Represents the mc-heads.net avatar service.
 * @package Gigadrive\MinecraftAvatar\Service
 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
 */
class MCHeadsGenerator extends AbstractMinecraftAvatarGenerator {
	public const BASE_URL = "https://mc-heads.net/";

	public function face(string $player, int $size = 16, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/avatar/%s/%d%s", self::BASE_URL, $player, $size, $overlay ? "" : "/nohelm");
	}

	public function head(string $player, int $scale = 1, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/head/%s/%d", self::BASE_URL, $player, $scale);
	}

	public function body3D(string $player, int $scale = 1, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/body/%s/%d", self::BASE_URL, $player, $scale);
	}

	public function body2D(string $player, int $size = 100, bool $overlay = true): ?string {
		return sprintf("%s/player/%s/%d", self::BASE_URL, $player, $size);
	}

	public function cape(string $player, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/cape/%s", self::BASE_URL, $player);
	}

	public function skin(string $player, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/skin/%s", self::BASE_URL, $player);
	}
}