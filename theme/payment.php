
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="theme/payment.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
</head>
<body>
    
</body>
</html>
<div class="container">
    <div class="row">
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box">
                    <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt="">
                </div>
                <div class="number">
                    <label class="fw-bold" for="">**** **** **** 1060</label>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                    <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box">
                    <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png"
                        alt="">
                </div>
                <div class="number">
                    <label class="fw-bold">**** **** **** 1060</label>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                    <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-3">
            <div class="card p-3">
                <div class="img-box">
                    <img src="https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png"
                        alt="">
                </div>
                <div class="number">
                    <label class="fw-bold">**** **** **** 1060</label>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                    <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card p-3">
                <p class="mb-0 fw-bold h4">Payment Methods</p>
            </div>
        </div>
        <div class="col-12">
            <div class="card p-3">
                <!--
                <div class="card-body border p-0">
                    <p>
                        <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between"
                            data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                            aria-controls="collapseExample">
                            <span class="fw-bold">PayPal</span>
                            <span class="fab fa-cc-paypal">
                            </span>
                        </a>
                    </p>
                    <div class="collapse p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-8">
                                <p class="h4 mb-0">Summary</p>
                                <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of
                                        product</span></p>
                                <p class="mb-0"><span class="fw-bold">Price:</span><span
                                        class="c-green">:$100.90</span></p>
                                <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                    nihil neque
                                    quisquam aut
                                    repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                    quis,
                                    iste harum ipsum hic, nemo qui!</p>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <div class="card-body border p-0">
                    <p>
                        <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
                            data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                            aria-controls="collapseExample">
                            <span class="fw-bold">Credit Card</span>
                            <span class="">
                                <span class="fab fa-cc-amex"></span>
                                <span class="fab fa-cc-mastercard"></span>
                                <span class="fab fa-cc-discover"></span>
                            </span>
                        </a>
                    </p>
                    <div class="collapse show p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-3">
                                <p class="h4 mb-0">Summary</p>
                                <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green"> <?php echo $_GET['name'];?></span>
                                </p>
                                <p class="mb-0">
                                    <span class="fw-bold">Price:</span>
                                    <span class="c-green"><?php echo $_GET['price'];?>(BDT)</span>
                                </p>
                                <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                    nihil neque
                                    quisquam aut
                                    repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                    quis,
                                    iste harum ipsum hic, nemo qui!</p>
                            </div>
                            <div class="col-lg-7">
                                <form action="" class="form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__div">
                                                <input type="text" class="form-control" placeholder=" ">
                                                <label for="" class="form__label">Card Number</label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form__div">
                                                <input type="text" class="form-control" placeholder=" ">
                                                <label for="" class="form__label">MM / yy</label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form__div">
                                                <input type="password" class="form-control" placeholder=" ">
                                                <label for="" class="form__label">cvv code</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form__div">
                                                <input type="text" class="form-control" placeholder=" ">
                                                <label for="" class="form__label">name on the card</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                        <a href="payment.php?pg_email=<?php echo $_GET['email'];?>&u_email=<?php echo $_SESSION['email'];?>&status=paid&submit=submit"><button class="btn btn-primary payment w-100">Make Payment</button></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-12">
            <a href="payment.php?pg_email=<?php echo $_GET['email'];?>&u_email=<?php echo $_SESSION['email'];?>&status=not+paid&submit=submit"><button ype="submit" value="mp" class="btn btn-primary">
                Skip Payment
            </button></a>
        </div>
       
    </div>
</div>