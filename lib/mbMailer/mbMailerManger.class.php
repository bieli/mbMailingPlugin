<?php

//TODO: below code it is PROTOTYPE only !
//TODO: phpdoc comments
//TODO: add PDO clear and faster from ORMs iterator

class mbMailerManager implements mbIMailerManager
{
    const CONFIG_APP_YAML_KEY = 'app_mbmailer_plugin';
    const SUBJECT = 'SUBJECT';
    const RECIPIENT = 'RECIPIENT';
//    const UNIQ_HEADER_NAME = 'UNIQ_HEADER_NAME';
//    const WITH_ATTACHEMENTS = 'WITH_ATTACHEMENTS';
//    const WITH_TEXT_PART = 'WITH_TEXT_PART';
    const CFG_TRANSPORT__SMTP_PLAIN = 'TRANSPORT__SMTP_PLAIN';
    const CFG_TRANSPORT__SMTP_TLS = 'TRANSPORT__SMTP_TLS';
    const CFG_TRANSPORT__PHP_MAIL = 'TRANSPORT__PHP_MAIL';
    const CFG_TRANSPORT__SENDMAIL = 'TRANSPORT__SENDMAIL';
    const CFG_EMULATION_MODE = 'EMULATION_MODE';

    const SENDER_EMAIL = 'SENDER_EMAIL';
    const SENDER_NAME = 'SENDER_NAME';

    const TESTER_EMAIL = 'TESTER_EMAIL';

    const PROCCESS_DATA_PAGING = 'PROCCESS_DATA_PAGING';

    private $configuration = array();
    private $parameters = array();
    private $itemsObj = null;
    private $itemObj = null;
    private $itemSendResult = false;
    private $sfLoggerObj = null;
    private $verboseMode = false;


    public function init()
    {
        $this->parameters = array();
        $this->itemsObj = null;
        $this->itemObj = null;
        $this->itemSendResult = false;

//TODO: read configuration from app.yml
        $this->configuration = sfConfig::get(self::CONFIG_APP_YAML_KEY, false);

        if ( false === $this->configuration )
        {
            throw new Exception('Problem with get configuration from '
                                . 'app.yml section "'
                                . self::CONFIG_APP_YAML_KEY . '"');
        }

        //TODO: make connection with server
        return true;
    }

    public function deInit()
    {
        //TODO: disconnection from server session
        return true;
    }

    public function setParameter($i_Name, $i_Value)
    {
        if ( false === is_string($i_Name)
             || 0 === strlen($i_Name) )
        {
            throw new Exception('Parametr name must be not empty string');
        }

        $_rc = new ReflectionClass();
        $_consts = $_rc->getConstants();
        
        $_constExists = false;

        foreach ( $_consts as $_constKey => $_constValue )
        {
            if ( $i_Name == constant($_constKey) )
            {
                $_constExists = true;

                break;
            }            
        }

        if ( false === $_constExists )
        {
            throw new Exception('Parametr name "' . $i_Name
                                . '" not exists in object');
        }

        $this->parameters[ $i_Name ] = $i_Value;

        return true;
    }

    public function setVerboseMode($i_VerboseMode)
    {
        $this->verboseMode = $i_VerboseMode;
    }

    public function setSfLogger($i_SfLoggerObj)
    {
        $this->sfLoggerObj = $i_SfLoggerObj;
    }

    public function run()
    {
        //TODO: iterate and batch sending e-mails
    }

    public function setMailingDataIteratorObject(
                        mbIMailingDataIterator $i_MailingDataIterator)
    {

    }

    protected function prepareItem($i_ItemsObj)
    {
        if ( false === is_object($i_ItemsObj)
             || false === ($i_ItemsObj intefaceof Iterator) )
        {
            throw new Exception('Parametr must be an object '
                                . 'witch implements "Iterator"');
        }

        $this->itemsObj = $i_ItemsObj;
//        $this->item->start();
    }

    protected function nextItem()
    {
        $this->itemObj = $this->itemsObj->next();
    }

    protected function sendCurrentItem()
    {
//TODO: send with repeating - for sendmail or wrappers like qmail-inject
//        $this->itemObj
    }

    protected function storeResultsSendItem()
    {
//TODO:        $this->itemSendResult
    }

    public function sendMailingProccessResults()
    {

    }

    public function storeMailingProccessResults()
    {

    }
}

