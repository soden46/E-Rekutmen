<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class lamaran extends Model
{
    protected $table      = 'lamaran';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

    protected $allowedFields = ['iduser','nama', 'foto','cv','surat_lamaran','status'];
    // protected $useSoftDeletes = true;
    // protected $useTimestamps = true;
    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
    
public function savedata($data)
    {
        $builder = $this->db->table('lamaran');
        return $builder->insert($data);
    }
    
 public function getdata()
    {
        $builder = $this->db->table('lamaran');
        $builder->select('*');
        $builder->join('users', 'id = userid','left');
        return $builder->get();
    }

 public function update_by_id($where, $data){
        $builder =   $this->db->table('lamaran');
        $builder->where($where)->set(['status' => $data]);

        return $builder->update();
      }	
}