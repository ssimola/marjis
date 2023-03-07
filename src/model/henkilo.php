<?php

  require_once HELPERS_DIR . 'DB.php';

  function lisaaHenkilo($nimi,$email,$mokki,$salasana) {
    DB::run('INSERT INTO marjishenkilo (nimi, email, mokki, salasana) VALUE  (?,?,?,?);',[$nimi,$email,$mokki,$salasana]);
    return DB::lastInsertId();
  }

?>