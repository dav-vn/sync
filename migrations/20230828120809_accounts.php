<?php

require_once 'bootstrap.php';

use Phpmig\Migration\Migration;
use Illuminate\Database\Capsule\Manager;

/**
 * Class Accounts
 *
 * @package migrations
 */
class Accounts extends Migration
{
    /**
     * Создать миграцию
     *
     * @return void
     */
    public function up(): void
    {
        Manager::schema()->create('accounts', function ($table) {
            $table->id();
            $table->unsignedBigInteger('amo_id')->index();
            $table->string('name')->nullable();
        });
    }

    /**
     * Откатить миграцию
     *
     * @return void
     */
    public function down(): void
    {
        Manager::schema()->dropIfExists('accounts');
    }
}
