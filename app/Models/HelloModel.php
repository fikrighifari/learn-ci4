<?php
namespace App\Models;
use CodeIgniter\Model;

class HelloModel extends Model {
    public function pesan($name) {
        return 'Hello, '.$name.', Apa Kabar?';
    }
}