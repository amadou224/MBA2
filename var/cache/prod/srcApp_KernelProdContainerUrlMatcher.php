<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/royalpalace' => [[['_route' => 'royalpalace', '_controller' => 'App\\Controller\\AnnexesController::index'], null, null, null, false, false, null]],
            '/royalpalacereservation' => [[['_route' => 'royalpalacereservation', '_controller' => 'App\\Controller\\AnnexesController::royalpalaceRouteReservation'], null, null, null, false, false, null]],
            '/app/mobile' => [[['_route' => 'app_mobile', '_controller' => 'App\\Controller\\AppMobileController::index'], null, null, null, false, false, null]],
            '/app/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\AppMobileController::query'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::homeRoute'], null, null, null, false, false, null]],
            '/aeroport' => [[['_route' => 'aeroport', '_controller' => 'App\\Controller\\HomeController::aeroportRoute'], null, null, null, false, false, null]],
            '/horairesTarifs' => [[['_route' => 'horairesTarifs', '_controller' => 'App\\Controller\\HomeController::aeroportRouteHorairesTarifs'], null, null, null, false, false, null]],
            '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\HomeController::Profile'], null, null, null, false, false, null]],
            '/infoDestination' => [[['_route' => 'infoDestination', '_controller' => 'App\\Controller\\HomeController::infoDestination'], null, null, null, false, false, null]],
            '/reservationAller' => [[['_route' => 'reservationAller', '_controller' => 'App\\Controller\\HomeController::reservationAller'], null, null, null, false, false, null]],
            '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\HomeController::reservation'], null, null, null, false, false, null]],
            '/registration' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
        ];
    }
}
