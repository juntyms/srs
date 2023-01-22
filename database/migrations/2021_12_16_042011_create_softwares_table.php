<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softwares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ay_id');
            $table->foreign('ay_id')->references('id')->on('ays');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->string('name');
            $table->unsignedBigInteger('software_vendor_id');
            $table->foreign('software_vendor_id')->references('id')->on('software_vendors');
            $table->unsignedBigInteger('software_type_id');
            $table->foreign('software_type_id')->references('id')->on('software_types');
            $table->unsignedBigInteger('company_id');
//            $table->foreign('company_id')->references('id')->on('companies');
            $table->string('version')->nullable();
            $table->string('quantity')->nullable();
            $table->datetime('purchase_date')->nullable();
            $table->decimal('price', 8, 3)->nullable();
            $table->datetime('expiry_date')->nullable();
            $table->datetime('warranty_end_date')->nullable();
            $table->unsignedBigInteger('license_id');
            $table->foreign('license_id')->references('id')->on('licenses');
            $table->boolean('installer_is_available')->default(false);
            $table->string('custodian_name')->nullable();
            $table->string('serial_number')->nullable();
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
        Schema::dropIfExists('softwares');
    }
}
