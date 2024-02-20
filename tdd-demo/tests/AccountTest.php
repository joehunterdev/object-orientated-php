<?php 
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase{

    /** @test  */
    public function an_account_number_can_be_set(){

        $user = new App\User("Bill"); 

        //Setup
        $account = new App\Account();

        //Do something
        $account->setAccountHolder($user);

        //Make assertions
        $this->assertEquals(1234567890, $account->getAccountNumber());

    }

    /** @test  */

    public function an_account_can_be_related_to_a_user(){

        //Setup
        $user = new App\User("Joey");
         //Do something
        $userAcc =  $user->getUserData()['accountNumber'];

        //Setup
        $account = new App\Account();

        $account->setAccountHolder($user);
        $this->assertSame($userAcc, $account->getAccountNumber($user));

        //Make assertions

    }


    /** @test  */
    public function can_account_be_hydrated_on_creation(){
        
        //Setup
        $user = new App\User("Joey");
        $account = new App\Account($user->getUserData());

        $this->assertSame(["userName" => "Joey", "accountNumber" => 1234567890], $user->getUserData());

    }

}   