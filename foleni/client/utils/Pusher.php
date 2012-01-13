<?php
namespace foleni\client\utils;
/**
 * A utility to stream a file into another for testing purposes
 *
 * @author	Brian Demant <brde@fynskemedier.dk>
 * @since	 2012-01-13
 */

use \ZMQContext;
use \ZMQSocket;
use \ZMQ;

class Pusher {
	public function stream($namespace="") { 

		$context = new ZMQContext();
		$socket = new ZMQSocket($context, ZMQ::SOCKET_PUSH);
		$socket->connect("tcp://localhost:5555");

		$fh = fopen("php://stdin", "r");
		while ($data = fgets($fh)) {
			$socket->send($data);
		} 
	} 
}