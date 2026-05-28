<?php
$title = 'Steven Online Portfolio';
$name = 'Steven Kane';
$location = 'Mandaluyong City';
$year = date('Y');

$intro = "I'm a free-lance creative with a passion for learning and creating engaging and user-friendly websites.";

$aboutTitle = 'More About Me';
$aboutTag = 'Freelance Creative | Voice Actor | Tech-Junior';
$aboutText1 = 'Versatile creative professional with a solid foundation in information technology and extensive freelance experience across animation, indie projects, and podcasts. Skilled in voice acting, communication, and digital tools, with a sharp analytical mindset and structured work style.';
$aboutText2 = 'Known for adaptability, attention to detail, and the ability to blend technical expertise with creative flair to deliver impactful results.';

$skills = [
    ['name' => 'Frontend Design', 'percent' => 80, 'bar' => 90],
    ['name' => 'Backend processing', 'percent' => 60, 'bar' => 70],
    ['name' => 'HTML5 & CSS3', 'percent' => 80, 'bar' => 80],
];

$services = [
    [
        'class' => 'bg-yellow',
        'icon' => 'fa-desktop',
        'title' => 'Interface Design',
        'text' => 'Skilled in creating intuitive, visually appealing interfaces that enhance user experience and streamline interaction.'
    ],
    [
        'class' => '',
        'icon' => 'fa-paper-plane',
        'title' => 'Project Management',
        'text' => 'Experienced in coordinating tasks, resources, and timelines to ensure projects are delivered efficiently and successfully.'
    ],
    [
        'class' => 'bg-dark',
        'icon' => 'fa-table',
        'title' => 'Web Designing',
        'text' => 'Proficient in designing responsive, modern websites that balance aesthetics with functionality.'
    ],
    [
        'class' => 'bg-white',
        'icon' => 'fa-cogs',
        'title' => 'Coding',
        'text' => 'Skilled in writing clean, efficient code using modern programming languages and frameworks.'
    ],
];

$experiences = [
    [
        'title' => 'Freelance Creative',
        'date' => '2019 - present',
        'text' => 'Collaborated with clients across animation, indie gaming, and podcasts, delivering adaptable voice acting and audio editing to enhance creative projects.'
    ],
    [
        'title' => 'Voice Actor - TTRPG Podcast (@moonpeaks_dnd)',
        'date' => '2021 - 2022',
        'text' => 'Portrayed one of the main cast characters while also supporting production as an audio mixer and editor.'
    ],
];

$education = [
    [
        'title' => 'BS in Information Technology',
        'date' => '2024 - present',
        'text' => 'FEU Institute of Technology | Specializing in web and mobile development'
    ],
    [
        'title' => 'Senior High School (STEM | ICT Track)',
        'date' => '2019 - 2023',
        'text' => 'Far Eastern University High School | Specializing in Information and Communication Technology'
    ],
];

$contact = [
    'address' => '561 Wack Wack Rd, Mandaluyong City',
    'phone' => '(+63) 927-8823-6487',
    'email' => 'spabelona@fit.edu.ph',
    'website' => 'eventsnake.carrd.co'
];

$socials = [
    ['url' => 'https://www.facebook.com/ElevenEvenStevens', 'icon' => 'fa-facebook'],
    ['url' => 'https://github.com/Stevenkanep', 'icon' => 'fa-github'],
    ['url' => 'https://www.linkedin.com/in/spabelona', 'icon' => 'fa-linkedin'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="templatemo">

<title><?php echo $title; ?></title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/templatemo-style.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<div class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</div>

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><?php echo $name; ?></a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About Me</a></li>
                <li><a href="#experience" class="smoothScroll">Experiences</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
            </ul>
        </div>
    </div>
</div>

<section id="home" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="home-img"></div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="home-thumb">
                    <div class="section-title">
                        <h4 class="wow fadeInUp" data-wow-delay="0.3s">welcome to my website!</h4>
                        <h1 class="wow fadeInUp" data-wow-delay="0.6s">
                            Hello, I am <strong><?php echo $name; ?></strong> currently based in <?php echo $location; ?>.
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay="0.9s"><?php echo $intro; ?></p>
                        <a href="#about" class="wow fadeInUp smoothScroll section-btn btn btn-success" data-wow-delay="1.4s">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="about-thumb">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.4s">
                        <h1><?php echo $aboutTitle; ?></h1>
                        <p class="color-yellow"><?php echo $aboutTag; ?></p>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <p><?php echo $aboutText1; ?></p>
                        <p><?php echo $aboutText2; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="background-image about-img"></div>
            </div>

            <div class="bg-yellow col-md-3 col-sm-6">
                <div class="skill-thumb">
                    <div class="wow fadeInUp section-title color-white" data-wow-delay="1.2s">
                        <h1>My Skills</h1>
                        <p class="color-white">HTML CSS JS . Web Design . Kotlin . React.js . Adobe . PHP .</p>
                    </div>

                    <div class="wow fadeInUp skills-thumb" data-wow-delay="1.6s">
                        <?php foreach ($skills as $skill): ?>
                            <strong><?php echo $skill['name']; ?></strong>
                            <span class="color-white pull-right"><?php echo $skill['percent']; ?>%</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar"
                                     aria-valuenow="<?php echo $skill['percent']; ?>" aria-valuemin="0" aria-valuemax="100"
                                     style="width: <?php echo $skill['bar']; ?>%;"></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="service" class="parallax-section">
    <div class="container">
        <div class="row">
            <?php foreach ($services as $service): ?>
                <div class="<?php echo $service['class']; ?> col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1s">
                        <i class="fa <?php echo $service['icon']; ?>"></i>
                        <h3><?php echo $service['title']; ?></h3>
                        <p class="<?php echo $service['class'] === 'bg-white' ? '' : 'color-white'; ?>">
                            <?php echo $service['text']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="experience" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="background-image experience-img"></div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="color-white experience-thumb">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                        <h1>My Experiences</h1>
                        <p class="color-white">Previous companies and my tasks</p>
                    </div>

                    <?php foreach ($experiences as $experience): ?>
                        <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                            <div class="media-object media-left">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <?php echo $experience['title']; ?> <small><?php echo $experience['date']; ?></small>
                                </h3>
                                <p class="color-white"><?php echo $experience['text']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="education" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="color-white education-thumb">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                        <h1>My Education</h1>
                        <p class="color-white">Academic background and qualifications</p>
                    </div>

                    <?php foreach ($education as $school): ?>
                        <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                            <div class="media-object media-left">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <?php echo $school['title']; ?> <small><?php echo $school['date']; ?></small>
                                </h3>
                                <p class="color-white"><?php echo $school['text']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="background-image education-img"></div>
            </div>
        </div>
    </div>
</section>

<section id="quotes" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <i class="wow fadeInUp fa fa-star" data-wow-delay="0.6s"></i>
                <h2 class="wow fadeInUp" data-wow-delay="0.8s">“Innovation is the outcome of a habit, not a random act.” - Sukant Ratnakar</h2>
                <p class="wow fadeInUp" data-wow-delay="1s">For me, this reminds me that creativity isn't about waiting for a spark. It's about building consistent practices that train my mind to see possibilities.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="contact-form">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                        <h1 class="color-white">Want to get in touch?</h1>
                        <p class="color-white">Hit me up by sending me a message and I'll get back to you as soon as possible!</p>
                    </div>

                    <div id="contact-form">
                        <form action="#" method="post">
                            <div class="wow fadeInUp" data-wow-delay="1s">
                                <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name">
                            </div>
                            <div class="wow fadeInUp" data-wow-delay="1.2s">
                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="wow fadeInUp" data-wow-delay="1.4s">
                                <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..."></textarea>
                            </div>
                            <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.6s">
                                <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="background-image contact-img"></div>
            </div>

            <div class="bg-dark col-md-3 col-sm-6">
                <div class="contact-thumb">
                    <div class="wow fadeInUp contact-info" data-wow-delay="0.6s">
                        <h3 class="color-white">All Postings @</h3>
                        <p><?php echo $contact['address']; ?></p>
                    </div>

                    <div class="wow fadeInUp contact-info" data-wow-delay="0.8s">
                        <h3 class="color-white">Contact.</h3>
                        <p><i class="fa fa-phone"></i> <?php echo $contact['phone']; ?></p>
                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p>
                        <p><i class="fa fa-globe"></i> <a href="https://<?php echo $contact['website']; ?>" target="_blank"><?php echo $contact['website']; ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s">
                    <p><?php echo 'Copyright &copy; ' . $year . ' ' . $name . '. All rights reserved.'; ?></p>
                </div>

                <ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                    <?php foreach ($socials as $social): ?>
                        <li>
                            <a href="<?php echo $social['url']; ?>" target="_blank" class="fa <?php echo $social['icon']; ?>"></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>