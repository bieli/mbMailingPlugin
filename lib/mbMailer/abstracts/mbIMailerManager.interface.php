<?php

//TODO: below code it is PROTOTYPE only !
//TODO: phpdoc comments

interface mbIMailerManager
{
    public function setVerboseMode($i_VerboseMode);
    public function setSfLogger($i_SfLoggerObj);
    public function setMailingDataIteratorObject(mbIMailingDataIterator
                                                 $i_MailingDataIterator);
    public function setParameter($i_Name,
                                 $i_Value);
    public function run();
    public function init();
    public function deInit();

    protected function prepareItem($i_ItemObj);
    protected function nextItem();
    protected function sendCurrentItem();
    protected function storeResultsSendItem();

    public function sendMailingProccessResults();
    public function storeMailingProccessResults();
}

