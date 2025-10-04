<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call([
        RolesTableSeeder::class,
        PermissionsTableSeeder::class,
        UsersTableSeeder::class,
        UserProfilesTableSeeder::class,
        TeachersTableSeeder::class,
        StudentsTableSeeder::class,
        UsersRolesTableSeeder::class,
        RolesPermissionsTableSeeder::class,
        UserPermissionsTableSeeder::class,
        ScreensTableSeeder::class,
        PermissionsScreensTableSeeder::class,
        CategoryUserTypesTableSeeder::class,
        CategoryFacultiesTableSeeder::class,
        CategoryMajorsTableSeeder::class,
        CategoryPositionsTableSeeder::class,
        CoursesTableSeeder::class,
        CourseStudentsTableSeeder::class,
        ExamSessionsTableSeeder::class,
        ExamStudentsTableSeeder::class,
        ExamAttendanceTableSeeder::class,
        ExamSubmissionsTableSeeder::class,
        ExamReportsTableSeeder::class,
        ExamImportLogsTableSeeder::class,
        ExamImportDataTableSeeder::class,
        NetworkDriveConfigsTableSeeder::class,
    ]);
}

}
