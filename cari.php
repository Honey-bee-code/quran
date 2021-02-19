<?php include('_header.php'); ?>
<div class="container">
    <form action="cari.php" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-1" name="cari" type="search" value="<?=$_GET['cari']?>" placeholder="Cari" aria-label="Cari">
        <select class="form-control mr-sm-1" name="tafsir" id="">
            <option value="id_jalalayn">Tafsir Jalalain - Indonesia</option>
            <option value="ar_jalalayn">Tafsir Jalalain - Arab</option>
            <option value="id_muntakhab">Tafsir Quraisy Syihab - Indonesia</option>
            <option value="en_yusufali">Tafsir Yusuf Ali - English</option>
        </select>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
    </form>
</div>
<p></p>

<?php 
$cari = $_GET['cari'];
$tafsir = $_GET['tafsir'];
 ?>
<div class="container">
    <div class="row">
        <div class="col-lg">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Surat</th>
                        <th width="30">No.</th>
                        <th width="300px">Ayat</th>
                        <th>Terjemah</th>
                    </tr>
                </thead>
                        <?php 
                        $query = mysqli_query($koneksi, "SELECT * FROM $tafsir  INNER JOIN quran_text ON quran_text.index = $tafsir.index 
                         WHERE $tafsir.terjemah LIKE '%$cari%'")
                        or die (mysqli_error($koneksi));
                        if($cari != null){
                        if (mysqli_num_rows($query) > 0) {
                            while($data = mysqli_fetch_array($query)){ ?>
                <tbody>
                    <tr>
                        <td><?=$data['sura']?></td>
                        <td><?=$data['aya']?></td>
                        <td class="arabic" style="text-align: right"><?=$data['text']?></td>
                        <td><?=$data['terjemah']?></td>
                    </tr>
                </tbody>
                <?php }}} else { ?>
                    <tr>
                        <td colspan="4" style="text-align: center">Tidak ada tampilan, silahkan tulis kalimat yang ingin dicari !</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>


<?php include('_footer.php'); ?>