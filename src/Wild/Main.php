<?php
namespace Kenn\Wild;
use pocketmine\plugin\PluginBase;
use pocketmine\command\{Command,CommandSender};
use pocketmine\level\{Level,Position};
use pocketmine\math\Vector3;
use pocketmine\{Server,Player};
use pocketmine\utils\TextFormat as C;
class Main extends PluginBase {
    
    public function onEnable(){
        $this->getLogger()->info(C::GREEN."Enabled!");
    }
    
    public function onCommand(CommandSender $s, Command $cmd, $label, array $args){
        if(strtolower($cmd->getName() == "wild")){
            $x = rand(1,999);
            $y = rand(1,128);
            $z = rand(1,999);
            $s->teleport(new Position($x,$y,$z));
            $s->sendMessage(C::RED."Teleporting to Random Place!");
        }
        return true;
    }
}
