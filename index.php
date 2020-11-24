<?php include("./header.php"); ?>

            <section id='background-overlay' style='background-image: url("./img/mixer2.jpg");")' class='w-100'>
            </section>

            <section id='service-icons' class='user-select-none'>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <h2 class='p-4 services-tag text-responsive mx-auto user-select-none' style=''>Full Scale Audio Production Services</h2>
                            </div>

                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col px-0 d-flex justify-content-center align-items-center">

                                        <div class="icon-container">
                                            
                                        <a href="./mixing.php"><?php echo file_get_contents("./img/icons/Equalizer2.svg"); ?></a>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <h4 class='service-label'>Mixing</h4>
                                        <p class='text-white'>Achieve the perfect blend & balance for the individual elements of your track</p>
                                    </div>
                                </div> <!-- close row -->
                                <div class="row">
                                    <div class="col px-0 d-flex justify-content-center align-items-center">

                                        <div class="icon-container">
                                            <a href="./mastering.php"><?php echo file_get_contents("./img/icons/frequency2.svg"); ?></a>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <h4 class='service-label'>Mastering</h4>
                                        <p class='text-white'>Mastering is the final essential process required to prepare your mixes for release</p>
                                    </div>

                                </div>
                            </div> <!-- close col -->
                            <div class="col">
                        <div class="row">
                            <div class="col px-0 d-flex justify-content-center align-items-center">
                                <div class="icon-container">
                                
                                <a href="./consult.php"><?php echo file_get_contents("./img/icons/production.svg"); ?></a>

                                </div>
                            </div>
                            <div class="col">
                                <h4 class='service-label'>Production</h4>
                                <p class='text-white'>Midi sequencing, arrangement, beat production, backing tracks and more</p>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col px-0 d-flex justify-content-center align-items-center">
                                <div class="icon-container">
                                <a href="./consult.php"><?php echo file_get_contents("./img/icons/sound_design.svg"); ?></a>
                                </div>
                            </div>
                            <div class="col">
                                <h4 class='service-label'>Sound Design</h4>
                                <p class='text-white'>Sound effects and audio processing for games, music, movies, advertisements and more</p>
                            </div>                        
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col px-0 d-flex justify-content-center align-items-center">
                                <div class="icon-container">

                                <a href="consult.php"><?php echo file_get_contents("./img/icons/voice_over.svg"); ?></a>

                                    
                                </div> <!-- close .icon-container -->
                            </div>
                            <div class="col">
                                <h4 class='service-label'>Voice Over</h4>
                                <p class='text-white'>On-site and on-location voice recording and processing for any Multimedia project</p>
                            </div>                        
                        </div> <!-- close row -->
                        <div class="row">
                            <div class="col px-0 d-flex justify-content-center align-items-center">
                                <div class="icon-container">
                                
                                    <a href="./consult.php"><?php echo file_get_contents("./img/icons/ear.svg"); ?></a>

                                </div>
                            </div>
                            <div class="col">
                                <h4 class='service-label'>Post Production</h4>
                                <p class='text-white'>On-site and on-location voice recording and processing for any Multimedia project</p>
                            </div>                        
                        </div>
                    </div> <!-- close col -->
                </div>
                    </div>
                    </div>
                </div>
            </section>


            <section id='carousel-section'>
                <div class="row">
                    <div class="col">
                        <div id="carouselContent" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselContent" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselContent" data-slide-to="1"></li>
                                <li data-target="#carouselContent" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active text-center p-4">
                                    <p class="p-4 carousel-text">lorem ipsum (imagine longer text)</p>
                                </div>
                                <div class="carousel-item text-center p-4">
                                    <p class="p-4 carousel-text">lorem ipsum (imagine longer text)</p>
                                </div>
                                <div class="carousel-item text-center p-4">
                                    <p class="p-4 carousel-text">lorem ipsum (imagine longer text)</p>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id='about-section'>
                <div class="row">
                    
                
                    <div class="col">
                        <h1>Who we are.</h1>
                        <h3>Moonflower Productions is an audio production house located in the heart of the metro Phoenix area.
</h3>
                    </div>
                    
                    
                    
                    
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</> </p>
                    </div>

                </div>
            </section>


<?php include("./footer.php"); ?>