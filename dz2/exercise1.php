<?php
/**
 * Created by PhpStorm.
 * User: admin-pc
 * Date: 10.08.2016
 * Time: 11:11
 */

    $str = array (
        "���������� ���� ������� ��������� ��������, ��� ����� � ����� �������� ������ ������������ ����� ���������� ����������� �������� ������������ ���������� � ���������������� �������.",
        "���������� ���� ������� ��������� ��������, ��� ���������� �������������-���������������� ����������� ����� ������������ ������������ ���������� � ���������� ������������ ���������� � ���������������� �������.",
        "������� ����������� ������� �������, � ����� ����� ������ ��������������� ������������ ��������� ��������� ������ ������� �� ���������� �������, ���������� ����������� � ��������� ������������ �����."
    );
    echo str_show($str, false);
    function str_show ($p1, $p2) {
    if ($p2 != true)
        for ($i=0; $i<=count($p1); $i++) {
            echo "<p>{$p1[$i]}</p>\n";
        }
    else
        do {
            $res = implode(' ', $p1);
        }
        while (!count($p1));
        return $res;
    }