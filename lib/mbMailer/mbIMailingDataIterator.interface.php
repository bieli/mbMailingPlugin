<?php

//TODO: below code it is PROTOTYPE only !
//TODO: phpdoc comments

interface mbIMailingDataIterator extends Iterator
{
    public function init($i_Parameters);
    public function deInit();
    public function setPropertiesFlags(mbMailerItemProperties $i_PropertyObj);
}

