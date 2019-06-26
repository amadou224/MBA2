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
            '/reservationAllerRoyalPalace' => [[['_route' => 'reservationAllerRoyalPalace', '_controller' => 'App\\Controller\\AnnexesController::ConfirmationAllerRoyalRoute'], null, null, null, false, false, null]],
            '/reservationAllerRetourRoyalPalace' => [[['_route' => 'reservationAllerRetourRoyalPalace', '_controller' => 'App\\Controller\\AnnexesController::ConfirmationAllerRetourRoyalRoute'], null, null, null, false, false, null]],
            '/reservationEffectuee' => [[['_route' => 'reservationEffectuee', '_controller' => 'App\\Controller\\AnnexesController::terminusReservationRoute'], null, null, null, false, false, null]],
            '/envoieBddRoyalPalaceAller' => [[['_route' => 'envoieBddRoyalPalaceAller', '_controller' => 'App\\Controller\\AnnexesController::envoieBddRoyalPalaceAller'], null, null, null, false, false, null]],
            '/envoieBddRoyalPalaceAllerRetour' => [[['_route' => 'envoieBddRoyalPalaceAllerRetour', '_controller' => 'App\\Controller\\AnnexesController::envoieBddRoyalPalaceAllerRetour'], null, null, null, false, false, null]],
            '/app/mobile' => [[['_route' => 'app_mobile', '_controller' => 'App\\Controller\\AppMobileController::index'], null, null, null, false, false, null]],
            '/app/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\AppMobileController::query'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::homeRoute'], null, null, null, false, false, null]],
            '/aeroport' => [[['_route' => 'aeroport', '_controller' => 'App\\Controller\\HomeController::aeroportRoute'], null, null, null, false, false, null]],
            '/transport' => [[['_route' => 'transport', '_controller' => 'App\\Controller\\HomeController::transportRoute'], null, null, null, false, false, null]],
            '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contactRoute'], null, null, null, false, false, null]],
            '/informations' => [[['_route' => 'informations', '_controller' => 'App\\Controller\\HomeController::informationsRoute'], null, null, null, false, false, null]],
            '/tarif' => [[['_route' => 'tarif', '_controller' => 'App\\Controller\\HomeController::tarifRoute'], null, null, null, false, false, null]],
            '/acceuil' => [[['_route' => 'acceuil', '_controller' => 'App\\Controller\\HomeController::acceuilRoute'], null, null, null, false, false, null]],
            '/visiteDuSite' => [[['_route' => 'visiteDuSite', '_controller' => 'App\\Controller\\HomeController::visiteSiteRoute'], null, null, null, false, false, null]],
            '/tarifDuSite' => [[['_route' => 'tarifDuSite', '_controller' => 'App\\Controller\\HomeController::tarifDuSiteRoute'], null, null, null, false, false, null]],
            '/galerieDuSite' => [[['_route' => 'galerieDuSite', '_controller' => 'App\\Controller\\HomeController::galerieDuSiteRoute'], null, null, null, false, false, null]],
            '/horaireDuSite' => [[['_route' => 'horaireDuSite', '_controller' => 'App\\Controller\\HomeController::horaireDuSiteRoute'], null, null, null, false, false, null]],
            '/memorialPageAcceuil' => [[['_route' => 'memorialPageAcceuil', '_controller' => 'App\\Controller\\HomeController::memorialPageAcceuilRoute'], null, null, null, false, false, null]],
            '/confirmation' => [[['_route' => 'confirmation', '_controller' => 'App\\Controller\\HomeController::confirmationRoute'], null, null, null, false, false, null]],
            '/confirmationAllerRetour' => [[['_route' => 'confirmationAllerRetour', '_controller' => 'App\\Controller\\HomeController::confirmationAllerRetourRoute'], null, null, null, false, false, null]],
            '/terminusAllerSimple' => [[['_route' => 'terminusAllerSimple', '_controller' => 'App\\Controller\\HomeController::terminusReservationRoute'], null, null, null, false, false, null]],
            '/envoieBddMemorialAller' => [[['_route' => 'envoieBddMemorialAller', '_controller' => 'App\\Controller\\HomeController::envoieBddMemorialAller'], null, null, null, false, false, null]],
            '/envoieBddMemorialAllerRetour' => [[['_route' => 'envoieBddMemorialAllerRetour', '_controller' => 'App\\Controller\\HomeController::envoieBddMemorialAllerRetour'], null, null, null, false, false, null]],
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
                    .'|/envoieMail(?'
                        .'|Route/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:242)'
                        .'|AllerRetourRoute/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:356)'
                    .')'
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
            242 => [[['_route' => 'envoieMailRoute', '_controller' => 'App\\Controller\\HomeController::envoieMailRoute'], ['nbrePassager', 'email', 'depart', 'destination', 'heureDepart', 'dateDepart'], null, null, false, true, null]],
            356 => [[['_route' => 'envoieMailAllerRetourRoute', '_controller' => 'App\\Controller\\HomeController::envoieMailAllerRetourRoute'], ['nbrePassagerAller', 'nbrePassagerRetour', 'email', 'depart', 'destination', 'telephone', 'heureDepart', 'heureRetour', 'dateDepart', 'dateRetour'], null, null, false, true, null]],
        ];
    }
}
