<?php


class TwoSum
{

    /**
     * 暴力法
     */
    function twoSum($nums, $target)
    {
        /**
         * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

        You may assume that each input would have exactly one solution, and you may not use the same element twice.

        You can return the answer in any order.
         *
         * nums = [2,7,11,15], target = 9

         */
        $len = count($nums);
        for($i=0;$i<$len;++$i)
        {
            for($j=$i+1;$j<$len-1;$j++)
            {
                if($nums[$i] + $nums[$j] == $target)
                {
                    return [$i,$j];
                }
            }
        }

    }

    /**
     * 排序+双指针
     *
    */
    function sortSum($nums,$target)
    {

    }

}