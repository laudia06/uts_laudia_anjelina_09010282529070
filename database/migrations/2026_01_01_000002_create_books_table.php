<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration {public function up():void{Schema::create('books',function(Blueprint $t){$t->id();$t->foreignId('category_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();$t->string('title');$t->string('author');$t->string('publisher');$t->unsignedSmallInteger('year');$t->unsignedInteger('stock')->default(0);$t->timestamps();});}public function down():void{Schema::dropIfExists('books');}};
