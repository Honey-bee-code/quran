<?php include('../_header.php'); ?>

<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-lg-6">
                <h4>Sumber tafsir :</h4>
                <h2>Profesor Quraisy Syihab</h2>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label for="surat">Nomor Surat</label>
                    <select name="surat" class="form-control">
                        <option value="">-- Pilih --</option>
                        <?php for($i=1;$i<=114;$i++){ ?>
                        <option value="<?=$i?>">Surat ke-<?=$i?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label for="ayat1">Dari Ayat ke-</label>
                    <input type="text" name="ayat1" id="ayat1" value="<?=$_POST['ayat1']?>" maxlength="4" pattern="[0-9]+" class="form-control" required>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label for="ayat2">Sampai Ayat ke-</label>
                    <input type="text" name="ayat2" id="ayat2" value="<?=$_POST['ayat2']?>" maxlength="4" pattern="[0-9]+" class="form-control" required>
                </div>
            </div>
        </div>
        <div style="text-align: right">
            <div class="form-group">
               <button type="submit" name="submit" class="btn btn-flat btn-primary">Tampilkan</button>
            </div>
        </div>
    </form>
</div>

<?php 
$sura = $_POST['surat'];
$aya1 = $_POST['ayat1'];
$aya2 = $_POST['ayat2'];
 ?>
<div class="container">
    <div class="row">
        <div class="col-lg">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="30">No.</th>
                        <th width="300px">Ayat</th>
                        <th>Terjemah</th>
                    </tr>
                </thead>
                        <?php 
                        $query = mysqli_query($koneksi, "SELECT * FROM quran_text  INNER JOIN id_muntakhab ON id_muntakhab.index = quran_text.index 
                         WHERE quran_text.sura = '$sura' AND quran_text.aya BETWEEN '$aya1' AND '$aya2'") 
                        or die (mysqli_error($koneksi));
                        if (mysqli_num_rows($query) > 0) {
                            while($data = mysqli_fetch_array($query)){ ?>
                <tbody>
                    <tr>
                        <td><?=$data['aya']?></td>
                        <td class="arabic" style="text-align: right"><?=$data['text']?></td>
                        <td><?=$data['terjemah']?></td>
                    </tr>
                </tbody>
                <?php }} else { ?>
                    <tr>
                        <td colspan="3" style="text-align: center">Tidak ada tampilan, silahkan pilih !</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>


<?php include('../_footer.php'); ?>