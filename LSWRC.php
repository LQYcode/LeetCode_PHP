<?php

/**
 * Longest Substring Without Repeating Characters
 * @description Given a string s, find the length of the longest substring without repeating characters.
*/
class LSWRC
{
    /**
     * Example 1:

    Input: s = "abcabcbb"
    Output: 3
    Explanation: The answer is "abc", with the length of 3.
    Example 2:

    Input: s = "bbbbb"
    Output: 1
    Explanation: The answer is "b", with the length of 1.
    Example 3:

    Input: s = "pwwkew"
    Output: 3
    Explanation: The answer is "wke", with the length of 3.
    Notice that the answer must be a substring, "pwke" is a subsequence and not a substring.
    Example 4:

    Input: s = ""
    Output: 0
    */




    /**
     * @param String $s
     * 什么是滑动窗口？
        其实就是一个队列,比如例题中的 abcabcbb，进入这个队列（窗口）为 abc 满足题目要求，当再进入 a，队列变成了 abca，这时候不满足要求。所以，我们要移动这个队列！
        如何移动？
        我们只要把队列的左边的元素移出就行了，直到满足题目要求！
        一直维持这样的队列，找出队列出现最长的长度时候，求出解！
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $start = 0;
        $end = 0;
        $length = 0;
        $res = 0;
        $sSize = strlen($s);
        while ($end < $sSize)
        {
            $tmpChar = $s[$end];
            for($i=$start;$i<$end;$i++)
            {
                if($tmpChar == $s[$i])
                {
                    $start = $i + 1;
                    $length = $end - $start;
                    break;
                }
            }
            $end++;
            $length++;
            $res = max($res,$length);

        }
        return  $res;
    }

}


