<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class book extends Model
{
    public function up()
    {
        Schema::create('books', function(Blueprint $print){
            $table->id();
            $table->string('judul')->unique();
            $table->string('penulis');
            $table->year('tahun');
            $table->string('penerbit');
            $table->string('cover')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {  
        Schema::dropIfExists('books');
    }
    use HasFactory;
}
