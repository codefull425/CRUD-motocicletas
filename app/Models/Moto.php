<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $fillable = ['marca', 'modelo', 'ano', 'preco'];
    public function up()
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->year('ano');
            $table->decimal('preco', 10, 2);
            $table->timestamps();
        });
    }
}
