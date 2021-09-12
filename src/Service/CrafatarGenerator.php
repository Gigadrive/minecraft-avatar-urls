<?php

namespace Gigadrive\MinecraftAvatar\Service;

use function http_build_query;
use function sprintf;

/**
 * Represents the crafatar.com avatar service.
 * @package Gigadrive\MinecraftAvatar\Service
 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
 */
class CrafatarGenerator extends AbstractMinecraftAvatarGenerator {
	public const BASE_URL = "https://crafatar.com";

	public function face(string $player, int $size = 16, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/avatars/%s?%s", self::BASE_URL, $player, http_build_query([
			"size" => $size,
			"overlay" => $overlay ?? null,
			"default" => $default
		]));
	}

	public function head(string $player, int $scale = 1, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/renders/head/%s?%s", self::BASE_URL, $player, http_build_query([
			"scale" => $scale,
			"overlay" => $overlay ?? null,
			"default" => $default
		]));
	}

	public function body3D(string $player, int $scale = 1, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/renders/body/%s?%s", self::BASE_URL, $player, http_build_query([
			"scale" => $scale,
			"overlay" => $overlay ?? null,
			"default" => $default
		]));
	}

	public function skin(string $player, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/skins/%s?%s", self::BASE_URL, $player, http_build_query([
			"default" => $default
		]));
	}

	public function cape(string $player, string $default = self::DEFAULT_PLAYER): ?string {
		return sprintf("%s/capes/%s?%s", self::BASE_URL, $player, http_build_query([
			"default" => $default
		]));
	}
}