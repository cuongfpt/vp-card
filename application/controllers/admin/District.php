<?php
Class District extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('District_model');
        $this->load->model('City_model');
    }

    function index()
    {
        $input = array();
        $list = $this->District_model->get_list($input);
        $this->data['list'] = $list;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/district/index';
        $this->load->view('admin/main', $this->data);
    }

    function add()
    {
        $list = $this->City_model->get_list_city();
        $this->data['list'] = $list;
        if ($this->input->post()) {
            $info = $this->City_model->get_info($this->input->post('cityid'));
            $cityName=$info->cityName;
            $data = array(
                'cityName' => $cityName,
                'cityid' => $this->input->post('cityid'),
                'districtName' => $this->input->post('districtname'),
                'orderNo' => $this->input->post('orderNo')
            );
            if ($this->District_model->create($data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm mới thành công</label>');
                redirect(admin_url('district'));
            } else {
                $this->session->set_flashdata('message', 'Thêm mới không thành công');
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/district/add';
        $this->load->view('admin/main', $this->data);
    }

    function edit()
    {
        $list = $this->City_model->get_list_city();
        $this->data['list'] = $list;
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong cua quan trị viên
        $info = $this->District_model->get_info($id);
        $this->data['info'] = $info;
        if ($this->input->post()) {
            $info = $this->City_model->get_info($this->input->post('cityid'));
            $cityName=$info->cityName;
            $data = array(
                'cityName' => $cityName,
                'cityid' => $this->input->post('cityid'),
                'districtName' => $this->input->post('districtname'),
                'orderNo' => $this->input->post('orderNo')
            );
            if ($this->District_model->update($id,$data)) {
                //tạo ra nội dung thông báo

                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật dữ liệu thành công</label>');
            } else {
                $this->session->set_flashdata('message', 'Không cập nhật  được');
            }
            //chuyen tới trang danh sách quản trị viên
            redirect(admin_url('district'));
        }
        $this->data['temp'] = 'admin/district/edit';
        $this->load->view('admin/main', $this->data);
    }
    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        var_dump($id);
        //lay thong tin cua quan tri vien
        $info = $this->District_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại bản ghi này');
            redirect(admin_url('city'));
        }
        //thuc hiện xóa
        $this->District_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('district'));
    }
}