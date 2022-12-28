<?php
class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('author');
    }
    public function index()
    {
        if ($username = request('username')) {
            if ($data = $this->author->is_author($username, 'yes', ['username', 'password', 'fullname', 'mobile'])) {
                $password = md5(request('password'));
                if ($data['password'] == $password) {
                    Session::set('loginDtl', $data);
                    redirect('author.index');
                } else {
                    Session::set('error', "Please Enter valid username and password");
                }
            } else {
                Session::set('error', "Please Enter valid username and password");
            }
        }
        $this->load->view('login.index');
    }
}
