<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        DB::statement('
            CREATE TABLE category (
                id CHAR(36) PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                CONSTRAINT chk_category_name_not_empty CHECK (name <> "")
            )
        ');
        
        DB::statement("
            INSERT INTO category (id, name) VALUES 
            (UUID(), 'Electrónica'),
            (UUID(), 'Ropa'),
            (UUID(), 'Alimentos')
        ");
    }
    public function down(): void {
        DB::statement('DROP TABLE IF EXISTS category');
    }
};
