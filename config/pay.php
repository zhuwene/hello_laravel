<?php
/**
 * 支付配置参数
 */
return [
    'alipay' => [
        'app_id'         => '2016092400588811',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAokFnrYtjU97DD80pJh+DvYqjyY3aK31MNWYb1FLEZhfS7AQG7zTm50ZIvoq4u5sNT/5HdjAmqwJf9X3xQO4J6uaN8OKWpYcIfM1obDni/3hTxqulWUurm7g5RRCguA6yfauHP4I65ObBs8OBtudZTrdWnU0PpyV4VNAhOvyRdTRQ8iO6UeSDBgF3CObmG1WNPZ9RBYCtr3Nz778ksuNQxiuZ/u0dguHNZl/5bIoaMTTNVcVFWnA2teqqtnVCzWuv9CujiMCb3XiVcQGqR7/mWxfqGnfHdwPr297EzUXpRb/KsWqaC8RmvFkIGHoFULlcHgoPVYQmtZz9LyEbO7lamwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAhJGcQ4T8MjBPG18vFCSpeWLAXhO+xvM52DQk6NhSc/TNhGxSlheAHiujZ/Pa6CXQQRBfxzZ+ofnt7HDokl7ebpdhlL+1xRaCdvRyu7WgtDNUgOThmeKywXe40aJ7322x09GQwiX0xRMDtVwreb8Y0C2z3KIm3QQGBxpFWD91Eq3J6cyANnnFvmdoRaJIoR4OxoOCWsLJO9xEGzwubUG9SokRGad/9YfFMuD8q+MkPHPbtRmgdzPWcbUISWPxGndm2S9XvHmoBLH9UaCOzuJHAypAcCub6kb2eQDpy1FbTDpZzCphCIiJCx/jHOS40nK9x46GEVKbN7zlWGrPDiYfkwIDAQABAoIBAFXctZgptuqOzX3N/YEPadDb+/oy0bqr6Eg3JbzF90lxQfdF7YuW9v0TiIeYsqzvaN3rTA2MJyKj7MzaKFg9J9X7KFGehY18Uc3X78PSFJ8CK/Y7yD7STLLv5v2oPpDszGOD9T06Njm6YgmCBAqbkeer4jXBtGgr5feNtWI934bTp5uPmKXh9NFhJM6BMFsSJDRv/rKWA+C0t641Lrj4elrlDv3xkJdutHjC/kl7wmKADq29YQ65ec25tG4dcHtHwCjTPWTOkCrUJBmIli43TAwATNeLsuNNO1rqaJMIKZ4LeLi5tObbfiSA83lzhoatIDDtRQqWcUqM5Xtm1UpTk6ECgYEAxas2XxvuYrUgQq7vhVmFW2VSgmr5YF5cTlJyl1fPNRMbbdFixHSwC7cbEida8tHeYht4aTZyZeiyBWQAbgZuwZzcNlE0bpmMTRXWxavMe7oC6PzLDySLMQmVIEO0klQcS/12k575dtqA5ljn110H69DT5/p6u/00/lkRhXY4yAMCgYEAq7BzkfQtZQ37fHZIC1GqU+qsjRDWsXf81jGyyxCBuncJB00dNS4EN1e5A++KaD/ETIsZwO3clQiuFMRjOZdy7xzPYYRJl0cE9VVQQwH3O7DQMyzDKTY5UlmPVloj0Pu0kPUcjUr3jY+lTVBZNEOGRK4ZrFE9Lqtv4WYamkOKnTECgYEAgBk3cCVitFca4/wIPwvHr3YXJWt71qbv/NXTax69qnCKev2RmyzflYgBJB+bAfddvYh93Pkq474L+BBZcvP6PMCRuSWg6/fYA3CesZVnO9tM3X5Nfa+6AHpsSO93isi1Wc2VVY9VrV9m32BIRroEUx8O5KvfdApgmGBSSYJWw88CgYBvwKDZJdjOaDWDo/Hs/DEkAiJih81XIsS+HwdDyfDHEGgeCoGydctkwoK5Hxg2FxuMvxX6UFk94LJ+7f2wJPY40cXisZq9DwsZLXjaxNLKVaKPTNmTX6ocAhOcn3uksdGscP8usNdFm3R7SItny3QADFrFoPN0Bz8BtdYnB0OYYQKBgFJ4LfIJ5XGq3Of8+pdRR/UDiiMPkR9Gfrf2eEzAydAAs2lDHG2BCGHrmguXvNvUVoIwA4u52V/m9FPpUYuvVtVdXsIyBad13Z4WYskMKJix5k6CEBwDPUIvUgF80zWpJN5vFZMotx6newuMQNjMznyhk0TRE+YgnP15+oyXF9Ff',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];