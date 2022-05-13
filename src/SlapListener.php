<?php

namespace xqwtxon\SlapBackV2;

use slapper\entities\SlapperHuman;
use slapper\events\SlapperHitEvent;
use pocketmine\event\Listener;
use pocketmine\entity\Human;
use pocketmine\player\Player;
use pocketmine\entity\animation\ArmSwingAnimation;

class SlapListener implements Listener {
    
    public function onSlapperHit(SlapperHitEvent $ev){
		  $entity = $ev->getEntity();
		  if(!$entity instanceof SlapperHuman){
			return;
		  }
		  $entity = $ev->getEntity();
		  if(!$entity instanceof SlapperHuman){
			return;
		  }
                  if(!$entity instanceof Player){
                         return;
                  } 
                  $player = $ev->getDamager();
                  $entity->broadcastAnimation(new ArmSwingAnimation($entity), [$player]);  
         } 
}
