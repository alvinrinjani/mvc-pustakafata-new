<?php

class Books_Model
{
  private $table_buku_anak = 'buku_anak';
  private $table_buku_pemikiran = 'buku_pemikiran';
  private $table_buku_umum = 'buku_umum';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // BUKU ANAK
  // BUKU ANAK
  // BUKU ANAK
  public function buku_anak()
  {
    $this->db->query('SELECT * FROM ' . $this->table_buku_anak . ' ORDER BY id DESC');
    return $this->db->resultSet();
  }

  // BUKU PEMIKIRAN
  // BUKU PEMIKIRAN
  // BUKU PEMIKIRAN
  public function buku_pemikiran()
  {
    $this->db->query('SELECT * FROM ' . $this->table_buku_pemikiran . ' ORDER BY id DESC');
    return $this->db->resultSet();
  }

  // BUKU UMUM
  // BUKU UMUM
  // BUKU UMUM
  public function buku_umum()
  {
    $this->db->query('SELECT * FROM ' . $this->table_buku_umum . ' ORDER BY id DESC');
    return $this->db->resultSet();
  }
}
