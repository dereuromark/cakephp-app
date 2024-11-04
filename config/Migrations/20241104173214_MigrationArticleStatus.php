<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class MigrationArticleStatus extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $this->table('articles')
            ->addColumn('status', 'tinyinteger', [
                'default' => 0,
                'null' => false,
            ])
            ->update();
    }
}
