<?php


$host = 'ec2-54-235-119-27.compute-1.amazonaws.com';
$database = 'dadfe8kfs4eupc';
$user = 'tmbuvfeidwknmz';
$port = '5432';
$password = 'c6874258cbfeea9626eeb3605e6179d7593fec1c2146def0f7c08f04097f3cb7'
$url = 'postgres://tmbuvfeidwknmz:c6874258cbfeea9626eeb3605e6179d7593fec1c2146def0f7c08f04097f3cb7@ec2-54-235-119-27.compute-1.amazonaws.com:5432/dadfe8kfs4eupc';


$dbopts = parse_url(getenv('$url'));
$app->register(new Herrera\Pdo\PdoServiceProvider(),
               array(
                   'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["$database"],'/').';host='.$dbopts["$host"] . ';port=' . $dbopts["$port"],
                   'pdo.username' => $dbopts["$user"],
                   'pdo.password' => $dbopts["$password"]
               )
);

echo("Za Worldeu");

?>
