<?php
namespace App\Controllers;
use App\Models\MemberModel;
class Signin extends BaseController
{
    public function loginAuth()
    {   
        $check=$this->validate([
            'membernumber'=>'required|min_length[3]',
            'password'=>'required|min_length[10]|max_length[10]',
        ]);
        $error_msg=[];
        if(!$check)
        {
            $error_msg['validation']=$this->validator;
            echo view('common/header.php');
            echo view('login',$error_msg);
            echo view('common/footer.php');
        }
        else{
            $membernumber=$this->request->getPost('membernumber');
            $password=$this->request->getPost('password');
            $membermodel=new MemberModel();
            $useresult=$membermodel->fetch_User($membernumber,$password);
            if($useresult)
            {
            $ses_data = [
                'membernumber' => $useresult['member_number'], 
                'isLoggedIn' => TRUE
            ];
            $this->session->set($ses_data);
            return redirect()->to('/details');
           }
           else{
            $this->session->setFlashdata('msg', 'Invalid Credentials');
            return redirect()->to('/');
           }
        }   
    }
}
?>