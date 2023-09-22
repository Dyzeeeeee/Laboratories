<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StudController extends BaseController
{

    private $studmod;
    private $sec;
    public function __construct()
    {
        helper('url');
        $this->studmod = new \App\Models\StudModel();
        $this->sec = new \App\Models\SectionModel();
    }
    public function save()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : null;

        $data = [
            'StudName' => $this->request->getVar('StudName'),
            'StudGender' => $this->request->getVar('StudGender'),
            'StudCourse' => $this->request->getVar('StudCourse'),
            'StudYear' => $this->request->getVar('StudYear'),
            'StudSection' => $this->request->getVar('StudSection'),
        ];

        if ($id != null) {
            $this->studmod->set($data)->where('id', $id)->update();
        } else {
            $this->studmod->save($data);
        }

        return redirect()->to('/students');
    }



    public function deleteSection($Section)
    {
        $this->sec->delete(['Section' => $Section]);
        return redirect()->to('/students');
    }


    public function update($id = null)
    {
        $data = [
            'sec' => $this->sec->findAll(),
            'up' => $this->studmod->where('id', $id)->first(),
            'studmod' => $this->studmod->findAll(),
        ];
        return view('index', $data);
    }

    public function updateSection($Sid = null)
    {
        $data = [
            'ups' => $this->sec->where('Sid', $Sid)->first(),
            'sec' => $this->sec->findAll(),
            'studmod' => $this->studmod->findAll(),
        ];
        return view('index', $data);
    }

    public function add()
    {
        $Sid = isset($_POST['Sid']) ? $_POST['Sid'] : null;
        

        $data = [
            'Section' => $this->request->getVar('Section'),
    
        ];

        if ($Sid != null) {
            $this->sec->set($data)->where('Sid', $Sid)->update();
    
        } else {
            $this->sec->save($data);
    
        }

        return redirect()->to('/students');
    }
    
    


    public function delete($id)
    {
        $this->studmod->delete(['id' => $id]);
        return redirect()->to('/students');
    }

    public function CRUD()
    {
        $data['studmod'] = $this->studmod->findAll();
        $data['sec'] = $this->sec->findAll();
        return view('index', $data);
    }
}
