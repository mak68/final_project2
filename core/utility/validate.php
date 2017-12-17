<?php

namespace utility;

class validate
{
    static function password($data)
    {
        if(count($data)==6)
        {
            return true;

        }

        else
        {

            return false;
        }


    }



}