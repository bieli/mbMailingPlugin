<?php

//TODO: add batch file headers
//TODO: example batch script for mbMailingPlugin usage

//TODO: you need add properies setter for account profile and registration form
//TODO:  you need add properies setter to add mailing task form
$_propertyObj = new mbMailerItemProperties();
$_propertyObj->enablePropertyFlag(mbMailerItemProperties::MASK_ALL_USERS);

//TODO: example test with PDO statemaents with simple database structure
//      but with properties in from profiles
$_dataIteratorObj = new ExampleMailingDataIterator();
$_dataIteratorObj->setPropertiesFlags($_propertyObj);

//TODO: add setLogger method and setVerboseMode
$_mailerManager = new mbIMailerManager();

$_mailerManager->setVerboseMode(true);
$_mailerManager->setMailingDataIteratorObject($_dataIteratorObj);

//TODO: checks all conditions/credentials for send mailing proccess 
//      and initialize all instances/connections/loggers
$_mailerManager->init();

//TODO: general start send mailing proccess method
$_mailerManager->run();

$_mailerManager->deInit();

