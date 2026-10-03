<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        DB::statement('
            CREATE TABLE user (
                id CHAR(36) PRIMARY KEY,
                username VARCHAR(255) NOT NULL UNIQUE,
                password_hash VARCHAR(255) NOT NULL,
                role VARCHAR(50) NOT NULL,
                CONSTRAINT chk_username_lowercase CHECK (username = LOWER(username)),
                CONSTRAINT chk_user_role CHECK (role IN ("admin", "seller")),
                CONSTRAINT chk_password_not_empty CHECK (password_hash <> "")
            )
        ');
    }
    public function down(): void {
        DB::statement('DROP TABLE IF EXISTS user');
    }
};
