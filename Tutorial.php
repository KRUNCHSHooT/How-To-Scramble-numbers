<?php

namespace Tutorial;

use pocketmine\{Player, Server};
use pocketmine\plugin\PluginBase;
use pocketmine\command\{Command, CommandSender};

class Tutorial extends PluginBase  {

		public function onEnable(){

		$this->getLogger()->info("P");

	}

	

	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {

		switch($cmd->getName()){

			case "test":

				$b = rand(1, 10); //scrambled from 1 to 10

				$sender->sendMessage("" . $b);

			break;

			case "test1":

				$b = mt_rand(1, 10); //faster 4 times than rand()

				$sender->sendMessage("" . $b);

			break;

		}

		return true;

	}

	

	public function onDisable(){

		$this->getLogger()->info("D");

	}

}
