<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profiles = [
            ['address' => 'To Ngoc Van, Hanoi, Vietnam', 'user_id' => 1, 'avatar' => 'https://i7.pngguru.com/preview/178/419/741/computer-icons-avatar-login-user-avatar.jpg'],
            ['address' => 'Pham Hung, Hanoi, Vietnam', 'user_id' => 2, 'avatar' => 'https://p7.hiclipart.com/preview/118/942/565/computer-icons-avatar-child-user-avatar-thumbnail.jpg']
        ];

        DB::table('profiles')->insert($profiles);
    }
}
