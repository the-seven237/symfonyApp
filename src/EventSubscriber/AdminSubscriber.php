<?php
namespace App\EventSubscriber;

use App\Model\Timestampedinterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AdminSubscriber implements EventSubscriberInterface{

    public static function getSubscribedEvents(): array
    {
        return[
            BeforeEntityPersistedEvent::class => ['setEntityCreatedAt'],
            BeforeEntityUpdatedEvent::class => ['setEntityUpdatedAt']
        ];
    }

    public function setEntityCreatedAt(BeforeEntityPersistedEvent $event){
        $entity = $event->getEntityInstance();

        if (!$entity instanceof Timestampedinterface){
            return;
        }
        $entity ->setcreatedAt(new \DateTime());


    }

    public function setEntityUpdatedAt(BeforeEntityPersistedEvent $event){
        $entity = $event->getEntityInstance();

        if (!$entity instanceof Timestampedinterface){
            return;
        }
        $entity ->setcreatedAt(new \DateTime());


    }


}
