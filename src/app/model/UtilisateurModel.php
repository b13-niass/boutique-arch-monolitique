<?php
namespace Boutique\App\Model;
use Boutique\Core\Model\Model;

class UtilisateurModel extends Model{
    
    public function dettes(){
        return $this->hasMany('DetteEntity');
    }
}