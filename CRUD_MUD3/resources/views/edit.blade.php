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
            <h1>Chỉnh sửa khách hàng </h1>
        </div>

        <div class="col-12">
            <form method="post" action="{{route('customers.update', $customer->id) }}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control" name="ten" value="{{ $customer->ten }}" required>
                    <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label">Ngày sinh</label>
                        <input type="text" class="form-control" name="ngaysinh" value="{{ $customer->ngaysinh }}" required>
                        <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Giới Tính</label>
                    <input type="text" class="form-control" name="gioitinh" value="{{ $customer->gioitinh }}" required>
                    <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Trở Lại</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

