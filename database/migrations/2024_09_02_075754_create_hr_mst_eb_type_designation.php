<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hr_mst_eb_type_designation', function (Blueprint $table) {
            $table->id();
            $table->string('extd_exam_type_id');
            $table->integer('extd_designation_id');
            $table->string('extd_remark');
            $table->integer('extd_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_mst_eb_type_designation');
    }
};
