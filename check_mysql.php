<?php
// Check if the MySQL extension is loaded
if (!extension_loaded('mysql')) {
    echo 'MySQL extension is not loaded';
} else {
    echo 'MySQL extension is loaded';
}

// Check if the MySQLi extension is loaded
if (!extension_loaded('mysqli')) {
    echo 'MySQLi extension is not loaded';
} else {
    echo 'MySQLi extension is loaded';
}

// Check if the PDO extension is loaded
if (!extension_loaded('pdo_mysql')) {
    echo 'PDO MySQL extension is not loaded';
} else {
    echo 'PDO MySQL extension is loaded';
}
