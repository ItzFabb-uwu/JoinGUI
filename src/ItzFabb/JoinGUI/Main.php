<?php

namespace ItzFabb\JoinGUI;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\scheduler\ClosureTask;
use libs\muqsit\invmenu\InvMenu;
use libs\muqsit\invmenu\InvMenuHandler;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\inventory\transaction\action\SlotChangeAction;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;
use pocketmine\network\mcpe\protocol\LevelEventPacket;

class Main extends PluginBase implements Listener
{

    public function onEnable()
    {
        $this->getLogger()->info("     _     _      ___ _   _ ___ ");
        $this->getLogger()->info("  _ | |___(_)_ _ / __| | | |_ _|");
        $this->getLogger()->info(" | || / _ \ | ' \ (_ | |_| || | ");
        $this->getLogger()->info("  \__/\___/_|_||_\___|\___/|___|");
        $this->getLogger()->info("");
        $this->getLogger()->info("");
        $this->getLogger()->info("");
        $this->getLogger()->info("");
        $this->getLogger()->info("");
        $this->getLogger()->info("");
        $this->getLogger()->info("§7JoinGUI §fMade by itzfabb");
        $this->getLogger()->info("§7plugin feedback by: §citzfabb");
        $this->getLogger()->info("");
        $this->getLogger()->info("thank you for using my plugin <3");
        $this->getLogger()->info("");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveResource("config.yml");
        
        $this->mainmenu = InvMenu::create(InvMenu::TYPE_DOUBLE_CHEST);
        if(!InvMenuHandler::isRegistered()){
			InvMenuHandler::register($this);
		}
		
        $this->InvCrashFix = $this->getServer()->getPluginManager()->getPlugin("InvCrashFix");
        if (!$this->InvCrashFix or $this->InvCrashFix->isDisabled()) {
            $this->getLogger()->warning("Plugin needed an depends pls make sure you have InvCrashFix");
            $this->getLogger()->warning("installed on your server");
            $this->getLogger()->warning("InvCrashFix Poggit: https://poggit.pmmp.io/ci/Muqsit/InvCrashFix");
            $this->getServer()->getPluginManager()->disablePlugin($this);
        }
    }
    public function onJoin(PlayerJoinEvent $event)
    {
            $player = $event->getPlayer();
            $serverofficialname = $this->getConfig()->get("server-name");
            
            $player->sendMessage(str_replace(["{name}", "+n", "&", "{servername}"], [$player->getName(), "\n", "§", $serverofficialname], $this->getConfig()->get("welcome")));
            $player->getLevel()->broadcastLevelSoundEvent($player->add(0, $player->eyeHeight, 0), LevelSoundEventPacket::SOUND_BEACON_ACTIVATE);
            if ($player instanceof Player) {
                $this->menujoin($player);
        }
    }
    public function menujoin(Player $sender)
     {
         $aboutcfg = new Config($this->getDataFolder() . "config.yml", Config::YAML);
	    $this->mainmenu->readonly();
	    $this->mainmenu->setListener([$this, "menujoin1"]);
         $this->mainmenu->setName($aboutcfg->get("TITLE"));
	    $inv = $this->mainmenu->getInventory();
	    
	    $id = $aboutcfg->get("id");
	    $meta = $aboutcfg->get("meta");
	    $name = $aboutcfg->get("name");
	    
	    //
	    $id1 = $aboutcfg->get("id1");
	    $meta1 = $aboutcfg->get("meta1");
	    $name1 = $aboutcfg->get("name1");
	    
	    //
	    $id2 = $aboutcfg->get("id2");
	    $meta2 = $aboutcfg->get("meta2");
	    $name2 = $aboutcfg->get("name2");
	    
	    //
	    $id3 = $aboutcfg->get("id3");
	    $meta3 = $aboutcfg->get("meta3");
	    $name3 = $aboutcfg->get("name3");
	    
	    //
	    $id4 = $aboutcfg->get("id4");
	    $meta4 = $aboutcfg->get("meta4");
	    $name4 = $aboutcfg->get("name4");
	    
	    //
	    $id5 = $aboutcfg->get("id5");
	    $meta5 = $aboutcfg->get("meta5");
	    $name5 = $aboutcfg->get("name5");
	    
	    //
	    $id6 = $aboutcfg->get("id6");
	    $meta6 = $aboutcfg->get("meta6");
	    $name6 = $aboutcfg->get("name6");
	    
	    //
	    $id7 = $aboutcfg->get("id7");
	    $meta7 = $aboutcfg->get("meta7");
	    $name7 = $aboutcfg->get("name7");
	    
	    //
	    $id8 = $aboutcfg->get("id8");
	    $meta8 = $aboutcfg->get("meta8");
	    $name8 = $aboutcfg->get("name8");
	    
	    //
	    $id9 = $aboutcfg->get("id9");
	    $meta9 = $aboutcfg->get("meta9");
	    $name9 = $aboutcfg->get("name9");
	    
	    //
	    $id10 = $aboutcfg->get("id10");
	    $meta10 = $aboutcfg->get("meta10");
	    $name10 = $aboutcfg->get("name10");
	    
	    //
	    $id11 = $aboutcfg->get("id11");
	    $meta11 = $aboutcfg->get("meta11");
	    $name11 = $aboutcfg->get("name11");
	    
	    //
	    $id12 = $aboutcfg->get("id12");
	    $meta12 = $aboutcfg->get("meta12");
	    $name12 = $aboutcfg->get("name12");
	    
	    //
	    $id13 = $aboutcfg->get("id13");
	    $meta13 = $aboutcfg->get("meta13");
	    $name13 = $aboutcfg->get("name13");
	    
	    //
	    $id14 = $aboutcfg->get("id14");
	    $meta14 = $aboutcfg->get("meta14");
	    $name14 = $aboutcfg->get("name14");
	    
	    //
	    $id15 = $aboutcfg->get("id15");
	    $meta15 = $aboutcfg->get("meta15");
	    $name15 = $aboutcfg->get("name15");
	    
	    //
	    $id16 = $aboutcfg->get("id16");
	    $meta16 = $aboutcfg->get("meta16");
	    $name16 = $aboutcfg->get("name16");
	    
	    //
	    $id17 = $aboutcfg->get("id17");
	    $meta17 = $aboutcfg->get("meta17");
	    $name17 = $aboutcfg->get("name17");
	    
	    //
	    $id18 = $aboutcfg->get("id18");
	    $meta18 = $aboutcfg->get("meta18");
	    $name18 = $aboutcfg->get("name18");
	    
	    //
	    $id19 = $aboutcfg->get("id19");
	    $meta19 = $aboutcfg->get("meta19");
	    $name19 = $aboutcfg->get("name19");
	    
	    //
	    $id20 = $aboutcfg->get("id20");
	    $meta20 = $aboutcfg->get("meta20");
	    $name20 = $aboutcfg->get("name20");
	    
	    //
	    $id21 = $aboutcfg->get("id21");
	    $meta21 = $aboutcfg->get("meta21");
	    $name21 = $aboutcfg->get("name21");
	    
	    //
	    $id22 = $aboutcfg->get("id22");
	    $meta22 = $aboutcfg->get("meta22");
	    $name22 = $aboutcfg->get("name22");
	    
	    //
	    $id23 = $aboutcfg->get("id23");
	    $meta23 = $aboutcfg->get("meta23");
	    $name23 = $aboutcfg->get("name23");
	    
	    //
	    $id24 = $aboutcfg->get("id24");
	    $meta24 = $aboutcfg->get("meta24");
	    $name24 = $aboutcfg->get("name24");
	    
	    //
	    $id25 = $aboutcfg->get("id25");
	    $meta25 = $aboutcfg->get("meta25");
	    $name25 = $aboutcfg->get("name25");
	    
	    //
	    $id26 = $aboutcfg->get("id26");
	    $meta26 = $aboutcfg->get("meta26");
	    $name26 = $aboutcfg->get("name26");
	    
	    //
	    $id27 = $aboutcfg->get("id27");
	    $meta27 = $aboutcfg->get("meta27");
	    $name27 = $aboutcfg->get("name27");
	    
	    //
	    $id28 = $aboutcfg->get("id28");
	    $meta28 = $aboutcfg->get("meta28");
	    $name28 = $aboutcfg->get("name28");
	    
	    //
	    $id29 = $aboutcfg->get("id29");
	    $meta29 = $aboutcfg->get("meta29");
	    $name29 = $aboutcfg->get("name29");
	    
	    //
	    $id30 = $aboutcfg->get("id30");
	    $meta30 = $aboutcfg->get("meta30");
	    $name30 = $aboutcfg->get("name30");
	    
	    //
	    $id31 = $aboutcfg->get("id31");
	    $meta31 = $aboutcfg->get("meta31");
	    $name31 = $aboutcfg->get("name31");
	    
	    //
	    $id32 = $aboutcfg->get("id32");
	    $meta32 = $aboutcfg->get("meta32");
	    $name32 = $aboutcfg->get("name32");
	    
	    //
	    $id33 = $aboutcfg->get("id33");
	    $meta33 = $aboutcfg->get("meta33");
	    $name33 = $aboutcfg->get("name33");
	    
	    //
	    $id34 = $aboutcfg->get("id34");
	    $meta34 = $aboutcfg->get("meta34");
	    $name34 = $aboutcfg->get("name34");
	    
	    //
	    $id35 = $aboutcfg->get("id35");
	    $meta35 = $aboutcfg->get("meta35");
	    $name35 = $aboutcfg->get("name35");
	    
	    //
	    $id36 = $aboutcfg->get("id36");
	    $meta36 = $aboutcfg->get("meta36");
	    $name36 = $aboutcfg->get("name36");
	    
	    //
	    $id37 = $aboutcfg->get("id37");
	    $meta37 = $aboutcfg->get("meta37");
	    $name37 = $aboutcfg->get("name37");
	    
	    //
	    $id38 = $aboutcfg->get("id38");
	    $meta38 = $aboutcfg->get("meta38");
	    $name38 = $aboutcfg->get("name38");
	    
	    //
	    $id39 = $aboutcfg->get("id39");
	    $meta39 = $aboutcfg->get("meta39");
	    $name39 = $aboutcfg->get("name39");
	    
	    //
	    $id40 = $aboutcfg->get("id40");
	    $meta40 = $aboutcfg->get("meta40");
	    $name40 = $aboutcfg->get("name40");
	    
	    //
	    $id41 = $aboutcfg->get("id41");
	    $meta41 = $aboutcfg->get("meta41");
	    $name41 = $aboutcfg->get("name41");
	    
	    //
	    $id42 = $aboutcfg->get("id42");
	    $meta42 = $aboutcfg->get("meta42");
	    $name42 = $aboutcfg->get("name42");
	    
	    //
	    $id43 = $aboutcfg->get("id43");
	    $meta43 = $aboutcfg->get("meta43");
	    $name43 = $aboutcfg->get("name43");
	    
	    //
	    $id44 = $aboutcfg->get("id44");
	    $meta44 = $aboutcfg->get("meta44");
	    $name44 = $aboutcfg->get("name44");
	    
	    //
	    $id45 = $aboutcfg->get("id45");
	    $meta45 = $aboutcfg->get("meta45");
	    $name45 = $aboutcfg->get("name45");
	    
	    //
	    $id46 = $aboutcfg->get("id46");
	    $meta46 = $aboutcfg->get("meta46");
	    $name46 = $aboutcfg->get("name46");
	    
	    //
	    $id47 = $aboutcfg->get("id47");
	    $meta47 = $aboutcfg->get("meta47");
	    $name47 = $aboutcfg->get("name47");
	    
	    //
	    $id48 = $aboutcfg->get("id48");
	    $meta48 = $aboutcfg->get("meta48");
	    $name48 = $aboutcfg->get("name48");
	    
	    //
	    $id49 = $aboutcfg->get("id49");
	    $meta49 = $aboutcfg->get("meta49");
	    $name49 = $aboutcfg->get("name49");
	    
	    //
	    $id50 = $aboutcfg->get("id50");
	    $meta50 = $aboutcfg->get("meta50");
	    $name50 = $aboutcfg->get("name50");
	    
	    //
	    $id51 = $aboutcfg->get("id51");
	    $meta51 = $aboutcfg->get("meta51");
	    $name51 = $aboutcfg->get("name51");
	    
	    //
	    $id52 = $aboutcfg->get("id52");
	    $meta52 = $aboutcfg->get("meta52");
	    $name52 = $aboutcfg->get("name52");
	    
	    //
	    $id53 = $aboutcfg->get("id53");
	    $meta53 = $aboutcfg->get("meta53");
	    $name53 = $aboutcfg->get("name53");
	    
	    
	    
	    $inv->setItem(0, Item::get($id, $meta, 1)->setCustomName($name));
	    $inv->setItem(1, Item::get($id1, $meta1, 1)->setCustomName($name1));
	    $inv->setItem(2, Item::get($id2, $meta2, 1)->setCustomName($name2));
	    $inv->setItem(3, Item::get($id3, $meta3, 1)->setCustomName($name3));
	    $inv->setItem(4, Item::get($id4, $meta4, 1)->setCustomName($name4));
	    $inv->setItem(5, Item::get($id5, $meta5, 1)->setCustomName($name5));
	    $inv->setItem(6, Item::get($id6, $meta6, 1)->setCustomName($name6));
	    $inv->setItem(7, Item::get($id7, $meta7, 1)->setCustomName($name7));
	    $inv->setItem(8, Item::get($id8, $meta8, 1)->setCustomName($name8));
	    //
	    $inv->setItem(9, Item::get($id9, $meta9, 1)->setCustomName($name9));
	    $inv->setItem(10, Item::get($id10, $meta10, 1)->setCustomName($name10));
	    $inv->setItem(11, Item::get($id11, $meta11, 1)->setCustomName($name11));
	    $inv->setItem(12, Item::get($id12, $meta12, 1)->setCustomName($name12));
	    $inv->setItem(13, Item::get($id13, $meta13, 1)->setCustomName($name13));
	    $inv->setItem(14, Item::get($id14, $meta14, 1)->setCustomName($name14));
	    $inv->setItem(15, Item::get($id15, $meta15, 1)->setCustomName($name15));
	    $inv->setItem(16, Item::get($id16, $meta16, 1)->setCustomName($name16));
	    $inv->setItem(17, Item::get($id17, $meta17, 1)->setCustomName($name17));
	    //
	    $inv->setItem(18, Item::get($id18, $meta18, 1)->setCustomName($name18));
	    $inv->setItem(19, Item::get($id19, $meta19, 1)->setCustomName($name19));
	    $inv->setItem(20, Item::get($id20, $meta20, 1)->setCustomName($name20));
	    $inv->setItem(21, Item::get($id21, $meta21, 1)->setCustomName($name21));
	    $inv->setItem(22, Item::get($id22, $meta22, 1)->setCustomName($name22));
	    $inv->setItem(23, Item::get($id23, $meta23, 1)->setCustomName($name23));
	    $inv->setItem(24, Item::get($id24, $meta24, 1)->setCustomName($name24));
	    $inv->setItem(25, Item::get($id25, $meta25, 1)->setCustomName($name25));
	    $inv->setItem(26, Item::get($id26, $meta26, 1)->setCustomName($name26));
	    // 
	    $inv->setItem(27, Item::get($id27, $meta27, 1)->setCustomName($name27));
	    $inv->setItem(28, Item::get($id28, $meta28, 1)->setCustomName($name28));
	    $inv->setItem(29, Item::get($id29, $meta29, 1)->setCustomName($name29));
	    $inv->setItem(30, Item::get($id30, $meta30, 1)->setCustomName($name30));
	    $inv->setItem(31, Item::get($id31, $meta31, 1)->setCustomName($name31));
	    $inv->setItem(32, Item::get($id32, $meta32, 1)->setCustomName($name32));
	    $inv->setItem(33, Item::get($id33, $meta33, 1)->setCustomName($name33));
	    $inv->setItem(34, Item::get($id34, $meta34, 1)->setCustomName($name34));
	    $inv->setItem(35, Item::get($id35, $meta35, 1)->setCustomName($name35));
	    //
	    $inv->setItem(36, Item::get($id36, $meta36, 1)->setCustomName($name36));
	    $inv->setItem(37, Item::get($id37, $meta37, 1)->setCustomName($name37));
	    $inv->setItem(38, Item::get($id38, $meta38, 1)->setCustomName($name38));
	    $inv->setItem(39, Item::get($id39, $meta39, 1)->setCustomName($name39));
	    $inv->setItem(40, Item::get($id40, $meta40, 1)->setCustomName($name40));
	    $inv->setItem(41, Item::get($id41, $meta41, 1)->setCustomName($name41));
	    $inv->setItem(42, Item::get($id42, $meta42, 1)->setCustomName($name42));
	    $inv->setItem(43, Item::get($id43, $meta43, 1)->setCustomName($name43));
	    $inv->setItem(44, Item::get($id44, $meta44, 1)->setCustomName($name44));
	    //
	    $inv->setItem(45, Item::get($id45, $meta45, 1)->setCustomName($name45));
	    $inv->setItem(46, Item::get($id46, $meta46, 1)->setCustomName($name46));
	    $inv->setItem(47, Item::get($id47, $meta47, 1)->setCustomName($name47));
	    $inv->setItem(48, Item::get($id48, $meta48, 1)->setCustomName($name48));
	    $inv->setItem(49, Item::get($id49, $meta49, 1)->setCustomName($name49));
	    $inv->setItem(50, Item::get($id50, $meta50, 1)->setCustomName($name50));
	    $inv->setItem(51, Item::get($id51, $meta51, 1)->setCustomName($name51));
	    $inv->setItem(52, Item::get($id52, $meta52, 1)->setCustomName($name52));
	    $inv->setItem(53, Item::get($id53, $meta53, 1)->setCustomName($name53));
	    
	    $this->mainmenu->send($sender);
     }
     public function menujoin1(Player $sender, Item $item)
     {
        $hand = $sender->getInventory()->getItemInHand()->getId();
        $inv = $this->mainmenu->getInventory();
        $aboutcfg = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        
        if($item->getId() === $aboutcfg->get("id.exit") && $item->getDamage() === $aboutcfg->get("meta.exit")){
        	$sender->getLevel()->broadcastLevelSoundEvent($sender->add(0, $sender->eyeHeight, 0), LevelSoundEventPacket::SOUND_CHEST_CLOSED);
        	$sender->removeWindow($inv);
        }
     }
}


