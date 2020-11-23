<footer>
                <div class="footer-wrapper">
                    <div class="footer-top no-gutters row">

                    </div>
                    <div class="d-flex flex-column justify-content-center footer-bottom no-gutters row">
                        <div class="col">

                            <nav class='navbar navbar-dark d-flex flex-column'>
                                <div class="footer-nav-wrapper h-100">
                                    <ul class='navbar-nav navbar-nav-footer flex-row h-100'>
                                        <li class='my-auto'>
                                            <a class='nav-item nav-item-footer nav-link nav-link-footer px-3' href="./index.php">About</a>
                                        </li>
                                        <li class='my-auto'>
                                            <a class='nav-item nav-item-footer nav-link nav-link-footer px-3' href="./mixing.php">Mixing</a>
                                        </li>
                                        <li class='my-auto'>
                                            <a class='nav-item nav-item-footer nav-link nav-link-footer px-3' href="./mastering.php">Mastering</a>
                                        </li>
                                        <li class='my-auto'>
                                            <a class='nav-item nav-item-footer nav-link nav-link-footer px-3' href="./consult.php">Consultation</a>
                                        </li>
                                        <li class='my-auto'>
                                            <a class='nav-item nav-item-footer nav-link nav-link-footer px-3 active' href="./contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <div class="logo-container d-flex justify-content-center p-4">
                                
                                <div class="logo-wrapper">
                                    <a href="./index.php"><?php echo file_get_contents("./img/logo2.svg"); ?></a>
                                </div>

                            </div>
                            <div class="social-container">
                                <div class="social-container-wrapper d-flex justify-content-center">
                                    <div class="social-icon">
                                    
                                        <?php echo file_get_contents("./img/social-icons/soundcloud.svg"); ?>

                                    </div>
                                    <div class="social-icon">

                                        <?php echo file_get_contents("./img/social-icons/facebook.svg"); ?>

                                    </div>
                                    <div class="social-icon">

                                        <?php echo file_get_contents("./img/social-icons/youtube.svg"); ?>

                                    </div>

                                    <div class="social-icon">

                                        <?php echo file_get_contents("./img/social-icons/whatsapp.svg"); ?>

                                    </div> <!-- close social-icon -->
                                </div> <!-- close social-container-wrapper -->
                            </div> <!-- close social-container -->
                            <div class="d-flex justify-content-center divider-wrapper">
                                
                                <?php echo file_get_contents("./img/Underline-Flourish.svg"); ?>


                            </div>  <!--close divider wrapper -->
                            <div class="d-flex flex-column justify-content-end copyright-wrapper user-select-none">
                                
                                <p class='d-flex justify-content-center copyright'>
                                    © <?php echo date("Y"); ?> Copyright Moonflower Productions
                                </p> 

                            </div>
                            
                        </div>  <!-- close column -->
                    </div>  <!-- close row -->
                </div>  <!-- close footer-wrapper -->
            <!-- </div> -->
            </footer>

        </div> <!-- close page-wrapper -->
    </div> <!-- close fluid-container -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" 
        integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous">
    </script>

    <script src="./scripts/main.js"></script>

</body>

</html>