<?php 
// Template Name: Home
get_header();
?>



<section id='section-one' class="HERO" style='background-image: linear-gradient(90deg, #00000047 0%, #00000047 100%), url(<?= get_template_directory_uri().'/assets/hero-background.png' ?>);'>
    <div class="frame">
        
        <div class="content">
            <h1 class='text_xl'>LAURENCE & DRAKE</h1>
            <a href="/rsvp" class="button alt-filled">RSVP</a>
        </div>
        
    </div>
</section>



<section id='section-two' class="INTRO">
    <div class="frame">
        
        <div class="people h1">
            <span class="name h1">
                <div class="first">LAURENCE</div>
                <div class="last">BATARA</div>
            </span>
            <span class='text_xl'>&</span>
            <span class="name h1">
                <div class="first">DRAKE</div>
                <div class="last">SMITH</div>
            </span>
        </div>

        <div class="info">
            <div class="date">
                <div class="month h2">JULY</div>
                <div class="dot"></div>
                <div class="day h1 text_xl">10</div>
                <div class="dot"></div>
                <div class="year h2">2024</div>
            </div>
            <div class="location">
                <p class='h5'>PUERTO MORELOS, QUINTANA ROO, MEXICO</p>
            </div>
        </div>

        <hr>

        <div class="story">
            <h2>OUR STORY</h2>
            <p>Drake and Laurence met in May 2015 and became official June 20th 2015 (although some may say they technically because official June 21st)</p>
        </div>

    </div>
</section>



<section class="ABOUT alt-bg-dark">
    <div class="frame">
        <div class="frame-header">
            <h2>DRAKES STORY</h2>
        </div>
        <div class="columns">
            <div class="column" data-width='4'>
                <div class="image"></div>
            </div>
            <div class="column" data-width='8'>
                <div class="content">
                    <p>Born May 21st, 1996 to Karen and Rob at Rockyview hospital in Calgary. Drake grew up with siblings: Alexa, Trent, and Quinn. Drake spent most of his childhood biking, snowboarding and playing video games.</p>
                    <p>Drake was a rebellious kid not wanting to take care of responsibilities including school. That is until he figured out he wanted to be a mechanic. After upgrading classes and graduating half a year early, he got into SAIT. In his first year of SAIT Drake and Laurence met. After finishing the Automotive apprenticeship Drake then changed trades to Sheetmetal.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ABOUT alt-second">
    <div class="frame">
        <div class="frame-header alt-right">
            <h2>LAURENCE'S STORY</h2>
        </div>
        
        <div class="columns alt-reverse">
            <div class="column" data-width='4'>
                <div class="image"></div>
            </div>
            <div class="column" data-width='8'>
                <p>Born August 16, 1996 to Rey and Arlyn at Maria Estrella General hospital in Calapan City. I was the best baby to take care of. Although my parents would say otherwise. As a kid, I was mostly outside playing with the neighbourhood kids or spending my school holidays with my grandma and cousins on the farm. Come high school, I got more involved with cheer dancing and sports while still maintaining my marks to keep me on the honour roll. I was a little bit of an overachiever you could say.</p>
                <p>In 2010, my family moved to Canada. I was 14 and this is where I finished high school. After that, I went to school to get my certificate as an Emergency Medical Responder at SAIT, but the overachiever in me wanted to go to university. In 2016, I got into Mount Royal University where I completed my Bachelor's degree in Criminal Justice in 2021. I currently work with the City in its corporate Security business unit. I love what I do, I love breaking barriers, being a woman in a maledominated field, and just showing everyone that girls can be just as brave.</p>
            </div>
        </div>
    </div>
</section>



<section class="SPONSORS alt-bg-dark">
    <div class="frame">
        <div class="frame-header alt-center">
            <h2>OUR SPONSORS</h2>
        </div>

        <ul class="names">
            <li><h4 class="h2">First Name</h4></li>
            <li><h4 class="h2">Second Name</h4></li>
            <li><h4 class="h2">Third Name</h4></li>
            <li><h4 class="h2">First Name</h4></li>
        </ul>
   
    </div>
</section>



<!-- TO BE MOVED -->

<section class='QUESTIONS'>
    <div class="frame">
        <div class="frame-header alt-center">
            <h2>Q&A</h2>
        </div>

        <div class="accordion-wrapper">


             <div class="accordion">
                <button class="header" aria-expanded="false">
                    <h3>What is the dress Code?</h3>
                </button>
                <div class="content-wrapper">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="header" aria-expanded="false">
                    <h3>Can I take pictures?</h3>
                </button>
                <div class="content-wrapper">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="header" aria-expanded="false">
                    <h3>Can I bring additional guests not invited on the invitation?</h3>
                </button>
                <div class="content-wrapper">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="header" aria-expanded="false">
                    <h3>Am I able to bring my kids?</h3>
                </button>
                <div class="content-wrapper">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="header" aria-expanded="false">
                    <h3>What type of bar?</h3>
                </button>
                <div class="content-wrapper">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="header" aria-expanded="false">
                    <h3>What If I have allergies?</h3>
                </button>
                <div class="content-wrapper">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

            <div class="accordion">
                <button class="header" aria-expanded="false">
                    <h3>What is the dress Code?</h3>
                </button>
                <div class="content-wrapper">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>










<?php get_footer(); ?>