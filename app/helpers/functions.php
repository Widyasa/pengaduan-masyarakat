<?php

function redirect($string){
    header('Location:' . BASEURL . $string);
}