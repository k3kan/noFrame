<?php declare(strict_types = 1);

namespace App\Template;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigRenderer implements Renderer
{
    public function __construct(private FilesystemLoader $loader, private Environment $environment)
    {
    }

    public function render($template, $data = []): string
    {
        return $this->environment->render($template, $data);
    }
}