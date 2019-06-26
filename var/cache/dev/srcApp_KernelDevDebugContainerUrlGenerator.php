<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'admistration_reservation_aeroport' => [['id'], ['_controller' => 'App\\Controller\\AdmistrationReservationAeroportController::ModifierReservation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admistration/reservation/aeroport']], [], []],
        'modifie_reservation' => [['id'], ['_controller' => 'App\\Controller\\AdmistrationReservationAeroportController::Modification'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admistration/reservation']], [], []],
        'annulation_reservation' => [['id'], ['_controller' => 'App\\Controller\\AdmistrationReservationAeroportController::Annulation'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admistration/annulation']], [], []],
        'facture' => [['id'], ['_controller' => 'App\\Controller\\AdmistrationReservationAeroportController::pdf'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Facture']], [], []],
        'FicheDeMission' => [['id'], ['_controller' => 'App\\Controller\\AdmistrationReservationAeroportController::FicheDeMission'], [], [['text', '/'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ficheDeMission']], [], []],
        'royalpalace' => [[], ['_controller' => 'App\\Controller\\AnnexesController::index'], [], [['text', '/royalpalace']], [], []],
        'royalpalacereservation' => [[], ['_controller' => 'App\\Controller\\AnnexesController::royalpalaceRouteReservation'], [], [['text', '/royalpalacereservation']], [], []],
        'app_mobile' => [[], ['_controller' => 'App\\Controller\\AppMobileController::index'], [], [['text', '/app/mobile']], [], []],
        'user' => [[], ['_controller' => 'App\\Controller\\AppMobileController::query'], [], [['text', '/app/user']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::homeRoute'], [], [['text', '/']], [], []],
        'AdministrationContoller' => [[], ['_controller' => 'App\\Controller\\HomeController::Administration'], [], [['text', '/Administration']], [], []],
        'horairesDynamiques' => [['id'], ['_controller' => 'App\\Controller\\HomeController::horairesdynamique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/horaires23']], [], []],
        'aeroport' => [[], ['_controller' => 'App\\Controller\\HomeController::aeroportRoute'], [], [['text', '/aeroport']], [], []],
        'horairesTarifs' => [[], ['_controller' => 'App\\Controller\\HomeController::aeroportRouteHorairesTarifs'], [], [['text', '/horairesTarifs']], [], []],
        'profile' => [[], ['_controller' => 'App\\Controller\\HomeController::Profile'], [], [['text', '/profile']], [], []],
        'infoDestination' => [[], ['_controller' => 'App\\Controller\\HomeController::infoDestination'], [], [['text', '/infoDestination']], [], []],
        'reservationAller' => [[], ['_controller' => 'App\\Controller\\HomeController::reservationAller'], [], [['text', '/reservationAller']], [], []],
        'reservation' => [[], ['_controller' => 'App\\Controller\\HomeController::reservation'], [], [['text', '/reservation']], [], []],
        'Facture' => [[], ['_controller' => 'App\\Controller\\HomeController::Factures'], [], [['text', '/facture']], [], []],
        'payement' => [[], ['_controller' => 'App\\Controller\\HomeController::PayementStripe'], [], [['text', '/payement']], [], []],
        'security_registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/registration']], [], []],
        'security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
        'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], [], [['text', '/admin/']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
