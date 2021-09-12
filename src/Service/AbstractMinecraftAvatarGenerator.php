<?php

namespace Gigadrive\MinecraftAvatar\Service;

/**
 * An abstract class used for generating URLs.
 * @package Gigadrive\MinecraftAvatar\Service
 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
 */
abstract class AbstractMinecraftAvatarGenerator {
	public const DEFAULT_PLAYER = "MHF_Steve";

	/**
	 * Used for generating a URL to a 2D face of a player.
	 *
	 * @param string $player The UUID or Username of the player to find. Username support depends on the service used.
	 * @param int $size The size for avatars in pixels. 1 - 512
	 * @param bool $overlay Apply the overlay to the avatar. This option was previously known as helm.
	 * @param string $default The fallback to be used when the requested image cannot be served.
	 * @return string|null The final URL. If null, this service does not support this type of image generation.
	 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
	 */
	public function face(string $player, int $size = 16, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return null;
	}

	/**
	 * Used for generating a URL to a 3D head of a player.
	 *
	 * @param string $player The UUID or Username of the player to find. Username support depends on the service used.
	 * @param int $scale The scale factor for renders. 1 - 10
	 * @param bool $overlay Apply the overlay to the avatar. This option was previously known as helm.
	 * @param string $default The fallback to be used when the requested image cannot be served.
	 * @return string|null The final URL. If null, this service does not support this type of image generation.
	 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
	 */
	public function head(string $player, int $scale = 1, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return null;
	}

	/**
	 * Used for generating a URL to a 3D body of a player.
	 *
	 * @param string $player The UUID or Username of the player to find. Username support depends on the service used.
	 * @param int $scale The scale factor for renders. 1 - 10
	 * @param bool $overlay Apply the overlay to the avatar. This option was previously known as helm.
	 * @param string $default The fallback to be used when the requested image cannot be served.
	 * @return string|null The final URL. If null, this service does not support this type of image generation.
	 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
	 */
	public function body3D(string $player, int $scale = 1, bool $overlay = true, string $default = self::DEFAULT_PLAYER): ?string {
		return null;
	}

	/**
	 * Used for generating a URL to a 2D body of a player.
	 *
	 * @param string $player The UUID or Username of the player to find. Username support depends on the service used.
	 * @param int $size The size for avatars in pixels. 1 - 512
	 * @param bool $overlay Apply the overlay to the avatar. This option was previously known as helm.
	 * @return string|null The final URL. If null, this service does not support this type of image generation.
	 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
	 */
	public function body2D(string $player, int $size = 100, bool $overlay = true): ?string {
		return null;
	}

	/**
	 * Used for generating a URL to a 2D body of a player, only including the torso.
	 *
	 * @param string $player The UUID or Username of the player to find. Username support depends on the service used.
	 * @param int $size The size for avatars in pixels. 1 - 512
	 * @param bool $overlay Apply the overlay to the avatar. This option was previously known as helm.
	 * @return string|null The final URL. If null, this service does not support this type of image generation.
	 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
	 */
	public function bust2D(string $player, int $size = 100, bool $overlay = true): ?string {
		return null;
	}

	/**
	 * Used for generating a URL to the raw skin image of a player.
	 *
	 * @param string $player The UUID or Username of the player to find. Username support depends on the service used.
	 * @param string $default The fallback to be used when the requested image cannot be served.
	 * @return string|null The final URL. If null, this service does not support this type of image generation.
	 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
	 */
	public function skin(string $player, string $default = self::DEFAULT_PLAYER): ?string {
		return null;
	}

	/**
	 * Used for generating a URL to the raw cape image of a player.
	 *
	 * @param string $player The UUID or Username of the player to find. Username support depends on the service used.
	 * @param string $default The fallback to be used when the requested image cannot be served.
	 * @return string|null The final URL. If null, this service does not support this type of image generation.
	 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
	 */
	 public function cape(string $player, string $default = self::DEFAULT_PLAYER): ?string {
		 return null;
	 }
}