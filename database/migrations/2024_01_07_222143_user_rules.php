<?php

use App\Models\Rule;
use App\Models\User;
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
        // Schema::create('user_rules', function (Blueprint $table) {
        //     $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
        //     $table->foreignIdFor(Rule::class)->constrained()->cascadeOnDelete();
        //     $table->primary(['user_id', 'rule_id']);
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('user_rules');
    }
};
