<?php
function encrypt($data,$key)
{
    $encrypted = openssl_encrypt($data, AES_256_CBC, $key, 0, IV);
    $encrypted = base64_encode($encrypted);
    return $encrypted;
}
function decrypt($data,$key)
{
    $decrypted = openssl_decrypt(base64_decode($data), AES_256_CBC, $key, 0, IV);
    return $decrypted;
}
?>