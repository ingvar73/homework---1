<?php
/**
 * Created by PhpStorm.
 * User: admin-pc
 * Date: 10.08.2016
 * Time: 11:11
 */

    $str = array (
        "Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в страшное насекомое.",
        "Лежа на панцирнотвердой спине, он видел, стоило ему приподнять голову, свой коричневый, выпуклый, разделенный дугообразными чешуйками живот, на верхушке которого еле держалось готовое вот-вот окончательно сползти одеяло.",
        "Его многочисленные, убого тонкие по сравнению с остальным телом ножки беспомощно копошились у него перед глазами. «Что со мной случилось?» – подумал он. Это не было сном.",
        "Его комната, настоящая, разве что слишком маленькая, но обычная комната, мирно покоилась в своих четырех хорошо знакомых стенах.",
        "Над столом, где были разложены распакованные образцы сукон – Замза был коммивояжером, – висел портрет, который он недавно вырезал из иллюстрированного журнала и вставил в красивую золоченую рамку.",
        "На портрете была изображена дама в меховой шляпе и боа, она сидела очень прямо и протягивала зрителю тяжелую меховую муфту, в которой целиком исчезала ее рука.",
        "Затем взгляд Грегора устремился в окно, и пасмурная погода – слышно было, как по жести подоконника стучат капли дождя – привела его и вовсе в грустное настроение.");

    echo str_show($str, true);
    function str_show ($p1, $p2) {
    if ($p2 != true)
        for ($i=0; $i<count($p1); ++$i) {
            echo "<p>{$p1[$i]}</p>\n";
        }
    else {
        do {
            $p1 = implode(' ', $p1);
        } while (!count($p1));
        return $p1;
        };
    }