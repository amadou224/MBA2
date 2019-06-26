<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.6IyCi5X' shared service.

return $this->privates['.service_locator.6IyCi5X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Chauffeur' => ['privates', 'App\\Repository\\ChauffeurRepository', 'getChauffeurRepositoryService.php', true],
    'Vehicule' => ['privates', 'App\\Repository\\VehiculeRepository', 'getVehiculeRepositoryService.php', true],
    'lieux' => ['privates', 'App\\Repository\\LieuxRepository', 'getLieuxRepositoryService.php', true],
    'mailer' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService.php', true],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'repertoirReserv' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService.php', true],
    'reservation' => ['privates', '.errored..service_locator.6IyCi5X.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.6IyCi5X": it references class "App\\Entity\\Reservation" but no such service exists.'],
]);
