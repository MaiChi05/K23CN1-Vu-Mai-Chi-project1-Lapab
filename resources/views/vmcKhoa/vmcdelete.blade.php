<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('vmckhoa.vmcDeleteSubmit')}}" method="post">
            @csrf
                <div class="card">
                    <div class="card-header">
                        <h3>Thông tin chi tiết khoa can sua</h3>
                    </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="VMCMAKH" class="col-sm-2 col-form-label">Ma Khoa</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control" 
                          id="VMCMAKH"  name="VMCMAKH"
                           value=" {{$vmckhoa->VMCMAKH}}">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="VMCTENKH" class="col-sm-2 col-form-label">Ten Khoa</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" 
                          id="VMCTENKH"  name="VMCTENKH"
                           value="{{$vmckhoa->VMCTENKH}}">
                        </div>
                      </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Submit</button>
                    <a href="/khoas" class="btn btn-primary">Back</a>
                </div>
            </div>
        </form>
     </section>
</body>
</html>