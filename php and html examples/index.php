<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
  <meta http-equiv = "Content-Style-Type" content = "text/css" />
  <meta name = "author" content = "Maxwell Hauser" />
  
  <!-- HTML Slidy was developed by Dave Raggett -->
  <title>SCSU CSC 443: Fall 2022</title>

  <!-- external Cascading Style Sheets for styling all slides -->
  <link rel="stylesheet" type="text/css" media="screen, projection, print" href="scripts/slidy.css" />
  <!-- http://www.w3.org/Talks/Tools/Slidy2/styles/slidy.css -->
  <link rel="stylesheet" type="text/css" href="scripts/www-presentation.css"/>
  <link rel="stylesheet" type="text/css" href="scripts/image-transition.css"/>

  <script src="scripts/slidy.js" charset="utf-8" type="text/javascript"></script>
  <!-- http://www.w3.org/Talks/Tools/Slidy2/scripts/slidy.js -->
  <script src="scripts/jquery-3.3.1.min.js" charset="utf-8" type="text/javascript"></script>
  <!-- https://code.jquery.com/jquery-3.3.1.min.js -->
  <script src="scripts/www-presentation.js" charset="utf-8" type="text/javascript"></script>
</head>

<body>
<div class="www-presentation-header"><img src="images/scsu-logo-compact-blue.png" style="height: 70px;"/>
<div class="www-presentation-header-text"></div></div>
<div class="slide titlepage">
  <h1 class="title"><br><font color = "#000080"></font></h1>
  <p class="date">CSC 443: Internet Programming</p>
  <p class="author"><a href="mailto:hauserm3@southernct.edu?subject=CSC443">Maxwell Hauser</a><br>
  Computer Information Systems<br><font color = "#8080FF" style="text-shadow:-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
  Southern Connecticut State University</font></p>
  <button id="view-fullscreen" onclick="goFullscreen">Enter/Exit Fullscreen</button>
  <!-- https://developer.mozilla.org/en-US/docs/Web/API/Fullscreen_API/Guide -->
  
  <script type="text/javascript">
    (function goFullscreen() {
        var viewFullScreen = document.getElementById("view-fullscreen");
        if (viewFullScreen) {
            viewFullScreen.addEventListener("click", function () {
                var docElm = document.documentElement;
                if (docElm.requestFullscreen) {
                    docElm.requestFullscreen();
                }
                else if (docElm.msRequestFullscreen) {
                    docElm = document.body; //overwrite the element (for IE)
                    docElm.msRequestFullscreen();
                }
                else if (docElm.mozRequestFullScreen) {
                    docElm.mozRequestFullScreen();
                }
                else if (docElm.webkitRequestFullScreen) {
                    docElm.webkitRequestFullScreen();
                }
            }, false);
        }

        var cancelFullScreen = document.getElementById("cancel-fullscreen");
        if (cancelFullScreen) {
            cancelFullScreen.addEventListener("click", function () {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
                else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
                else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                }
                else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }, false);
        }

        var fullscreenState = document.getElementById("fullscreen-state");
        if (fullscreenState) {
            document.addEventListener("fullscreenchange", function () {
                fullscreenState.innerHTML = (document.fullscreenElement)? "" : "not ";
            }, false);

            document.addEventListener("msfullscreenchange", function () {
                fullscreenState.innerHTML = (document.msFullscreenElement)? "" : "not ";
            }, false);

            document.addEventListener("mozfullscreenchange", function () {
                fullscreenState.innerHTML = (document.mozFullScreen)? "" : "not ";
            }, false);

            document.addEventListener("webkitfullscreenchange", function () {
                fullscreenState.innerHTML = (document.webkitIsFullScreen)? "" : "not ";
            }, false);
        }
    })();
    </script>
</div>

<div class="section slide level1" id="this">
  <br><br><br>
  <h1>What is <i>this</i>?</h1>
  <ul class="incremental">
  <li>&quot;answer&quot; (<a href="https://somewhere" target=_blank><i>Reference</i></a>)</li></ul>
</div>

<div class="section slide level1" id="that">
  <br><br><br>
  <h1>What is <i>that</i>?</h1>
  <ul class="incremental">
  <li>More ideas (<a href="https://somewhere" target=_blank>More sources</a>)</li>
  <li><p>List</p></li>

  <ul class="incremental">
  <li>1</li>
  <li>2</li>
  <li>3</li>
  </ul></li>
  </ul>
</div>

<div class="section slide level1" id="alternatives">
  <br><br><br>
  <h1>Why code a presentation instead of using <i>regular</i> software?</h1>
  <ol class="incremental" style="list-style-type: decimal">
  <li><p>Your presentation will be accessible to more devices and people.</p></li>
  <li><p>You will develop web programming expertise while preparing presentations.</p></li>
  <li><p>You prefer to focus on the languages you will use professionally for many purposes rather than tools used only for presentations and which can only be viewed with a limited set of applications.</p></li>
  </ol></li>
</div>

<div class="section slide level1" id="questions">
  <br><br><br>
  <h1>Questions?</h1>
  <ul class="incremental">
      <li>Question 1: Where have you been?<br>
          I will probably misinterpret this question, but I've been to Spain, China,
          Italy, France, and Belize, amongst some other countries and states in the US.
          I skied on the West Coast a few times, and on the East Coast almost every year. I love ice skating.
          I have lived in Connecticut my whole life, and moved from New Haven to Clinton in 2012.
          I transferred from Union College in 2016, and have been attending SCSU part time since then.</li>
      <li>Question 2: Where are you now?<br>
          I am still living in Clinton at the moment, but that will change at the end of next year when I graduate. I commuted from home for a couple years, but have been taking classes remotely ever since COVID happened.
          Online classes are easier for me.</li>
      <li>Question 3: Where are you going?<br>
          Honestly, I have no idea yet. I've been focusing on graduating for a while now, and I'm happy to finally almost be there. My brother and I should be graduating around the same time, and when that happens we will probably move in together somewhere along with a mutual friend.
          I am hoping to do something related to either web dev/design, software development, video game development, or database management. Ultimately, I'll be happy doing mostly anything technology or IT related.</li>
      <li>Question 4: Which of data networking, content, style, and behavior are your strengths or areas you wish to improve?<br>
          I would say I am fairly skilled working with content and styling. There is room for improvement when it comes to data networking and behavior. I am confident this class will teach me some important skills pertaining to all four areas.</li>
      <li>Question 5: Among the recommended reading, what interests you? What concerns you? What is familiar to you?<br>
          I'm interested in pretty much anything technology related. Except crypto. I don't like crypto because it's terrible for the environment. I found pretty much all of the recommended readings interesting. I am familiar with some readings on HTML, IP, and TCP. I had not read the last couple readings and found them very cool. The only technology that concerns me is AI. Albeit I am very fascinated by the concept of AI, but
          it obviously has the potential to be very dangerous if misused.</li>
  <br><br>
  <a class="email" href="mailto:hauserm3@southernct.edu">
  <ul style=
    "text-align: right;
    font-family: Verdana,sans-serif;
    text-shadow:-1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
    hauserm3@southernct.edu</a><br>
    <img class="right-side-image" src="images/scsu-logo-compact-blue.png"></ul>
  </ul>
</div>

<div class="section slide level1" id="hardware">
    <br><br><br>
    <h1>Describe your development environment (physical hardware and logical software).</h1>
    <ul class="incremental">
        <li>I use a 2011 Macbook Pro for almost all of my development (lol).
        <br>
        I have a desktop PC that I use only sometimes for development.
        </li>
        
        <li>I use Visual Studio Code almost exclusively, but have also used Eclipse and IntelliJ. 
        </li>

        <li>Development Environment Diagram:
        </li>
        <img src="images/dde.png" alt="oops">
    </ul>
</div>

<div class="section slide level1" id="public internet">
    <br><br><br>
    <h1>Describe how your development environment relates to the public internet.</h1>
    <ul class="incremental">
        <li>Certain IDEs can interact directly with the public internet via either extensions, plugins, or the code written within the IDE itself.
        </li>

        <li>Every IDE is different, but ultimately the end product (application, program, software, or website) would use one or more types of internet protocol (HTTP, HTML, PHP, TCP, UDP, etc.)
            depending on how the product is developed.
        </li>

        <li>Diagram of the development environment's relationship to the public internet:
        </li>
        <img src="images/ide-i rd.png" alt="oops">  
    </ul>
</div>

<div class="section slide level1" id="presentation hosting">
    <br><br><br>
    <h1>Describe how your web presentation is hosted.</h1>
    <ul class="incremental">
        <li>My web presentation is hosted locally. I would have hosted it via web server, but, as we know, we are still waiting for the droplet logistics to be figured out.
        </li>

        <li>Web Host Diagram:
        </li>
        <img src="images/whd.png" alt="oops">
    </ul>
</div>

<div class="section slide level1" id="assignment 2">
    <br><br><br>
    <h1>Summarize your first impressions accessing the world wide web.</h1>
    <ul class="incremental">
        <li>I was amazed when I first used the world wide web. The prospect of having a tool that allowed immediate access
            to information was something that fascinated me then and still does today. Being able to communicate instantly with people around the world was also a huge advancement for humanity and technology
            and is something that almost almost everyone on the planet uses today and will continue using far into the future.
        </li>
    </ul>
</div>

<div class="section slide level1" id="assignment 2">
    <br><br><br>
    <h1>Describe your computer's relationship to the public internet at that time.</h1>
    <ul class="incremental">
        <li>At the time, my computer's relationship to the public internet was simpler. There weren't
            DNS servers, VPNs, network switches, remote access points/mesh networks, or even IPv6.
            To my knowledge, it was just the computer or device which connected to the router which connected to the modem.
            The modem was supplied with the internet connection from the ISP and devices on the network were assigned an IPv4 address
            since IPv6 did not exist yet.
        </li>
        <img src="images/early_ird.png" alt="oops">
    </ul>
</div>

<div class="section slide level1" id="assignment 2">
    <br><br><br>
    <h1>Describe your computer's current relationship to the public internet.</h1>
    <ul class="incremental">
        <li>Today, internet connections generally have many more moving parts than they used to. Modern connections
            often use the technologies I mentioned a couple slides ago. As a result, my computer's connection to the public internet has also
            changed accordingly. Originally my home network used merely a modem and router to connect to the internet. My home network now uses
            gateway with a range extender, a mesh network, and the devices on the network usually connect to a DNS server in tandem with a VPN for improved
            security and anonymity. Devices on the network are assigned an IPv6 address.
        </li>
        <img src="images/modern_ird.png" alt="oops">
    </ul>
</div>

<div class="section slide level1" id="assignment 2">
    <br><br><br>
    <h1>Revise your responses to the first three questions from assignment 1 (where have you been; where are you now; where are you going?)
        so that at least one element in each of your responses is modified by CSS.</h1>
    <ul class="incremental">
        <li style = "font-family: 'Times New Roman', Times, serif; color: black; font-size: 24px;">
            <b><em>Where have you been?</em></b>

            <p style = "font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: #7F00FF;
                        font-size: 24px; line-height: 30px;">
            <b><em>
            I've been to Spain, China, Italy, France, and Belize, amongst some other countries and states in the US.
            I skied on the West Coast a few times, and on the East Coast almost every year. I love ice skating.
            I have lived in Connecticut my whole life, and moved from New Haven to Clinton in 2012.
            I transferred from Union College in 2016, and have been attending SCSU part time since then.
            </em></b>
            </p>
        </li>

        <li style = "font-family: 'Times New Roman', Times, serif; color: black; font-size: 24px;">
            <b><em>Where are you now?</em></b>

            <p style = "font-family: Georgia, 'Times New Roman', Times, serif; color: rgb(5, 70, 15);
                        font-size: 24px; line-height: 30px;">
            <b><u>    
            I am still living in Clinton at the moment, but that will change at the end of next year when I graduate. I commuted from home for a couple years, but have been taking classes remotely ever since COVID happened.
            Online classes are easier for me.
            </u></b>
            </p>
        </li>
        
        <li style = "font-family: 'Times New Roman', Times, serif; color: black; font-size: 24px;">
            <b><em>Where are you going?</em></b>

            <p id = "color-change" onmouseover = "setColor(this)" style = "font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: rgba(44, 145, 144, 0.914);
                     font-size: 24px; line-height: 30px;">
            <u><em>
            (Hover over me!)<br>
            I've been focusing on graduating for a while now, and I'm happy to finally almost be there. My brother and I should be graduating around the same time, and when that happens we will probably move in together somewhere along with a mutual friend.
            I am hoping to do something related to either web dev/design, software development, video game development, or database management. Ultimately, I'll be happy doing mostly anything technology or IT related.
            </em></u>
            </p>
        
            <script> 
            {
                var colors = ["#0000FF", "#00FF00", "#FF0000"];
                function setColor(element)
                {
                    element.colorIdx = element.colorIdx || 0;
                    element.style.color = colors[element.colorIdx++ % colors.length];
                }
            }
            </script>
        </li>
    </ul>
</div>

<div class="section slide level1" id="assignment 2">
    <br><br><br>
    <h1>Styling choices</h1>
    <ul class = incremental>
        <li>Where have you been?</li>
        <ul>
            <li>Changed font to Impact, increased font size, increased line height, changed font color, emboldened and italicized.
            </li>
        </ul>
        <li>Where are you now?</li>
        <ul>
            <li>Changed font to Georgia, increased font size, increased line height, changed font color, emboldened and underlined.
            </li>
        </ul>
        <li>Where are you going?</li>
        <ul>
            <li>Changed font to Segoe UI, increased font size, increased line height, changed font color, underlined and italicized.
                Added some JS functionality.
            </li>
        </ul>
    </ul>
</div>

<div class="section slide level1" id="assignment 2">
    <br><br><br>
    <h1>Other methods of hosting a presentation so that it is accessible over the public internet.</h1>
    <ul class = incremental>
        <li style = "font-family: Georgia, 'Times New Roman', Times, serif; color: rgb(5, 70, 15);
        font-size: 24px; line-height: 30px;">
        <b><u>    
            There are a few ways to go about remotely hosting a project or web presentation. One way that comes to mind is 
            uploading to a public Git repository; that way anyone can navigate to the repo and access/download the source code.
            From there they can run it on their local machine or use whatever hosting service is associated with the project.
            Another way is uploading to/hosting via cloud platform like AWS, GCP, or Microsoft Azure. You just need the appropriate host/server info
            to be able to access the cloud platform and find the project. One final way to host remotely would be via virtual machine such as VirtualBox
            or GCP. You can access the presentation throught those channels via terminal or command line using the appropriate connection info.
        </u></b>
        </li>
    </ul>
</div>

<div class="section slide level1" id="assignment 2">
    <br><br><br>
    <h1>Make presentation accessible without the use of the public internet.</h1>
    <ul class = incremental>
        <li style = "font-family: Georgia, 'Times New Roman', Times, serif; color: rgb(5, 70, 15);
        font-size: 24px; line-height: 30px;">
        <b><u>
            With neither an internet connection nor the presentation on your local machine, you would not be able to access the presentation. Apart from that, you would still be able to open
            and view the presentation on your browser without an internet connection. The presentation author would have to remove links, fonts, content, and style sheets that reference sources, sites, and/or files external to the presentation directory.</h1>
        </u></b>
        </li>
    </ul>
</div>

<div class="section slide level1" id="presentation 2">
    <br><br><br>
    <h1>Presentation 2</h1>
    <ul class = incremental>
        <li style = "font-family: Georgia, 'Times New Roman', Times, serif; color: rgb(5, 70, 15);
        font-size: 24px; line-height: 30px;">
        <b><u>
            With neither an internet connection nor the presentation on your local machine, you would not be able to access the presentation. Apart from that, you would still be able to open
            and view the presentation on your browser without an internet connection. The presentation author would have to remove links, fonts, content, and style sheets that reference sources, sites, and/or files external to the presentation directory.</h1>
        </u></b>
        </li>
    </ul>
</div>

<div class="section slide level1" id="thank you">
    <br><br><br>
    <h1>Questions?</h1>
    <ul class = incremental>
        <li style = "font-family: Georgia, 'Times New Roman', Times, serif; color: rgb(5, 70, 15);
        font-size: 24px; line-height: 30px;">
        <b><u>
            Thank you!
        </u></b>
        </li>
    </ul>
</div>
</body>
</html>