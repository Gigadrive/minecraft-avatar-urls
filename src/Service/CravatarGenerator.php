<?php

namespace Gigadrive\MinecraftAvatar\Service;

use function sprintf;

/**
 * Represents the cravatar.eu avatar service.
 * @package Gigadrive\MinecraftAvatar\Service
 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
 */
class CravatarGenerator extends AbstractMinecraftAvatarGenerator {
	public const BASE_URL = "https://cravatar.eu";

	public function face(string $player, int $size = 16, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/%s/%s/%d.png", self::BASE_URL, $overlay ? "helmavatar" : "avatar", $player, $size);
	}

	public function head(string $player, int $scale = 1, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/%s/%s/%d.png", self::BASE_URL, $overlay ? "helmhead" : "head", $player, $scale);
	}
}