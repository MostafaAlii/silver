<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Settings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        $this->call([
            WordSeeder::class,
            WordChangeStatusSeeder::class,
            AdminTableSeeder::class,
            AgentTableSeeder::class,
            SectionTableSeeder::class,
            UserTableSeeder::class,
            CompaniesTableSeeder::class,
            EmployeeTableSeeder::class,
            CallcenterSeeder::class,
            CaptainTableSeeder::class,
            CarMakeAndModelSeeder::class,
            TripTypeSeeder::class,
            CarTypeSeeder::class,
            CategoryCarSeeder::class,
            DiscountSeeder::class,
            SosSeeder::class,
            PackageSeeder::class,
            OfferSeeder::class,
            CaptionActivitySeeder::class,
            YearsSeeder::class,
            CompanySupportSeeder::class,
            SubscriptionSeeder::class,
            AboutUsSeeder::class,
            ConditionsSeeder::class,
            PrivacySeeder::class,
            HourSeeder::class,
            SubscriptionCaptionSeeder::class,
            BonusSeeder::class,
            WalletTableSeeder::class,
        ]);
    }
}