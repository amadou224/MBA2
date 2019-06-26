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
        'royalpalace' => [[], ['_controller' => 'App\\Controller\\AnnexesController::index'], [], [['text', '/royalpalace']], [], []],
        'royalpalacereservation' => [[], ['_controller' => 'App\\Controller\\AnnexesController::royalpalaceRouteReservation'], [], [['text', '/royalpalacereservation']], [], []],
        'reservationAllerRoyalPalace' => [[], ['_controller' => 'App\\Controller\\AnnexesController::ConfirmationAllerRoyalRoute'], [], [['text', '/reservationAllerRoyalPalace']], [], []],
        'reservationAllerRetourRoyalPalace' => [[], ['_controller' => 'App\\Controller\\AnnexesController::ConfirmationAllerRetourRoyalRoute'], [], [['text', '/reservationAllerRetourRoyalPalace']], [], []],
        'reservationEffectuee' => [[], ['_controller' => 'App\\Controller\\AnnexesController::terminusReservationRoute'], [], [['text', '/reservationEffectuee']], [], []],
        'envoieBddRoyalPalaceAller' => [[], ['_controller' => 'App\\Controller\\AnnexesController::envoieBddRoyalPalaceAller'], [], [['text', '/envoieBddRoyalPalaceAller']], [], []],
        'envoieBddRoyalPalaceAllerRetour' => [[], ['_controller' => 'App\\Controller\\AnnexesController::envoieBddRoyalPalaceAllerRetour'], [], [['text', '/envoieBddRoyalPalaceAllerRetour']], [], []],
        'app_mobile' => [[], ['_controller' => 'App\\Controller\\AppMobileController::index'], [], [['text', '/app/mobile']], [], []],
        'user' => [[], ['_controller' => 'App\\Controller\\AppMobileController::query'], [], [['text', '/app/user']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::homeRoute'], [], [['text', '/']], [], []],
        'aeroport' => [[], ['_controller' => 'App\\Controller\\HomeController::aeroportRoute'], [], [['text', '/aeroport']], [], []],
        'transport' => [[], ['_controller' => 'App\\Controller\\HomeController::transportRoute'], [], [['text', '/transport']], [], []],
        'contact' => [[], ['_controller' => 'App\\Controller\\HomeController::contactRoute'], [], [['text', '/contact']], [], []],
        'informations' => [[], ['_controller' => 'App\\Controller\\HomeController::informationsRoute'], [], [['text', '/informations']], [], []],
        'tarif' => [[], ['_controller' => 'App\\Controller\\HomeController::tarifRoute'], [], [['text', '/tarif']], [], []],
        'acceuil' => [[], ['_controller' => 'App\\Controller\\HomeController::acceuilRoute'], [], [['text', '/acceuil']], [], []],
        'visiteDuSite' => [[], ['_controller' => 'App\\Controller\\HomeController::visiteSiteRoute'], [], [['text', '/visiteDuSite']], [], []],
        'tarifDuSite' => [[], ['_controller' => 'App\\Controller\\HomeController::tarifDuSiteRoute'], [], [['text', '/tarifDuSite']], [], []],
        'galerieDuSite' => [[], ['_controller' => 'App\\Controller\\HomeController::galerieDuSiteRoute'], [], [['text', '/galerieDuSite']], [], []],
        'horaireDuSite' => [[], ['_controller' => 'App\\Controller\\HomeController::horaireDuSiteRoute'], [], [['text', '/horaireDuSite']], [], []],
        'memorialPageAcceuil' => [[], ['_controller' => 'App\\Controller\\HomeController::memorialPageAcceuilRoute'], [], [['text', '/memorialPageAcceuil']], [], []],
        'confirmation' => [[], ['_controller' => 'App\\Controller\\HomeController::confirmationRoute'], [], [['text', '/confirmation']], [], []],
        'confirmationAllerRetour' => [[], ['_controller' => 'App\\Controller\\HomeController::confirmationAllerRetourRoute'], [], [['text', '/confirmationAllerRetour']], [], []],
        'terminusAllerSimple' => [[], ['_controller' => 'App\\Controller\\HomeController::terminusReservationRoute'], [], [['text', '/terminusAllerSimple']], [], []],
        'envoieMailRoute' => [['nbrePassager', 'email', 'depart', 'destination', 'heureDepart', 'dateDepart'], ['_controller' => 'App\\Controller\\HomeController::envoieMailRoute'], [], [['variable', '/', '[^/]++', 'dateDepart', true], ['variable', '/', '[^/]++', 'heureDepart', true], ['variable', '/', '[^/]++', 'destination', true], ['variable', '/', '[^/]++', 'depart', true], ['variable', '/', '[^/]++', 'email', true], ['variable', '/', '[^/]++', 'nbrePassager', true], ['text', '/envoieMailRoute']], [], []],
        'envoieMailAllerRetourRoute' => [['nbrePassagerAller', 'nbrePassagerRetour', 'email', 'depart', 'destination', 'telephone', 'heureDepart', 'heureRetour', 'dateDepart', 'dateRetour'], ['_controller' => 'App\\Controller\\HomeController::envoieMailAllerRetourRoute'], [], [['variable', '/', '[^/]++', 'dateRetour', true], ['variable', '/', '[^/]++', 'dateDepart', true], ['variable', '/', '[^/]++', 'heureRetour', true], ['variable', '/', '[^/]++', 'heureDepart', true], ['variable', '/', '[^/]++', 'telephone', true], ['variable', '/', '[^/]++', 'destination', true], ['variable', '/', '[^/]++', 'depart', true], ['variable', '/', '[^/]++', 'email', true], ['variable', '/', '[^/]++', 'nbrePassagerRetour', true], ['variable', '/', '[^/]++', 'nbrePassagerAller', true], ['text', '/envoieMailAllerRetourRoute']], [], []],
        'envoieBddMemorialAller' => [[], ['_controller' => 'App\\Controller\\HomeController::envoieBddMemorialAller'], [], [['text', '/envoieBddMemorialAller']], [], []],
        'envoieBddMemorialAllerRetour' => [[], ['_controller' => 'App\\Controller\\HomeController::envoieBddMemorialAllerRetour'], [], [['text', '/envoieBddMemorialAllerRetour']], [], []],
        'horairesTarifs' => [[], ['_controller' => 'App\\Controller\\HomeController::aeroportRouteHorairesTarifs'], [], [['text', '/horairesTarifs']], [], []],
        'profile' => [[], ['_controller' => 'App\\Controller\\HomeController::Profile'], [], [['text', '/profile']], [], []],
        'infoDestination' => [[], ['_controller' => 'App\\Controller\\HomeController::infoDestination'], [], [['text', '/infoDestination']], [], []],
        'reservationAller' => [[], ['_controller' => 'App\\Controller\\HomeController::reservationAller'], [], [['text', '/reservationAller']], [], []],
        'reservation' => [[], ['_controller' => 'App\\Controller\\HomeController::reservation'], [], [['text', '/reservation']], [], []],
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
