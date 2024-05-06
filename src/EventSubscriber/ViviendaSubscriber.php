<?php
namespace App\EventSubscriber;

use App\Entity\Vivienda;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class ViviendaSubscriber implements EventSubscriber
{
    public function getSubscribedEvents()
    {
        return [
            Events::postPersist,
            Events::postUpdate,
            Events::postRemove,
        ];
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $this->index($args);
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        $this->index($args);
    }

    public function postRemove(LifecycleEventArgs $args)
    {
        $this->index($args);
    }

    public function index(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if (!$entity instanceof Vivienda) {
            return;
        }else{
            $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'');
            
            $firebase = (new Factory) ->withServiceAccount($serviceAccount)
                ->create();
            
            $database = $firebase->getDatabase();
            
            $reference = $database->getReference('');

            $reference->getChild($entity->getId())
                ->set([
                    'antiguedad' => $entity->getAntiguedad(),
                    'banyos' => $entity->getBanyos(),
                    'carpinteria_exterior' => $entity->getCarpinteriaExterior(),
                    'carpinteria_interior' => $entity->getCarpinteriaInterior(),
                    'conservacion' => $entity->getConservacion(),
                    'consumo_energia' => $entity->getConsumoEnergia(),
                    'descripcion' => $entity->getDescripcion(),
                    'emisiones_co2' => $entity->getEmisionesCo2(),
                    'garaje' => $entity->isGaraje(),
                    'habitaciones' => $entity->getHabitaciones(),
                    'localidad' => $entity->getLocalidad(),
                    'nombre' => $entity->getNombre(),
                    'num_plantas' => $entity->getNumPlantas(),
                    'orientacion' => $entity->getOrientacion(),
                    'planta' => $entity->getPlanta(),
                    'precio' => $entity->getPrecio(),
                    'referencia' => $entity->getReferencia(),
                    'superficie_construida' => $entity->getSuperficieConstruida(),
                    'superficie_parcela' => $entity->getSuperficieParcela(),
                    'superficie_util' => $entity->getSuperficieUtil(),
                    'tipo_cocina' => $entity->getTipoCocina(),
                    'tipo_propiedad' => $entity->getTipoPropiedad(),
                    'tipo_exterior' => $entity->getTipoExterior(),
                    'tipo_operacion' => $entity->getTipoOperacion(),
                    'tipo_suelo' => $entity->getTipoSuelo(),
                    'vistas' => $entity->getVistas(),
                    'zona' => $entity->getZona(),
                    'imagenes' => $entity->getImagenes()
                ]);
        }
    }
}