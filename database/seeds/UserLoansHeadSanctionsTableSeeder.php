<?php

use Illuminate\Database\Seeder;

class UserLoansHeadSanctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	$users = App\myModel\User::all();
    	$loansHeads = App\myModel\Loans_head::all();
    	//$l = $loansHeads->where('state','=','Incompleto');
    	$typesSanctions=App\myModel\Types_sanction::all();

    	foreach($loansHeads as $myLoanHead){
                $myUser=$users->random();
    			if ($myLoanHead->state=='Incompleto'){
    				
                    $myLoanHead->user_sanction()->attach($myUser,['types_sanction_id'=>$typesSanctions->random()->id,'release_date'=>new DateTime(),'created_at'=>new DateTime(),'updated_at'=>new DateTime()]);

                    $myLoanHead->user_sanction()->attach($myUser,['types_sanction_id'=>$typesSanctions->random()->id,'release_date'=>new DateTime(),'created_at'=>new DateTime(),'updated_at'=>new DateTime()]);

                    $myLoanHead->user_sanction()->attach($myUser,['types_sanction_id'=>$typesSanctions->random()->id,'release_date'=>new DateTime(),'created_at'=>new DateTime(),'updated_at'=>new DateTime()]);
                }

    				//($users->random(),['type_sanction_id'=>$typesSanctions->random(),'release_day'=>getdate()]);
    				//echo $myLoanHead;
    				//echo "\n\n";}
    	}


    	

    }
}

 /*for ($i=0;$i<4;$i++){
                //$article=$articles->random();
                $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));}*/