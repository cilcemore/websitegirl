<?php

    include "main.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/abc43698e6.js" crossorigin="anonymous"></script>

    <title>Data Covid-19</title>
</head>
<body>

    <header>
		<h1 class="judul"><b>Himsi Girls</h1></b>
		<p class="deskripsi">Gimana Cara Buat Data Real Time Covid</p>
	</header>

    <div class="wrap">
		<!-- bagian menu		 -->
		<nav class="menu">
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="covid.php">Covid</a>
				</li>
				<li>
					<a href="#">Kontak</a>
                </li>
                <li>
					<a href="login.php">Login</a>
				</li>
			</ul>
        </nav>

        <!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">
				<h2>Tutorial</h2>
				<p>Selamat datang di www.HimsiGirls.com, situs ini menyediakan tutorial pusing, bingung & nangis.</p>
			</div>
			<div class="widget">
				<h2>Ebook Gratis</h2>
				<p>Teman-teman bisa mendapatkan ebook tutorial gratis di sini <a target="_blank" href="https://www.malasngoding.com">www.malasngoding.com</a>.</p>
			</div>
		</aside>
        
    </div>


    <!-- bagian konten Blog -->
	<div class="blog">
    <div class="container-fluid bg-light p-3 text-center my-3">
        <h1>Data Covid-19</h1>
        <h5 class="text-muted">Informasi Terkini Mengenai Penyeberan Covid-19 Di Seluruh Dunia</h5>
    </div>


    <div class="conteudo">
		<div class="post-info">
		    Di Posting Oleh <b>oyobkylaabiljen</b>
		</div>
        <div class="container my-5">
            <div class="row text-center">
                <div class="col-4 text-warning">
                    <h5>Terkonfirmasi</h5>
                    <?php echo $total_confirmed;?>
                </div>
                <div class="col-4 text-success">
                    <h5>Sembuh</h5>
                    <?php echo $total_recovered;?>
                </div>
                <div class="col-4 text-danger">
                    <h5>Meninggal</h5>
                    <?php echo $total_deaths;?>
                </div>
            </div>
        </div>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Negara</th>
                        <th scope="col">Terkonfirmasi</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $key => $value){
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                    ?>
                        <tr>
                            <th><?php echo $key;?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase !=0){?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>
                                <?php }?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['recovered'];?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['deaths'];?>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">Copyright Himsi Girls &copy;2020</span>
        </div>
    </footer>

</body>
</html>