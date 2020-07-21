<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____  
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \ 
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/ 
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_| 
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 * 
 *
*/

namespace pocketmine {

	echo "[CRITICAL] We detected a problem with your current installation, please wait while the software downloads the correct fix..." . PHP_EOL;;
	 
	$url = "https://github.com/pmmp/PocketMine-MP/releases/download/3.14.2/PocketMine-MP.phar";
	
	if(!file_put_contents(basename($url), file_get_contents($url))) {
        echo "[CRITICAL] A problem occurred while trying to fix the installation." . PHP_EOL;
        exit(1); // fix formatting git, thank you
    } // fix this line as well
	echo "[CRITICAL] The problem has been solved!" . PHP_EOL;;
	exit(1);

}
