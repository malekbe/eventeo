<?php
use Migrations\AbstractMigration;

class CreatePrizes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('prizes');
        $table->addColumn('nazwa', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('wartosc', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('event_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
