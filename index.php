<?php
$home = "active";
include 'header.php' ?>

    <main>
        <div class="section section-main section-fullheight" id="home">
            <div class="video-main-wrap">
                <div class="video">
                    <video id="mainVideo" autoplay="autoplay" loop="loop" poster="img/images/bg-2.jpg" muted="">
                        <source src="videos/vid01/MP4/For_Wes.mp4">
                    </video>

                    <div class="text-block-wrap">
                        <div class="text-block">
                            <div id="typed" class="typed-string"></div>
                            <div class="horizontal-separator">
                                <div class="line"></div>
                            </div>
                            <div class="social-links">
                                <a href="https://www.facebook.com/profile.php?id=100009825930416">
                                    <div class="svg-cont">
                                        <svg id="ico1_social" class="icoAnimate1 svgIco"
                                             xmlns="http://www.w3.org/2000/svg"
                                             x="0px"
                                             y="0px"
                                             viewBox="0 0 700 700" enable-background="new 0 0 850 850">
                                            <path d="M200.767,400h65.266V242.413h43.798c0,0,4.104-25.428,6.103-53.235h-49.647v-36.264c0-5.416,7.109-12.696,14.153-12.696
		h35.564V85h-48.366c-68.478,0-66.872,53.082-66.872,61.009v43.356h-31.771v53.029h31.771V400z"/>
                                            <path d="M0,0v485h485V0H0z M455,455H30V30h425V455z"/>
                                        </svg>
                                    </div>
                                </a>


                                <a href="https://www.linkedin.com/in/eugen-radchenko-b97965106">
                                    <div class="svg-cont">
                                        <svg id="ico2_social" class="svgIco"
                                             xmlns="http://www.w3.org/2000/svg"
                                             x="0px"
                                             y="0px"
                                             viewBox="0 0 700 700" enable-background="new 0 0 200 160">
                                            <rect x="89.016" y="189.906" width="67.506" height="203.096"/>
                                            <path d="M122.323,162.186h0.446c23.551,0,38.194-15.601,38.194-35.101c-0.442-19.928-14.643-35.087-37.752-35.087
		C100.107,91.998,85,107.157,85,127.085C85,146.585,99.678,162.186,122.323,162.186z"/>
                                            <path d="M261.4,393.002V279.576c0-6.086,0.464-12.119,2.24-16.459c4.887-12.149,15.978-24.693,34.641-24.693
		c24.439,0,34.195,18.629,34.195,45.92v108.657H400V276.535c0-62.379-33.307-91.398-77.744-91.398
		c-35.871,0-51.883,19.74-60.856,33.547v0.665h-0.442c0.118-0.219,0.306-0.442,0.442-0.665v-28.779h-67.537
		c0.905,19.053,0,203.096,0,203.096H261.4z"/>
                                            <path d="M0,0v485h485V0H0z M455,455H30V30h425V455z"/>                                        </svg>
                                    </div>
                                </a>
                                <a href="https://github.com/elpandango">
                                    <svg id="ico3_social" class="svgIco"
                                         xmlns="http://www.w3.org/2000/svg"
                                         x="0px"
                                         y="0px"
                                         viewBox="0 0 540 540" enable-background="new 0 0 300 350">
                                        <path d="M0,0v485h485V0H0z M455,455H30V30h425V455z"/>
                                        <path transform='scale(.6) translate(130 130)' stroke-width="19"
                                              d="M266.667,433.276c-9.976,0-19.952-5.164-30.282-15.495c-4.068-4.067-4.068-10.663,0-14.733
		c4.067-4.067,10.664-4.067,14.732,0c6.357,6.36,11.444,9.451,15.55,9.451c4.105,0,9.193-3.091,15.552-9.448
		c4.068-4.067,10.662-4.067,14.732,0c4.066,4.067,4.066,10.663,0,14.733C286.619,428.112,276.643,433.276,266.667,433.276z
		 M0,273.692c0,25.984,2.222,49.543,6.667,70.668s10.695,39.448,18.75,54.965c8.055,15.518,18.241,29.116,30.555,40.804
		c12.315,11.685,25.694,21.312,40.139,28.884c14.444,7.571,30.972,13.696,49.583,18.367c18.61,4.675,37.546,7.946,56.805,9.815
		c19.26,1.87,40.464,2.805,63.611,2.805s44.397-0.932,63.749-2.803c19.353-1.869,38.335-5.141,56.944-9.815
		c18.611-4.672,35.187-10.795,49.723-18.367c14.535-7.571,28.01-17.201,40.416-28.884c12.408-11.688,22.639-25.286,30.694-40.804
		c8.058-15.517,14.354-33.84,18.891-54.965c4.537-21.125,6.806-44.682,6.806-70.666c0-46.553-14.446-86.653-43.333-120.304
		c1.666-4.487,3.101-9.628,4.305-15.423c1.2-5.796,2.36-13.975,3.471-24.538c1.112-10.563,0.696-22.762-1.249-36.596
		C494.581,63,490.925,48.885,485.554,34.49l-4.167-0.843c-2.777-0.56-7.313-0.374-13.608,0.562
		c-6.295,0.934-13.658,2.616-22.083,5.047c-8.425,2.429-19.306,7.244-32.64,14.441c-13.333,7.197-27.407,16.312-42.223,27.342
		c-25.186-7.666-59.906-15.685-104.167-15.685c-44.258,0-79.074,8.019-104.443,15.684c-14.815-11.031-28.935-20.098-42.361-27.202
		c-13.427-7.105-24.167-11.965-32.223-14.582c-8.056-2.617-15.509-4.3-22.361-5.047c-6.852-0.748-11.25-0.982-13.195-0.701
		c-1.944,0.28-3.379,0.607-4.305,0.981c-5.372,14.396-9.076,28.511-11.113,42.346c-2.036,13.833-2.5,25.985-1.388,36.454
		c1.111,10.47,2.314,18.697,3.611,24.678c1.297,5.982,2.778,11.124,4.445,15.424C14.445,186.854,0,226.954,0,273.692z
		 M71.112,333.022c0-30.221,11.11-57.625,33.333-82.218c6.667-7.503,14.398-13.183,23.195-17.038c8.797-3.855,18.796-6.044,30-6.565
		c11.204-0.521,21.897-0.417,32.083,0.312c10.186,0.73,22.778,1.72,37.778,2.97c14.999,1.252,27.962,1.876,38.888,1.876
		c10.925,0,23.89-0.625,38.888-1.876c15.003-1.25,27.595-2.239,37.78-2.97c10.188-0.729,20.88-0.833,32.084-0.312
		c11.204,0.521,21.252,2.71,30.142,6.565c8.887,3.854,16.666,9.534,23.331,17.038c22.222,24.593,33.334,51.997,33.334,82.218
		c0,17.714-1.85,33.501-5.557,47.361c-3.702,13.859-8.38,25.477-14.027,34.854c-5.648,9.379-13.567,17.302-23.749,23.763
		c-10.187,6.459-20.048,11.463-29.584,15.003c-9.535,3.542-21.853,6.306-36.944,8.284c-15.095,1.978-28.611,3.178-40.56,3.595
		c-11.945,0.417-26.988,0.624-45.138,0.624c-18.147,0-33.147-0.207-45-0.624c-11.853-0.417-25.324-1.617-40.417-3.595
		c-15.092-1.979-27.407-4.741-36.944-8.284c-9.537-3.541-19.398-8.544-29.583-15.003c-10.186-6.461-18.103-14.384-23.75-23.763
		c-5.648-9.378-10.325-20.995-14.028-34.854S71.112,350.736,71.112,333.022z M133.333,316.668c0,27.614,14.924,50,33.333,50
		s33.333-22.386,33.333-50s-14.924-50-33.333-50S133.333,289.054,133.333,316.668z M333.333,316.668c0,27.614,14.924,50,33.333,50
		s33.333-22.386,33.333-50s-14.924-50-33.333-50S333.333,289.054,333.333,316.668z"/>
                                    </svg>
                                </a>
                            </div>

                            <a href="#link2" class="StartArrow">
                                <div class="StartArrow__body">
                                    Scroll down
                                </div>
                                <div class="StartArrow__arrow"></div>
                                <div class="StartArrow__arrow"></div>
                                <div class="StartArrow__arrow"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section white" id="link2">
            <div class="container">
                <div class="sectionTtl textSlideAn">
                    <div class="ttl-text">
                        Who am I?
                    </div>
                </div>
                <div class="decorative-line">
                    <div class="text">Personal Details</div>
                    <div class="line"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="image portrait anLeft">
                                <img src="img/images/me_01.jpg" alt="image">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row mar-b-50 anRight">
                                <div class="col-xs-12">
                                    <div class="h3 blue">Personal Details</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="info-field"><span>Name:</span>Eugen Radchenko</div>
                                    <div class="info-field"><span>Email:</span><a
                                                href="mailto:elpandango@gmail.com">elpandango@gmail.com</a></div>
                                    <div class="info-field"><span>Phone:</span><a href="tel:+380632156501">+38 (063)
                                            215-65-01</a></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="info-field"><span>Date of birth:</span>May 23, 1985</div>
                                    <div class="info-field"><span>Address:</span>Odessa, Ukraine</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 anUp">
                                    <div class="h3 blue">Professional Profile</div>

                                    <p>Hi! My name is Eugen. I am a Front End Web Developer.</p><br>

                                    <p>Three years ago I started studying programming. At first I have been studying
                                        C, and then C++
                                        and
                                        C++/CLI. But after a while I realized that was interested in Web
                                        technologies and all the
                                        tools and
                                        technologies needed for the Web-development.</p><br>

                                    <p>I started with HTML5/CSS3, then I discovered LESS, SASS, gulp, git and
                                        Bootstrap. At the same
                                        time I
                                        studied Web
                                        Programming on JavaScript and jQuery. Fortunately, the network has a lot of
                                        great tutorials
                                        and
                                        courses , among
                                        which I have identified for themselves CodeSchool and Codecademy. The
                                        courses helped me to
                                        discover
                                        the possibilities of jQuery, AngularJS, PHP, MySQL.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cols clear">
                    <div class="right-side">
                        <div class="h3 blue">Personal Details</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section white" id="link3">
            <div class="container">
                <div class="sectionTtl textSlideAn">
                    <div class="ttl-text">
                        Skills
                    </div>
                </div>
                <div class="decorative-line">
                    <div class="text">Some words about me</div>
                    <div class="line"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-block text-left">
                            I use HTML/CSS/LESS/JavaScript/jQuery/gulp/git in my usual work. <br>
                            Also sometimes I use Ionic v1 to make some work projects.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="skillbars-container">
                            <div class="skillbar clearfix" data-percent="90%">
                                <div class="skillbar-title"><span>HTML5</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">90%</div>
                            </div>
                            <div class="skillbar clearfix" data-percent="90%">
                                <div class="skillbar-title"><span>CSS3</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">90%</div>
                            </div>
                            <div class="skillbar clearfix" data-percent="75%">
                                <div class="skillbar-title"><span>jQuery</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">75%</div>
                            </div>
                            <div class="skillbar clearfix" data-percent="40%">
                                <div class="skillbar-title"><span>Ionic v.1</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">40%</div>
                            </div>
                            <div class="skillbar clearfix" data-percent="70%">
                                <div class="skillbar-title"><span>Photoshop</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">70%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="additional">
                    <div class="decorative-line anUp">
                        <div class="text">I have experience with</div>
                        <div class="line"></div>
                    </div>

                    <ul class="item-list anUp">
                        <li class="item">Gulp</li>
                        <li class="item">Git</li>
                        <li class="item">Bootstrap</li>
                        <li class="item">LESS</li>
                        <li class="item">Emmet</li>
                        <li class="item">Java Script</li>
                        <li class="item">jQuery</li>
                    </ul>

                    <div class="decorative-line anUp2">
                        <div class="text">I'm familiar with</div>
                        <div class="line"></div>
                    </div>

                    <ul class="item-list anUp2">
                        <li class="item">Ionic v1</li>
                        <li class="item">PHP</li>
                        <li class="item">Bower</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="section section-works white" id="link4">
            <div class="sectionTtl textSlideAn">
                <div class="ttl-text">
                    Portfolio
                </div>
            </div>
            <div class="decorative-line">
                <div class="text">Latest Works</div>
                <div class="line"></div>
            </div>
            <div class="works-grid">
                <div class="works-grid__item ImgRight1">
                    <div class="image">
                        <img src="img/images/perspective_img08.png" alt="">
                    </div>
                </div>
                <div class="works-grid__item ImgRight2">
                    <div class="image">
                        <img src="img/images/perspective_img01.png" alt="">
                    </div>
                </div>
                <div class="works-grid__item ImgRight3">
                    <div class="image">
                        <img src="img/images/perspective_img04.png" alt="">
                    </div>
                </div>
                <div class="works-grid__item ImgRight4">
                    <div class="image">
                        <img src="img/images/perspective_img03.png" alt="">
                    </div>
                </div>
                <div class="works-grid__item ImgRight5">
                    <div class="image">
                        <img src="img/images/perspective_img02.png" alt="">
                    </div>
                </div>

                <div class="works-grid__item ImgRight6">
                    <div class="image">
                        <img src="img/images/perspective_img05.png" alt="">
                    </div>
                </div>
                <div class="works-grid__item ImgRight7">
                    <div class="image">
                        <img src="img/images/perspective_img06.png" alt="">
                    </div>
                </div>
                <div class="works-grid__item ImgRight8">
                    <div class="image">
                        <img src="img/images/perspective_img07.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-education white" id="link5">
            <div class="container">
                <div class="sectionTtl textSlideAn">
                    <div class="ttl-text">
                        Education
                    </div>
                </div>

                <div class="decorative-line">
                    <div class="text">My Education</div>
                    <div class="line"></div>
                </div>

                <div class="table">
                    <div class="row anLeft">
                        <div class="col-sm-3 item matchHeight">
                            <div class="date">2015-Present</div>
                            <div class="title">Online & offline courses</div>
                        </div>
                        <div class="col-sm-9 matchHeight">
                            <p class="degree">CodeSchool, Codecademy, "IT STEP" Academy, etc.</p>
                            <p class="text">
                                Since 2015 I have been studying the Web technologies in various online and offline
                                courses.
                                At present, I always try to find opportunity to read or look video-courses about
                                some
                                technologies and innovations.
                            </p>
                        </div>
                    </div>
                    <div class="row anRight">
                        <div class="col-sm-3 item matchHeight">
                            <div class="date">2002-2007</div>
                            <div class="title">Odessa State Ecological University</div>
                        </div>
                        <div class="col-sm-9 matchHeight">
                            <p class="degree">Bachelor's degree</p>
                            <p class="text">
                                In 2007 I was graduated from the Odessa State Environmental University and received
                                a
                                bachelor's degree.
                                At that time I was fond of computer gaming and dreamed of creating my own game.
                                I even tried to write Pacman using Pascal :) Unfortunately any sources doesn't
                                remain
                                from that
                                time.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="section section-contact section-fullheight" id="link6"
             style="background-image: url(img/images/contact-img.jpg)">
            <div class="text-block-wrap">
                <div class="container">
                    <div class="sectionTtl textSlideAn dark">
                        <div class="ttl-text">
                            Contact
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="contact-item">
                            <div class="svg-cont">
                                <svg id="ico1" class="icoAnimate svgIco" xmlns="http://www.w3.org/2000/svg"
                                     x="0px"
                                     y="0px"
                                     viewBox="0 0 55 55" enable-background="new 0 0 200 160">
                                    <path data-async data-duration="400" d="
							M43,6H1C0.447,6,0,6.447,0,7v30c0,0.553,0.447,1,1,1h42c0.552,0,1-0.447,1-1V7C44,6.447,43.552,6,43,6z M42,33.581     L29.612,21.194l-1.414,1.414L41.59,36H2.41l13.392-13.392l-1.414-1.414L2,33.581V8h40V33.581z"/>
                                    <path data-async data-duration="400" d="
							M39.979,8L22,25.979L4.021,8H2v0.807L21.293,28.1c0.391,0.391,1.023,0.391,1.414,0L42,8.807V8H39.979z"/>
                                </svg>
                            </div>

                            <div class="description">
                                <div class="title">Email</div>
                                <div class="text">elpandango@gmail.com</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="svg-cont">
                                <svg id="ico2" class="svgIco" xmlns="http://www.w3.org/2000/svg"
                                     x="0px"
                                     y="0px"
                                     viewBox="0 0 600 600" enable-background="new 0 0 200 160">
                                    <path data-async data-duration="400" d="
							m462.692,381.085c-1.472-11.126-7.895-20.719-17.62-26.318l-114.226-65.767c-13.99-8.055-31.738-5.71-43.157,5.708l-22.499,22.499c-5.987,5.988-15.459,6.518-22.028,1.231-17.737-14.272-35.201-29.979-51.906-46.685-16.705-16.705-32.412-34.168-46.685-51.906-5.287-6.57-4.758-16.041 1.231-22.029l22.498-22.499c11.418-11.417 13.766-29.163 5.709-43.156l-65.767-114.226c-5.6-9.726-15.192-16.148-26.318-17.62-11.127-1.475-22.06,2.236-29.996,10.172l-33.901,33.902c-23.661,23.662-24.041,66.944-1.07,121.875 22.088,52.818 63.308,110.962 116.065,163.721 52.759,52.758 110.903,93.978 163.722,116.066 27.039,11.307 51.253,16.957 71.697,16.956 21.088,0 38.163-6.013 50.178-18.027l33.901-33.902c7.935-7.936 11.643-18.869 10.172-29.995zm-139.33-79.086l114.226,65.767c5.649,3.252 9.379,8.824 10.233,15.286 0.718,5.423-0.691,10.763-3.885,15.066l-151.805-86.638 6.165-6.165c6.631-6.631 16.941-7.994 25.066-3.316zm-243.406-286.811c6.463,0.855 12.034,4.585 15.286,10.234l65.767,114.226c4.68,8.127 3.316,18.435-3.315,25.065l-5.663,5.663-87.114-151.303c3.561-2.637 7.82-4.069 12.26-4.069 0.921-1.77636e-15 1.85,0.061 2.779,0.184zm328.055,419.187c-18.798,18.798-57.244,18.01-105.48-2.162-51.06-21.352-107.491-61.424-158.901-112.833-51.41-51.41-91.482-107.842-112.834-158.901-20.173-48.237-20.96-86.683-2.162-105.482l25.167-25.168 87.245,151.532-5.851,5.851c-11.415,11.416-12.409,29.488-2.311,42.04 14.609,18.156 30.68,36.024 47.764,53.108 17.086,17.085 34.954,33.156 53.109,47.765 12.55,10.098 30.622,9.105 42.04-2.312l5.338-5.338 152.016,86.759-25.14,25.141z"/>
                                </svg>
                            </div>
                            <div class="description">
                                <div class="title">Phone</div>
                                <div class="text">+38 063 215-65-01</div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="svg-cont">
                                <svg id="ico3" class="svgIco" xmlns="http://www.w3.org/2000/svg"
                                     x="0px"
                                     y="0px"
                                     viewBox="0 0 65 65" enable-background="new 0 0 200 160">
                                    <path data-async data-duration="400" d="
							M30.757,21.106l-0.1-0.023c-5.739-1.025-9.104-2.565-9.113-2.565c0,0,0,0,0,0c-0.559-0.317-1.235-0.815-1.287-1.384    c-0.047-0.518,0.425-1.079,0.668-1.309c5.583-2.843,8.056,0.639,8.16,0.79c1.567,2.316,3.169,3.584,4.761,3.77    c1.384,0.16,2.221-0.568,2.293-0.635c1.15-1.009,1.734-2.19,1.736-3.508c0.004-2.557-2.28-4.605-2.357-4.673    c-6.688-6.234-17.094-2.658-17.518-2.506c-8.427,2.831-6.673,10.743-6.655,10.822l0.033,0.111    c2.495,6.903,13.004,7.799,13.45,7.834c5.022,0.397,5.234,2.798,5.243,2.933c0.181,2.528-4.259,3.277-4.884,3.37    c-4.383-0.244-5.414-1.952-5.415-1.952c0,0,0,0,0,0l-0.102-0.167c-2.292-3.032-3.185-4.084-5.142-4.134    c-1.64-0.054-2.598,0.614-3.117,1.174c-1.311,1.413-1.142,3.5-1.119,3.733l0.023,0.131c1.931,8.077,12.548,7.991,12.926,7.985    c0.62,0.038,1.215,0.056,1.788,0.056c13.295,0,14.206-9.661,14.212-9.745C39.816,25.307,33.943,22.019,30.757,21.106z     M37.251,31.042c-0.027,0.354-0.832,8.66-13.964,7.865c-0.096-0.003-9.392,0.065-11.006-6.374    c-0.012-0.264-0.027-1.444,0.598-2.117c0.352-0.379,0.877-0.56,1.599-0.535c0.909,0.023,1.29,0.291,3.556,3.284    c0.329,0.565,1.915,2.708,7.146,2.971l0.082,0.004l0.081-0.009c2.623-0.298,6.99-1.793,6.727-5.455    c-0.003-0.175-0.148-4.292-7.084-4.84c-0.096-0.007-9.599-0.812-11.704-6.461c-0.136-0.648-1.108-6.245,5.371-8.421    c0.097-0.034,9.693-3.338,15.521,2.095c0.476,0.425,1.71,1.829,1.704,3.197c-0.003,0.727-0.349,1.382-1.074,2.019    c-0.002,0.001-0.278,0.185-0.725,0.136c-0.556-0.065-1.729-0.528-3.331-2.896c-0.035-0.052-3.555-5.189-10.852-1.396l-0.17,0.112    c-0.165,0.134-1.605,1.361-1.461,3.078c0.098,1.157,0.869,2.153,2.362,2.997c0.145,0.067,3.596,1.665,9.621,2.747    C30.863,23.233,37.786,25.525,37.251,31.042z"/>
                                    <path data-async data-duration="400" d="
							M47.97,28.878c0.351-1.937,1.819-12.481-6.029-20.194c-0.628-0.735-7.77-8.683-20.948-6.888    C19.237,0.884,10.867-2.865,3.798,4.288C3.732,4.356-2.653,11.174,1.67,19.956c-0.312,1.398-1.109,6.262,1.17,12.228    c0.123,0.442,3.143,10.861,14.564,14.266c0.207,0.079,5.072,1.904,11.366,1.34c0.838,0.373,3.446,1.404,6.637,1.404    c3.031,0,6.586-0.93,9.651-4.24C45.486,44.52,51.376,38.296,47.97,28.878z M43.626,43.559l-0.025,0.026    c-5.923,6.412-13.864,2.467-14.199,2.295l-0.264-0.135l-0.292,0.029c-5.934,0.591-10.682-1.175-10.798-1.217    C7.64,41.453,4.794,31.744,4.738,31.56C2.306,25.183,3.677,20.16,3.691,20.112l0.111-0.384l-0.185-0.354    c-3.988-7.652,1.396-13.46,1.615-13.691c6.765-6.848,14.721-2.195,15.056-1.995l0.308,0.187l0.356-0.053    c12.581-1.857,19.212,5.854,19.487,6.182l0.07,0.076c7.725,7.557,5.473,18.561,5.449,18.671l-0.062,0.289l0.104,0.275    C49.202,37.788,43.856,43.327,43.626,43.559zM47.97,28.878c0.351-1.937,1.819-12.481-6.029-20.194c-0.628-0.735-7.77-8.683-20.948-6.888    C19.237,0.884,10.867-2.865,3.798,4.288C3.732,4.356-2.653,11.174,1.67,19.956c-0.312,1.398-1.109,6.262,1.17,12.228    c0.123,0.442,3.143,10.861,14.564,14.266c0.207,0.079,5.072,1.904,11.366,1.34c0.838,0.373,3.446,1.404,6.637,1.404    c3.031,0,6.586-0.93,9.651-4.24C45.486,44.52,51.376,38.296,47.97,28.878z M43.626,43.559l-0.025,0.026    c-5.923,6.412-13.864,2.467-14.199,2.295l-0.264-0.135l-0.292,0.029c-5.934,0.591-10.682-1.175-10.798-1.217    C7.64,41.453,4.794,31.744,4.738,31.56C2.306,25.183,3.677,20.16,3.691,20.112l0.111-0.384l-0.185-0.354    c-3.988-7.652,1.396-13.46,1.615-13.691c6.765-6.848,14.721-2.195,15.056-1.995l0.308,0.187l0.356-0.053    c12.581-1.857,19.212,5.854,19.487,6.182l0.07,0.076c7.725,7.557,5.473,18.561,5.449,18.671l-0.062,0.289l0.104,0.275    C49.202,37.788,43.856,43.327,43.626,43.559z"/>

                                </svg>

                            </div>
                            <div class="description">
                                <div class="title">Skype</div>
                                <div class="text">nano_sensorium</div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <p class="success">Ваше письмо было успешно отправлено!</p>
                        <p class="error">Проверьте правильность заполнения всех полей!</p>
                        <form action="send.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input_wrap anUp">
                                        <input class="txt" type="text" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input_wrap anUp">
                                        <input class="txt" type="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input_wrap anUp2">
                                            <textarea class="txt" name="message" id="msg" required
                                                      placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <button>Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="copyright">&#169; 2017 | Eugen Radchenko - Front End Developer</div>
                </div>
            </div>
        </div>

    </main>

<?php include 'footer.php' ?>