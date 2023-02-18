<!-- Modal Edit Employee -->
<div class="modal fade" id="editModalemp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i> แก้ไขข้อมูลพนักงาน</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
            <form action="">
              <div class="row mb-2">
                <div class="col">
                  <label class="form-label">รูปภาพ</label>
                  <input type="text" class="form-control" value="TR01">
                </div>
                <div class="col">
                  <label class="form-label">ชื่อผู้ใ้ช้</label>
                  <input type="text" class="form-control" value="RB02">
                </div>
              </div>

              <div class="row mb-2">
                <div class="col">
                  <label class="form-label">เพศ</label>
                  <input type="text" class="form-control" value="ผู้">
                </div>
                <div class="col">
                  <label class="form-label">อายุ</label>
                  <input type="text" class="form-control" value="102 วัน">
                </div>
              </div>

              <div class="row mb-2">
                <div class="col">
                  <label class="form-label">วันเกิด</label>
                  <input type="date" class="form-control">
                </div>
                <div class="col">
                  <label class="form-label">สถานะ</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>---</option>
                    <option value="1">คลอดแล้ว</option>
                    <option value="2">ผสมพันธุ์ติด</option>
                    <option value="3">ผสมพันธุ์ไม่ติด</option>
                </select>
                </div>
              </div>

              <div class="row mb-2">
                <div class="col">
                  <label class="form-label">สายพันธุ์</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>---</option>
                    <option value="1">ขนเยอะ</option>
                    <option value="2">เนื้อเยอะ</option>
                    <option value="3">อร่อย</option>
                </select>
                </div>
                <div class="col">
                  <label class="form-label">ประเภท</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>---</option>
                    <option value="1">สวยงาม</option>
                    <option value="2">ดีด</option>
                </select>
                </div>
              </div>

              <div class="row mb-2">
                <div class="col">
                  <label class="form-label">สายพันธุ์พ่อ</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>---</option>
                    <option value="1">ขนเยอะ</option>
                    <option value="2">เนื้อเยอะ</option>
                    <option value="3">อร่อย</option>
                </select>
                </div>
                <div class="col">
                  <label class="form-label">สายพันธุ์แม่</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>---</option>
                    <option value="1">ขนเยอะ</option>
                    <option value="2">เนื้อเยอะ</option>
                    <option value="3">อร่อย</option>
                </select>
                </div>
              </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> ยกเลิก</button>
        <button type="button" class="btn btn-success"><i class="fa-solid fa-square-check"></i> อัปเดต</button>
      </div>
    </div>
  </div>
</div>