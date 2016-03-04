<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('execute a test that passes 1');
$I->amOnPage('/test/guinea-pig');
$I->see("I am some page content");