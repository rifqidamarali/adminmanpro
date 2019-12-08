<?php 

class LoginTestCest
{
    public function canLogin(AcceptanceTester $I)
    {
    	$I->amOnPage('/index.php');
    	$I->fillField('username','admin');
    	$I->fillField('password','123456');
    	$I->click('LOGIN');
    	$I->amOnPage('/halaman_admin.php');
    	$I->see('Halo admin Anda telah login sebagai admin.	');
    }


}
