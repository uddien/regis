<html lang="id-ID">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type">
        <link rel="stylesheet" href="css/input.css">
        <link rel="stylesheet" href="css/ripple-button.css">
        <title>FORM REGISTRASI</title>
    </head>
    <body>
        <form action="output.php" enctype="multipart/form-data" method="post" class="panel-form">
            <table class="pos-center">
                <tr>
                    <td>
                        <div class="container-fluid">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="title-header">FORM REGISTRASI</div>
                                </div>
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Nama Lengkap <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="text" id="nama_lengkap" name="nama_lengkap" required/>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Jenis Kelamin <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <select id="jenis_kelamin" name="jenis_kelamin">
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Tempat Lahir <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="text" id="tempat_lahir" name="tempat_lahir" required/>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Tanggal Lahir <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required/>
                                                </label>
                                            </div>                                           

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Alamat <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <textarea id="alamat" name="alamat" required></textarea>
                                                </label>
                                            </div>


                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Email <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="email" id="email" name="email" required/>
                                                </label>
                                            </div>


                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    No HP <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="text" id="nohp" name="nohp" required/>
                                                </label>
                                            </div>


                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Hobi <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input type="text" id="hobi" name="hobi" required/>
                                                </label>
                                            </div>  

                                            <div class="form-group">
                                                <div class="form-item-label">
                                                    Foto Diri <span class="required"> *</span>
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <input id="foto_diri" name="foto_diri" type="file" required/>
                                                </label>
                                            </div>

                                            <div class="button-area">
                                                <button type="reset" class="for_ripple btn">BATAL</button>
                                                <button type="submit" class="for_ripple btn">CETAK</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
<script src="js/ripple-button.js"></script>