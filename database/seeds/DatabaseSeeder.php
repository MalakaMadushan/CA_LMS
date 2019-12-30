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
        // --------------------------------------------------------------------
        $mul_rows_membrs= [
                [ 
                'title'=>'Mr',
                'categoryid'=>'1',
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
                'categoryid'=>'2',
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
    //--------------------------------------------------------------------
        $mul_rows_users= [
            
            [  
            'name'=>'code Aider',
            'email'=>'info@codeaider.com',
            'email_verified_at'=>'2019-1-1',
            'password'=>'$2y$10$Q.W8O4YmZtiM76aOTxsk3eFkk9.tnFojqDWucOGM4okjQUDIWzLHO',
            ]
    ];
    $insert= DB::table('users')->insert($mul_rows_users);
// --------------------------------------------------------------------
    $mul_rows_mem_cat= [
            
        ['category'=>'Student'],
        ['category'=>'Goverment'],
        ['category'=>'Privete'],
        ['category'=>'VIP'],
        ['category'=>'Other']
 
    ];
    $insert= DB::table('member_categories')->insert($mul_rows_mem_cat);

// ---------------------------------------------------------------
    $mul_rows_books= [
            
        [  
        'accessionNo'=>'123456',
        'isbn'=>'5546612',
        'book_title'=>'Ahethuka Sarisaranna',
        'authors'=>'Iroshan premarathna',
        'book_category_id'=>'1',
        'language_id'=>'1',
        'publisher_id'=>'1',
        'phymedium_id'=>'1',
        'dewey_decimal_id'=>'1',
        'purchase_date'=>'2019-12-01',
        'edition'=>'1',
        'price'=>'250',
        'publishyear'=>'2019',
        'phydetails'=>'120 pages',
        'rackno'=>'1',
        'rowno'=>'A',
        'note'=>'Love Poem',
        'br_qr_code'=>'bar_code'
        ],
        [  
            'accessionNo'=>'156456',
            'isbn'=>'89564612',
            'book_title'=>'AMMA',
            'authors'=>'W.A.De Silva',
            'book_category_id'=>'2',
            'language_id'=>'2',
            'publisher_id'=>'2',
            'phymedium_id'=>'2',
            'dewey_decimal_id'=>'2',
            'purchase_date'=>'2017-12-01',
            'edition'=>'2',
            'price'=>'750',
            'publishyear'=>'2012',
            'phydetails'=>'470 pages',
            'rackno'=>'1',
            'rowno'=>'E',
            'note'=>'Best Quality',
            'br_qr_code'=>'bar_code'
        ],
        [  
            'accessionNo'=>'1247966',
            'isbn'=>'86784542',
            'book_title'=>'Harry potter',
            'authors'=>'J.K Rowling',
            'book_category_id'=>'3',
            'language_id'=>'2',
            'publisher_id'=>'3',
            'phymedium_id'=>'2',
            'dewey_decimal_id'=>'2',
            'purchase_date'=>'2016-02-01',
            'edition'=>'3',
            'price'=>'1750',
            'publishyear'=>'2012',
            'phydetails'=>'570 pages',
            'rackno'=>'2',
            'rowno'=>'B',
            'note'=>'fantacy mystery thriller book',
            'br_qr_code'=>'bar_code'
            ]
        
];
$insert= DB::table('books')->insert($mul_rows_books);
// -----------------------------------------------------------------

$mul_rows_book_cat= [
            
    ['category'=>'N/A'],
    ['category'=>'Art'],
    ['category'=>'Science'],
    ['category'=>'Buddist'],
    ['category'=>'Other']

];
$insert= DB::table('book_categories')->insert($mul_rows_book_cat);
// -----------------------------------------------------------------
$mul_rows_book_pub= [
            
    ['publisher'=>'N/A'],
    ['publisher'=>'Gunasena'],
    ['publisher'=>'Wasana'],
    ['publisher'=>'Malpiyali'],
    ['publisher'=>'Codeaider']

];
$insert= DB::table('book_publishers')->insert($mul_rows_book_pub);
// --------------------------------------------------------------
$mul_rows_book_lang= [
            
    ['language'=>'N/A'],
    ['language'=>'Sinhala'],
    ['language'=>'English'],
    ['language'=>'Tamil'],
    ['language'=>'Hindi']

];
$insert= DB::table('book_languages')->insert($mul_rows_book_lang);

// --------------------------------------------------------------
$mul_rows_book_physical= [
            
    ['phymedia'=>'N/A'],
    ['phymedia'=>'Paper'],
    ['phymedia'=>'CD'],
    ['phymedia'=>'DVD'],
    

];
$insert= DB::table('book_phymedia')->insert($mul_rows_book_physical);
// --------------------------------------------------------------
$mul_rows_book_ddecimal= [
            
    ['ddecimal'=>'0'],
    ['ddecimal'=>'1'],
    ['ddecimal'=>'1.1'],
    ['ddecimal'=>'1.2'],
    

];
$insert= DB::table('book_dds')->insert($mul_rows_book_ddecimal);
// -------------------------------------------------------------

$mul_rows_survey_suggetion= [
            
    ['Suggetion'=>''],
    ['Suggetion'=>'Remove'],
    ['Suggetion'=>'Distroy'],
    ['Suggetion'=>'Repair'],
    

];
$insert= DB::table('survey_suggetions')->insert($mul_rows_survey_suggetion);
// -------------------------------------------------------------

    }
}
