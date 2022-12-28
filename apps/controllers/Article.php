<?php
class Article extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('article', 'ac');
    }
    public function index()
    {
        $data = $this->ac->all();

        $this->load->view('Article.index', compact('data'));
    }
    public function create()
    {
        // echo "this is create controller";
        $this->load->view("Article.create");
    }
    public function store()
    {
        $info = [
            "uid" => '1',
            "title" => 'PHP',
            "description" => "hyper text pre-processor"
        ];
        $this->ac->insert($info);
    }
    public function edit($id)
    {
        $id = decode_url($id);
        $info = $this->ac->find($id);
        // print_r($info);
    }
}
