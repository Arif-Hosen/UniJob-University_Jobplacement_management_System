<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(with(new User)->getTable(), function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_bn')->nullable();
            $table->string('username')->nullable()->unique();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('trade_technology')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('nid')->nullable()->unique();
            $table->string('dob')->nullable();
            $table->string('alt_phone')->nullable();
            $table->string('village')->nullable();
            $table->string('po')->nullable();
            $table->string('ps')->nullable();
            $table->unsignedBigInteger('division_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('upazila_id')->nullable();
            $table->unsignedBigInteger('institute_id')->nullable();
            $table->unsignedBigInteger('shift_id')->nullable();
            $table->unsignedBigInteger('trade_technology_id')->nullable();
            $table->string('address')->nullable();
            $table->string('board_roll')->nullable();
            // $table->string('employment_status')->nullable();
            $table->string('running_board_roll')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('skills_set')->nullable();
            $table->string('experience_year')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('profile_photo_path', 2048)->nullable();
            // $table->string('cv', 2048)->nullable();
            $table->string('status')->default(User::$statusArrays[0]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(with(new User)->getTable());
    }
};
