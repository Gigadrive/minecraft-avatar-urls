<?php

namespace Gigadrive\MinecraftAvatar\Service;

use function sprintf;

/**
 * Represents the crafthead.net avatar service.
 * @package Gigadrive\MinecraftAvatar\Service
 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
 */
class CraftheadGenerator extends AbstractMinecraftAvatarGenerator {
	public const BASE_URL = "https://crafthead.net";

	public function face(string $player, int $size = 16, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/%s/%s/%d", self::BASE_URL, $overlay ? "helm" : "avatar", $player, $size);
	}

	public function head(string $player, int $scale = 1, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/cube/%s/%d", self::BASE_URL, $player, $scale);
	}

	public function skin(string $player, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/skin/%s", self::BASE_URL, $player);
	}
}