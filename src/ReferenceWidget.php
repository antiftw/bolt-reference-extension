<?php

declare(strict_types=1);

namespace AcmeCorp\ReferenceExtension;

use Bolt\Widget\BaseWidget;
use Bolt\Widget\CacheAwareInterface;
use Bolt\Widget\CacheTrait;
use Bolt\Widget\Injector\AdditionalTarget;
use Bolt\Widget\Injector\RequestZone;
use Bolt\Widget\StopwatchAwareInterface;
use Bolt\Widget\StopwatchTrait;
use Bolt\Widget\TwigAwareInterface;

class ReferenceWidget extends BaseWidget implements TwigAwareInterface, CacheAwareInterface, StopwatchAwareInterface
{
    use CacheTrait;
    use StopwatchTrait;

    protected ?string $name = 'AcmeCorp ReferenceWidget';
    protected string $target = AdditionalTarget::WIDGET_BACK_DASHBOARD_ASIDE_TOP;
    protected ?int $priority = 200;
    protected ?string $template = '@reference-extension/widget.html.twig';
    protected ?string $zone = RequestZone::BACKEND;
    protected int $cacheDuration = -1800;
}
