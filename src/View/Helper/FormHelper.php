<?php

namespace App\View\Helper;

use BootstrapUI\View\Helper\FormHelper as BootstrapFormHelper;
use Templating\View\Helper\FormHelperTrait;

/**
 * Overwrite
 *
 * @property \Cake\View\Helper\UrlHelper $Url
 * @property \App\View\Helper\HtmlHelper $Html
 */
class FormHelper extends BootstrapFormHelper
{
    use FormHelperTrait;
}
