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
       $user=  App\User::create([
            'name'=>'admin',
            'email'=>'example@example.com',
            'password'=>bcrypt('password'),
            'admin'=>1
        ]);

        App\Profile::create([
        'user_id'=>$user->id,
         'avatar'=>'uploads/avatars/1.jpg',
        'about'=>('Lorem ipsum..... sample about text'),
        'facebook'=>'https://facebook.com',
        'youtube'=>'https://youtube.com',
        'linkedin'=>'https://linkedin.com',
        'instagram'=>'https://instagram.com',
        'twitter'=>'https://twitter.com',
        'email'=>'example@example.com',
        'phone'=>'0xxx xxx xxx',
        'address'=>'Sample, Sample, Sample, XXX',

        ]);
    }
}
