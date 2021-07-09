## AES-256-CBC key based encryption and decryption in PHP

```sh
include 'Cipher.php';
use libcipher\src as lib;

lib\Cipher::encrypt("Your text", "Random key 1st pair", "Random key 2nd pair");

lib\Cipher::decrypt("Your encrypted text", "Key 1st pair", "Key 2nd pair");
```

```sh
@version PHP >= 7.4
GNU GENERAL PUBLIC LICENSE
```