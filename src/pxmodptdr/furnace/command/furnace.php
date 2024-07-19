<?php

namespace pxmodptdr\furnace\command;

use pocketmine\block\VanillaBlocks;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\VanillaItems;
use pocketmine\permission\DefaultPermissions;
use pocketmine\player\Player;
use pxmodptdr\furnace\Main;

class furnace extends Command
{
    public function __construct()
    {
        
        parent::__construct("furnace", Main::getInstance()->getConfig()->get("furnace_description"), "/furnace");
        $this->setPermission(DefaultPermissions::ROOT_OPERATOR);
    }
    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            $item = $sender->getInventory()->getItemInHand();
            switch($item->getTypeId()){
                case VanillaBlocks::IRON_ORE()->asItem()->getTypeId():   
                    $sender->getInventory()->addItem(VanillaItems::IRON_INGOT()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break;
                case VanillaBlocks::DIAMOND_ORE()->asItem()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::DIAMOND()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break;
                case VanillaBlocks::GOLD_ORE()->asItem()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::GOLD_INGOT()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break;
                case VanillaBlocks::EMERALD_ORE()->asItem()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::EMERALD()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break;
                case VanillaBlocks::LAPIS_LAZULI_ORE()->asItem()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::LAPIS_LAZULI()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break; 
                case VanillaBlocks::SAND()->asItem()->getTypeId():
                    $sender->getInventory()->addItem(VanillaBlocks::GLASS()->asItem()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break; 
                case VanillaBlocks::OAK_WOOD()->asItem()->getTypeId():
                case VanillaBlocks::BIRCH_WOOD()->asItem()->getTypeId():  
                case VanillaBlocks::ACACIA_WOOD()->asItem()->getTypeId():   
                case VanillaBlocks::CHERRY_WOOD()->asItem()->getTypeId():
                case VanillaBlocks::JUNGLE_WOOD()->asItem()->getTypeId():
                case VanillaBlocks::SPRUCE_WOOD()->asItem()->getTypeId():
                case VanillaBlocks::DARK_OAK_WOOD()->asItem()->getTypeId():
                case VanillaBlocks::MANGROVE_WOOD()->asItem()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::CHARCOAL()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break;
                case VanillaItems::POTATO()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::BAKED_POTATO()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break; 
                case VanillaItems::RAW_BEEF()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::STEAK()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break; 
                case VanillaItems::RAW_CHICKEN()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::COOKED_CHICKEN()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break; 
                case VanillaItems::RAW_FISH()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::COOKED_FISH()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break; 
                case VanillaItems::RAW_MUTTON()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::COOKED_MUTTON()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break;
                case VanillaItems::RAW_PORKCHOP()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::COOKED_PORKCHOP()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break;
                case VanillaItems::RAW_RABBIT()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::COOKED_RABBIT()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break; 
                case VanillaItems::RAW_SALMON()->getTypeId():
                    $sender->getInventory()->addItem(VanillaItems::COOKED_SALMON()->setCount($item->getCount()));
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_furnace"));
                    break;
                default: 
                    $sender->sendMessage(Main::getInstance()->getConfig()->get("message_no_furnace"));
                    break;
            }
        }
    }
}