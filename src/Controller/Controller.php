<?php

declare(strict_types=1);

namespace AcmeCorp\ReferenceExtension\Controller;

use Bolt\Extension\ExtensionController;
use Bolt\Utils\Sanitiser;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class Controller extends ExtensionController
{
    #[Route('/extensions/reference/{name}', name: 'extension_reference')]
    public function index(string $name, Sanitiser $sanitiser, Environment $twig): Response
    {
        $name ??= 'World';
        $context = [
            'title' => 'AcmeCorp Reference Extension',
            'name' => $name,
        ];

        return $this->render('@reference-extension/page.html.twig', $context);
    }
}
