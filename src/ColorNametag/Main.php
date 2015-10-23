<?php

/* 
 * CaptainKenji idea plugin
 * CaptainKenji presents
 * CaptainKenji films
 */
namespace ColorNametag;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\scheduler\CallbackTask;

class Main extends PluginBase implements Listener {
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getServer()->getLogger()->info(TextFormat::GREEN.'Plugin Activated');
        $this->getServer()->getScheduler()->ScheduleRepeatingTask(new \pocketmine\scheduler\CallbackTask ([$this,"nametag"]),5);
    }
    public function onRun($currentTick){
        $player=$p;
        $p->setNametag('§1'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§2'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§3'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§4'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§5'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§6'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§7'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§8'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§9'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§0'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§a'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§b'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§d'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§c'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§e'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
        $p->setNametag('§f'.$p->getname(),'§eHealth: §8[§c'.$p->getHealth().'§8/§c'.$p->getMaxHealth().'§8]');
    }
}

