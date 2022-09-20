<?php

include('./../utilities/logger.php');

$logger = Logger::get_instance();

include('./../views/index.php');

$logger->close();