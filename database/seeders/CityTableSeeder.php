<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['city_name' => 'Yangon', 'city_code' => 'C-001'],
            ['city_name' => 'Mandalay', 'city_code' => 'C-002'],
            ['city_name' => 'NayPyiTaw', 'city_code' => 'C-003'],
            ['city_name' => 'Bagan', 'city_code' => 'C-004'],
            ['city_name' => 'Bago', 'city_code' => 'C-005'],
            ['city_name' => 'PyinOoLwin', 'city_code' => 'C-006'],
            ['city_name' => 'TaungGyi', 'city_code' => 'C-007'],
            ['city_name' => 'Mawlamyine', 'city_code' => 'C-008'],
            ['city_name' => 'Dawei', 'city_code' => 'C-009'],
            ['city_name' => 'Pathein', 'city_code' => 'C-0010'],
            ['city_name' => 'MonYwa', 'city_code' => 'C-0012'],
            ['city_name' => 'Myeik', 'city_code' => 'C-0011'],
            ['city_name' => 'Hpa-An', 'city_code' => 'C-0013'],
            ['city_name' => 'MaHlaing', 'city_code' => 'C-0014'],
            ['city_name' => 'Mitthilar', 'city_code' => 'C-0015'],
            ['city_name' => 'MyinChin', 'city_code' => 'C-0016'],
            ['city_name' => 'TharSi', 'city_code' => 'C-0017'],
            ['city_name' => 'PyawBwea', 'city_code' => 'C-0018'],
            ['city_name' => 'TaungTar', 'city_code' => 'C-0019'],
            ['city_name' => 'NweaHtiGyi', 'city_code' => 'C-0020'],
            ['city_name' => 'Lashio', 'city_code' => 'C-0021'],
            ['city_name' => 'Pakokku', 'city_code' => 'C-0022'],
            ['city_name' => 'Loikaw', 'city_code' => 'C-0023'],
            ['city_name' => 'ThiPaw', 'city_code' => 'C-0024'],
            ['city_name' => 'Sagaing', 'city_code' => 'C-0025'],
            ['city_name' => 'Waw', 'city_code' => 'C-0026'],
            ['city_name' => 'KyaukMea', 'city_code' => 'C-0027'],
            ['city_name' => 'MyatGyiNa', 'city_code' => 'C-0028'],
            ['city_name' => 'KantBaLuu', 'city_code' => 'C-0029'],
            ['city_name' => 'KywanHla', 'city_code' => 'C-0030'],
            ['city_name' => 'ChatTing', 'city_code' => 'C-0031'],
            ['city_name' => 'PoPpa', 'city_code' => 'C-0032'],
            ['city_name' => 'HarKhar', 'city_code' => 'C-0033'],
        ];
        foreach($cities as $city)
        {
            City::create($city);
        }
    }
}