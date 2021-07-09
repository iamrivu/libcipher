<?php

namespace libcipher\src;

/**
 * AES-256-CBC key based encryption and decryption
 * @author Soumik Bhattacharya
 * @version PHP >= 7.4
 */

class Cipher
{
    private static $algo = "AES-256-CBC";

    /**
     * @param string $data userInput
     * @param string $xKey firstKeyPair
     * @param string $yKey secondKeyPair
     */

    public static function encrypt($data, $xKey, $yKey)
    {
        if (!empty(trim(stripslashes($data))) && preg_match("/^[0-9a-zA-Z .,_-]+$/i", $data)) {
            $key = hash('sha256', $xKey);
            $iv = substr(hash('sha256', $yKey), 0, 16);
            $res = base64_encode(openssl_encrypt($data, self::$algo, $key, 0, $iv));

            echo "Your text : " . $data . "<br/>" . "Encrypted text : " . $res;
        } else {
            echo "Invalid data entry !!";
            exit();
        }
    }

    public static function decrypt($data, $xKey, $yKey)
    {
        if (!empty(trim(stripslashes($data))) && !preg_match("/^[%*&$]+$/i", $data)) {
            $key = hash('sha256', $xKey);
            $iv = substr(hash('sha256', $yKey), 0, 16);
            $res = openssl_decrypt(base64_decode($data), self::$algo, $key, 0, $iv);

            if ($res) {
                echo "Decrypted text : " . $res;
            } else {
                echo "Invalid keys !!";
                exit();
            }
        }
    }
}
