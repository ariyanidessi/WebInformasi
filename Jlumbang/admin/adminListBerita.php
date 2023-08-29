<?php
include 'config.php';

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: adminLogin.php');
    exit();
}


$query = "SELECT * FROM berita";
$result = mysqli_query($con, $query);
$number_of_result = mysqli_num_rows($result);
$results_per_page = 6;

//determine the total number of pages available  
$number_of_page = ceil($number_of_result / $results_per_page);

//determine which page number visitor is currently on  
if (!isset($_GET['page'])) {
    $currentPage = 1;
} else {
    $currentPage = $_GET['page'];
}

//determine the sql LIMIT starting number for the results on the displaying page  
$page_first_result = ($currentPage - 1) * $results_per_page;

//retrieve the selected results from database   
$query = "SELECT * FROM `berita` ORDER BY `id_berita` DESC LIMIT " . $page_first_result . ',' . $results_per_page;
$result = mysqli_query($con, $query);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Berita Padukuhan Jlumbang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container-md">
                <a class="navbar-brand" href="adminHome.php">Padukuhan Jlumbang</a>
            </div>
        </nav>
    </div>
    <!-- back button -->
    <div class="container mt-5 pt-4 pb-3">
        <a href="adminBerita.php" class="back-btn row align-items-start" style="text-decoration: none;">
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                <span class="align-middle mx-2">Berita Dusun Jlumbang</span>
            </div>
        </a>
    </div>

    <div class="berita-list container-sm">
        <?php
        if ($result->num_rows > 0) {
            //display the retrieved result on the webpage  
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="berita-item d-flex flex-row my-2 border">
                    <div class="image">
                        <?php
                        $img = base64_encode($row['gambar']);
                        echo '<img src="data:image/*;base64,' . $img . '" alt="..." />';
                        ?>
                    </div>
                    <div class="desc container-fluid d-flex flex-column justify-content-between px-3 py-2">
                        <div class="content">
                            <h6><?php echo  $row['judul'] ?></h6>
                            <p><?php echo  $row['konten'] ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-1">
                            <div>
                                <a href="adminDetailBerita.php?id=<?php echo $row['id_berita'] ?>">
                                    <button class="selengkapnya" type="button">Selengkapnya</button>
                                </a>
                            </div>
                            <div class="navigation container d-flex justify-content-end">
                                <button onclick="window.location='adminEditBerita.php?id=<?php echo $row['id_berita'] ?>';" type="button" class="btn">
                                    <img src="../images/icons/edit.svg" alt="">
                                    <span class="px-2 algin-middle">Edit</span>
                                </button>
                                <!-- Button trigger modal -->
                                <a href="hapusBerita.php?id_berita=<?php echo $row['id_berita'] ?>">
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <img src="../images/icons/delete.svg" alt="">
                                        <span class="px-2 algin-middle text-danger">Hapus</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <!-- pagination -->
    <div class="container p-5">
        <nav aria-label="Page navigation example m-5">
            <ul class="pagination justify-content-center">
                <?php
                if ($currentPage == 1) {
                    echo '<li class="page-item disabled">';
                } else {
                    echo '<li class="page-item">';
                }
                echo '<a class="page-link" href="adminListBerita.php?page=' . ($currentPage - 1) . '" tabindex="-1" aria-disabled="true">Sebelumnya</a></li>';

                for ($page = 1; $page <= $number_of_page; $page++) {
                    if ($page == $currentPage) {
                        echo '<li class="page-item active"><a class="page-link" href="adminListBerita.php?page=' . $page . '">' . $page . '</a></li>';
                    } else {
                        echo '<li class="page-item"><a class="page-link" href="adminListBerita.php?page=' . $page . '">' . $page . '</a></li>';
                    }
                }

                // next page button
                if ($currentPage == $number_of_page) {
                    echo '<li class="page-item disabled">';
                } else {
                    echo '<li class="page-item">';
                }
                echo '<a class="page-link" href="adminListBerita.php?page=' . ($currentPage + 1) . '" tabindex="-1" aria-disabled="true">Berikutnya</a></li>';
                ?>
            </ul>
        </nav>
    </div>
</body>

</html>