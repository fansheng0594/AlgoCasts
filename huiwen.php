<?php
/**
 * User: append
 * Time: 2019-02-12 20:47
 */
class AlgoCasts
{
    private function isAlphanumeric(string $s)
    {
        return ($s >= 'a' && $s <= 'z') || ($s >= 'A' && $s <= 'Z') || ($s >= '0' && $s <= '9');
    }

    private function isEqualIgnoreCase(string $a, string $b)
    {
        if ($a >= 'A' && $a <= 'Z') {
            $a = strtolower($a);
        }
        if ($b >= 'A' && $b <= 'Z') {
            $b = strtolower($b);
        }
        return $a == $b;
    }

    public function isPalindrome(string $str)
    {
        $length = strlen($str);
        if ($str == null || $length == 0) {
            return true;
        }
        for ($i = 0, $j = $length - 1; $i < $j; ++$i, --$j) {
            while ($i < $j && !$this->isAlphanumeric($str[$i])) {
                $i++;
            }
            while ($i < $j && !$this->isAlphanumeric($str[$j])) {
                $j++;
            }
            if ($i < $j && !$this->isEqualIgnoreCase($str[$i], $str[$j])) {
                return false;
            }
        }
        return true;
    }
}

$str = 'race E-car';
$instance = new AlgoCasts();
$res = $instance->isPalindrome($str);

var_dump($res);
