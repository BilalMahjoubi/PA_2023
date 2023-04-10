<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

function format_url($chaine){
    $search  = array(' ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ');
    $replace = array('%20', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y');
    return str_replace($search, $replace, $chaine);
}

function connect_API(){
    $pathEC2 = "ec2-54-175-42-87.compute-1.amazonaws.com";
    $prefixe = "http://";
    $port = ":5000";
//    return $prefixe.$pathEC2.$port;
    return "http://127.0.0.1:5000";
}

function connexion_client(){
    $url_api_yougo = connect_API();
    $email = format_url($_POST['email_sign_in']);
    $password = format_url($_POST['password_sign_in']);
    $json = json_decode(file_get_contents($url_api_yougo."/connexion?m=".$email."&p=".$password), true)[0];
    if($json){
        $_SESSION['ID_USER'] = $json['ID'];
        $_SESSION['USER'] = $json['PSEUDO'];
        $_SESSION['EMAIL'] = $json['EMAIL'];
        $_SESSION['TYPECOMPTE'] = $json['TYPE'];
        return $json;
    }
    return null;
}

function inscription_client(){
    $url_api_yougo = connect_API();
    $user = format_url($_POST['pseudo_sign_up']);
    $email = format_url($_POST['email_sign_up']);
    $password = format_url($_POST['password_sign_up']);
    $type_compte = 1;
    $success = false;
    $json = file_get_contents($url_api_yougo."/inscription?u=".$user."&m=".$email."&p=".$password."&t=".$type_compte);
    if($json == "OK"){
        $success = true;
        $_SESSION['USER'] = $_POST['pseudo_sign_up'];
        $_SESSION['EMAIL'] = $_POST['email_sign_up'];
        $_SESSION['TYPECOMPTE'] = 1;
    }
    return $success;
}

function get_info_client(){
    $url_api_yougo = connect_API();
    $id_user = format_url($_SESSION['ID_USER']);
    return json_decode(file_get_contents($url_api_yougo."/info_client/".$id_user), true)[0];
}

function get_derniere_sortie(){
    $url_api_yougo = connect_API();
    return json_decode(file_get_contents($url_api_yougo."/oeuvre/last_release"), true);
}

function get_oeuvre_by_id($ID_OEUVRE){
    $url_api_yougo = connect_API();
    return json_decode(file_get_contents($url_api_yougo."/oeuvre/".$ID_OEUVRE), true)[0];
}

function get_scan_by_id($ID_OEUVRE){
    $url_api_yougo = connect_API();
    return json_decode(file_get_contents($url_api_yougo."/oeuvre/scan/".$ID_OEUVRE), true);
}

function get_scan_by_id_fecth($ID_OEUVRE){
    $url_api_yougo = connect_API();
    return json_decode(file_get_contents($url_api_yougo."/oeuvre/scan/".$ID_OEUVRE), true)[0];
}

function get_page_by_id($ID_SCAN, $ID_PAGE){
    $url_api_yougo = connect_API();
    return json_decode(file_get_contents($url_api_yougo."/oeuvre/".$ID_SCAN."/".$ID_PAGE), true)[0];
}

function verification_status_client(){
    $tab_user = null;
    if(!isset($_SESSION['USER_ON']) || !$_SESSION['USER_ON']){
        echo '<script>document.location.replace("connexion.php");</script>';
    }
    else{
        $tab_user = get_info_client();
    }
    return $tab_user;
}