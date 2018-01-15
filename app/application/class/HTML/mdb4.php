<?php

class HTML_mdb4{

    public static function alert($type, $value){
        $class = '';
        switch($type){
            case 'success': $class='success'; break;
            case 'warning': $class='warning'; break;
            case 'info': $class='info'; break;
            case 'error':case 'danger': $class='danger'; break;
        }
        return '<div class="card text-center" ><div class="card-header '.$class.'-color white-text">'.$value.'</div></div>';
    }

    public static function showAlerts(array $alerts = []){
        $ret = '';
        foreach ($alerts as $alert) {
            $ret .= self::alert($alert['type'], $alert['value']).'<br/>';
        }
        return $ret;
    }


}