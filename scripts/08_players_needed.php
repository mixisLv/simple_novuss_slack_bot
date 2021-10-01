<?php

use w\Bot\FootballState;

include_once __DIR__ . './../init.php';

$footballState = new FootballState();
$db = $footballState->db;

//
$db->exec(<<<SQL
ALTER TABLE active_game
  ADD players_needed INT NULL;
SQL
);
