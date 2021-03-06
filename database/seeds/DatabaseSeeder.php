<?php


use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(CareerTableSeeder::class);     
        $this->call(Articles_categoryTableSeeder::class);
     	$this->call(Types_sanctionTableSeeder::class);

     	$this->call(UserTableSeeder::class);
     	$this->call(ArticleTableSeeder::class);
     	$this->call(Loan_headTableSeeder::class);
        $this->call(UserLoansHeadSanctionsTableSeeder::class);


        
     	



        
        
     
    }
}
