<?php
require 'includes/header.php'
?>

<main>
    <link rel="stylesheet" href="css/Home.css">
    <div class="bg-cover center-me">
        <div class="about-section">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                     style="margin-top: 50px; margin-left: 40px;">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-200" src="images/deal1.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                            </div>

                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-200" src="images/deal2.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                            </div>

                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-200" src="images/deal3.png" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                            </div>

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <h2 style="text-align:center; font-size: 30px;"> Menu</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="images/dumplings.jpg" alt="??" style="width: 150px; height: 150px">
                    <div class="container">
                        <h2>??</h2>
                        <p>
                            <button type="button" class="button" data-toggle="modal" data-target="#modalCart">Order
                            </button>
                        </p>

                        <div class="modal fade bd-example-modal-lg" id="modalCart" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Available Restaurants</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Restaurants</th>
                                                <th>Logo</th>
                                                <th>Select</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="restaurant">
                                                <td>Restaurant 1</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 2</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 3</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 4</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 5</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">
                                        <button type="button" class="button" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button class="button">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="images/pizza.jpg" alt="Pizza" style="width: 150px; height: 150px">
                    <div class="container">
                        <h2>Pizza</h2>
                        <p>
                            <button type="button" class="button" data-toggle="modal" data-target="#modalCart">Order
                            </button>
                        </p>

                        <div class="modal fade bd-example-modal-lg" id="modalCart" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Available Restaurants</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Restaurants</th>
                                                <th>Logo</th>
                                                <th>Select</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="restaurant">
                                                <td>Restaurant 1</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 2</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 3</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 4</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 5</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">
                                        <button type="button" class="button" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button class="button">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="images/subs.jfif" alt="Subs" style="width: 150px; height: 150px">
                    <div class="container">
                        <h2>Subs</h2>
                        <!-- Button trigger modal-->
                        <p>
                            <button type="button" class="button" data-toggle="modal" data-target="#modalCart">Order
                            </button>
                        </p>

                        <!-- Modal: modalCart -->
                        <div class="modal fade bd-example-modal-lg" id="modalCart" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Available Restaurants</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Restaurants</th>
                                                <th>Logo</th>
                                                <th>Select</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="restaurant">
                                                <td>Restaurant 1</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 2</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 3</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 4</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 5</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">
                                        <button type="button" class="button" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button class="button">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
            <div class="column">
                <div class="card">
                    <img src="images/meal.jpg" alt="meals" style="width: 150px; height: 150px">
                    <div class="container">
                        <h2>Meals</h2>
                        <p>
                            <button type="button" class="button" data-toggle="modal" data-target="#modalCart">Order
                            </button>
                        </p>
                        <div class="modal fade bd-example-modal-lg" id="modalCart" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Available Restaurants</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Restaurants</th>
                                                <th>Logo</th>
                                                <th>Select</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="restaurant">
                                                <td>Restaurant 1</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 2</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 3</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 4</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Restaurant 5</td>
                                                <td><img class="resimg" src="images/img-placeholder.webp"></img></td>
                                                <td><a href="https://www.subway.com/en-us" class="button"
                                                       style="margin-top: 75px;">Select</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">
                                        <button type="button" class="button" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button class="button">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>