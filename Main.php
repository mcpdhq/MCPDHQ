<?php

declare(strict_types=1);

namespace TeamMCPD\MCPDHQ;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

	public function onEnable() : void{
		$this->getLogger()->info("MCPDHQ Enabled!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "mcpdhqstats":
				$sender->sendMessage("MCPD HQ Stats: Chief: ItsMario56INF Officer: 9 MCPD Officer");
				return true;
			default:
				return false;
		}
	}

	public function onDisable() : void{
		$this->getLogger()->info("Disabled");
	}
}
