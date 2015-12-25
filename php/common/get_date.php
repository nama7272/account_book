<?php
    /* 年の取得 */
    function get_date_year() {
        $get_date_year =  date("Y");
        echo $get_date_year;
    }
    /* 月の取得 */
    function get_date_mouth() {
        $get_date_mouth =  date("m");
        echo $get_date_mouth;
    }
    /* 日の取得 */
    function get_date_day() {
        $get_date_day =  date("d");
        echo $get_date_day;
    }
    /* 曜日の取得 [1(月曜)～7(日曜)] */
    function get_date_week() {
        $get_date_week =  date("N");
        echo $get_date_week;
    }
    /* 時の取得 */
    function get_date_hour() {
        $get_date_hour =  date("H");
        echo $get_date_hour;
    }
        /* 分の取得 */
    function get_date_minute() {
        $get_date_minute =  date("i");
        echo $get_date_minute;
    }
    /* 秒の取得 */
    function get_date_second() {
        $get_date_second =  date("s");
        echo $get_date_second;
    }
?>