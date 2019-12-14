<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $mul_rows_membrs= [
                [ 
                'title'=>'Mr',
                'category'=>'Student',
                'name'=>'Shanuka Alahkoon',
                'Address1'=>'Kegalle',
                'Address2'=>'Sri lanka',
                'nic'=>'910000000V',
                'Mobile'=>'0710000000',
                'birthday'=>'1991-01-01',
                'gender'=>'Male',
                'Description'=>'',
                'regdate'=>'2019-01-01',
                ],
                
                [  
                'title'=>'Mr',
                'category'=>'Student',
                'name'=>'Malaka Madushan',
                'Address1'=>'Ambalanyhota',
                'Address2'=>'Sri lanka',
                'nic'=>'930000000V',
                'Mobile'=>'0770000000',
                'birthday'=>'1993-01-01',
                'gender'=>'Male',
                'Description'=>'',
                'regdate'=>'2019-01-01',
                ]
        ];
        $insert= DB::table('members')->insert($mul_rows_membrs);
        
        $mul_rows_users= [
            
            [  
            'name'=>'code Aider',
            'email'=>'info@codeaider.com',
            'email_verified_at'=>'2019-1-1',
            'password'=>'$2y$10$Q.W8O4YmZtiM76aOTxsk3eFkk9.tnFojqDWucOGM4okjQUDIWzLHO',
            ]
    ];
    $insert= DB::table('users')->insert($mul_rows_users);

    $mul_rows_mem_cat= [
            
        ['category'=>'Student'],
        ['category'=>'Goverment'],
        ['category'=>'Privete'],
        ['category'=>'VIP'],
        ['category'=>'Other']
 
    ];
    $insert= DB::table('member_categories')->insert($mul_rows_mem_cat);




    }
}
