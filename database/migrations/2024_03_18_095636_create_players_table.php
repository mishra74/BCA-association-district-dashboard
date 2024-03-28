<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('category');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('aadhar')->unique();
            $table->string('proficiency')->nullable(); // making proficiency nullable
            $table->string('district')->nullable(); // making district nullable
            $table->boolean('status')->default(false);
            $table->boolean('Selection')->default(false);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
}
