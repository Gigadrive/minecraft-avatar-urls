<?php

namespace Gigadrive\MinecraftAvatar\Service;

use function sprintf;

/**
 * Represents the minotar.net avatar service.
 * @package Gigadrive\MinecraftAvatar\Service
 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
 */
class MinotarGenerator extends AbstractMinecraftAvatarGenerator {
	public const BASE_URL = "https://minotar.net";

	public function face(string $player, int $size = 16, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/%s/%s/%d.png", self::BASE_URL, $overlay ? "helm" : "avatar", $player, $size);
	}

	public function head(string $player, int $scale = 1, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/cube/%s/%d.png", self::BASE_URL, $player, $scale);
	}

	public function body2D(string $player, int $size = 100, bool $overlay = true): ?string {
		return sprintf("%s/%s/%s/%d.png", self::BASE_URL, $overlay ? "armor/body" : "body", $player, $size);
	}

	public function bust2D(string $player, int $size = 100, bool $overlay = true): ?string {
		return sprintf("%s/%s/%s/%d.png", self::BASE_URL, $overlay ? "armor/bust" : "bust", $player, $size);
	}

	public function skin(string $player, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/skin/%s", self::BASE_URL, $player);
	}
}