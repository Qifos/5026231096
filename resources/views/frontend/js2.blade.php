<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>form ise</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function formvalidation() {
                var nrp = document.getElementById("nrp").value;
                var nama = document.getElementById("nama").value;

                if (nrp.length < 10) {
                    Swal.fire({title: "Warning", text: "NRP harus 10 digit", icon: "error"});
                    document.getElementById("nrp").focus();
                    return false;
                } else if (nrp.length > 10) {
                    Swal.fire({title: "Warning", text: "NRP harus 10 digit", icon: "error"});
                    document.getElementById("nrp").focus();
                    return false;
                } else if (/^\d+$/.test(nrp) == false){
                    Swal.fire({title: "Warning", text: "NRP harus angka", icon: "error"});
                    document.getElementById("nrp").focus();
                    return false;
                }

                if (nama.length < 1) {
                    Swal.fire({title: "Warning", text: "Nama harus diisi", icon: "error"});
                    document.getElementById("nama").focus();
                    return false;
                } else if (/\d/.test(nama)){
                    Swal.fire({title: "Warning", text: "Nama tidak boleh angka", icon: "error"});
                    document.getElementById("nama").focus();
                    return false;
                }
            }
        </script>
    </head>

    <body>
        <div class="container">
            <h3>Form pendaftaran ISE</h3>
            <form id="frmpendaftaran" action="https://google.co.id" method="get" onsubmit="return formvalidation()">
                NRP : <input type="text" id="nrp" value="0" class="form-control" placeholder="Silahkan isi NRP, 10 digit, harus angka, tidak boleh kosong" name="nrp">
                <br>
                Nama : <input type="text" id="nama" value="0" class="form-control" placeholder="Silahkan isi nama, minim 1 digit, tidak boleh kosong" name="nama">
                <br>
                <input type="submit" class="btn btn-primary" value="daftar">
            </form>
        </div>
    </body>
</html>
