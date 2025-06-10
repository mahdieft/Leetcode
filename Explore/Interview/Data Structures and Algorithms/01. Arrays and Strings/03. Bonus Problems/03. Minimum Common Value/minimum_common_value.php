<?php

function getCommon(array $nums1, array $nums2): int
{
    $count_nums1 = count($nums1);
    $count_nums2 = count($nums2);

    $pt_1 = 0;
    $pt_2 = 0;
    while ($pt_1 < $count_nums1 && $pt_2 < $count_nums2) {
        if ($nums1[$pt_1] === $nums2[$pt_2]) {
            return $nums1[$pt_1];
        }

        while ($nums1[$pt_1] < $nums2[$pt_2] && $pt_1 < $count_nums1) {
            $pt_1++;
        }
        while ($nums2[$pt_2] < $nums1[$pt_1] && $pt_2 < $count_nums2) {
            $pt_2++;
        }
    }

    return -1;
}
