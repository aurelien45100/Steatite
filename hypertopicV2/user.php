<?php
/*
STEATITE - Web service for getting different views of archived documents

Copyright (C) 2010 Aurelien Benel

OFFICIAL WEB SITE
http://www.hypertopic.org/index.php/Steatite

LEGAL ISSUES
This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License (version 2) as published by the
Free Software Foundation.
This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public License for more details:
http://www.gnu.org/licenses/gpl.html
*/

$id = $_GET['id'];
header('content-type: application/json;charset=utf-8');
echo '{"rows":[', "\n", '{"key":["', $id, 
	'"], "value":{"corpus":{"id":"00", "name":"Pictures"}}}', "\n]}";

?>