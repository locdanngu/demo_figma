<?php include('xulitacvu.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Ask a Question</title>
    <link rel="stylesheet" type="text/css" href="css/askquestionpage.css">
    <?php include('templates/link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/askquestionpage.php -->

<body>
    <nav class="navbar navbar-expand-lg" style="<?php echo $navcss; ?>">
        <a class="navbar-brand align-items-center" href="homepage.php">
            <img src="image/msrobot.png" width="60" height="50" class="d-inline-block mr-2" alt="">
            <span class="logo">MS.ROBOT</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tutorialpage.php">Tutorial</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="forumpage.php">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogpage.php">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Demo Sites
                    </a>
                    <?php include('templates/navbar.php'); ?>
    </nav>

    <div class="box box1">
        <p class="headbox1">FORUM</p>
    </div>

    <div class="box box2">
        <form class="leftbox2" method="GET" action="#">
            <p class="tieudebox2">Ask a question</p>
            <hr class="gachke">
            <p class="tieudeleftbox2">Title</p>
            <p class="txtbt">Be specific and imagine you’re asking a question to another person</p>
            <input class="oqs" type="text"
                placeholder="e.g. Is there an R function for finding the index of an element in a vector?" required>
            <p class="tieudeleftbox2">Body</p>
            <p class="txtbt">Include all the information someone would need to answer your question</p>
            <!-- <input class="oqs big" type="text" placeholder="" required> -->
            <textarea class="oqs big" required></textarea>

            <p class="tieudeleftbox2">Tags</p>
            <p class="txtbt">Add up to 5 tags to describe what your question is about</p>
            <input class="oqs" type="text" placeholder="e.g. selenium, automation test" required>
            <input class="sendqs" type="submit" value="Review your question">
        </form>
        <div class="rightbox2">
            <p class="tieudebox2">Draft your question</p>
            <hr class="gachke">
            <p class="txtbt">The community is here to help you with specific coding, algorithm, or language problems.
            </p>
            <p class="txtbt">Avoid asking opinion-based questions.</p>
            <div class="khoiqs">
                <div class="headkhoiqs">
                    <p class="boxqs">1</p>
                    <p class="boxname">Summarize the problem</p>
                    <i class="bi bi-chevron-down"></i>
                    <i class="bi bi-chevron-up"></i>
                </div>
                <div class="bodykhoiqs hidden">
                    <ul>
                        <li>Include details about your goal</li>
                        <li>Describe expected and actual results</li>
                        <li>Include any error messages</li>
                    </ul>
                </div>
            </div>
            <div class="khoiqs">
                <div class="headkhoiqs">
                    <p class="boxqs">2</p>
                    <p class="boxname">Describe what you've tried</p>
                    <i class="bi bi-chevron-down"></i>
                    <i class="bi bi-chevron-up"></i>
                </div>
                <div class="bodykhoiqs hidden">
                    <p class="txtbt fix">Show what you've tried and tell us what you found (on this site or elsewhere)
                        and
                        why it didn't meet your needs. You can get better answers when you provide research.</p>
                </div>
            </div>
            <div class="khoiqs">
                <div class="headkhoiqs">
                    <p class="boxqs">3</p>
                    <p class="boxname">Show some code</p>
                    <i class="bi bi-chevron-down"></i>
                    <i class="bi bi-chevron-up"></i>
                </div>
                <div class="bodykhoiqs hidden">
                    <p class="txtbt fix">When appropriate, share the minimum amount of code others need to reproduce
                        your
                        problem (also called a minimum, reproducible example) </p>
                </div>
            </div>
        </div>
    </div>

    <?php include('templates/foot.php'); ?>

    <?php include('templates/modalpopup.php'); ?>

    <script>
    <?php include('templates/script.js'); ?>

    const khoi = document.querySelectorAll('.headkhoiqs');
    const bodykhoiqs = document.querySelectorAll('.bodykhoiqs');
    const up = document.querySelectorAll('.bi-chevron-up');
    const boxname = document.querySelectorAll('.boxname');
    const down = document.querySelectorAll('.bi-chevron-down');

    khoi[0].addEventListener("click", function() {
        if (bodykhoiqs[0].classList.contains("hidden")) {
            bodykhoiqs[0].classList.remove("hidden");
            boxname[0].style.color = '#0744F2';
            up[0].style.display = 'block';
            down[0].style.display = 'none';
        } else {
            bodykhoiqs[0].classList.add("hidden");
            up[0].style.display = 'none';
            boxname[0].style.color = '';
            down[0].style.display = 'block';
        }
    });

    khoi[1].addEventListener("click", function() {
        if (bodykhoiqs[1].classList.contains("hidden")) {
            bodykhoiqs[1].classList.remove("hidden");
            boxname[1].style.color = '#0744F2';
            up[1].style.display = 'block';
            down[1].style.display = 'none';
        } else {
            bodykhoiqs[1].classList.add("hidden");
            up[1].style.display = 'none';
            boxname[1].style.color = '';
            down[1].style.display = 'block';
        }
    });

    khoi[2].addEventListener("click", function() {
        if (bodykhoiqs[2].classList.contains("hidden")) {
            bodykhoiqs[2].classList.remove("hidden");
            boxname[2].style.color = '#0744F2';
            up[2].style.display = 'block';
            down[2].style.display = 'none';
        } else {
            bodykhoiqs[2].classList.add("hidden");
            up[2].style.display = 'none';
            boxname[2].style.color = '';
            down[2].style.display = 'block';
        }
    });
    </script>


</body>

</html>