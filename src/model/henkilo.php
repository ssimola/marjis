<?php
  require_once HELPERS_DIR . 'DB.php';
  function lisaaHenkilo($nimi,$email,$mokki,$salasana) {
    DB::run('INSERT INTO marjishenkilo (nimi, email, mokki, salasana) VALUE  (?,?,?,?);',[$nimi,$email,$mokki,$salasana]);
    return DB::lastInsertId();
  }
  function haeHenkiloSahkopostilla($email) {
    return DB::run('SELECT * FROM marjishenkilo WHERE email = ?;', [$email])->fetchAll();
  }
  function haeHenkilo($email) {
    return DB::run('SELECT * FROM marjishenkilo WHERE email = ?;', [$email])->fetch();
  }

  function paivitaVahvavain($email,$avain) {
    return DB::run('UPDATE marjishenkilo SET vahvavain = ? WHERE email = ?', [$avain,$email])->rowCount();
  }

  function vahvistaTili($avain) {
    return DB::run('UPDATE marjishenkilo SET vahvistettu = TRUE WHERE vahvavain = ?', [$avain])->rowCount();
  }

?>