<?php

namespace Cluys\Template\Demo;

use Ivy\Template\Application\Contracts\TemplateInterface;
use Ivy\Template\Infrastructure\Manager\AssetManager;
use Ivy\Template\Infrastructure\Manager\TemplateManager;
use Ivy\User\Application\Service\AuthService;

class DemoTemplate implements TemplateInterface
{
    public function register(AuthService $auth): void
    {
        AssetManager::addCSS('css/custom.css');
    }

    public function install(): void
    {
    }

    public function uninstall(): void
    {
    }
}
