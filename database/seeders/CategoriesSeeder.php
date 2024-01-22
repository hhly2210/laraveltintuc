<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table("categories")->truncate();
        $Category_defaules = [
            'Chưa phân loại', 'Thế giới', 'Xã hội', 'Kinh tế', 'Văn hóa', 'Giáo dục', 'Thể thao',
            'Giải trí', 'Pháp luật', 'Công nghệ', 'Khoa học', 'Đời sống', 'Xe cộ', 'Nhà đất'
        ];
        foreach ($Category_defaules as $Category_defaule) {
            Category::factory()->create(['name' => $Category_defaule]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
