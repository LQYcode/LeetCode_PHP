<?php


class ReverseInteger
{

    /**
     * @param Integer $x
     * @return Integer
     *
     * Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range , then return 0.
     */
    function reverse($x) {
        //oversize
        if( $x < -pow(2,31)  || $x > pow(2,31) -1 )
        {
            return 0;
        }
        //reverse then remove the last 0
        $temp  = str_split($x);
        if(count($temp) > 0 && $temp[0] == 0)
        {
            array_shift($temp);
        }
        $temp = array_reverse($temp);
        if ($x < 0)
        {
            $res = -intval(implode('',$temp));
        }
        else
        {
            $res = intval(implode('',$temp));
        }
        return $res;
    }

    //todo
    function efficientReverse($x)
    {
        $ans = 0;
        while ($x != 0)
        {
            if(($ans * 10) / 10 != $ans)
            {
                $ans = 0;
                break;
            }
            $ans = $ans * 10 + $x % 10;
            $x = $x / 10;

        }

        return $ans;
    }


}

$obj = new ReverseInteger();
$obj->reverse(0);