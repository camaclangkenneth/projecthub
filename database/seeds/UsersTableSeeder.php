<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'kenneth',
            'mname' => 'sillares',
            'lname' => 'camaclang',
            'email' => 'kenkencamaclang@devbox.com',
            'password' => bcrypt('secret'),
            'type' => 'A',
            'position' => 'Administrator',
            'description' => "DevBox's #1 Admin",
            'created_at' => now()->format('Y-m-d H:i:s'),   
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fname' => 'mark anthony',
            'mname' => '',
            'lname' => 'baldo',
            'email' => 'markanthonybaldo@devbox.com',
            'password' => bcrypt('secret'),
            'type' => 'HR',
            'position' => 'HR Administrator',
            'description' => "DevBox's #1 HR Admin",
            'created_at' => now()->format('Y-m-d H:i:s'),   
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fname' => 'jake',
            'mname' => '',
            'lname' => 'alla',
            'email' => 'jakealla@devbox.com',
            'password' => bcrypt('secret'),
            'type' => 'E',
            'position' => 'Project Manager',
            'description' => "DevBox's #1 Marketing Strategist",
            'created_at' => now()->format('Y-m-d H:i:s'),   
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fname' => 'christian melvin',
            'mname' => 'rodriguez',
            'lname' => 'barsana',
            'email' => 'bmrc@devbox.com',
            'password' => bcrypt('secret'),
            'type' => 'E',
            'position' => 'Project Manager',
            'description' => "DevBox's Head Developer",
            'created_at' => now()->format('Y-m-d H:i:s'),   
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fname' => 'glory vher',
            'mname' => '',
            'lname' => 'abad',
            'email' => 'gloryvherabad@devbox.com',
            'password' => bcrypt('secret'),
            'type' => 'E',
            'position' => 'Lead Designer',
            'description' => "DevBox's Leading Designer",
            'created_at' => now()->format('Y-m-d H:i:s'),   
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fname' => 'joseph',
            'mname' => '',
            'lname' => 'cuerdo',
            'email' => 'josephcuerdo@devbox.com',
            'password' => bcrypt('secret'),
            'type' => 'E',
            'position' => 'Software Analyst',
            'description' => "DevBox's Head Marketing Officer",
            'created_at' => now()->format('Y-m-d H:i:s'),   
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fname' => 'jose',
            'mname' => '',
            'lname' => 'torres',
            'email' => 'josetorres@devbox.com',
            'password' => bcrypt('secret'),
            'type' => 'E',
            'position' => 'Graphics Designer',
            'description' => "DevBox's Best Artist",
            'created_at' => now()->format('Y-m-d H:i:s'),   
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
    }
}
