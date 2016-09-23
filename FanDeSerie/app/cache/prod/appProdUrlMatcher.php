<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/actor')) {
            // actor_index
            if (rtrim($pathinfo, '/') === '/actor') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actor_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'actor_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ActorController::indexAction',  '_route' => 'actor_index',);
            }
            not_actor_index:

            // actor_new
            if ($pathinfo === '/actor/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_actor_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ActorController::newAction',  '_route' => 'actor_new',);
            }
            not_actor_new:

            // actor_show
            if (preg_match('#^/actor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actor_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actor_show')), array (  '_controller' => 'AppBundle\\Controller\\ActorController::showAction',));
            }
            not_actor_show:

            // actor_edit
            if (preg_match('#^/actor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_actor_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actor_edit')), array (  '_controller' => 'AppBundle\\Controller\\ActorController::editAction',));
            }
            not_actor_edit:

            // actor_delete
            if (preg_match('#^/actor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_actor_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actor_delete')), array (  '_controller' => 'AppBundle\\Controller\\ActorController::deleteAction',));
            }
            not_actor_delete:

        }

        if (0 === strpos($pathinfo, '/comment')) {
            // comment_index
            if (rtrim($pathinfo, '/') === '/comment') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_comment_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'comment_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CommentController::indexAction',  '_route' => 'comment_index',);
            }
            not_comment_index:

            // comment_new
            if ($pathinfo === '/comment/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_comment_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CommentController::newAction',  '_route' => 'comment_new',);
            }
            not_comment_new:

            // comment_show
            if (preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_comment_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_show')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::showAction',));
            }
            not_comment_show:

            // comment_edit
            if (preg_match('#^/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_comment_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_edit')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::editAction',));
            }
            not_comment_edit:

            // comment_delete
            if (preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_comment_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_delete')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::deleteAction',));
            }
            not_comment_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/episode')) {
            // episode_index
            if (rtrim($pathinfo, '/') === '/episode') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_episode_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'episode_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::indexAction',  '_route' => 'episode_index',);
            }
            not_episode_index:

            // episode_new
            if ($pathinfo === '/episode/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_episode_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::newAction',  '_route' => 'episode_new',);
            }
            not_episode_new:

            // episode_show
            if (preg_match('#^/episode/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_episode_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'episode_show')), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::showAction',));
            }
            not_episode_show:

            // episode_edit
            if (preg_match('#^/episode/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_episode_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'episode_edit')), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::editAction',));
            }
            not_episode_edit:

            // episode_delete
            if (preg_match('#^/episode/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_episode_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'episode_delete')), array (  '_controller' => 'AppBundle\\Controller\\EpisodeController::deleteAction',));
            }
            not_episode_delete:

        }

        if (0 === strpos($pathinfo, '/individual')) {
            // individual_index
            if (rtrim($pathinfo, '/') === '/individual') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_individual_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'individual_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\IndividualController::indexAction',  '_route' => 'individual_index',);
            }
            not_individual_index:

            // individual_new
            if ($pathinfo === '/individual/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_individual_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\IndividualController::newAction',  '_route' => 'individual_new',);
            }
            not_individual_new:

            // individual_show
            if (preg_match('#^/individual/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_individual_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'individual_show')), array (  '_controller' => 'AppBundle\\Controller\\IndividualController::showAction',));
            }
            not_individual_show:

            // individual_edit
            if (preg_match('#^/individual/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_individual_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'individual_edit')), array (  '_controller' => 'AppBundle\\Controller\\IndividualController::editAction',));
            }
            not_individual_edit:

            // individual_delete
            if (preg_match('#^/individual/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_individual_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'individual_delete')), array (  '_controller' => 'AppBundle\\Controller\\IndividualController::deleteAction',));
            }
            not_individual_delete:

        }

        if (0 === strpos($pathinfo, '/realisator')) {
            // realisator_index
            if (rtrim($pathinfo, '/') === '/realisator') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_realisator_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'realisator_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RealisatorController::indexAction',  '_route' => 'realisator_index',);
            }
            not_realisator_index:

            // realisator_new
            if ($pathinfo === '/realisator/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_realisator_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RealisatorController::newAction',  '_route' => 'realisator_new',);
            }
            not_realisator_new:

            // realisator_show
            if (preg_match('#^/realisator/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_realisator_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'realisator_show')), array (  '_controller' => 'AppBundle\\Controller\\RealisatorController::showAction',));
            }
            not_realisator_show:

            // realisator_edit
            if (preg_match('#^/realisator/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_realisator_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'realisator_edit')), array (  '_controller' => 'AppBundle\\Controller\\RealisatorController::editAction',));
            }
            not_realisator_edit:

            // realisator_delete
            if (preg_match('#^/realisator/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_realisator_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'realisator_delete')), array (  '_controller' => 'AppBundle\\Controller\\RealisatorController::deleteAction',));
            }
            not_realisator_delete:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/se')) {
                if (0 === strpos($pathinfo, '/season')) {
                    // season_index
                    if (rtrim($pathinfo, '/') === '/season') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_season_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'season_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\SeasonController::indexAction',  '_route' => 'season_index',);
                    }
                    not_season_index:

                    // season_new
                    if ($pathinfo === '/season/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_season_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\SeasonController::newAction',  '_route' => 'season_new',);
                    }
                    not_season_new:

                    // season_show
                    if (preg_match('#^/season/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_season_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'season_show')), array (  '_controller' => 'AppBundle\\Controller\\SeasonController::showAction',));
                    }
                    not_season_show:

                    // season_edit
                    if (preg_match('#^/season/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_season_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'season_edit')), array (  '_controller' => 'AppBundle\\Controller\\SeasonController::editAction',));
                    }
                    not_season_edit:

                    // season_delete
                    if (preg_match('#^/season/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_season_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'season_delete')), array (  '_controller' => 'AppBundle\\Controller\\SeasonController::deleteAction',));
                    }
                    not_season_delete:

                }

                if (0 === strpos($pathinfo, '/serie')) {
                    // serie_index
                    if (rtrim($pathinfo, '/') === '/serie') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_serie_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'serie_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\SerieController::indexAction',  '_route' => 'serie_index',);
                    }
                    not_serie_index:

                    // serie_new
                    if ($pathinfo === '/serie/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_serie_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\SerieController::newAction',  '_route' => 'serie_new',);
                    }
                    not_serie_new:

                    // serie_show
                    if (preg_match('#^/serie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_serie_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'serie_show')), array (  '_controller' => 'AppBundle\\Controller\\SerieController::showAction',));
                    }
                    not_serie_show:

                    // serie_edit
                    if (preg_match('#^/serie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_serie_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'serie_edit')), array (  '_controller' => 'AppBundle\\Controller\\SerieController::editAction',));
                    }
                    not_serie_edit:

                    // serie_delete
                    if (preg_match('#^/serie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_serie_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'serie_delete')), array (  '_controller' => 'AppBundle\\Controller\\SerieController::deleteAction',));
                    }
                    not_serie_delete:

                }

            }

            if (0 === strpos($pathinfo, '/starrate')) {
                // starrate_index
                if (rtrim($pathinfo, '/') === '/starrate') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_starrate_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'starrate_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StarRateController::indexAction',  '_route' => 'starrate_index',);
                }
                not_starrate_index:

                // starrate_new
                if ($pathinfo === '/starrate/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_starrate_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\StarRateController::newAction',  '_route' => 'starrate_new',);
                }
                not_starrate_new:

                // starrate_show
                if (preg_match('#^/starrate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_starrate_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'starrate_show')), array (  '_controller' => 'AppBundle\\Controller\\StarRateController::showAction',));
                }
                not_starrate_show:

                // starrate_edit
                if (preg_match('#^/starrate/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_starrate_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'starrate_edit')), array (  '_controller' => 'AppBundle\\Controller\\StarRateController::editAction',));
                }
                not_starrate_edit:

                // starrate_delete
                if (preg_match('#^/starrate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_starrate_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'starrate_delete')), array (  '_controller' => 'AppBundle\\Controller\\StarRateController::deleteAction',));
                }
                not_starrate_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
