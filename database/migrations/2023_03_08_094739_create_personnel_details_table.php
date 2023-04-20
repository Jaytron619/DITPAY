<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personnel_details', function (Blueprint $table) {
            $table->id();
            $table->string('SvnNo');
            $table->string('UnNo');
            $table->string('Surname');
            $table->string('Othernames');
            $table->string('DailyAllawa');
            $table->string('EntertainmentAllawa');
            $table->string('EarnedDollarDebit');
            $table->string('TotalAmount');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnel_details');
    }
};