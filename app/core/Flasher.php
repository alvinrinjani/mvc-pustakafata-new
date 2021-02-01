<?php

class Flasher
{
  public static function setFlash($pesan, $kategori, $aksi, $tipe, $link)
  {
    $_SESSION['flash'] = [
      'pesan' => $pesan,
      'kategori' => $kategori,
      'aksi' => $aksi,
      'tipe' => $tipe,
      'link' => $link
    ];
  }

  public static function flash()
  {
    if (isset($_SESSION['flash'])) {
      echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . '" role="alert">
            Data <strong>' . $_SESSION['flash']['kategori'] . '</strong>
            <em> ' . $_SESSION['flash']['pesan'] . '</em>
            ' . $_SESSION['flash']['aksi'] . '.
            <a href="' . $_SESSION['flash']['link'] . '" class="alert-link">Lihat </a> 
            perubahan data.
            </div>';
      unset($_SESSION['flash']);
    }
  }
}
