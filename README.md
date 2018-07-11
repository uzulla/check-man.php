CHECK-MAN.php
=============

tiny ip address checker.

## usage

```
> http://example.jp/index.php
< 127.0.0.1

> http://example.jp/index.php?json
< 
{
    "ip": "127.0.0.1",
    "host": "localhost",
    "REMOTE_ADDR": "127.0.0.1",
    "REMOTE_HOST": "",
    "HTTP_X_FORWARDED_FOR": "",
    "HTTP_CLIENT_IP": ""
}
```