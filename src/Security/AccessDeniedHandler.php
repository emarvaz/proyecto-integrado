<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    private RouterInterface $router;
    private Security $security;

    public function __construct(RouterInterface $router, Security $security)
    {
        $this->router = $router;
        $this->security = $security;
    }

    public function handle(Request $request, AccessDeniedException $accessDeniedException): RedirectResponse
    {
        $session = $request->getSession();
        $session->getFlashBag()->add('error', 'Acceso denegado: no tienes permiso para ver esta sección.');

        if ($this->security->isGranted('ROLE_ADMIN')) {
            return new RedirectResponse($this->router->generate('administration'));
        }

        if ($this->security->isGranted('ROLE_USER')) {
            return new RedirectResponse($this->router->generate('card_deck_list'));
        }

        if ($this->security->getUser()) {
            return new RedirectResponse($this->router->generate('card_deck_list'));
        }

        return new RedirectResponse($this->router->generate('login'));
    }
}
