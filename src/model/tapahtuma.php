<?php
  require_once HELPERS_DIR . 'DB.php';
  function haeTapahtumat() {
    return DB::run('SELECT * FROM marjistapahtuma ORDER BY tap_alkaa;')->fetchAll();
  }

  function haeTapahtuma($id) {
    return DB::run('SELECT * FROM marjistapahtuma WHERE idtapahtuma = ?;',[$id])->fetch();
  }

?>