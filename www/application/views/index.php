<body id="slideit" style="width:100%;height:100%;">
    <div id="wrapper">
    
        <div class="margtop">
            <div class="top">
            <input id="nick" type="text" name="nick" value="Nick" maxlength="12" size="12"/>
            <input id="pass" type="password" name="password" value="pass" maxlength="12" size="12"/>
            <button id="log" name="login">Log  in!</button>
            <button id="lost_pass" name="forgotten">Did you forget password?</button>
            </div>
        </div>
        
        <div class="text">
        
            <div class="text_head">Rixrank welcomes you!</div>
                <div class="text_small_head">
                Add a photo and join the fun.
                </div>
                <div class="text_body">
                Share your the best pictures and become a winner.
                Your photos will take part in thousand battles with people from
                over the world. Comment and estimate photos of handsome gentelman
                and beautiful ladies. Meet new friends and have a good time!
                <br><br>
                    <div class="guest">
                    <a href="compare/" style="text-decoration: none">Test Rixrank! Join as a guest here!</a>
                    </div>
                </div>
            </div>
            
            <div class="register_box">
                <div class="text_register">
                Do you want to estimate your new photo? Sign in now!
                </div>
                <div class="register_display"><input id="nicks" type="text" name="nick" value="Nickname"/></div>
                    <div class="register_display"><input id="passs" type="password" name="password" value="Pass" /></div>
                    <select id="sex" name="register_select"  onchange="this.nextElementSibling.value=this.value">
                    <option value="none"> </option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select>
                    <div class="register_display"><input id="mail" type="text" name="mail" value="@email.com"/></div>
                    <div class="register_display2"><div id="st"><input id="statute" type="checkbox" name="accreg" value="reg" />Accept statute</div></div>
                    <button id="signin" name="login">Sign in!</button>
                </div><br>

            <div class="footter">
                <div class="footter_margin">
                <a href="./bin/about.html" style="text-decoration: none">About</a>
                <a href="./bin/statute.html" style="text-decoration: none">Statute</a>
                <a href="./bin/contact.html" style="text-decoration: none">Contact</a>
                </div>
            Rixrank.com &copy 2015 (beta)
            </div>
    </div>
    
    <div id="backgrounds">
    <img src="application/images/1.jpg" alt="compare people image">
    <img src="application/images/2.jpg" alt="compare people image">
    <img src="application/images/3.jpg" alt="compare people image">
    <img src="application/images/4.jpg" alt="compare people image">
    <img src="application/images/5.jpg" alt="compare people image">
    </div>
    
    <div id="forgot_pass" title=" Password & nick reminder ">
        <div class="reminder_text">
        Enter your e-mail please. We will send your nick and password to you.
        </div>
        <input type="text" id="mail_forgot_pass" name="mail23" value="@email.com">
        <div class="sent_or_not"></div>
        <button id="button_forgot_pass"> Remind </button>
    </div>
    
    <div id="sent" title="Rixrank - register">
    Succesful registration! We sent tou you confirmation e-mail.
    Read the message and confirm your e-mail please.
    Next log in rixrank.com and set your country and birthday. Have a fun!
    </div>
    
</body>
</html>