<?php

namespace Schema;

use Homebrew\Database\Migration as Migration;
use Illuminate\Database\Capsule\Manager as Database;
use Illuminate\Database\Schema\Blueprint;

class Install extends Migration {
    
    public $stamp = '01_01_1990';
    
    public function up() {
        Database::schema()->create( 'test', function( Blueprint $table ) {
            $table->increments('id');
            $table->string('test');
            $table->timestamps();
        });
    }
    
    public function down() {
        
    }
    
}