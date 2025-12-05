<?php

namespace NguyenHoaiChuong\RandomBundle\Service;

class RandomGenerator
{
    public function number(int $min = 0, int $max = PHP_INT_MAX): int
    {
        return random_int($min, $max);
    }

    public function string(int $length = 8): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $out = '';

        for ($i = 0; $i < $length; $i++) {
            $out .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $out;
    }
}