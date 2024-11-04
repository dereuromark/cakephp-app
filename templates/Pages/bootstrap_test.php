<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Remove for your app.'
    );
endif;
?>

<div class="row">
    <div class="col">

        <h1>Bootstrap test</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>Table</h2>
                <table class="table table-striped">
                    <tr>
                        <td>Column 1</td>
                        <td>Column 2</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <h2>Icons</h2>
                <ul>
                    <li>
                        FA - <i class="fa fa-stop-circle"></i>
                    </li>
                    <li>
                        ...
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
