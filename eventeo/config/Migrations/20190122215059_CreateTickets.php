<?php
use Migrations\AbstractMigration;

class CreateTickets extends AbstractMigration
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
        $table = $this->table('tickets');
        $table->addColumn('cena', 'decimal', [
            'default' => null,
            'null' => false,
            'precision'=>9,
            'scale'=>2
        ]);
        $table->addColumn('koszt', 'decimal', [
            'default' => null,
            'null' => false,
            'precision'=>9,
            'scale'=>2
        ]);
        $table->addColumn('ilosc', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('typ', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('spectator_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
