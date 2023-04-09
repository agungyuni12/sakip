<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
<script>
  $("#lokasi").on('change',function(){
    var lokasi = $("#lokasi").val();
    if (lokasi == "A Perencanaan Kinerja") {
      $(".a").removeClass("d-none");
      $(".b").addClass("d-none");
      $(".c").addClass("d-none");
      $(".d").addClass("d-none");
      $(".e").addClass("d-none");
    } else if (lokasi == "B Pengukuran Kinerja") {
      $(".b").removeClass("d-none");
      $(".a").addClass("d-none");
      $(".c").addClass("d-none");
      $(".d").addClass("d-none");
      $(".e").addClass("d-none");
    } else if (lokasi == "C Pelaporan Kinerja") {
      $(".c").removeClass("d-none");
      $(".a").addClass("d-none");
      $(".b").addClass("d-none");
      $(".d").addClass("d-none");
      $(".e").addClass("d-none");
    } else if (lokasi == "D Evaluasi Kinerja") {
      $(".d").removeClass("d-none");
      $(".a").addClass("d-none");
      $(".b").addClass("d-none");
      $(".c").addClass("d-none");
      $(".e").addClass("d-none");
    } else if (lokasi == "E Capaian Kinerja") {
      $(".e").removeClass("d-none");
      $(".a").addClass("d-none");
      $(".b").addClass("d-none");
      $(".c").addClass("d-none");
      $(".d").addClass("d-none");
    }
  })


</script>
    <script>
      $(document).ready(function(){
        $('#form').on('submit',function(e){
          e.preventDefault();
            var lokasi = $("#lokasi").val();
            var subfolder = $("#subfolder").val();
            var kegiatan = $("#kegiatan").val();
            var file = $("#file").val();
            if (lokasi == "") {
                Swal.fire({
                  icon:"error",
                  title:"Gagal",
                  text:"Komponen tidak boleh kosong",
                })
            } else if (subfolder == "") {
                Swal.fire({
                  icon:"error",
                  title:"Gagal",
                  text:"Subkomponen tidak boleh kosong",
                })
            } else if (kegiatan == "") {
                Swal.fire({
                  icon:"error",
                  title:"Gagal",
                  text:"Kegiatan tidak boleh kosong",
                })
            } else if (file == "") {
                Swal.fire({
                  icon:"error",
                  title:"Gagal",
                  text:"File tidak boleh kosong",
                })
            } else {
              $.ajax({
              url:"kirim.php",
              method:"POST",
              data:new FormData(this),
              contentType:false,
              processData:false,
            }).done(function(resp) {
              Swal.fire({
                  icon:"success",
                  title:"Berhasil ",
                  text:"Data berhasil disimpan",
              }).then(function() {
              window.location = "index.php";
              });
            })
          } 
        });
      });
    </script>