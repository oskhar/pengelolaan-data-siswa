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
    protected $allowedFields = ['nama', 'nis', 'nisn', 'agama', 'no_telp', 'gender', 'status_anak', 'status_data', 'nama_ayah', 'nama_ibu', 'deleted_at'];

    public function getData()
    {
        $result = $this->orderBy('nis')
            ->findAll();
        return $result;
    }
    public function getSpecificData($nis_target)
    {
        $result = $this->where('nis', $nis_target)
            ->withDeleted()
            ->findAll();
        return $result[0];
    }
    public function doSoftDelete($nis)
    {
        // Menghapus lembut pengguna dengan mengatur deleted_at menjadi waktu saat ini
        $this->where('nis', $nis)
            ->set([
                'deleted_at' => date('Y-m-d H:i:s')
            ])->update();
    }
    public function doRecoverData($nis)
    {
        // Menghapus lembut pengguna dengan mengatur deleted_at menjadi waktu saat ini
        $this->withDeleted()
            ->where('nis', $nis)
            ->set([
                    'deleted_at' => NULL
                ])
            ->update();
    }
    public function doInsertData($data)
    {
        // Insert data siswa
        $data_siswa = [
            'nama' => $data['nama'],
            'nis' => $data['nis'],
            'nisn' => $data['nisn'],
            'agama' => $data['agama'],
            'no_telp' => $data['no_telp'],
            'gender' => $data['gender'],
            'status_anak' => $data['status_anak'],
            'status_data' => $data['status_data'],
            'nama_ayah' => $data['nama_ayah'],
            'nama_ibu' => $data['nama_ibu'],
        ];
        $this->insert($data_siswa);
    }
    public function doUpdateData($old_nis, $data)
    {
        // Update data siswa
        $data_siswa = [
            'nama' => $data['nama'],
            'nis' => $data['nis'],
            'nisn' => $data['nisn'],
            'agama' => $data['agama'],
            'no_telp' => $data['no_telp'],
            'gender' => $data['gender'],
            'status_anak' => $data['status_anak'],
            'status_data' => $data['status_data'],
            'nama_ayah' => $data['nama_ayah'],
            'nama_ibu' => $data['nama_ibu'],
        ];
        $this->where('nis', $old_nis)
            ->set($data_siswa)
            ->update();
    }
    public function getDeletedData()
    {
        $result = $this->where('deleted_at IS NOT NULL')
            ->withDeleted()
            ->findAll();

        return $result;
    }
}