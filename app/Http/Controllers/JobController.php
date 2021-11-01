<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Utils\SystemParam;
use App\Models\Job;
use Illuminate\Support\Facades\Validator;
class JobController extends Controller
{
    public function listJob()
    {
        $data = Job::orderby('id', 'desc')->get();
        return $this->responseApi(SystemParam::status_success, SystemParam::code_success, '', $data);
    }
    public function JobDetail($id)
    {
        $data = Job::findorfail($id)->load('store');
        return $this->responseApi(SystemParam::status_success, SystemParam::code_success, '', $data);
    }
    public function createJob(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
        ], [
            'title.required' => 'Vui lòng nhập tiêu đề công việc',
            'description.required' => 'Vui lòng nhập mô tả công việc',
            'date.required' => 'Vui lòng chọn ngày thực hiện công việc',
            'date.date' => 'Ngày thực hiện công việc phải là kiểu ngày',
        ]);
        if ($validator->fails()) {
            return $this->responseApi(SystemParam::status_error, SystemParam::code_error_validate, $validator->getMessageBag()->first(), $validator->errors());
        }
        $req = $request->all();
        $req['date'] = date('Y-m-d', strtotime($request->date));
        $create = Job::create($req);
        return $this->responseApi(SystemParam::status_success, SystemParam::code_success, SystemParam::create_success, $create);
    }
    public function updateJob($id, Request $request)
    {
        $check = Job::findorfail($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'date' => 'required|date',
        ], [
            'title.required' => 'Vui lòng nhập tiêu đề công việc',
            'description.required' => 'Vui lòng nhập mô tả công việc',
            'date.required' => 'Vui lòng chọn ngày thực hiện công việc',
            'date.date' => 'Ngày thực hiện công việc phải là kiểu ngày',
        ]);
        if ($validator->fails()) {
            return $this->responseApi(SystemParam::status_error, SystemParam::code_error_validate, $validator->getMessageBag()->first(), $validator->errors());
        }
        $req = $request->all();
        $req['date'] = date('Y-m-d', strtotime($request->date));
        $check->update($req);
        return $this->responseApi(SystemParam::status_success, SystemParam::code_success, SystemParam::update_success, $check);
    }
    public function deleteJob($id)
    {
        $data = Job::findorfail($id)->delete();
        return $this->responseApi(SystemParam::status_success, SystemParam::code_success, SystemParam::delete_success, $data);
    }
}
