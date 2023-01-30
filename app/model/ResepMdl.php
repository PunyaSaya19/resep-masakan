<?php 

class ResepMdl extends BaseModel
{
    protected $tblName = 'resep';
    protected $idKey = 'id';
    protected $allowedField = ['name', 'penulis', 'publish', 'time', 'porsi', 'level', 'deskripsi', 'step', 'komposisi', 'catatan', 'gambar'];
}
