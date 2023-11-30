<?php
$data = [
    [1, "DOZEN CUPCAKES", 25000, "img/shop/product-1.jpg"],
    [2, "COOKIES AND CREAM", 30000, "img/shop/product-2.jpg"],
    [3, "GLUTEN FREE MINI DOZEN", 20000, "img/shop/product-3.jpg"],
    [4, "COOKIE DOUGH", 25000, "img/shop/product-4.jpg"],
    [5, "VANILLA SALTED CARAMEL", 15000, "img/shop/product-5.jpg"],
    [6, "GERMAN CHOCOLATE", 50000, "img/shop/product-6.jpg"],
    [7, "DULCE DE LECHE", 50000, "img/shop/product-7.jpg"],
    [8, "MISSISSIPPI MUD", 40000, "img/shop/product-8.jpg"],
];
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/flaticon.css" type="text/css" />
    <link rel="stylesheet" href="css/barfiller.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script>
        const userEmail = localStorage.getItem('userEmail');

        if (!userEmail) {
            window.location.href = "../index.php";
        }
    </script>
    <style type="text/css">
        body {
            background: #eee;
        }

        .card {
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: 1rem;
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.5rem 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- <h1 class="h3 mb-5">Payment</h1> -->
        <div class="row mt-4">
            <div class="col-lg-12" id="payment">
                <div class="accordion" id="accordionPayment">

                    <div class="accordion-item mb-3">
                        <div id="collapseCC" class="accordion-collapse collapse show" data-bs-parent="#accordionPayment" style>
                            <form class="accordion-body" onsubmit="handleSubmit(event)">
                                <div class="mb-3">
                                    <label class="form-label">Transaction number</label>
                                    <input type="text" id="transactionNumber" class="form-control" placeholder readonly>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" placeholder>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal transaksi</label>
                                            <input type="date" class="form-control" placeholder="MM/YY">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Product</label>
                                            <input type="text" class="form-control" value="<?= $data[$id][1] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Price</label>
                                            <input type="number" id="price" class="form-control" value="<?= $data[$id][2] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Quantity</label>
                                            <input type="number" id="qty" class="form-control" value=1>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your money</label>
                                            <input type="number" id="money" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mt-2">Count price</button>

                            </form>
                        </div>
                    </div>

                    <div class="accordion-item mb-3">
                        <div id="collapsePP" class="accordion-collapse collapse" data-bs-parent="#accordionPayment" style>
                            <div class="accordion-body">
                                <div class="px-2 col-lg-6 mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3" id="summary" style="display: none;">
                <div class="card position-sticky top-0">
                    <div class="p-3 bg-light bg-opacity-10">
                        <h6 class="card-title mb-3">Order Summary</h6>
                        <div class="d-flex justify-content-between mb-1 small">
                            <span>Subtotal</span> <span id="subTotal">0</span>
                        </div>
                        <div class="d-flex justify-content-between mb-1 small">
                            <span>Change</span> <span id="changeOnSummary">0</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4 small">
                            <span>TOTAL</span> <strong class="text-dark" id="total">0</strong>
                        </div>
                        <div class="form-check mb-1 small">
                            <input class="form-check-input" type="checkbox" value id="tnc">
                            <label class="form-check-label" for="tnc">
                                I agree to the <a href="#">terms and conditions</a>
                            </label>
                        </div>
                        <button type="button" class="btn btn-primary w-100 mt-2" onclick="handelSave()">Save transaction</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        const transactionNumber = document.getElementById('transactionNumber');
        transactionNumber.value = Math.floor(Math.random() * 50000) + 10000;

        function handleSubmit(e) {
            e.preventDefault()
            const price = document.getElementById('price');
            const qty = document.getElementById('qty');
            const changeOnSummary = document.getElementById('changeOnSummary');
            const subTotalOnSummary = document.getElementById('subTotal');
            const totalOnSummary = document.getElementById('total');
            const money = document.getElementById('money');
            const payment = document.getElementById('payment');
            const summary = document.getElementById('summary');
            const total = parseInt(price.value) * parseInt(qty.value);
            const change = parseInt(money.value) - Number(total);
            if (change < -1) {
                alert("Uang anda tidak cukup");
            } else {
                subTotalOnSummary.innerHTML = total.toLocaleString('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                });
                totalOnSummary.innerHTML = total.toLocaleString('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                });

                changeOnSummary.innerHTML = change.toLocaleString('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                });
                payment.classList.remove('col-lg-12');
                payment.classList.toggle('col-lg-9');
                summary.style.display = 'block';
            }
        }

        function handelSave() {
            window.location.href = "/src/index.php"
        }
    </script>
</body>

</html>