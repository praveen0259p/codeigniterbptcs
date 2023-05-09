<?php
namespace App\Controllers;

use App\Models\Cgr2021_2022Model;
use App\Models\Cgr2022_2023Model;
use App\Models\MemberModel;
use App\Models\ShareModel;
class Home extends BaseController
{
    public function index()
    {  if($this->session->get('isLoggedIn'))
        {
            return redirect()->to('/details');
        }
        else{
            echo view('common/header.php');
            echo view('login');
            echo view('common/footer.php');
        }  
    }
    public function details()
    {
        if($this->session->get('isLoggedIn'))
        {   $membermodel=new MemberModel();
            $sharemodel= new ShareModel();
            $cgr2021_2022model= new Cgr2021_2022Model();
            $cgr2022_2023model= new Cgr2022_2023Model();
            $passingarray['data']=$membermodel->getmemberdata($this->session->get('membernumber'));
            $passingarray['sharedata']=$sharemodel->fetch_Share($this->session->get('membernumber'));
            $passingarray['cgrdata2021_2022']=$cgr2021_2022model->fetch_Cgr_2021_2022($this->session->get('membernumber'));
            $passingarray['cgrdata2022_2023']=$cgr2022_2023model->fetch_Cgr_2022_2023($this->session->get('membernumber'));
            echo view('common/header.php');
            echo view('details',$passingarray);
            echo view('common/footer.php');
        }
        else{
            return redirect()->to('/');
        }
    }
    function logout() {
        if($this->session->get('isLoggedIn'))
        {
            $this->session->set(array('isLoggedIn' => '', 'membernumber' => ''));
            $this->session->destroy();
            return redirect()->to('/');
        }
        else{
            return redirect()->to('/');
        }
        
    }
}
