<?php
/*
    This file is part of GlobalBan.

    Written by Stefan Jonasson <soynuts@unbuinc.net>
    Copyright 2008 Stefan Jonasson
    
    GlobalBan is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    GlobalBan is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with GlobalBan.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(ROOTDIR."/include/database/class.BadNameQueries.php");

$id = $_GET['id'];
$filter = $_GET['filter'];

// Switch the current active state to the other state
// off becomes on, and on becomes off
if($filter == 0) {
  $filter = 1;
} else {
  $filter = 0;
}

$badNameQueries = new BadNameQueries();
// Must be logged in to change the status
if($fullPower) {
  $badNameQueries->updateBadNameFilter($id, $filter);
}

// Send back the new active state
header('Content-Type: text/xml');
header("Cache-Control: no-cache, must-revalidate");
?>
<?echo "<?xml version=\"1.0\" ?>";?>
<root>
  <id><?php echo $id; ?></id>
	<update><?php echo $filter; ?></update>
</root>
