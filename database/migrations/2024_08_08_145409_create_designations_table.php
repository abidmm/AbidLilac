<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        
        DB::table('designations')->insert([
            [ 'name' => 'HR' ],
            [ 'name' => 'Junior Graphic Designer' ],
            [ 'name' => 'Senior Graphic Designer' ],
            [ 'name' => 'Junior Web Developer' ],
            [ 'name' => 'Juinor Analyst' ],
            [ 'name' => 'Senior Analyst' ],
            [ 'name' => 'Team Leader' ],
            [ 'name' => 'Assistant Manager' ],
            [ 'name' => 'Manager' ],
            [ 'name' => 'Senior Manager' ],
            [ 'name' => 'CEO' ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designations');
    }
};
