<?php
/*
 Config do xdebug para este modo:
xdebug.mode=develop
xdebug.dump.SERVER = REMOTE_ADDR, REQUEST_METHOD
xdebug.dump.GET = *
xdebug.show_local_vars=1
*/
$variable = 2;
throw new Exception('Message');