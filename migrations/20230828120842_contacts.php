<?php

require_once 'bootstrap.php';

use Phpmig\Migration\Migration;
use Illuminate\Database\Capsule\Manager;

class Contacts extends Migration
{
    /**
     * Создать миграцию
     *
     * @return void
     */
    public function up(): void
    {
        Manager::schema()->create('contacts', function ($table) {
            $table->id();
            $table->unsignedBigInteger('amo_id');
            $table->string('name');
            $table->string('email');

            $table->foreign('amo_id')->references('amo_id')->on('accounts');
        });
    }

    /**
     * Откатить миграцию
     *
     * @return void
     */
    public function down(): void
    {
        Manager::schema()->dropIfExists('contacts');
    }
}
