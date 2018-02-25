<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // workshop_homepage
        if ('/workshop' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'workshop_homepage');
            }

            return array (  '_controller' => 'WorkshopBundle\\Controller\\DefaultController::indexAction',  '_route' => 'workshop_homepage',);
        }

        // local_homepage
        if ('/local' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'local_homepage');
            }

            return array (  '_controller' => 'LocalBundle\\Controller\\DefaultController::indexAction',  '_route' => 'local_homepage',);
        }

        if (0 === strpos($pathinfo, '/ecommerce')) {
            // stock_homepage
            if ('/ecommerce' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'stock_homepage');
                }

                return array (  '_controller' => 'StockBundle\\Controller\\DefaultController::indexAction',  '_route' => 'stock_homepage',);
            }

            if (0 === strpos($pathinfo, '/ecommerce/a')) {
                // ajout_produit
                if ('/ecommerce/ajout-produit' === $pathinfo) {
                    return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::ajoutAction',  '_route' => 'ajout_produit',);
                }

                // ajout_wishlist
                if (0 === strpos($pathinfo, '/ecommerce/ajout-wishlist') && preg_match('#^/ecommerce/ajout\\-wishlist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout_wishlist')), array (  '_controller' => 'StockBundle\\Controller\\WishlistController::ajoutAction',));
                }

                if (0 === strpos($pathinfo, '/ecommerce/affiche-produits')) {
                    // affiche_produits
                    if ('/ecommerce/affiche-produits' === $pathinfo) {
                        return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::afficheAction',  '_route' => 'affiche_produits',);
                    }

                    // modif_produits
                    if (0 === strpos($pathinfo, '/ecommerce/affiche-produits/modif') && preg_match('#^/ecommerce/affiche\\-produits/modif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modif_produits')), array (  '_controller' => 'StockBundle\\Controller\\ProduitController::modifierAction',));
                    }

                    // supp_produits
                    if (0 === strpos($pathinfo, '/ecommerce/affiche-produits/supp') && preg_match('#^/ecommerce/affiche\\-produits/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_produits')), array (  '_controller' => 'StockBundle\\Controller\\ProduitController::supprimerAction',));
                    }

                }

                // affiche_wishlist
                if ('/ecommerce/affiche-wishlist' === $pathinfo) {
                    return array (  '_controller' => 'StockBundle\\Controller\\WishlistController::afficheAction',  '_route' => 'affiche_wishlist',);
                }

                // art_produits
                if ('/ecommerce/art-produits' === $pathinfo) {
                    return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::artAction',  '_route' => 'art_produits',);
                }

            }

            // recherche_produits
            if ('/ecommerce/recherche-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::rechercheAction',  '_route' => 'recherche_produits',);
            }

            // view_produit
            if (0 === strpos($pathinfo, '/ecommerce/view-produit') && preg_match('#^/ecommerce/view\\-produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_produit')), array (  '_controller' => 'StockBundle\\Controller\\ProduitController::produitAction',));
            }

            // habillement_produits
            if ('/ecommerce/habillement-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::habillementAction',  '_route' => 'habillement_produits',);
            }

            // bijoux_produits
            if ('/ecommerce/bijoux-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::bijouxAction',  '_route' => 'bijoux_produits',);
            }

            // territoire_produits
            if ('/ecommerce/terrtoire-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::territoireAction',  '_route' => 'territoire_produits',);
            }

            // maroquinerie_produits
            if ('/ecommerce/maroquinerie-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::maroquinerieAction',  '_route' => 'maroquinerie_produits',);
            }

            // decoration_produits
            if ('/ecommerce/decoration-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::decorationAction',  '_route' => 'decoration_produits',);
            }

            // libsort_produits
            if ('/ecommerce/libsort-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::libsortAction',  '_route' => 'libsort_produits',);
            }

            // prixasc_produits
            if ('/ecommerce/prixasc-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::prixascAction',  '_route' => 'prixasc_produits',);
            }

            // prixdesc_produits
            if ('/ecommerce/prixdesc-produits' === $pathinfo) {
                return array (  '_controller' => 'StockBundle\\Controller\\ProduitController::prixdescAction',  '_route' => 'prixdesc_produits',);
            }

            // supprimer_wishlist
            if (0 === strpos($pathinfo, '/ecommerce/supprimer-wishlist') && preg_match('#^/ecommerce/supprimer\\-wishlist/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_wishlist')), array (  '_controller' => 'StockBundle\\Controller\\WishlistController::supprimerAction',));
            }

        }

        // evenement_homepage
        if ('/evenement' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'evenement_homepage');
            }

            return array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::indexAction',  '_route' => 'evenement_homepage',);
        }

        // social_homepage
        if ('/social' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'social_homepage');
            }

            return array (  '_controller' => 'SocialBundle\\Controller\\DefaultController::indexAction',  '_route' => 'social_homepage',);
        }

        // commande_homepage
        if ('/commande' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'commande_homepage');
            }

            return array (  '_controller' => 'CommandeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'commande_homepage',);
        }

        // back_office_homepage
        if ('/back' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'back_office_homepage');
            }

            return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
        }

        if (0 === strpos($pathinfo, '/fos')) {
            if (0 === strpos($pathinfo, '/fos/login')) {
                // fos_user_security_login
                if ('/fos/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/fos/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/fos/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

            if (0 === strpos($pathinfo, '/fos/profile')) {
                // fos_user_profile_show
                if ('/fos/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/fos/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/fos/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

            elseif (0 === strpos($pathinfo, '/fos/register')) {
                // fos_user_registration_register
                if ('/fos/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/fos/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/fos/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/fos/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/fos/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/fos/resetting')) {
                // fos_user_resetting_request
                if ('/fos/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/fos/resetting/reset') && preg_match('#^/fos/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/fos/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/fos/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

            // fos_visitor_home
            if ('/fos/affichage' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_visitor_home;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::indexAction',  '_route' => 'fos_visitor_home',);
            }
            not_fos_visitor_home:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
