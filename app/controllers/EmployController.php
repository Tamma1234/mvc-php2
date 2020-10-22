<?php
    namespace App\Controllers;

    use App\Models\Companies;
    use App\Models\Employees;

    class EmployController extends BaseController{
        public function index()
        {
            $employ = Employees::orderBy('id','desc')->get();
            $this->render('employess.index',compact('employ'));
        }

        public function addForm()
        {
         $this->render('employess.add-form');
        }

        public function saveAddForm()
        {
            $data = $_POST;
            $image = $_FILES['avatar'];

            $model = new Employees();
            if ($image['size'] > 0) {
                $filename = uniqid() . '-' . $image['name'];
                $path = "./app/uploads/" . $filename;
                move_uploaded_file($image['tmp_name'], $path);
                $filename = "./app/uploads/" . $filename;
                $data['avatar'] = $filename;
                // dd($filename);
            }

          $model->fill($data);
          $model->save();
          header('location: ' .BASE_URL. 'san-pham');

        }

        public function editForm()
        {
            $id = $_GET['id'];
            // dd($id);
            $employ = Employees::find($id);
         $this->render('employess.edit',compact('employ'));
        }

        public function saveEditForm()
        {
            $id = isset($_POST['id']) ? $_POST['id'] : -1;
            // dd($id);
            $image = $_FILES['avatar'];
            $employ = Employees::find($id);

            if ($image['size'] > 0) {
                $filename = uniqid() . '-' . $image['name'];
                $path = "./app/uploads/" . $filename;
                move_uploaded_file($image['tmp_name'], $path);
                $filename = "./app/uploads/" . $filename;
                $employ->avatar = $filename;
                // dd($filename);
            }

            $employ->fill($_POST);
            $employ->save();

         header('location:' .BASE_URL. 'san-pham');
        }
        public function remove()
        {
            $id = isset($_GET['id']) ? $_GET['id'] : -1;
            $model = Employees::find($id);
            if($model){
                Companies::where('id',$id)->get();
                $model->delete();
            }
            header('location:' .BASE_URL. 'san-pham');
        }
    }
?>
