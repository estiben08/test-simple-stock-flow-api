<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        DB::statement('
            CREATE TABLE sale (
                id CHAR(36) PRIMARY KEY,
                seller_id CHAR(36) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (seller_id) REFERENCES user(id) ON DELETE RESTRICT
            )
        ');
    }
    public function down(): void {
        DB::statement('DROP TABLE IF EXISTS sale');
    }
};
