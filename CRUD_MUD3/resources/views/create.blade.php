<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới khách hàng</h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{ route('customers.store') }}">
                @csrf
                <div class="form-group">
                    <label>Mã nhân viên</label>
                    <input type="text" class="form-control" name="id" placeholder="Enter Mã nhân viên" required>
                    <span style="color:red;">@error("id"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Chọn nhóm nhân viên</label>
                    <input type="text" class="form-control" name="group" placeholder="Chọn nhóm nhân viên" required>
                    <span style="color:red;">@error("group"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Họ tên</label>
                    <input type="text" class="form-control" name="name" placeholder="Họ tên" required>
                    <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Ngày sinh</label>
                    <input type="date" class="form-control" name="birthday" placeholder="Enter Ngày Sinh" required>
                    <span style="color:red;">@error("birthday"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Giới tính</label>
                    <input type="text" class="form-control" name="sex" placeholder="Enter Sex" required>
                    <span style="color:red;">@error("sex"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone" required>
                    <span style="color:red;">@error("phone"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Số CMND</label>
                    <input type="text" class="form-control" name="CMND" placeholder="Enter CMND" required>
                    <span style="color:red;">@error("CMND"){{ $message }} @enderror</span>
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter	Email" required>
                    <span style="color:red;">@error("email"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                    <span style="color:red;">@error("address"){{ $message }} @enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Trở Lại</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
