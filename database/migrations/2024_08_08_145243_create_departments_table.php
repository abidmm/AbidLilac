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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('departments')->insert([
            [ 'name' => 'Information Technology (IT)' ],
            [ 'name' => 'Human Resources (HR)' ],
            [ 'name' => 'Customer Service' ],
            [ 'name' => 'Sales' ],
            [ 'name' => 'Finance' ],
            [ 'name' => 'Accounting' ],
            [ 'name' => 'Marketing' ],
            [ 'name' => 'Research and Development' ],
            [ 'name' => 'Production' ],
            [ 'name' => 'Administration' ],
            [ 'name' => 'Security' ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
