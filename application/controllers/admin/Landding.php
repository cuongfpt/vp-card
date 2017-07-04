<?php

Class Landding extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Landding_model');

    }

    function index()
    {
        $input = array();
        $list = $this->Landding_model->get_list($input);
        $this->data['list'] = $list;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/landding/index';
        $this->load->view('admin/main', $this->data);
    }

    function add()
    {
        if ($this->input->post()) {

            $this->uploadImages('imagesbg1');
            $this->uploadImages('imagesbg2');
            $this->uploadImages('imagesbg3');
            $this->uploadImages('imagesbg4');
            $this->uploadImages('imagesbuy');
            $this->uploadImages('imagesloaction');
            $this->uploadImages('imagesweb');
            $this->uploadImages('imagescard');
            $data = array(
                'bg1' => $_FILES['imagesbg1']['name'],
                'bg2' => $_FILES['imagesbg2']['name'],
                'bg3' => $_FILES['imagesbg3']['name'],
                'bg4' => $_FILES['imagesbg4']['name'],
                'imagesBuy' => $_FILES['imagesbuy']['name'],
                'imagesLocation' => $_FILES['imageslocation']['name'],
                'imagesWeb' => $_FILES['imagesweb']['name'],
                'imagescard' => $_FILES['imagescard']['name'],
                'titlers1' => $this->input->post('titleck'),
                'titlers2' => $this->input->post('titleagent'),
                'titlers3' => $this->input->post('titlesupport'),
                'textrs1' => $this->input->post('contentck'),
                'textrs2' => $this->input->post('contentagent'),
                'textrs3' => $this->input->post('contentsupport'),
                'titleguide' => $this->input->post('titleguide'),
                'titlebuy' => $this->input->post('titlebuy'),
                'titlelocaltion' => $this->input->post('titlelocation'),
                'titleweb' => $this->input->post('titleweb'),
                'titlevincard' => $this->input->post('contentcard'),
                'hotline' => $this->input->post('hotline'),
                'facebook' => $this->input->post('facebook'),
                'email' => $this->input->post('email'),
                'reason' => $this->input->post('contentreason'),
            'link' => $this->input->post('link')
            );
            if ($this->Landding_model->create($data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm mới thành công</label>');
                redirect(admin_url('landding'));
            } else {
                $this->session->set_flashdata('message', 'Thêm mới không thành công');
            }
        }
        $this->data['temp'] = 'admin/landding/add';
        $this->load->view('admin/main', $this->data);
    }

    function edit()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $info = $this->Landding_model->get_info($id);
        $this->data['info'] = $info;
        if ($this->input->post()) {

            if ($_FILES['imagesbg1']['name'] != "") {
                $this->uploadImages('imagesbg1');
                $bg1 =  $_FILES['imagesbg1']['name'];
            } else {
                $bg1 =  $this->input->post('hdnimagesbg1');
            }
            if ($_FILES['imagesbg2']['name'] != "") {
                $this->uploadImages('imagesbg2');
                $bg2 = $_FILES['imagesbg2']['name'];
            } else {
                $bg2 =  $this->input->post('hdnimagesbg2');
            }
            if ($_FILES['imagesbg3']['name'] != "") {
                $this->uploadImages('imagesbg3');
                $bg3 = $_FILES['imagesbg3']['name'];
            } else {
                $bg3 = $this->input->post('hdnimagesbg3');
            }
            if ($_FILES['imagesbg4']['name'] != "") {
                $this->uploadImages('imagesbg4');
                $bg4 =  $_FILES['imagesbg4']['name'];
            } else {
                $bg4 = $this->input->post('hdnimagesbg4');
            }
            if ($_FILES['imagesbuy']['name'] != "") {
                $this->uploadImages('imagesbuy');
                $buy =  $_FILES['imagesbuy']['name'];
            } else {
                $buy = $this->input->post('hdnimagesbuy');
            }
            if ($_FILES['imageslocation']['name'] != "") {
                $this->uploadImages('imageslocation');
                $local =  $_FILES['imageslocation']['name'];
            } else {
                $local = $this->input->post('hdnimageslocation');
            }
            if ($_FILES['imagesweb']['name'] != "") {
                $this->uploadImages('imagesweb');
                $web =  $_FILES['imagesweb']['name'];
            } else {
                $web = $this->input->post('hdnimagesweb');
            }
            if ($_FILES['imagescard']['name'] != "") {
                $this->uploadImages('imagescard');
                $card=  $_FILES['imagescard']['name'];
            } else {
                $card = $this->input->post('hdnimagescard');
            }
            $data = array(
                'bg1' => $bg1,
                'bg2' => $bg2,
                'bg3' => $bg3,
                'bg4' => $bg4,
                'imagesBuy' => $buy,
                'imagesLocation' =>$local,
                'imagesWeb' => $web,
                'imagescard' => $card,
                'titlers1' => $this->input->post('titleck'),
                'titlers2' => $this->input->post('titleagent'),
                'titlers3' => $this->input->post('titlesupport'),
                'textrs1' => $this->input->post('contentck'),
                'textrs2' => $this->input->post('contentagent'),
                'textrs3' => $this->input->post('contentsupport'),
                'titleguide' => $this->input->post('titleguide'),
                'titlebuy' => $this->input->post('titlebuy'),
                'titlelocaltion' => $this->input->post('titlelocation'),
                'titleweb' => $this->input->post('titleweb'),
                'titlevincard' => $this->input->post('contentcard'),
                'hotline' => $this->input->post('hotline'),
                'facebook' => $this->input->post('facebook'),
                'email' => $this->input->post('email'),
                'reason' => $this->input->post('contentreason'),
                  'link' => $this->input->post('link')
            );


            if ($this->Landding_model->update($id, $data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật  thành công</label>');
                redirect(admin_url('landding'));
            } else {
                $this->session->set_flashdata('message', 'Cập nhật không thành công');
            }
        }
        $this->data['temp'] = 'admin/landding/edit';
        $this->load->view('admin/main', $this->data);
    }

    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->Landding_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại quảng cáo');
            redirect(admin_url('faq'));
        }
        //thuc hiện xóa
        $this->Landding_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('landding'));
    }

    function uploadImages($id)
    {

        $file_name = $_FILES[$id]['name'];
        $file_size = $_FILES[$id]['size'];
        $file_tmp = $_FILES[$id]['tmp_name'];
        $arrayVar = explode(".", $file_name);
        $file_ext = end($arrayVar);
        $extension = array("jpeg", "jpg", "png");
        if (in_array($file_ext, $extension) === false) {
            $this->session->set_flashdata('message', 'Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.');
        }
        if ($file_size > 2097152) {
            $this->session->set_flashdata('message', 'Kích cỡ file nên là 2 MB');
        }
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, 'public/uploads/landding/' . $file_name);
        }
    }

}