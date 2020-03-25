<?php
  date_default_timezone_set('Asia/Jakarta');
  if ( ! function_exists('is_https'))
  {
    function is_https()
    {
      if ( ! empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off')
      {
        return TRUE;
      }
      elseif (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
      {
        return TRUE;
      }
      elseif ( ! empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off')
      {
        return TRUE;
      }

      return FALSE;
    }
  }

  if ( ! function_exists('url'))
  {
    function url($uri = ''){
      $url = is_https() ? "https://" : "http://";
      $url .= $_SERVER['HTTP_HOST'];
      $url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
      if($uri != ''){
        return $url . $uri;
      }else{
        return $url;
      }
    }
  }

  define('MAINPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
?>
