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
        if( $x < -pow(2,31)  || $x > pow(2,31) -1 )
        {
            return 0;
        }
    }


}