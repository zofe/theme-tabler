<?php

namespace Zofe\ThemeTabler;

use Zofe\Rapyd\Themes\RapydThemeServiceProvider;

/** Activate with RAPYD_THEME=tabler (config rapyd.theme). */
class ThemeServiceProvider extends RapydThemeServiceProvider
{
    protected string $name = 'tabler';

    protected string $path = __DIR__ . '/..';
}
