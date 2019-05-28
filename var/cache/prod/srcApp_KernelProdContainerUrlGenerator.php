<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'royalpalace' => [[], ['_controller' => 'App\\Controller\\AnnexesController::index'], [], [['text', '/royalpalace']], [], []],
        'royalpalacereservation' => [[], ['_controller' => 'App\\Controller\\AnnexesController::royalpalaceRouteReservation'], [], [['text', '/royalpalacereservation']], [], []],
        'app_mobile' => [[], ['_controller' => 'App\\Controller\\AppMobileController::index'], [], [['text', '/app/mobile']], [], []],
        'user' => [[], ['_controller' => 'App\\Controller\\AppMobileController::query'], [], [['text', '/app/user']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::homeRoute'], [], [['text', '/']], [], []],
        'aeroport' => [[], ['_controller' => 'App\\Controller\\HomeController::aeroportRoute'], [], [['text', '/aeroport']], [], []],
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
