#!/usr/bin/env php
<?php
require __DIR__ . '/../foleni/client/Pusher.php';
$pusher = new foleni\client\Pusher();
$pusher->stream();