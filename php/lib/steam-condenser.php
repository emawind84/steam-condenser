<?php
/**
 * This code is free software; you can redistribute it and/or modify it under
 * the terms of the new BSD License.
 *
 * Copyright (c) 2010, Sebastian Staudt
 *
 * @author Sebastian Staudt
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package Steam Condenser (PHP)
 */

define('STEAM_CONDENSER_PATH', dirname(__FILE__) . '/');
define('STEAM_CONDENSER_VERSION', '0.12.0');

require_once STEAM_CONDENSER_PATH . 'steam/servers/GoldSrcServer.php';
require_once STEAM_CONDENSER_PATH . 'steam/servers/MasterServer.php';
require_once STEAM_CONDENSER_PATH . 'steam/servers/SourceServer.php';

require_once STEAM_CONDENSER_PATH . 'steam/community/SteamId.php';

?>
