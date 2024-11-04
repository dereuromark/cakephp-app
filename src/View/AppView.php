<?php

declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link https://cakephp.org CakePHP(tm) Project
 * @since 3.0.0
 * @license https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\View;

use BootstrapUI\View\UIViewTrait;
use Cake\View\View;

/**
 * Application View
 *
 * Your application's default view class
 *
 * @link https://book.cakephp.org/5/en/views.html#the-app-view
 * @property \App\View\Helper\HtmlHelper $Html
 * @property \App\View\Helper\FormHelper $Form
 * @property \BootstrapUI\View\Helper\FlashHelper $Flash
 * @property \BootstrapUI\View\Helper\PaginatorHelper $Paginator
 * @property \BootstrapUI\View\Helper\BreadcrumbsHelper $Breadcrumbs
 * @property \Templating\View\Helper\TemplatingHelper $Templating
 * @property \Templating\View\Helper\IconHelper $Icon
 * @property \Templating\View\Helper\IconSnippetHelper $IconSnippet
 */
class AppView extends View
{
    use UIViewTrait;

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like adding helpers.
     *
     * e.g. `$this->addHelper('Html');`
     *
     * @return void
     */
    public function initialize(): void
    {
        //$this->initializeUI(['layout' => false]);
        $this->addHelper('Html');

        $this->addHelper('Templating.Templating');
        $this->addHelper('Templating.Icon');
        $this->addHelper('Templating.IconSnippet');
    }
}
