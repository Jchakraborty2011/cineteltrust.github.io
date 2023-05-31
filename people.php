<?php
include('header.php');
include("connect.php");
?>

<?php
$sql = "SELECT * FROM people ORDER BY id DESC";
$res = mysqli_query($mysqli,  $sql);
?>


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">OUR PEOPLE</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">OUR PEOPLE</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">

        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">OUR PEOPLE</div>
            <h1 class="display-6 mb-5">Trusted By Thousands Of People And Nonprofits</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php
            $i = 0;
            while ($row = $res->fetch_assoc()) {

            ?>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="admin/uploads/<?php echo $row['image']; ?>" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p><?php echo $row['name']; ?>
                        </p>
                        <h5 class="mb-1"><?php echo $row['description']; ?></h5>
                        <span class="fst-italic"><?php echo $row['designation']; ?></span>
                    </div>
                </div>
            <?php
                $i++;
            }


            ?>
        </div>

    </div>
</div>
</div>
<!-- Testimonial End -->


<?php include('footer.php'); ?>