<?php

class ExamplePdoMailingDataIterator implements mbIMailingDataIterator
{
    $parameters = array();
    $propertyObj = null;

//TODO: add fields for data resultsset iterations

    public function init($i_Parameters)
    {
        $this->parameters = $i_Parameters;

//TODO: connecting with database by inputed parameters

        return true;
    }

    public function deinit()
    {
//TODO: disconnecting with database

        return true;
    }

    public function setPropertiesFlags(mbMailerItemProperties $i_PropertyObj)
    {

    }

    public function current()
    {

    }

    public function key()
    {

    }

    public function next()
    {

    }

    public function rewind()
    {

    }

    public function valid()
    {

    }
}

