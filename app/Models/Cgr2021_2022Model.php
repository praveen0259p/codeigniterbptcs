<?php
namespace App\Models;
use CodeIgniter\Model;
class Cgr2021_2022Model extends Model
{
    protected $table='`cgr_2021_2022`';
    protected $allowedFields=['membernumber','cgrnumber','name','opening_year','opening_amount'];
    public function fetch_Cgr_2021_2022($membernumber)
    {
        $array = array('membernumber' => $membernumber);
        $cgrresult2021_2022= $this->where($array)->find();
        return $cgrresult2021_2022;
    }
}
?>