<?php
Class Card extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Card_model');
        $this->load->model('City_model');
        $this->load->model('District_model');
    }

    function index()
    {
        $input = array();
        $list = $this->Card_model->get_list($input);
        $this->data['list'] = $list;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/card/index';
        $this->load->view('admin/main', $this->data);
    }

    function add()
    {
        $list = $this->City_model->get_list_city();
        $this->data['list'] = $list;
        if ($this->input->post()) {
            $data = array(
                'cityid' => $this->input->post('cityid'),
                'districtid' => $this->input->post('districtid'),
                'streetName' => $this->input->post('streetName'),
                'phone' => $this->input->post('phone'),
                'fullName' => $this->input->post('fullName'),
                'orderNo' => $this->input->post('orderNo')
            );
            if ($this->Card_model->create($data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm mới thành công</label>');
                redirect(admin_url('card'));
            } else {
                $this->session->set_flashdata('message', 'Thêm mới không thành công');
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/card/add';
        $this->load->view('admin/main', $this->data);
    }

    function edit()
    {
        $list = $this->City_model->get_list_city();
        $this->data['list'] = $list;
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong cua quan trị viên
        $info = $this->Card_model->get_info($id);
        $this->data['info'] = $info;
        $listdistrict=  $this->District_model->get_list_by_cityid($info->cityid);
        $this->data['listdistrict'] = $listdistrict;
        if ($this->input->post()) {
            $data = array(
                'cityid' => $this->input->post('cityid'),
                'districtid' => $this->input->post('districtid'),
                'streetName' => $this->input->post('streetName'),
                'phone' => $this->input->post('phone'),
                'fullName' => $this->input->post('fullName'),
                'orderNo' => $this->input->post('orderNo')
            );
            if ($this->Card_model->update($id,$data)) {
                //tạo ra nội dung thông báo

                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật dữ liệu thành công</label>');
            } else {
                $this->session->set_flashdata('message', 'Không cập nhật  được');
            }
            //chuyen tới trang danh sách quản trị viên
            redirect(admin_url('card'));
        }
        $this->data['temp'] = 'admin/card/edit';
        $this->load->view('admin/main', $this->data);
    }
    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->Card_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại bản ghi này');
            redirect(admin_url('card'));
        }
        //thuc hiện xóa
        $this->Card_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('card'));
    }
    function getDistrictByCityId()
    {
        $id=$_GET["id"];
        $info = $this->District_model->get_list_by_cityid($id);
        echo json_encode($info);
    }
}