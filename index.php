<?php include('_header.php'); ?>

<div class="container">
    <div class="jumbotron">
    <h1 class="display-4">Assalamu 'alaikum, </h1>
    <p class="lead">Selamat Datang di Aplikasi Qur'an Digital</p>
    <hr class="my-4">
    <p>Semoga bermanfaat di dunia dan akhirat.</p>
    <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Pelajari selengkapnya</a> -->
    </div>
    <form action="cari.php" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-1" name="cari" type="search" placeholder="Cari" aria-label="Cari">
        <select class="form-control mr-sm-1" name="tafsir" id="">
            <option value="id_jalalayn">Tafsir Jalalain - Indonesia</option>
            <option value="ar_jalalayn">Tafsir Jalalain - Arab</option>
            <option value="id_muntakhab">Tafsir Quraisy Syihab - Indonesia</option>
            <option value="en_yusufali">Tafsir Yusuf Ali - English</option>
        </select>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
    </form>
</div>


<?php include('_footer.php'); ?>