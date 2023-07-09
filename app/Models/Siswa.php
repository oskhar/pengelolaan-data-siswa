<?php

namespace App\Models;

use CodeIgniter\Model;

class Siswa extends Model
{
    // ...
    protected $table = 'siswa';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getData($start, $length)
    {
        $result = $this->findAll($start, $length);
        return $result;
    }
    public function getDataSearch($search, $start, $length)
    {
        $result = $this->like('nama', $search)
            ->findAll($start, $length);

        return $result;
    }
    public function getLength($search = '')
    {
        $result = $this->like('nama', $search)
            ->countAllResults();
        
        return $result;
    }
    public function doSoftDelete($user_id) {
        // Menghapus lembut pengguna dengan mengatur deleted_at menjadi waktu saat ini
        $this->set('deleted_at', date('Y-m-d H:i:s'));
        $this->where('id', $user_id);
        $this->update('users');
    }

}