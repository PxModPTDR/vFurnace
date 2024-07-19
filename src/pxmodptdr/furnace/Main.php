<?php

namespace pxmodptdr\furnace;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;
use pxmodptdr\furnace\command\furnace;

class Main extends PluginBase{
    use SingletonTrait;
    protected function onLoad(): void
    {
        self::setInstance($this);
    }

    protected function onEnable(): void
    {
        $this->saveDefaultConfig();
        $this->getServer()->getCommandMap()->register("", new furnace());
        $this->getLogger()->info("§2Activation du plugin Furnace by Vanilla Shop !");
    }
 }