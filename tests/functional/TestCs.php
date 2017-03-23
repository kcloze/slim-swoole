<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) kcloze <pei.greet@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

//before
/*$params = [
    'code'      => $code,
    'message'   => $message,
    'timeStamp' => time(),
    'content'   => $content,
];*/

//after
$params = [
    'code'      => $code,
    'message'   => $message,
    'timeStamp' => time(),
    'content'   => $content,
];
