<?php

/**
 * Scoreboard
 *
 * $Id$
 */

require('init.php');
$title = 'Scoreboard';
include('../header.php');
include('menu.php');

putScoreBoard($login);

include('../footer.php');
