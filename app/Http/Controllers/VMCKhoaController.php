<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VMCKhoaController extends Controller
{
    public function vmcGetAllKhoa()
        {
                // Truy vấn đọc dữ liệu từ bảng khoa
            $vmckhoas = DB::select('select * from vmckhoa ');
                return view('vmckhoa.vmclist',['vmckhoas'=>$vmckhoas]);
        }


        public function vmcGetKhoa($vmcmakh)
            {
        // Truy vấn đọc dữ liệu từ bảng khoa theo điều kiện makh
                $vmckhoa = DB::select('select * from vmckhoa where VMCMAKH =?',[$vmcmakh])[0];
                    return view('vmcKhoa.vmcDetal',['vmckhoa'=>$vmckhoa]);
            }   
        public function natEdit($vmcmakh)
            {
                $vmckhoa = DB::select('select * from vmckhoa where VMCMAKH =?',[$vmcmakh])[0];
                    return view('vmckhoa.vmcEdit',['vmckhoa'=>$vmckhoa]);
            } 
            public function vmcEditSubmit(Request $request)
            {
                $vmcmakh = $request->input('VMCMAKH');
                $vmctenkh = $request->input('VMCTENKH');
                DB::update("UPDATE vmckhoa SET VMCTENKH = ? WHERE VMCMAKH = ?",[$vmctenkh,$vmcmakh]);    
                    return redirect ('/khoas');
            } 

            public function vmccreate()
            {
            return view('vmckhoa.vmccreate');
            }
            public function vmccreateSubmit(Request $request)
            {
           // Lấy dữ liệu từ form thông qua request
       $vmcmakh = $request->input('VMCMAKH');  // Mã khoa
       $vmctenkh = $request->input('VMCTENKH');  // Tên khoa
   
       // Chèn dữ liệu vào bảng vtdkhoa
       DB::insert('insert into vmckhoa (VMCMAKH, VMCTENKH) values (?, ?)', [$vmcmakh, $vmctenkh]);
   
       // Sau khi chèn thành công, chuyển hướng về trang khoa
       return redirect('/khoas');
            }


            public function vmcDelete($vmcmakh)
            {
                $vmckhoa = DB::select('select * from vmckhoa where VMCMAKH =?',[$vmcmakh])[0];
                    return view('vmckhoa.vmcdelete',['vmckhoa'=>$vmckhoa]);
            } 
            public function vmcDeleteSubmit(Request $request)
            {
                $vmcmakh = $request->input('VMCMAKH');
               
                DB::DELETE("DELETE From vmckhoa WHERE VMCMAKH = ?",[$vmcmakh]);    
                    return redirect ('/khoas');
            } 
}