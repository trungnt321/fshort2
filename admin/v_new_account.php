<form class="my-4" action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="nameAc" class="form-control" id="name" >
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="email" name="EmailAc" class="form-control" id="Email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Ramdom password" disabled id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Chức vụ</label>
        <select class="form-select" aria-label="Default select example">
            <option value="2">Nhân viên</option>
            <option value="3">Quản trị</option>
        </select>
    </div>

    <button type="submit" name="submit_account" class="btn btn-primary">Submit</button>
</form>