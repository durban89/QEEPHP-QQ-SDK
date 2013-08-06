<?php 
/**
 * 腾讯接口操作类
 * @version 2.0
 */
require_once(Q::ini('app_config/ROOT_DIR').'/app/helper/qq/class/Oauth.class.php');
class Helper_QQ{
    /**
     * 登陆接口
     */
    static public function qqLogin(){
        $handle = new QC();
        $handle->qq_login();
    }
    
    /**
     * 回调接口
     * @return String
     */
    static public function qqCallback(){
        $handle = new QC();
        return $handle->qq_callback();
    }
    
    /**
     * 获取openid接口
     * @return type
     */
    static public function qqOpenid(){
        $handle = new QC();
        return $handle->get_openid();
    }
    
    /**
     * 获取用户信息接口
     * @param String $accessToken
     * @param String $openId
     * @return String
     */
    static public function qqUserInfo($accessToken,$openId){
        $handle = new QC($accessToken,$openId);
        return $handle->get_info();
    }


}
?>

