<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Danh Sách Thành Viên</h1>
                        <ol class="breadcrumb mb-g4">
                            <li class="breadcrumb-item active"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="#">Thành viên</a></li>
                            <li class="breadcrumb-item">Danh sách</li>
                        </ol>
                        <div id="main">		
      <div class="container">
        <h2>Xóa thành viên</h2>
        <!-- Start of Form -->
        <form  method ="POST">
            <input type = "hidden" name = "action" value = "delete" />
            <div class="form-group">
                <label for="id">Mã Id</label>
                <input type="text" class="form-control" name="id" id="id">
              </div>
              <div class="input-group-btn">
                <td style = "padding-left: 0;"> 
                <button class="btn btn-danger" name="deleteMember" type="submit" >Xóa</button>
                </td>
        </form>	
  <!-- End Form -->
		<br/>        
      </div>
    </div>
                    </div>
                </main>