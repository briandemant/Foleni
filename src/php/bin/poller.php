#!/usr/bin/env php
<?php

require __DIR__ . '/../foleni/server/Poller.php';

$poller = new foleni\server\Poller();
$poller->stream();
