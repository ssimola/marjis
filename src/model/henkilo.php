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

  function asetaVaihtoavain($email,$avain) {
    return DB::run('UPDATE marjishenkilo SET nollausavain = ?, nollausaika = NOW() + INTERVAL 30 MINUTE WHERE email = ?', [$avain,$email])->rowCount();
  }

  function tarkistaVaihtoavain($avain) {
    return DB::run('SELECT nollausavain, nollausaika-NOW() AS aikaikkuna FROM marjishenkilo WHERE nollausavain = ?', [$avain])->fetch();
  }

  function vaihdaSalasanaAvaimella($salasana,$avain) {
    return DB::run('UPDATE marjishenkilo SET salasana = ?, nollausavain = NULL, nollausaika = NULL WHERE nollausavain = ?', [$salasana,$avain])->rowCount();
  }


?>