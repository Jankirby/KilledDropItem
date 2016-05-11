<?php

  namespace KilledCreeperHead;
  
  use pocketmine\utils\TextFormat as Color;
  use pocketmine\event\player\PlayerDeathEvent;
  use pocketmine\event\Listener;
  use pocketmine\plugin\PluginBase;
  use pocketmine\command\CommandSender;
  use pocketmine\item\Item;
  
  class Main extends PluginBase implements Listener{
      
      public function onEnable(){
          $this->getServer()->getPluginManager()->registerEvents($this,$this);
      }
      
    public function onDeath(PlayerDeathEvent $e){
        $p = $e->getPlayer();
         $lvl = $p->getLevel();
         if(!$p->hasPermission("killedcreeperhead.drop")){
         $item = Item::get(397,4,1);
         $lvl->dropItem($p, $item);
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		if(strtolower($cmd->getName('KCHead'))){
			if(count($args) == 0){
				$sender->sendMessage(Color::AQUA. "This server is using KilledCreeperHead v1.0 by Jankirby");
                        }
                }
    }
         }
    }
  }
