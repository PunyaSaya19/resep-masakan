<?php 

class UserMdl extends BaseModel
{
    protected $tblName = 'users';
    protected $idKey = 'id';
    protected $allowedField = ['name', 'username', 'password', 'role', 'avatar'];
}
