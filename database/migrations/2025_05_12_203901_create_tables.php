<?php

use App\Models\Developer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Game;
use App\Models\GameEdition;
use App\Models\Genre;
use App\Models\Key;
use App\Models\Publisher;
use App\Models\Purchase;
use App\Models\Region;
use App\Models\Service;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->jsonb('description')->nullable();
            $table->string('path_to_icon', 255)->nullable();
            $table->jsonb('system_requirements')->nullable();
            $table->timestamps();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('path_to_icon', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->jsonb('name');
            $table->timestamps();
        });

        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('publishers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });

        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->jsonb('name');
            $table->jsonb('description')->nullable();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nickname', 255)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('path_to_photo', 255)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('game_editions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->jsonb('features')->nullable();
            $table->foreignIdFor(Game::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
            $table->unique(['name', 'game_id']);
        });

        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('path_to_media', 255);
            $table->foreignIdFor(Game::class)->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });

        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('keys', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255);
            $table->integer('price')->unsigned();
            $table->foreignIdFor(Service::class)->constrained()->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(GameEdition::class)->constrained()->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Purchase::class)->constrained()->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
            $table->unique(['code', 'service_id']);
        });
        DB::statement('ALTER TABLE keys ADD CONSTRAINT check_price_positive CHECK (price > 0);');

        Schema::create('bonuses', function (Blueprint $table) {
            $table->id();
            $table->integer('count')->unsigned();
            $table->timestamp('expires_at');
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE bonuses ADD CONSTRAINT check_count_positive CHECK (count > 0);');

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->foreignIdFor(Game::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->integer('rating')->unsigned();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE reviews ADD CONSTRAINT check_rating_positive CHECK (rating >= 1 and rating <= 5);');

        Schema::create('game_developer', function (Blueprint $table) {
            $table->foreignIdFor(Game::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Developer::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['game_id', 'developer_id']);
        });

        Schema::create('game_publisher', function (Blueprint $table) {
            $table->foreignIdFor(Game::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Publisher::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['game_id', 'publisher_id']);
        });

        Schema::create('game_genre', function (Blueprint $table) {
            $table->foreignIdFor(Game::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Genre::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['game_id', 'genre_id']);
        });

        Schema::create('key_region', function (Blueprint $table) {
            $table->foreignIdFor(Key::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Region::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->primary(['key_id', 'region_id']);
        });

        Schema::create('cart', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(GameEdition::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Service::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Region::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('count')->unsigned();
            $table->timestamps();
            $table->primary(['user_id', 'game_edition_id', "service_id", "region_id"]);
        });
        DB::statement('ALTER TABLE cart ADD CONSTRAINT check_count_positive CHECK (count >= 1);');

        Schema::create('favorites', function (Blueprint $table) {
            $table->foreignIdFor(Game::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
            $table->primary(['game_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
        Schema::dropIfExists('favorites');
        Schema::dropIfExists('key_region');
        Schema::dropIfExists('game_developer');
        Schema::dropIfExists('game_publisher');
        Schema::dropIfExists('game_genre');
        Schema::dropIfExists('bonuses');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('keys');
        Schema::dropIfExists('purchases');
        Schema::dropIfExists('game_editions');
        Schema::dropIfExists('media');
        Schema::dropIfExists('games');
        Schema::dropIfExists('services');
        Schema::dropIfExists('regions');
        Schema::dropIfExists('developers');
        Schema::dropIfExists('publishers');
        Schema::dropIfExists('genres');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
