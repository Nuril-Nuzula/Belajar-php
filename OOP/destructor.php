<?php
class Connection
{
// X. constructor dan Destructor
// 83
public function __destruct()
{
echo 'Object dihapus dari memory';
}
}

$connection = new Connection();
$connection->__destruct();
unset($connection);