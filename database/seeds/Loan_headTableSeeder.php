<?php


use Illuminate\Database\Seeder;

class Loan_headTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        
        $users = App\myModel\User::all();
        $articles = App\myModel\Article::all();

        $loans_heads = factory(App\myModel\Loans_head::class,25)->make();    

        /*****/

        $registry=1;
        foreach ($loans_heads as $loanHead){
           $user = $users->random()->loans_heads()->save($loanHead);
           $opciones = array('Entregado','Faltante');  
           
              /**************************/


              if ($registry>=1 and $registry<=9) 
                  if ($registry%2 == 1) 
                      for ($i=0;$i<3;$i++)                
                          $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));                  
                  else                  
                      $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));

            if ($registry>=10 and $registry<=19) 
                  if ($registry%2 == 1) 
                      for ($i=0;$i<6;$i++)                
                          $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));                  
                  else
                      for ($i=0;$i<3;$i++)                
                          $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));                  
            
            if ($registry>=20 and $registry<=25) 
                  if ($registry%2 == 1) 
                      for ($i=0;$i<8;$i++)                
                          $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));                  
                  else
                      for ($i=0;$i<5;$i++)                
                          $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));                  

            $registry++;


              /*******************************/


           /*for ($i=0;$i<4;$i++){
                //$article=$articles->random();
                $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));}*/

         }        
            

        /****** $registry=1;
        foreach ($loans_heads as $loanHead){
            $user = $users->random()->loans_heads()->save($loanHead);
            $opciones = array('Entregado','Faltante');  

            if ($registry>=1 and $registry<=9) 
                  if ($registry%2 == 1) 
                      for ($i=0;$i<3;$i++)                
                          $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));                  
                  else                  
                      $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));

            if ($registry>=10 and $registry<=19) 
                  if ($registry%2 == 1) 
                      for ($i=0;$i<6;$i++)                
                          $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));                  
                  else
                      for ($i=0;$i<3;$i++)                
                          $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));                  
            
            if ($registry>=20 and $registry<=25) 
                  if ($registry%2 == 1) 
                      for ($i=0;$i<8;$i++)                
                          $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));                  
                  else
                      for ($i=0;$i<5;$i++)                
                          $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));                  

            $registry++;
        }****************** */

            
           
        


    }

  }




  




   /* public function run()
    {
       
        //creando encabezados
        $users = App\myModel\User::all();
        $articles = App\myModel\Article::all();

        $loans_heads = factory(App\myModel\Loans_head::class,25)->make();        

        foreach ($loans_heads as $loanHead){
            $user = $users->random()->loans_heads()->save($loanHead);
            $opciones = array('Entregado','Faltante');  

            for ($i=0;$i<4;$i++){
                //$article=$articles->random();
                $loanHead->articles()->attach($articles->random(),array('state'=>$opciones[array_rand($opciones)],'quantity'=>rand(1,15)));
                 
            }
        }
     }
}   
*/
        