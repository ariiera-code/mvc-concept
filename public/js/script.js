$(function(){
  $('.buttonAddDataMahasiswa').on('click', function(){
    $('#formModalLabel').html('Add Mahasiswa Data');
    $('.modal-footer button[type=submit]').html('Add Data');
  });

  $('.showUpdateModal').on('click', function(){
    $('#formModalLabel').html('Change Mahasiswa Data');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-body form').attr('action', 'http://localhost/mvcframework/mahasiswa/change');

    const id = $(this).data('id');
    
    $.ajax({
      url: 'http://localhost/mvcframework/mahasiswa/getChange',
      data: {id : id}, // nama data yang dikirimkan : isi data
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);
      }
    });

  }); 
});