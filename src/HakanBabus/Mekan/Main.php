<?php

declare(strict_types=1);

namespace HakanBabus\Mekan;

use pocketmine\plugin\PluginBase;
use pocketmine\player;
use pocketmine\server;
use pocketmine\command\CommandSender;
use pocketmine\command\command;

class Main extends PluginBase
{
	public function oncommand(commandsender $sender, command $cmd, string $label, array $args) : bool
	{

		switch($cmd->getname())
		{
			case "mekan":
			 if($sender Instanceof player);
			 {
			   		$this->mekanui($sender);
			 }
		}
		return true;
	}




	public function mekanui($player) {



		$form = $this->getserver()->GetPluginManager()->getplugin("FormAPI")->createsimpleform(function (player $player, int $data = null){
			if($data === null)
			{
				return true;
			}
			Switch($data)
			{
				case 0:
				    $player->teleport($this->getServer()->getLevelByName("world")->getSafeSpawn());
				    $player->sendMessage("§4[Rebrise] §rLobiye Işınlandın!");
				    break;

				case 1:  
				    $player->teleport($this->getServer()->getLevelByName("arena")->getSafeSpawn());
				    $player->sendMessage("§4[Rebrise] §rArenaya Işınlandın!");
				    break; 

				case 2:  
				    
				    break;
    

			}
		});
		$form->settitle("Mekan Menüsü");
		$form->setcontent("                  Buton Seç!");
		$form->addButton("§lLobi", 0, "textures/ui/night_vision_effect.png");
		$form->addbutton("§lArena", 0, "textures/items/gold_sword.png");
		$form->addbutton("§l§4Kapat", 0, "textures/ui/cancel.png");
		$form->sendtoplayer($player);
		return $form;
    }

}

