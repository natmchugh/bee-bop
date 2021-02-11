<?php

declare(strict_types=1);

namespace Natmchugh\BeeBop;

function hipHop() {
	for ($i = 0; $i <20; $i++) {
		echo $i % 2 === 0 ? "HiPhOp" : "BeEboP";
		echo PHP_EOL; 
	}
}

hipHop();
