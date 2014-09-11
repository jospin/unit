<?php
include('autoload.php');
use User as User;
	$userTable = new User\Table;
    $userTable->setName('Lucien Jospin')
                ->setNewPassword();

	var_dump($userTable->getPassword());
