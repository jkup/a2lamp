<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Super simple REST client library.
 * @author Dan Trenz <dtrenz@gmail.com>
 */
class RESTClient {
    
    public static function get( $uri )
    {
        return self::_call($uri, NULL, 'GET');
    }
    
    public static function post( $uri, $data = array() )
    {
        return self::_call($uri, $data, 'POST');
    }
    
    public static function put( $uri, $data = array() )
    {
        return self::_call($uri, $data, 'PUT');
    }
    
    public static function delete( $uri, $data = array() )
    {
        return self::_call($uri, $data, 'DELETE');
    }
    
    private static function _call( $uri, $data = array(), $http_method = 'GET' )
    {        
        $response = (object) NULL;
        
        $ch = curl_init($uri);
        
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT        => 10,
            CURLOPT_CUSTOMREQUEST  => $http_method
        ));
        
        if ( !empty($data) ) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        }
        
        $response = curl_exec($ch);

        curl_close($ch);
        
        return $response;
    }
    
}