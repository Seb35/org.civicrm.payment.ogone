<?php

/*
 * 1. ALL PARAMETER NAMES IN CAPS
 * 2. ALPHABETIC ORDER OF PARAMETERS IN STRING
 * 3. FINAL SHA STRING MUST BE CAPITALIZE
 * 4. SWITCH CHARACTER ENCODING ( AT OGONE SIDE ) TO UTF-8
 * 5. parameters that do not have a value should NOT be included in the string to hash
 * 6. END YOUR COMBINE STRING WITH THE SHA KEY
 */

function array_change_key_case_unicode( $arr, $c = CASE_LOWER ) {
  $c = ($c == CASE_LOWER) ? MB_CASE_LOWER : MB_CASE_UPPER;
  foreach( $arr as $k => $v ) {
    $ret[mb_convert_case($k, $c, 'UTF-8')] = $v;
  }
  return $ret;
}

function calculateSHA1($params, $passphrase) {
  // all keys to uppercase
  $params = array_change_key_case_unicode($params, CASE_UPPER);
  // sort on keys
  ksort($params);
  $s = '';
  foreach($params as $key => $value) {
    if (strlen($value) > 0) {
      $s .= $key . "=" . $value . $passphrase;
    }
  }
//CRM_Core_Error::debug_var('s', $s);  
  return strtoupper(sha1($s));
}
