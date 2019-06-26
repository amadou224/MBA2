<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/royalpalace' => [[['_route' => 'royalpalace', '_controller' => 'App\\Controller\\AnnexesController::index'], null, null, null, false, false, null]],
            '/royalpalacereservation' => [[['_route' => 'royalpalacereservation', '_controller' => 'App\\Controller\\AnnexesController::royalpalaceRouteReservation'], null, null, null, false, false, null]],
            '/app/mobile' => [[['_route' => 'app_mobile', '_controller' => 'App\\Controller\\AppMobileController::index'], null, null, null, false, false, null]],
            '/app/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\AppMobileController::query'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::homeRoute'], null, null, null, false, false, null]],
            '/Administration' => [[['_route' => 'AdministrationContoller', '_controller' => 'App\\Controller\\HomeController::Administration'], null, null, null, false, false, null]],
            '/aeroport' => [[['_route' => 'aeroport', '_controller' => 'App\\Controller\\HomeController::aeroportRoute'], null, null, null, false, false, null]],
            '/horairesTarifs' => [[['_route' => 'horairesTarifs', '_controller' => 'App\\Controller\\HomeController::aeroportRouteHorairesTarifs'], null, null, null, false, false, null]],
            '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\HomeController::Profile'], null, null, null, false, false, null]],
            '/infoDestination' => [[['_route' => 'infoDestination', '_controller' => 'App\\Controller\\HomeController::infoDestination'], null, null, null, false, false, null]],
            '/reservationAller' => [[['_route' => 'reservationAller', '_controller' => 'App\\Controller\\HomeController::reservationAller'], null, null, null, false, false, null]],
            '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\HomeController::reservation'], null, null, null, false, false, null]],
            '/facture' => [[['_route' => 'Facture', '_controller' => 'App\\Controller\\HomeController::Factures'], null, null, null, false, false, null]],
            '/payement' => [[['_route' => 'payement', '_controller' => 'App\\Controller\\HomeController::PayementStripe'], null, null, null, false, false, null]],
            '/registration' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/admistration/(?'
                        .'|reservation/(?'
                            .'|aeroport/([^/]++)(*:218)'
                            .'|([^/]++)(*:234)'
                        .')'
                        .'|annulation/([^/]++)(*:262)'
                    .')'
                    .'|/Facture/([^/]++)(*:288)'
                    .'|/ficheDeMission/([^/]++)(*:320)'
                    .'|/horaires23/([^/]++)(*:348)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            218 => [[['_route' => 'admistration_reservation_aeroport', '_controller' => 'App\\Controller\\AdmistrationReservationAeroportController::ModifierReservation'], ['id'], null, null, false, true, null]],
            234 => [[['_route' => 'modifie_reservation', '_controller' => 'App\\Controller\\AdmistrationReservationAeroportController::Modification'], ['id'], null, null, false, true, null]],
            262 => [[['_route' => 'annulation_reservation', '_controller' => 'App\\Controller\\AdmistrationReservationAeroportController::Annulation'], ['id'], null, null, false, true, null]],
            288 => [[['_route' => 'facture', '_controller' => 'App\\Controller\\AdmistrationReservationAeroportController::pdf'], ['id'], null, null, false, true, null]],
            320 => [[['_route' => 'FicheDeMission', '_controller' => 'App\\Controller\\AdmistrationReservationAeroportController::FicheDeMission'], ['id'], null, null, true, true, null]],
            348 => [[['_route' => 'horairesDynamiques', '_controller' => 'App\\Controller\\HomeController::horairesdynamique'], ['id'], null, null, false, true, null]],
        ];
    }
}
