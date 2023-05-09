<?php
namespace App\Models;
use CodeIgniter\Model;
class Cgr2022_2023Model extends Model
{
    protected $table='`cgr_2022_2023`';
    protected $allowedFields=['membernumber','cgrnumber','name','opening_year','opening_amount'];
    public function fetch_Cgr_2022_2023($membernumber)
    {
        $array = array('membernumber' => $membernumber);
        $cgrresult2022_2023= $this->where($array)->find();
        return $cgrresult2022_2023;
    }
}
?>