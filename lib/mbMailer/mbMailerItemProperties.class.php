<?php

//TODO: below code it is PROTOTYPE only !
//TODO: phpdoc comments

class mbMailerItemProperties
{
    const MASK_ALL_USERS = b'1111111111111111';
    const MASK_USER_ADMIN = b'1000000000000000';
    const MASK_USER_READER = b'0100000000000000';
    const MASK_USER_COMMITER = b'0010000000000000';
    const MASK_NONE = b'0000000000000000';

    private $property = self::MASK_NONE;

    public function enablePropertyFlag($i_PropertyConst)
    {
        $this->property = $this->property xor bstr2bin($input)
    }

    public function disablePropertyFlag($i_PropertyConst)
    {
        $this->property = $this->property or bstr2bin($input);
    }

    public function getPropertyFlag($i_PropertyConst)
    {
        $o_Result = (boolean) ($this->property & $i_PropertyConst);

        return $o_Result;
    }

    // Convert a binary expression (e.g., "100111") into a binary-string
    function bin2bstr($input)
    {
        if ( false === is_string($input) )
        {
            throw new Exception('Sanity check - string expected !');
        }

        // Pack into a string
        return pack('H*', base_convert($input, 2, 16));
    }

    // Binary representation of a binary-string
    function bstr2bin($input)
    {
        if ( false === is_string($input) )
        {
            throw new Exception('Sanity check - string expected !');
        }

        // Unpack as a hexadecimal string
        $value = unpack('H*', $input);
     
        // Output binary representation
        return base_convert($value[1], 16, 2);
    }
}

