<?php

namespace App\Controller\Admin\Tag;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
final class TagController extends AbstractController
{
    #[Route('/tag/list', name: 'app_admin_tag_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('pages/admin/tag/index.html.twig');
    }
}
