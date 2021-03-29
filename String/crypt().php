<?php


if (CRYPT_STD_DES == 1)
{
    print "Standard DES: ".crypt('something','st')."\n<br>";
}
else
{
    print "Standard DES not supported.\n<br>";
}


if (CRYPT_STD_DES == 1)
{
    echo "Extended DES: ".crypt('something','_S4..some')."\n<br>";
}
else
{
    echo "Extended DES not supported.\n<br>";
}

if (CRYPT_MD5 == 1)
{
    print "MD5: ".crypt('something','$1$somethin$')."\n<br>";
}
else
{
    print "MD5 not supported.\n<br>";
}
if (CRYPT_BLOWFISH == 1)
{
    echo "Blowfish: ".crypt('something','$2a$09$anexamplestringforsalt$')."\n<br>";
}
else
{
    echo "Blowfish DES not supported.\n<br>";
}
if (CRYPT_SHA256 ==1)
{
    print "SHA-256: ".crypt('something','$5$rounds=5000$anexamplestringforsalt$')."\n<br>";
}
else
{
    echo "SHA=256 not supported.\n<br>";
}
if (CRYPT_SHA512 == 1)
{
    print "SHA=512: ".crypt('something','$6$rounds=5000$anexamplestringforsalt$');
}
else
{
    print "SHA-512 not supported.";
}