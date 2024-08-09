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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('fk_department')->constrained('departments')->cascadeOnDelete();
            $table->foreignId('fk_designation')->constrained('designations')->cascadeOnDelete();
            $table->string('phone_number');
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'name' => 'James',
                'fk_department' => 2,
                'fk_designation' => 1,
                'phone_number' => '9820110409',
            ],
            [
                'name' => 'Mary',
                'fk_department' => 1,
                'fk_designation' => 2,
                'phone_number' => '9044818730',
            ],
            [
                'name' => 'Elizabeth',
                'fk_department' => 1,
                'fk_designation' => 4,
                'phone_number' => '9807345614',
            ],
            [
                'name' => 'Willian',
                'fk_department' => 8,
                'fk_designation' => 5,
                'phone_number' => '9565581757',
            ],
            [
                'name' => 'Richard',
                'fk_department' => 6,
                'fk_designation' => 6,
                'phone_number' => '9716682075',
            ],
            [
                'name' => 'Jessica',
                'fk_department' => 9,
                'fk_designation' => 10,
                'phone_number' => '9795852199',
            ],
            [
                'name' => 'Sarah',
                'fk_department' => 7,
                'fk_designation' => 6,
                'phone_number' => '9838690049',
            ],
            [
                'name' => 'Charles',
                'fk_department' => 5,
                'fk_designation' => 7,
                'phone_number' => '9451630116',
            ],
            [
                'name' => 'Daniel',
                'fk_department' => 4,
                'fk_designation' => 8,
                'phone_number' => '7875051154',
            ],
            [
                'name' => 'Emily',
                'fk_department' => 3,
                'fk_designation' => 9,
                'phone_number' => '7275300356',
            ],
            [
                'name' => 'Carol',
                'fk_department' => 10,
                'fk_designation' => 1,
                'phone_number' => '9506463348',
            ],
            [
                'name' => 'Brian',
                'fk_department' => 11,
                'fk_designation' => 3,
                'phone_number' => '9919594708',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
