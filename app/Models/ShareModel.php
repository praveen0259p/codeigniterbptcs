<?php
namespace App\Models;
use CodeIgniter\Model;
class Sharemodel extends Model
{
    protected $table='share_amount';
    protected $allowedFields=['member_number','cgr_number','share_value','share_details','active'];
    public function fetch_Share($membernumber)
    {
        $array = array('member_number' => $membernumber);
        $shareresult= $this->where($array)->find();
        return $shareresult;
    }
}
?>