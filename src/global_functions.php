<?php

use Gigadrive\MinecraftAvatar\MinecraftAvatar;
use Gigadrive\MinecraftAvatar\Service\AbstractMinecraftAvatarGenerator;

if (!function_exists("avatar")) {
	/**
	 * Gets the default Minecraft avatar service.
	 *
	 * @return AbstractMinecraftAvatarGenerator
	 * @author Mehdi Baaboura <mbaaboura@gigadrivegroup.com>
	 */
	function avatar(): AbstractMinecraftAvatarGenerator {
		return MinecraftAvatar::getDefaultService();
	}
}