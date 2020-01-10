<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vildana's resume</title>
        <link rel="stylesheet" href="resume.css">
    </head>

    <body>
        <header class="main"> <h1>Resume</h1>
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
                <a href="#about">About me</a>
                <a href="#edu">Education</a>
                <a href="#work">Work experince</a>
                <a href="#skills">Skills</a>
                <a href="#other">Other activities</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
        </header> <br/>
        
        <dl>
            <dt>
                <img src="profile.jpeg">
                <dd id="intro">
                    <b><br/>Vildana Buljubašić <br/>
                    02.08.1996. <br/>
                    Sadžak 67, 71000 Sarajevo <br/></b>
                </dd>
            </dt><br/>
        </dl>

        <p id=help></p><hr/>

        <dl>
            <dt>
                <h4 id="about">About me</h4>
                <dd>I am a motivated, detail-oriented and exhilarated Computer Sciences' 
                        student aiming to posses a bachelor's degree by the 2020 from a university 
                        where all courses and coursework are conducted in English. I am intereseted 
                        in exploring opportunities that come in my way in order to build my carrier 
                        in IT industry.</dd>
            </dt><br/><hr/>
        </dl>

        <dl>
            <dt>
                <h4 id="edu">Education</h4>
                <dd>
                    <b>2015 - present</b>
                    <p id="first"><b>International University of Sarajevo</b> Bosnia and Herzegovina
                    <br/>Major: <b>Computer Sciences and Engineering</b>
                    <br/>All courses and coursework conducted in English
                    <br>Bachelor of Computer Sciences (expected in 2020)</p>
                </dd>
                <dd>
                    <b>2011 - 2015</b>
                    <p id="second"><b>Gazi Husrev-bey's medresa, Sarajevo</b> (Gazi Husrev-begova medresa, Sarajevo)
                    <br/>Major: Mathematics and Physics</p><br/>
                </dd>
            </dt>

        </dl><hr/>

        <dl>
            <dt><h4 id="work">Work experince</h4>
                <dd>
                    <b>2018-2018</b>
                    <p id="third"><b>BH Telecom d.d. </b>Sarajevo, Bosnia and Herzegovina
                        <br/><i>One month internship</i>
                        <ul id="third3">Responsibilities:
                            <li>Introduction with the principles of TIS and SAP applications</li>
                            <li>Work on the technical base for collecting user data</li>
                            <li>Making reports about capacities and functionalities of TK systems</li>
                            <li>Monitoring of quality parameters (QoS) and their analysis</li>
                        </ul>
                    </p>
                </dd>
                <dd>
                    <b>2019-2019</b>
                    <p id="fourth"><b>Tayra.io </b>Sarajevo, Bosnia and Herzegovina
                        <br/><i>One month internship</i>
                        <ul id="fourth4">Responsibilities:
                            <li>Programmer on a project about gamification</li><br/>
                        </ul>
                    </p>
                </dd>
            </dt>
        </dl><hr/>
        
        <dl>
            <dt><h4 id="skills">Skills</h4>
                <dd><b>Languages:</b>
                    <table id="table">
                        <tr>
                            <th></th>
                            <th>Writing</th>
                            <th>Speaking</th>
                        </tr>
                        <tr>
                            <th>Bosnian</th>
                            <td>Proficient</td>
                            <td>Proficient</td>
                        </tr>
                        <tr>
                            <th>English</th>
                            <td>Proficient</td>
                            <td>Proficient</td>
                        </tr>
                        <tr>
                            <th>Turkish</th>
                            <td>Beginner</td>
                            <td>Beginner</td>
                        </tr>
                    </table>
                </dd><br/>
                <dd><b>IT Skills:</b>
                    <ul id="fourth">
                        <li><b>MS Office </b>(Word, Excel, PowerPoint)</li>
                        <li><b>Programming</b>
                        <ul>
                            <li>Familiar with C++, Java, HTML and CSS</li>
                            <li>Basics of VHDL, SQL, .NET, React.js</li>
                        </ul></li>
                        <li><b>3D Modelling Tools</b>
                        <ul>
                            <li>AutoCAD</li>
                        </ul></li>
                    </ul>
                </dd><br/>
                <dd><b>Driving Licence</b>
                    <ul id="fourth">
                        <li>B Category</li><br/>
                    </ul>
                </dd>
            </dt>
        </dl><hr/>

        <dl>
            <dt><h4 id="other">Other Activities</h4>
                <dd>
                    <ul>
                        <li>Observer of local elections 2016</li>
                        <li>Volunteered at Sarajevo Business Forum 2016</li>
                        <li>Volunteered at Sarajevo Film Festival 2016</li>
                        <li>Volunteered at Sarajevo Film Festival 2017</li>
                        <li>Member of the commission of general elections 2018</li>
                        <li>Constant volunteer at Internal University’s events</li>
                    </ul>
                </dd>
            </dt>
        </dl><hr/>

        <dl>
            <form class="form" action="resume.php" method="POST">
                <table id="tt">
                <p style="color:darkpurple">* required field</p>
                    <tr>
                        <td>*First and Last Name </td>
                        <td><input type="text" id="name" name="name" required="1" /></td>
                    </tr>
                    <tr>
                        <td>*E-mail Address </td>
                        <td><input type="text" id="email" name="email" required="1"/></td>
                    </tr>
        
                    <tr>
                        <td>Your Message: </td>
                        <td><textarea name="message" id="message" rows="10" cols="25" required="1"></textarea></td>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td><input type="submit" id="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
        </dl><hr/>
    </body>
</html>