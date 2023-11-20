<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The band</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/431/431238.png" type="image/x-icon" />
    <link rel="stylesheet" href="./assets/css/style_3.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
</head>
<?php
include 'conixion.php';                     

session_start();
$nbr_user = $con->query("SELECT * FROM users");
$user = $nbr_user->fetch();
$name = $user['username'];

$nbr_tour = $con->query("SELECT * FROM tour");
$tour_ids = [];

while ($row = $nbr_tour->fetch()) {
  $tour_ids[] = $row['Tour'];
}

// Assuming you want to display or process the tour IDs further
foreach ($tour_ids as $tour_id) {
  echo $tour_id;
  // Perform any necessary operations using the tour ID
}

    ?>
<body>

    <div id="main">
        <div id="header">
            <!-- Begin: Nav -->
            <ul id="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#band">Band</a></li>
                <li><a href="#tour">Tour</a></li>
                <li><a href="#contact">Contact</a></li>
               
                <li>
                    <a href="#">More
                        <i class="nav-arrow-down ti-angle-down"></i>
                    </a>
                    <ul class="subnav">
                        <li><a href="../Profile.php">PROFILE</a></li>
                         <li><a href="../index.php">EXIS</a></li> <!-- Quay lai thu muc cha -->

                        <li><a href="#">Đơn Hàng</a></li>
                    </ul>
                  
                    <li>
                        <a> <span class="h5 fw-bold nbr">Xin Chào <?php echo $_SESSION['name']; ?> !</span></a>
                      </li>
                </li>
            </ul>
            <!-- End: Nav -->

            <!-- Begin: Search button -->
            <div class="search-btn">
                <i class="search-icon ti-search"></i>
            </div>
            <!-- End: Search button -->
        </div>

        <div id="slider">
            <div class="text-content">
                <h2 class="text-heading">New York</h2>
                <div class="text-description">The atmosphere</div>
            </div>
        </div>

        <div id="content">
            <!-- About section -->
            <div id="band" class="content-section">
                <h2 class="section-heading">THE BAND</h2>
                <p class="section-sub-heading">We love music</p>
                <p class="about-text">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="row member-list">
                    <div class="col col-third text-center">
                        <p class="member-name">Hoàng Hữu Hiếu</p>
                        <img src="./assets/img/band/hieu.png" alt="Name" class="member-img" width="100px" height="155px">
                    </div>
                    <div class="col col-third text-center">
                        <p class="member-name">Nguyễn Triệu Vương</p>
                        <img src="./assets/img/band/vuong.png" alt="Name" class="member-img">
                    </div>
                    <div class="col col-third text-center">
                        <p class="member-name">Nguyễn Anh Tuấn</p>
                        <img src="./assets/img/band/tuan.png" alt="Name" class="member-img">
                    </div>
                </div>
            </div>

            <!-- Tour section -->
            <div id="tour" class="tour-section">
                <div class="content-section">
                    <h2 class="section-heading text-write">TOUR DATES</h2>
                    <p class="section-sub-heading text-write">Remember to book your tickets!</p>
                    
                    <!-- Tickets -->
                    <ul class="tickets-list">
                        <li>September<span class="sold-out">Sold out</span></li>
                        <li>October<span class="sold-out">Sold out</span></li>
                        <li>November <span class="quantity">3</span></li>
                    </ul>

                    <!-- Places -->
                    <div class="row place-list">
                        <div class="col col-third">
                            <img src="./assets/img/place/place1.jpg" alt="New York" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">New York</h3>
                                <p class="place-time">Fri 27 Nov 2016</p>
                                <p class="place-desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="btn js-buy-ticket">Buy tickets</button>
                            </div>
                        </div>
                        <div class="col col-third">
                            <img src="./assets/img/place/place2.jpg" alt="Paris" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">Paris</h3>
                                <p class="place-time">Sat 28 Nov 2016</p>
                                <p class="place-desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="btn js-buy-ticket">Buy tickets</button>
                            </div>
                        </div>
                        <div class="col col-third">
                            <img src="./assets/img/place/place3.jpg" alt="San Francisco" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">San Francisco</h3>
                                
                                <p class="place-time">Sun 29 Nov 2016</p>
                                <p class="place-desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>

                                <button class="btn js-buy-ticket">Buy tickets</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Begin: Contact section -->
            <div id="contact" class="content-section">
                <h2 class="section-heading">CONTACT</h2>
                <p class="section-sub-heading">Fan? Drop a note!</p>
        
                <div class="row contact-content">
                    <div class="col col-half contact-info">
                        <p><i class="ti-location-pin"></i>334 Nguyễn Trãi,Thanh Xuân,Hà Nội</p>
                        <p><i class="ti-mobile"></i>Phone: +00 151515</p>
                        <p><i class="ti-email"></i>Email:hus@edu.vn</p>
                    </div>
                    <div class="col col-half contact-form">
                        <form action="">
                            <div class="row">
                                <div class="col col-half">
                                    <input type="text" name="" placeholder="Name" required class="form-control">
                                </div>
                                <div class="col col-half">
                                    <input type="email" name="" placeholder="Email" required class="form-control">
                                </div>
                            </div>
                            <div class="row mt-8">
                                <div class="col col-full">
                                    <input type="text" name="" placeholder="Message" required class="form-control">
                                </div>
                            </div>
                            <input class="btn pull-right mt-16" type="submit" value="SEND">
                        </form>
                    </div>
                </div>
            </div>

            <!-- End: Contact section -->

            <div class="map-section">
                <img src="./assets/img/map.jpg" alt="">
            </div>
        </div>
        
        <div id="footer">
            <div class="socials-list">
                <a href=""><i class="ti-facebook"></i></a>
                <a href=""><i class="ti-instagram"></i></a>
                <a href=""><i class="ti-youtube"></i></a>
                <a href=""><i class="ti-pinterest"></i></a>
                <a href=""><i class="ti-twitter"></i></a>
                <a href=""><i class="ti-linkedin"></i></a>
            </div>
            <p class="copyright">
                Powered by <a href="">w3.css</a>
            </p>
        </div>
    </div>
    <div class="modal">
        <div class="modal-container js-modal-container">
            <div class="modal-close js-modal-close">
                <i class="ti-close"></i>
            </div>
            <header class="modal-header">
                <i class="modal-heading-icon ti-bag"></i>
                Tickets
            </header>

            <div class="modal-body">
            <form method="POST" action="add_ticker.php" enctype="multipart/form-data" onsubmit="return validateForm();">
                <label for="ticket-quantity" class="modal-label">
                    <i class="ti-shopping-cart"></i>
                    Tickets, $15 per person
                </label>
                <input id="ticket-quantity" type="text" class="modal-input" placeholder="How many?" name="Prix">

                <label for="ticket-email" class="modal-label">
                    <i class="ti-user"></i>
                    Sent To
                </label>
                <input id="ticket-email" type="email" class="modal-input" placeholder="Enter email..." name="Email">
                
                <label for="ticket-email" class="modal-label">
                    <i class="ti-user"></i>
                    Location
                </label>
                
                    <select id="ticket-location" class="modal-input" name="Location">
                    <option value="Hanoi">Hà Nội</option>
                    <option value="Ho Chi Minh">Hồ Chí Minh</option>
                    </select>
                
                <button id="buy-tickets" type="submit" name="submit">
                    Pay <i class="ti-check"></i>
                </button>
            </div>
            <footer class="modal-footer">
                <p class="modal-help">Need <a href="">help?</a></p>
            </footer>
        </div>
    </div>

    <script>
        const buyBtns = document.querySelectorAll('.js-buy-ticket')
        const modal = document.querySelector('.modal')
        const modalContainer = document.querySelector('.js-modal-container')
        const modalClose = document.querySelector('.js-modal-close')

        // Hàm hiển thị modal mua vé (thêm class open vào modal)
        function showBuyTickets(){
            modal.classList.add('open')
        }

        // Hàm ẩn modal mua vé (gỡ bỏ class open vào modal)
        function hideBuyTickets(){
            modal.classList.remove('open')
        }

        // Lặp qua từng thẻ button và nghe hành vi click
        for(const buyBtn of buyBtns){
            buyBtn.addEventListener('click', showBuyTickets)
        }

        // Nghe hành vi click vào button close
        modalClose.addEventListener('click', hideBuyTickets)

        modal.addEventListener('click', hideBuyTickets)

        modalContainer.addEventListener('click', function(event){
            event.stopPropagation()
        })
    </script>
</body>
</html>