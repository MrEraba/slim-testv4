<?php
namespace MyProject\Migration;

use Illuminate\Database\Capsule\Manager as Capsule;
use Phinx\Migration\AbstractMigration;

class Migration extends AbstractMigration {
    /** @var \Illuminate\Database\Capsule\Manager $capsule */
    public $capsule;
    /** @var \Illuminate\Database\Schema\Builder $capsule */
    public $schema;

    public function init()
    {
        $settings = require __DIR__ . '/../src/settings.php';
        $db_settings = $settings['db'];

        $this->capsule = new Capsule;
        $this->capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => $db_settings['DB_HOST'],
            'port'      => $db_settings['DB_PORT'],
            'database'  => $db_settings['DB_NAME'],
            'username'  => $db_settings['DB_USER'],
            'password'  => $db_settings['DB_PASSWORD'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ]);

        $this->capsule->bootEloquent();
        $this->capsule->setAsGlobal();
        $this->schema = $this->capsule->schema();
    }
}