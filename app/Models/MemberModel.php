<?php
namespace App\Models;
use CodeIgniter\Model;
class MemberModel extends Model
{
    protected $table='member_details';
    protected $allowedFields=['membernumber','phonenumber','active'];
    public function fetch_User($membernumber,$password)
    {
        $array = array('member_number' => $membernumber,'phone_number'=>$password);
        $useresult= $this->where($array)->first();
        return $useresult;
    }
    public function getmemberdata($membernumber)
    {
        $array = array('member_number' => $membernumber);
        $memberdata= $this->where($array)->find();
        return $memberdata;
    }
}
?>