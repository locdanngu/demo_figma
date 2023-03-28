<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Page</title>
    <link rel="stylesheet" type="text/css" href="css/tutorialpage.css">
    <?php include('link.php'); ?>
</head>
<!-- http://localhost/WEBLUUANH/DEMO_FIGMA/tutorialpage.php -->

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand align-items-center" href="homepage.php">
            <img src="image/msrobot.png" width="60" height="50" class="d-inline-block mr-2" alt="">
            <span class="logo">MS.ROBOT</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tutorialpage.php">Tutorial</a>
                </li>
                <li class="nav-item">
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
                    <div class="dropdown-menu fixdr" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="basicsite.php">Basic Site</a>
                        <a class="dropdown-item" href="automationpracticesite.php">Automation Practice Site</a>
                        <a class="dropdown-item" href="automationactionssite.php">Automation Actions Site</a>
                        <a class="dropdown-item" href="ecommercesite">Ecommerce Site</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="image/co.png" width="53" height="30">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width:0">
                        <a class="dropdown-item" href="#"><img src="image/vietnam.png" width="53" height="30"></a>
                        <a class="dropdown-item" href="#"><img src="image/USA.png" width="53" height="30"></a>
                    </div>
                </li>
            </ul>
            <button class="btn mr-2" id="popuplogin" onclick="popuplogin()">Login</button>
            <button class="btn sign-up" id="popupsignup" onclick="popupsignup()">Sign up</button>
        </div>
    </nav>

    <div class="box box1">
        <p class="headbox1">TUTORIALS</p>
    </div>


    <div class="box box2">

        <div class="bodybox2">
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/se.png">
                <p class="noidungphantu">Selenium basic</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/se2.png">
                <p class="noidungphantu">Selenium advance</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/java.png">
                <p class="noidungphantu">Java basic</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/java2.png">
                <p class="noidungphantu">Java advance</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/sefr.png">
                <p class="noidungphantu">Selenium Automation frameworks</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/seauto.png">
                <p class="noidungphantu">Locators for Selenium automation</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/seauto2.png">
                <p class="noidungphantu">Handling Data in
                    Selenium Automation</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/seauto3.png">
                <p class="noidungphantu">Reports for
                    Selenium Automation</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/seauto4.png">
                <p class="noidungphantu">Running Selenium Automation
                    (multiple browsers, platforms, environments)</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/jenkin.png">
                <p class="noidungphantu">Jenkins build & Jenkins pipeline for Selenium Automation</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/maven.png">
                <p class="noidungphantu">Maven</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/test.png">
                <p class="noidungphantu">TestNG</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/log.png">
                <p class="noidungphantu">Log4j</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/git.png">
                <p class="noidungphantu">Git</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/github.png">
                <p class="noidungphantu">Github</p>
            </a>
            <a class="phantu" href="#">
                <img class="imgphantu" src="image/docker.png">
                <p class="noidungphantu">Docker for Selenium</p>
            </a>
        </div>
    </div>


    <div class="box3">
        <div class="leftbox3">
            <p class="headleftbox3">Jmeter Fundamentals, Install and Create A Basic Jmeter Test Plan</p>
            <p class="bodyleftbox3">Browser Recording, WorkBench, Running Your First Test, Listener, Reading Test Result
            </p>
            <p class="bodyleftbox3">Toolbars, Log Into A Website, Regular Expression Extractor</p>
            <p class="bodyleftbox3">Handle Dynamic Token, Assertions, Using CSV Data File</p>
            <p class="bodyleftbox3">Jmeter Components</p>
            <p class="bodyleftbox3">Throughput, Function Helper, Saving Test Result</p>
            <p class="bodyleftbox3">Remote Jmeter, Plugins Manager, Variables</p>
            <p class="bodyleftbox3">HTTP Simple Table Server, Json Format, Bean Shell Script</p>
        </div>
        <div class="bodybox3">
            <img src="image/apachejmeter.png">
            <p class="headbodybox3">Jmeter Fundamentals, Install and Create A Basic Jmeter Test Plan</p>
            <div class="phantutxt">
                <p class="headphantu">Load, Stress And Performance Test</p>
                <!-- <p class="noidungtieude"><span class="tieude">Load test:</span></p> -->
                <p class="noidungtieude"><span class="tieude">Load test:</span> is the testing how the system works by
                    increasing the load sending to the system. With load testing, we will know how many user using
                    software product that the system still works properly.</p>
                <p class="noidungtieude"><span class="tieude">Performance test</span> is the testing how software
                    application performed such as how long it takes for the servers to response. With performance
                    testing, we will know how long it takes for a software product get response so that we can improve
                    the quality of software by making sure it will be run in the expected time response</p>
                <p class="noidungtieude"><span class="tieude">Stress test:</span> is the testing how the system works
                    under stress. With stress test, we will know at which point the system will be failed and how the
                    system recovers back.</p>
                <p class="headphantu">What Is Jmeter?</p>
                <p class="noidungtieude"><span class="tieude">Jmeter</span> is a free application testing software from
                    The Apache Software Foundation.</p>
                <p class="noidungtieude"><span class="tieude">Jmeter</span> is a tool for running Load test, Performance
                    test or Stress test. It is designed for testing Web Application, Web services (Soap & Rest api) and
                    more.</p>
                <p class="headphantu">How does Jmeter work?</p>
                <p class="noidungtieude"><span class="tieude">Jmeter</span> acts like a group of users sending requests
                    to a target server. It collects response from target server and other information which show the
                    performance of the application via graphs or summary tables.</p>
                <p class="headphantu">Why Use Jmeter?</p>
                <p class="noidungtieude"><span class="tieude">Jmeter</span> is an open-source application. Therefore, it
                    is very popular Test tool.</p>
                <p class="noidungtieude"><span class="tieude">Jmeter</span> has been created for 15 years and has a
                    large community supporting.</p>
                <p class="noidungtieude"><span class="tieude">Jmeter</span> is one of the top Software Testing Tool for
                    automation. Most of the opening job for software tester, QA engineer, Automation analyst, QA Analyst
                    require or “good to have” Jmeter skill.</p>
                <p class="headphantu">Install Jmeter</p>
                <p class="noidungtieude">Below is Operating Systems can be run Jmeter.
                    Even if your OS is not listed, Jmeter should run on it provided that the JVM is compliant.</p>
                <div class="imgdowload">
                    <img src="image/in4dowload.png">
                </div>

                <p class="headphantu">Download Java:</p>
                <p class="noidungtieude">Latest java version: <a
                        href="https://www.java.com/en/download/windows-64bit.jsp">https://www.java.com/en/download/windows-64bit.jsp</a>
                </p>
                <p class="noidungtieude">Following the Instruction from Java to install. Then set up JAVA_HOME
                    environment variable by these steps</p>
                <p class="noidungtieude">- Open Control Panel\System and Security\System on your computer</p>
                <div class="imgdowload">
                    <img src="image/in4dowload2.png">
                </div>
                <p class="noidungtieude">- Choose Advance system setting</p>
                <div class="imgdowload">
                    <img src="image/in4dowload3.png">
                </div>
                <p class="noidungtieude">- Click on Environment Variables</p>
                <div class="imgdowload">
                    <img src="image/in4dowload4.png">
                </div>
                <p class="noidungtieude">- Select Path under System variables and click on Edit</p>
                <div class="imgdowload">
                    <img src="image/in4dowload5.png">
                </div>
                <p class="noidungtieude">- At the end of Variable value, put path where is <span class="tieude">Java\Bin
                        folder such as C:\Program Files (x86)\Java\jre1.8.0_91\bin</span></p>
                <p class="noidungtieude">- Then click on OK. Make sure you don't remove any existing Variable value.</p>

                <p class="tieude">Download Jmeter: <a
                        href="http://Jmeter.apache.org/download_Jmeter.cgi">http://Jmeter.apache.org/download_Jmeter.cgi</a>
                </p>
                <p class="noidungtieude">- To install Jmeter, simply unzip the zip/tar file into the directory where you
                    want Jmeter to be installed (zip file is for Window, tar file is for Unix). Make sure that you have
                    a JRE/JDK correctly installed and the JAVA_HOME environment variable set.</p>
                <p class="noidungtieude"><span class="tieude">To run Jmeter:</span> run the Jmeter.bat (for Windows) or
                    Jmeter (for Unix) file. These files are found in the bin directory.</p>
                <p class="headphantu">Jmeter Test Plan: Basic Elements (Thread Group, Sampler, Assertion, Listener)</p>
                <p class="noidungtieude"><span class="tieude">Thread group:</span> is to set up number of user to run
                    the test.</p>
                <p class="noidungtieude"><span class="tieude">Sampler:</span> is the request for running the test
                    (http/https/soap/rest).</p>
                <p class="noidungtieude"><span class="tieude">Assertions:</span> are to use for comparing the actual
                    result with the expected result so that we can decide if the test is passed.</p>
                <p class="noidungtieude"><span class="tieude">Listeners:</span> are the reports from Jmeter.</p>


            </div>
        </div>
        <div class="rightbox3">
            <a href=""><img src="image/qc1.png" class="imgrightbox3"></a>
            <a href=""><img src="image/qc2.png" class="imgrightbox3"></a>
            <a href=""><img src="image/qc3.png" class="imgrightbox3"></a>
            <a href=""><img src="image/qc4.png" class="imgrightbox3"></a>
        </div>
    </div>

    <?php include('foot.php'); ?>

    <?php include('modalpopup.php'); ?>

    <script>
    <?php include('script.js'); ?>
    </script>


</body>

</html>