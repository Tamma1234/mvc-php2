<?php

namespace App\Controllers;

use App\Models\Companies;
// use App\Models\Companies as ModelsCompanies;

class HomeController extends BaseController
{

    public function index()
    {
        $companies = Companies::orderBY('id', 'desc')->get();
        $this->render('companies.index', compact('companies'));
    }
    public function addCompa()
    {
        $this->render('companies.add-compani');
    }
    public function saveAddCom()
    {
        $data = $_POST;
        $image = $_FILES["logo"];
        $model = new Companies();
        if ($image['size'] > 0) {
            $filename = uniqid() . '-' . $image['name'];
            // var_dump($filename);
            // die;
            $path = "./app/uploads/" . $filename;
            move_uploaded_file($image['tmp_name'], $path);
            $filename = "./app/uploads/" . $filename;
            $data['logo'] = $filename;
            // dd($filename);
        }
        // $data['logo'] = $filename;
        $model->fill($data);
        // var_dump($model->fill($data));die;
        $model->save();
        // var_dump($model->save());die;

        header('location:' .BASE_URL);
    }
    public function remove()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        // var_dump($id);die;
        $model = Companies::find($id);
        // var_dump($model);die;
        if($model){
            Companies::where('id',$id)->delete();
            // $model->delete();
        }
        header('location:' .BASE_URL);
    }
    public function editForm()
    {
        $id = $_GET['id'];
        $model = Companies::find($id);
        $this->render('companies.edit-form',compact('model'));
    }
    public function saveEditForm()
    {
      $id = $_POST['id'];
    //   dd($id);
      $image = $_FILES['logo'];
      $model = Companies::find($id);
    //   dd($model);
      if($image['size'] > 0){
        $filename = uniqid() . '-' . $image['name'];
        $path = "./app/uploads/" . $filename;
        move_uploaded_file($image['tmp_name'], $path);
        $filename = "./app/uploads/" . $filename;
        $model->logo = $filename;
      }

      $model->fill($_POST);

      $model->save();
      header('location: ' .BASE_URL);
    }
}
