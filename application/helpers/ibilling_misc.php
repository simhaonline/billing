<?php


function get_client_ip(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}

function ib_post($param, $defvalue = '')
{
    if (!isset($_POST[$param])) {
        return $defvalue;
    } else {
        return $_POST[$param];
    }
}



function _log($description,$type='',$userid='0'){
    $d = ORM::for_table('sys_logs')->create();
    $d->date = date('Y-m-d H:i:s');
    $d->type = $type;
    $d->description = $description;
    $d->userid = $userid;
    $d->ip = $_SERVER["REMOTE_ADDR"];
    $d->save();

}

$admin_extra_nav = array(
    0 => '',
    1 => '',
    2 => '',
    3 => '',
    4 => '',
    5 => '',
    6 => '',
    7 => '',
    8 => '',
    9 => '',
    10 => ''
);

$client_extra_nav = array(
    0 => '',
    1 => '',
    2 => '',
    3 => '',
    4 => '',
    5 => '',
    6 => '',
    7 => '',
    8 => '',
    9 => '',
    10 => ''
);


/*
 *
 * Create Menu dynamically for plugins and hooks
 *
 * @param string $name name of the menu
 * @param string $link link of the menu
 * @param string $c controller name to set menu active
 * @param string fontawesome or iBilling icon name
 * @param int $position position of the menu
 * @param array $submenu submenu items
 *
 * */

function add_menu_admin($name,$link='#',$c='',$icon='icon-leaf',$position=5,$submenu=array()){

    global $admin_extra_nav,$routes;

    $active = '';
    if((isset($routes['0'])) AND ($routes['0']) == $c){
        $active = 'active';
    }
    if(!empty($submenu)){

        $s = '';

        foreach($submenu as $menu){
            if(isset($menu['target'])){
                $target = 'target="'.$menu['target'].'"';
            }
            else{
                $target = '';
            }
            $s .= ' <li><a href="'.$menu['link'].'" '.$target.'>'.$menu['name'].'</a></li>';
        }

        $admin_extra_nav[$position] .= '<li class="'.$active.'" id="li_'.$c.'">
                    <a href="'.$link.'"><i class="'.$icon.'"></i> <span class="nav-label">'.$name.' </span><span class="fa arrow"></span></a>

<ul class="nav nav-second-level">
'.$s.'
</ul>
</li>';

    }
    else{
        $admin_extra_nav[$position] .= '<li class="'.$active.'" id="li_'.$c.'"><a href="'.$link.'"><i class="'.$icon.'"></i> <span class="nav-label">'.$name.'</span></a></li>';
    }

}


function add_menu_client($name,$link='#',$c='',$icon='icon-leaf',$position=3,$submenu=array()){

    global $client_extra_nav,$routes;

    $active = '';
    if((isset($routes['0'])) AND ($routes['0']) == $c){
        $active = 'active';
    }
    elseif((isset($routes['2'])) AND ($routes['2']) == $c){
        $active = 'active';
    }
    else{

    }
    if(!empty($submenu)){
        $s = '';

        foreach($submenu as $menu){
            if(isset($menu['target'])){
                $target = 'target="'.$menu['target'].'"';
            }
            else{
                $target = '';
            }
            $s .= ' <li><a href="'.$menu['link'].'" '.$target.'>'.$menu['name'].'</a></li>';
        }

        $client_extra_nav[$position] .= '<li class="'.$active.'">
                    <a href="'.$link.'"><i class="'.$icon.'"></i> <span class="nav-label">'.$name.' </span><span class="fa arrow"></span></a>

<ul class="nav nav-second-level">
'.$s.'
</ul>
</li>';

    }
    else{
        $client_extra_nav[$position] .= '<li class="'.$active.'"><a href="'.$link.'"><i class="'.$icon.'"></i> <span class="nav-label">'.$name.'</span></a></li>';
    }

}




$sub_menu_admin = array();
$sub_menu_admin['settings'] = array();
$sub_menu_admin['appearance'] = array();
$sub_menu_admin['crm'] = array();
$sub_menu_admin['reports'] = array();

function add_sub_menu_admin($parent,$name,$link){
    global $sub_menu_admin;
    $sub_menu_admin[$parent][] = '<li><a href="'.$link.'">'.$name.'</a></li>
';

}


function add_option($option, $value){

    $d = ORM::for_table('sys_appconfig')->where('setting',$option)->find_one();
    if($d){
        return false;
    }
    else{
        //add option
        $c = ORM::for_table('sys_appconfig')->create();
        $c->setting = $option;
        $c->value = $value;
        $c->save();
        return true;
    }

}


function get_option($option){
    $d = ORM::for_table('sys_appconfig')->where('setting',$option)->find_one();
    if($d){
        return $d['value'];
    }
    else{
        return false;
    }
}

function update_option($option,$value){

    $d = ORM::for_table('sys_appconfig')->where('setting',$option)->find_one();
    if($d){
        $d->value = $value;
        $d->save();
        return true;
    }
    else{
        return false;
    }

}

function delete_option($option){
    $d = ORM::for_table('sys_appconfig')->where('setting',$option)->find_one();
    if($d){
        $d->delete();
        return true;
    }
    else{
        return false;
    }
}


function ib_die($msg=''){
    echo $msg;
    exit;
}

function ib_close(){
    exit;
}


function get_custom_field_value($fid,$rid){

    $d = ORM::for_table('crm_customfieldsvalues')->where('fieldid',$fid)->where('relid',$rid)->find_one();

    return $d['fvalue'];

}


function ib_pg_count(){
    $d = ORM::for_table('sys_pg')->where('status','Active')->count();
    return $d;
}


function ib_add_field_value($fieldid,$relid,$fvalue){
    $d = ORM::for_table('crm_customfieldsvalues')->create();
    $d->fieldid = $fieldid;
    $d->relid = $relid;
    $d->fvalue = $fvalue;
    $d->save();
    return true;
}


// Date Related

function ib_today(){
    return date('Y-m-d');
}

function ib_after_1_month($from = '', $format = 'mysql'){

    if($from == ''){
        $from = strtotime(date('Y-m-d'));
    }

    if($format == 'mysql'){
        $format = 'Y-m-d';
    }

    return date($format,strtotime('+1 month',$from));

}

function ib_lan_get_line($line,$fallback=''){

    global $_L;
    if(isset($_L[$line])){
        return str_replace($line,$_L[$line],$line);
    }
    elseif($fallback != ''){
        return $fallback;
    }
    else{

        return $line;

    }

}



function d2($msg = 'I am here!'){

    if(is_array($msg)){
        foreach ($msg as $m){
            echo $m. ' |
';
        }
    }
    else{
        echo $msg;
    }

    exit;

}

function d2c( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

function lan(){
    global $config;
    return $config['language'];
}

function add_js($f=array(),$v=''){

    global $ui;
    global $pl_path;

    if($v == ''){
        $ver = '';
    }
    else{
        $ver = '?ver='.$v;
    }
    $gen = '';
    if(is_array($f)){
        foreach($f as $p){
            $gen .= '<script type="text/javascript" src="'.$pl_path.'js/'.$p.'.js'.$ver.'"></script>
        ';
        }

        $ui->assign('xfooter', $gen);

        return true;

    }

    return false;

}


function add_js_external($url=array()){



    $gen = '';
    if(is_array($url)){
        foreach($url as $u){
            $gen .= '<script type="text/javascript" src="'.APP_URL.'/'.$u.'.js"></script>
        ';
        }



        return $gen;

    }

    return false;

}

function add_js_internal($paths=array()){



    $gen = '';
    if(is_array($paths)){
        foreach($paths as $u){
            $gen .= '<script type="text/javascript" src="'.APP_URL.'/'.$u.'.js"></script>
        ';
        }



        return $gen;

    }

    return false;

}

function set_tpl($path){
    global $ui;
    $ui->assign('tplheader', $path.'header');
    $ui->assign('tplfooter', $path.'footer');
}


function set_admin_header($path){
    global $ui;
    $ui->assign('tplheader', $path);
}


function set_admin_footer($path){
    global $ui;
    $ui->assign('tplfooter', $path);
}



function set_admin_nav($path){
    global $ui;
    $ui->assign('tplnav', $path);
}

function language_append($path){
    global $_L;
    $file = 'application/plugins/'.$path;
    include ($file);
}

function lan_register($path){

    $x = include $path;


    var_dump($x);
    exit;


}


function add_plugin_ui_header_admin($header=''){
    global $plugin_ui_header_admin;
    array_push($plugin_ui_header_admin,$header);
}

function add_css_admin($path){
    global $plugin_ui_header_admin_css;
    array_push($plugin_ui_header_admin_css,$path);
}

function add_plugin_ui_header_client($header=''){
    global $plugin_ui_header_client;
    array_push($plugin_ui_header_client,$header);
}

function add_css_client($path){
    global $plugin_ui_header_client_css;
    array_push($plugin_ui_header_client_css,$path);
}



function i_close($msg = ''){
    echo $msg;
    exit;
}

function inner_contents($lk){

    $url_string = '?ng=';
    $inner_contents = '';

    $lc = md5(APP_URL.$url_string);

    if($lc != $lk){

        $smarty_cache = 'PGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIj5QbGVhc2UgQWN0aXZhdGUgWW91ciBpQmlsbGluZy4gPGEgY2xhc3M9ImJ0biBidG4tc3VjY2VzcyIgaHJlZj0iP25nPXNldHRpbmdzL2FjdGl2YXRlX2xpY2Vuc2UvIj5DbGljayBIZXJlIHRvIEFjdGl2YXRlPC9hPjwvZGl2Pg==';

        $inner_contents = base64_decode($smarty_cache);

    }

    return $inner_contents;

}


function ib_http_request($url,$method='GET',$params=array(),$headers=array(),$resp_header=false,$follow_redirect=false){

    $response = '';



    if (!is_callable('curl_init')) {

        throw new Exception('CURL Not available in this Server.');

    }

    switch ($method) {

        case 'GET':

            $q = '';
            foreach($params as $key=>$value) {

                $value = urlencode($value);

                $q .= $key.'='.$value.'&';


            }

            $req = $url;

            if($q != ''){
                $q = rtrim($q, '&');

                $req = $url.'?'.$q;

            }



            try {
                $ch = curl_init();

                if (FALSE === $ch)
                    throw new Exception('failed to initialize');

                if (!empty($headers)) {

                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                }

                curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_URL, $req);

                if($follow_redirect){
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
                }

                if($resp_header){
                    curl_setopt($ch, CURLOPT_HEADER, 1);
                }

                $response = curl_exec($ch);

                if (FALSE === $response)
                    throw new Exception(curl_error($ch), curl_errno($ch));
                curl_close($ch);

            } catch(Exception $e) {

                throw new Exception($e->getCode(). ' '. $e->getMessage());

            }










            break;

        case 'POST':

            try {
                $ch = curl_init();

                if (FALSE === $ch)
                    throw new Exception('failed to initialize');

                if (!empty($headers)) {

                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                }

                curl_setopt($ch, CURLOPT_URL,$url);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                if($resp_header){
                    curl_setopt($ch, CURLOPT_HEADER, 1);
                }

                $response = curl_exec($ch);

                if (FALSE === $response)
                    throw new Exception(curl_error($ch), curl_errno($ch));
                curl_close($ch);

            } catch(Exception $e) {

                throw new Exception($e->getCode(). ' '. $e->getMessage());

            }




            break;

    }

    return $response;

}


function db_find_many($table,$columns=array()){

    $d = ORM::for_table($table);

    foreach($columns as $column){
        $d->select($column);
    }

    $ret = $d->find_many();

    return $ret;

}

function db_find_array($table,$columns=array(),$order_by=''){

    $d = ORM::for_table($table);

    foreach($columns as $column){
        $d->select($column);
    }

    if($order_by != ''){

        $o = explode(':',$order_by);

        if($o[0] == 'asc'){
            $d->order_by_asc($o[1]);
        }
        elseif ($o[0] == 'desc'){
            $d->order_by_desc($o[1]);
        }
        else{
            $d->order_by_desc($order_by);
        }

    }

    $ret = $d->find_array();

    return $ret;

}

function db_find_one($table,$id){

    $d = ORM::for_table($table)->find_one($id);

    if($d){
        return $d;
    }
    else{
        return false;
    }

}

function db_delete_row($table,$id){

    $d = ORM::for_table($table)->find_one($id);
    if($d){
        $d->delete();
        return true;
    }
    else{
        return false;
    }

}


function route($id,$default=''){

    global $routes;

    if(isset($routes[$id]) && $routes[$id] != ''){
        return $routes[$id];
    }
    else{

        return $default;

    }

}


function is_dev(){

    global $_app_stage;

    if($_app_stage != "Dev"){

        die("Unable to handle your request in Live Mode.");

    }

}




function ib_money_format($amount,$config,$symbol=''){

    if($symbol == ''){
        $currency_code = $config['currency_code'];
    }
    else{
        $currency_code = $symbol;
    }


    $thousand_separator_placement = $config['thousand_separator_placement'];
    $currency_decimal_digits = $config['currency_decimal_digits'];
    $currency_symbol_position = $config['currency_symbol_position'];
    $dec_point = $config['dec_point'];
    $thousands_sep = $config['thousands_sep'];


    if($currency_decimal_digits == 'true'){
        $dec_digit = 2;
    }
    else{
        $dec_digit = 0;
    }

    if($currency_symbol_position == 's'){
        $retval = number_format($amount,$dec_digit,$dec_point,$thousands_sep).$currency_code;
    }
    else{
        $retval = $currency_code.' '.number_format($amount,$dec_digit,$dec_point,$thousands_sep);
    }



    return $retval;


}

/*
 * @deprecated
 * use ib_posted_data
 * */

function ib_get_posted_data(){

    $data = array();

    foreach($_POST as $key => $value) {
        $data[$key] = trim($value);
    }

    return $data;

}

function ib_posted_data(){

    $data = array();

    foreach($_POST as $key => $value) {
        $data[$key] = trim($value);
    }

    return $data;

}


function ib_js_date_format($format,$js='moment'){

    if($js == 'moment'){

        $format = str_replace('d','DD',$format);
        $format = str_replace('M','MMM',$format);
        $format = str_replace('m','MM',$format);
        $format = str_replace('Y','YYYY',$format);
        $format = str_replace('jS','Do',$format);
        return $format;

    }
    elseif ($js='picker'){
        $format = str_replace('d','dd',$format);
        $format = str_replace('m','mm',$format);
        $format = str_replace('Y','yyyy',$format);
        $format = str_replace('M','mmm',$format);
        $format = str_replace('jS','d',$format);
        return $format;
    }

    else{

        $format = str_replace('d','DD',$format);
        $format = str_replace('m','MM',$format);
        $format = str_replace('Y','YYYY',$format);
        $format = str_replace('M','MMM',$format);
        $format = str_replace('jS','Do',$format);
        return $format;

    }


}


function has_access($rid,$shortname,$action='view'){

    if($rid == 0){
        return true;
    }

    $d = ORM::for_table('sys_staffpermissions')->where('rid',$rid)->where('shortname',$shortname)->find_one();

    if($d){

        switch ($action){

            case 'view':

                if($d->can_view == 1){
                    return true;
                }
                else{
                    return false;
                }

                break;

            case 'edit':

                if($d->can_edit == 1){
                    return true;
                }
                else{
                    return false;
                }

                break;

            case 'create':

                if($d->can_create == 1){
                    return true;
                }
                else{
                    return false;
                }

                break;

            case 'delete':

                if($d->can_delete == 1){
                    return true;
                }
                else{
                    return false;
                }

                break;

            default:
                return false;
        }

    }
    else{
        return false;
    }

}

function addPermission($pname,$shortname){

    $d = ORM::for_table('sys_permissions')->where('shortname',$shortname)->find_one();

    if($d){
        return false;
    }
    else{
        $p = ORM::for_table('sys_permissions')->create();
        $p->pname = $pname;
        $p->shortname = $shortname;
        $p->save();
        return $p->id();
    }

}

function deletePermission($shortname){

    $d = ORM::for_table('sys_permissions')->where('shortname',$shortname)->find_one();

    if($d){
        $d->delete();
        return true;
    }
    else{
        return false;
    }

}

function permissionDenied(){

    r2(U.'dashboard','e','Permission Denied');

}

function api_response($data=array()){

    header('Content-type: application/json');
    echo json_encode( $data );
    exit;
}


function client_ip(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}