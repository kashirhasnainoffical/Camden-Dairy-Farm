<?php
session_start();
require_once 'getOrders.inc.php';
require_once 'cancOrders.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Camden Dairy Farm</title>
</head>
<?php
if (isset($_SESSION['email'])) {
?>

    <body>
        <nav>
            <div class="logo">
                <div>
                    <h5>Camden
                        <img src="./images/logo.png" alt="">
                        <span>DAIRY</span>
                    </h5>
                </div>
                <button id="login-btn" class="btn"><a href='index.php'>Logout</a></button>

            </div>
        </nav>
        <main>


            <!-- Modal -->

            <div class="bunner" style="display: block;">
                <div class="records">
                    <center>
                        <p>Camden Dairy Farm</p>
                    </center>

                    <h5>Cheese, Milk, Butter and other Dairy Products
                        WholeSale Market </h5>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#ProductModal">Order Natural Product</button>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#RatesModal">View Rates and Discount</button>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#RecentModal">View Recent Orders</button>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#CancelModal">View Canceled Orders</button>
                </div>
            </div>

            <br>
            <br>
            <div class="about">
                <div class="about-content">
                    <h5>Natural Products</h5>
                    <p>
                        Camden Highlands is well known for grazing cattle and producing dairy products.The Camden dairy farm
                        sells cheese, milk, butter and other dairy products
                    </p>
                </div>
            </div>
            <div class="author">

                <h1>Our Products</h1>
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
                    <img src="images/cheese-1163161_640.jpg" alt="Cheese" width="450px" height="450px">
                    <img src="images/cheese-3092936_640.png" alt="Image 2" width="450px" height="450px">
                    <img src="images/cheese-platter-6153716_640.jpg" alt="Image 3" width="450px" height="450px">
                    <img src="images/milk.jpg" alt="Image 4" width="450px" height="450px">
                    <img src="images/quark-571703_640.jpg" alt="Image 5" width="450px" height="450px">
                    <img src="images/yogurt-1442034_1280.jpg" alt="Image 6" width="450px" height="450px">
                </div>

                <!-- Modal -->
                <div class="modal fade" id="ProductModal" tabindex="-1" role="dialog" aria-labelledby="ProductModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <form id='loginForm' class="signInForm form border-light p-5" method='POST' action="orders.inc.php">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ProductModalLabel">Order Natural Product</h5>

                                </div>
                                <div class="modal-body">

                                    <div class="mb-2 products">
                                        <label for="product_milk">Milk:</label>
                                        <input id="product_Milk" name='Milk' class="form-control mb-2" placeholder="Order amount (in ltr)" type="number" max="5000">
                                    </div>
                                    <div class="mb-2 products">
                                        <label for="product_Butter">Butter:</label>
                                        <input id="product_Butter" name='Butter' class="form-control mb-2" placeholder="Order amount (in kg)" type="number" max="5000">
                                    </div>
                                    <div class="mb-2 products">
                                        <label for="product_Yogurt">Yogurt:</label>
                                        <input id="product_Yogurt" name='Yogurt' class="form-control mb-2" placeholder="Order amount (in kg)" type="number" max="5000">
                                    </div>
                                    <div class="mb-2 products">
                                        <label for="product_Cheese">Cheese:</label>
                                        <input id="product_Cheese" name='Cheese' class="form-control mb-2" placeholder="Order amount (in kg)" type="number" max="5000">
                                    </div>
                                    <div class="mb-2 products">
                                        <label for="product_Cream">Cream:</label>
                                        <input id="product_Cream" name='Cream' class="form-control mb-2" placeholder="Order amount (in kg)" type="number" max="5000">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit" name="submit">Confirm Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="RatesModal" tabindex="-1" aria-labelledby="RatesModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="width: 100%;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="RatesModalLabel">Rates and Discount</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="margin: auto;">
                                <table>
                                    <tr>
                                        <th class='border border-dark'>Rate Code</th>
                                        <th class='border border-dark'>Weight(Kg)/Volume(Ltr)</th>
                                        <th class='border border-dark'>Percentage</th>
                                    </tr>
                                    <tr>
                                        <td class='border border-dark'>A</td>
                                        <td class='border border-dark'>10-49</td>
                                        <td class='border border-dark'>1.00%</td>
                                    </tr>
                                    <tr>
                                        <td class='border border-dark'>B</td>
                                        <td class='border border-dark'>50-99</td>
                                        <td class='border border-dark'>5.00%</td>
                                    </tr>
                                    <tr>
                                        <td class='border border-dark'>C</td>
                                        <td class='border border-dark'>100-499</td>
                                        <td class='border border-dark'>10.00%</td>
                                    </tr>
                                    <tr>
                                        <td class='border border-dark'>D</td>
                                        <td class='border border-dark'>500-999</td>
                                        <td class='border border-dark'>20.00%</td>
                                    </tr>
                                    <tr>
                                        <td class='border border-dark'>E</td>
                                        <td class='border border-dark'>1000-4999 </td>
                                        <td class='border border-dark'>30.00%</td>
                                    </tr>

                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="RecentModal" tabindex="-1" role="dialog" aria-labelledby="RecentModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="width: 100%;">

                            <div class="modal-header">
                                <h5 class="modal-title" id="RecentModalLabel">Recent Orders</h5>

                            </div>
                            <div class="modal-body" style="margin: auto;">
                                <table>

                                    <?php if (isset($recent_orders)) {
                                        echo $recent_orders;
                                    } ?>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="CancelModal" tabindex="-1" role="dialog" aria-labelledby="CancelModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="width: 100%;">

                            <div class="modal-header">
                                <h5 class="modal-title" id="CancelModalLabel">Canceled Orders</h5>

                            </div>
                            <div class="modal-body" style="margin: auto;">
                                <table>
                                    <?php if (isset($cancelled_orders)) {
                                        echo $cancelled_orders;
                                    } ?>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <br>
            <br>
            <footer>
                <center>
                    <p>Copyright All Right Reserved @2023</p>
                </center>
            </footer>
        </main>
        <script src="main.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    </body>
    <script>
        $('.cancel_ord_btn').click(function() {
            var parent = $(this).parent();
            var element = $(parent).siblings();
            var ord_id = element.eq(0).text();
            // console.log(ord_id);
            alert('Are you sure you want to delete order#' + ord_id);
            $.ajax({
                type: "POST",
                url: "cancel_order.inc.php",
                data: {
                    ord_id: ord_id
                },
            }).done(function(data) {
                alert(data);
                location.reload();
            });
        });
    </script>

</html>
<?php
} else {
    header("location: index.php");

    exit();
}
