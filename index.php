<!DOCTYPE html>
<html>
    <head>
        <title>Comment Section</title>
        <link rel="stylesheet" href="anychatstyles.css">
        <script src="anychatactions.js" defer></script>
    </head>
    <body class="app_background" id="app_material">
        <div class="disc_box" id="disc_box_alt">
            <h2 class="disc_head" id="disc_head_alt">DISCLAIMER:</h2>
            <div class="disc_description_box">
            <p class="disc_description">The developer is not responsible for any negative comments posted on Any-Chat. It is the community's responsibility to maintain
            a good atmosphere when using the chat.
            <br>
            <br>
            If you find a comment to be offensive, you may report it to the developer for further inspection to remove the comment.
            <br>
            <br>
            Do you accept the terms and conditions?
            </p>
            <br>
            <p class="sorry_note" id="sorry_note_alt">Sorry, you must click "Accept" to enter. Come back when you're ready.</p>
            <br>
            <button class="dec_button" id="dec_button_alt" onclick="dec_decl()">Decline</button>
            <button type="button" class="acc_button" id="acc_button_alt" onclick="disc_acce()">Accept</button>
            </div>
        </div>
        <div class="log_box" id="log_box_alt">

        </div>
    <div class="main_image_box" id="main_image_box_alt">
        <button class="l_button" onclick="notshow_main()">Login</button>
    <img class="any_chat_banner" src="anychatbanner.png">
    </div>
    <div class="other_topics_box" id="other_topics_box_alt">
    <h1 class="other_topics_heading">Other topics:</h1>
    <div class="cat_select_box">
    <button class="ot_buttons" onclick="show_books_section()">Books</button>
    <button class="ot_buttons2" onclick="show_hobbies_section()">Hobbies</button>
    <button class="ot_buttons2" onclick="show_games_section()">Games</button>
    <button class="ot_buttons2" onclick="show_general_section()">General</button>
    <button class="ot_buttons2" onclick="show_moviesandTV_section()">Movies/TV</button>
    <button class="ot_buttons2" onclick="show_music_section()">Music</button>
    <button class="ot_buttons2" onclick="show_sports_section()">Sports</button>
    <button class="ot_buttons2" onclick="show_travel_section()">Travel</button>
    </div>
    </div>
    <div class="main_general_interact" id="main_general_interact_alt">
    <div class="general_com_form_box">
    <form action="" method="POST">
        <div class="general_com_form_box_inner">
        <label class="gen_com_form_name">Name:
            <br>
        <input class="gen_com_form_name_in" type="text" name="Name" required>
        </label>
        <br>
            <br>
        <label class="gen_com_form_commentlabel_in">Comment:
            <br>
            <textarea class="gen_com_textbox" name="Comment" required></textarea>
        </label>
        <br>
      <input class="gen_com_sub_button" id="gen_com_sub_button_alt" type="submit" name="Submit" value="Submit">
        </div>
    </form>
    </div>
    <h3 class="gen_heading">General</h3>
    <a class="repo_link" href="emailto:jacksonzenisek@gmail.com">Report Comment</a>     
    <iframe class="gen_comments_discussion_frame" src="anychatgeneraldiscussionoutput.html">
    <?php
    if(isset($_POST["Submit"])){
        print "<h2>Comment Submitted</h2>";

        $Name = $_POST["Name"];
        $Comment = $_POST["Comment"];

        $Old = fopen("anychatgeneraldiscussionoutput.html", "r+t");
        $Old_Comments = fread($Old, 1024);

        $Write = fopen("anychatgeneraldiscussionoutput.html", "w+");

        $String = 

        "<link rel='stylesheet' href='anychatstyles.css'><div class='gen_comments_posts'><span class='user_name'><b>".$Name."</b></span><br />
        <span>".date("m/d/Y")." | ".date("h:i A")."</span><br />
        <span>".$Comment."</span></div><br><br>\n".$Old_Comments;

        fwrite($Write, $String);
        fclose($Write);
        fclose($Old);

    }

    $Read = fopen("anychatgeneraldiscussionoutput.html", "r+t");
    echo "<h1>Comments:</h1><hr>".fread($Read, 1024);
    fclose($Read);
?>
        </iframe>
    </div>
<!--Books Section-->
    <div class="main_books_interact" id="main_books_interact_alt">
    <div class="general_com_form_box">
    <form action="" method="POST">
        <div class="general_com_form_box_inner">
        <label class="gen_com_form_name">Name:
            <br>
        <input class="gen_com_form_name_in" onclick="myFunc()" type="text" name="Name2" required>
        </label>
        <br>
            <br>
        <label class="gen_com_form_commentlabel_in">Comment:
            <br>
            <textarea class="gen_com_textbox" name="Comment2" required></textarea>
        </label>
        <br>
      <input class="gen_com_sub_button" id="gen_com_sub_button_alt" type="submit" name="Submit2" value="Submit">
        </div>
    </form>
    </div>
    <h3 class="gen_heading">Books</h3>
    <a class="repo_link" href="emailto:jacksonzenisek@gmail.com">Report Comment</a>     
    <iframe class="gen_comments_discussion_frame" src="anychatbooksdiscussionoutput.html">
    <?php
    if(isset($_POST["Submit2"])){
        print "<h2>Comment Submitted</h2>";

        $Name2 = $_POST["Name2"];
        $Comment2 = $_POST["Comment2"];

        $Old2 = fopen("anychatbooksdiscussionoutput.html", "r+t");
        $Old_Comments2 = fread($Old2, 1024);

        $Write2 = fopen("anychatbooksdiscussionoutput.html", "w+");

        $String2 = 

        "<link rel='stylesheet' href='anychatstyles.css'><div class='gen_comments_posts'><span class='user_name'><b>".$Name2."</b></span><br />
        <span>".date("m/d/Y")." | ".date("h:i A")."</span><br />
        <span>".$Comment2."</span></div><br><br>\n".$Old_Comments2;

        fwrite($Write2, $String2);
        fclose($Write2);
        fclose($Old2);

    }

    $Read = fopen("anychatbooksdiscussionoutput.html", "r+t");
    echo "<h1>Comments:</h1><hr>".fread($Read, 1024);
    fclose($Read);
?>
        </iframe>
    </div>
    <!--Hobbies Section-->
    <div class="main_hobbies_interact" id="main_hobbies_interact_alt">
    <div class="general_com_form_box">
    <form action="" method="POST">
        <div class="general_com_form_box_inner">
        <label class="gen_com_form_name">Name:
            <br>
        <input class="gen_com_form_name_in" onclick="myFunc()" type="text" name="Name3" required>
        </label>
        <br>
            <br>
        <label class="gen_com_form_commentlabel_in">Comment:
            <br>
            <textarea class="gen_com_textbox" name="Comment3" required></textarea>
        </label>
        <br>
      <input class="gen_com_sub_button" id="gen_com_sub_button_alt" type="submit" name="Submit3" value="Submit">
        </div>
    </form>
    </div>
    <h3 class="gen_heading">Hobbies</h3>
    <a class="repo_link" href="emailto:jacksonzenisek@gmail.com">Report Comment</a>     
    <iframe class="gen_comments_discussion_frame" src="anychathobbiesdiscussionoutput.html">
    <?php
    if(isset($_POST["Submit3"])){
        print "<h2>Comment Submitted</h2>";

        $Name3 = $_POST["Name3"];
        $Comment3 = $_POST["Comment3"];

        $Old3 = fopen("anychathobbiesdiscussionoutput.html", "r+t");
        $Old_Comments3 = fread($Old3, 1024);

        $Write3 = fopen("anychathobbiesdiscussionoutput.html", "w+");

        $String3 = 

        "<link rel='stylesheet' href='anychatstyles.css'><div class='gen_comments_posts'><span class='user_name'><b>".$Name3."</b></span><br />
        <span>".date("m/d/Y")." | ".date("h:i A")."</span><br />
        <span>".$Comment3."</span></div><br><br>\n".$Old_Comments3;

        fwrite($Write3, $String3);
        fclose($Write3);
        fclose($Old3);

    }

    $Read = fopen("anychathobbiesdiscussionoutput.html", "r+t");
    echo "<h1>Comments:</h1><hr>".fread($Read, 1024);
    fclose($Read);
?>
        </iframe>
    </div>
    <!--Games Section-->
    <div class="main_games_interact" id="main_games_interact_alt">
    <div class="general_com_form_box">
    <form action="" method="POST">
        <div class="general_com_form_box_inner">
        <label class="gen_com_form_name">Name:
            <br>
        <input class="gen_com_form_name_in" onclick="myFunc()" type="text" name="Name4" required>
        </label>
        <br>
            <br>
        <label class="gen_com_form_commentlabel_in">Comment:
            <br>
            <textarea class="gen_com_textbox" name="Comment4" required></textarea>
        </label>
        <br>
      <input class="gen_com_sub_button" id="gen_com_sub_button_alt" type="submit" name="Submit4" value="Submit">
        </div>
    </form>
    </div>
    <h3 class="gen_heading">Games</h3>
    <a class="repo_link" href="emailto:jacksonzenisek@gmail.com">Report Comment</a>     
    <iframe class="gen_comments_discussion_frame" src="anychatgamesdiscussionoutput.html">
    <?php
    if(isset($_POST["Submit4"])){
        print "<h2>Comment Submitted</h2>";

        $Name4 = $_POST["Name4"];
        $Comment4 = $_POST["Comment4"];

        $Old4 = fopen("anychatgamesdiscussionoutput.html", "r+t");
        $Old_Comments4 = fread($Old4, 1024);

        $Write4 = fopen("anychatgamesdiscussionoutput.html", "w+");

        $String4 = 

        "<link rel='stylesheet' href='anychatstyles.css'><div class='gen_comments_posts'><span class='user_name'><b>".$Name4."</b></span><br />
        <span>".date("m/d/Y")." | ".date("h:i A")."</span><br />
        <span>".$Comment4."</span></div><br><br>\n".$Old_Comments4;

        fwrite($Write4, $String4);
        fclose($Write4);
        fclose($Old4);

    }

    $Read = fopen("anychatgamesdiscussionoutput.html", "r+t");
    echo "<h1>Comments:</h1><hr>".fread($Read, 1024);
    fclose($Read);
?>
        </iframe>
    </div>
    <!--Movies/TV Section-->
    <div class="main_moviestv_interact" id="main_moviestv_interact_alt">
    <div class="general_com_form_box">
    <form action="" method="POST">
        <div class="general_com_form_box_inner">
        <label class="gen_com_form_name">Name:
            <br>
        <input class="gen_com_form_name_in" onclick="myFunc()" type="text" name="Name5" required>
        </label>
        <br>
            <br>
        <label class="gen_com_form_commentlabel_in">Comment:
            <br>
            <textarea class="gen_com_textbox" name="Comment5" required></textarea>
        </label>
        <br>
      <input class="gen_com_sub_button" id="gen_com_sub_button_alt" type="submit" name="Submit5" value="Submit">
        </div>
    </form>
    </div>
    <h3 class="gen_heading">Movies and TV</h3>
    <a class="repo_link" href="emailto:jacksonzenisek@gmail.com">Report Comment</a>     
    <iframe class="gen_comments_discussion_frame" src="anychatmoviesandtvdiscussionoutput.html">
    <?php
    if(isset($_POST["Submit5"])){
        print "<h2>Comment Submitted</h2>";

        $Name5 = $_POST["Name5"];
        $Comment5 = $_POST["Comment5"];

        $Old5 = fopen("anychatmoviesandtvdiscussionoutput.html", "r+t");
        $Old_Comments5 = fread($Old5, 1024);

        $Write5 = fopen("anychatmoviesandtvdiscussionoutput.html", "w+");

        $String5 = 

        "<link rel='stylesheet' href='anychatstyles.css'><div class='gen_comments_posts'><span class='user_name'><b>".$Name5."</b></span><br />
        <span>".date("m/d/Y")." | ".date("h:i A")."</span><br />
        <span>".$Comment5."</span></div><br><br>\n".$Old_Comments5;

        fwrite($Write5, $String5);
        fclose($Write5);
        fclose($Old5);

    }

    $Read = fopen("anychatmoviesandtvdiscussionoutput.html", "r+t");
    echo "<h1>Comments:</h1><hr>".fread($Read, 1024);
    fclose($Read);
?>
        </iframe>
    </div>
    <!--Music Section-->
    <div class="main_music_interact" id="main_music_interact_alt">
    <div class="general_com_form_box">
    <form action="" method="POST">
        <div class="general_com_form_box_inner">
        <label class="gen_com_form_name">Name:
            <br>
        <input class="gen_com_form_name_in" onclick="myFunc()" type="text" name="Name6" required>
        </label>
        <br>
            <br>
        <label class="gen_com_form_commentlabel_in">Comment:
            <br>
            <textarea class="gen_com_textbox" name="Comment6" required></textarea>
        </label>
        <br>
      <input class="gen_com_sub_button" id="gen_com_sub_button_alt" type="submit" name="Submit6" value="Submit">
        </div>
    </form>
    </div>
    <h3 class="gen_heading">Music</h3>
    <a class="repo_link" href="emailto:jacksonzenisek@gmail.com">Report Comment</a>     
    <iframe class="gen_comments_discussion_frame" src="anychatmusicdiscussionoutput.html">
    <?php
    if(isset($_POST["Submit6"])){
        print "<h2>Comment Submitted</h2>";

        $Name6 = $_POST["Name6"];
        $Comment6 = $_POST["Comment6"];

        $Old6 = fopen("anychatmusicdiscussionoutput.html", "r+t");
        $Old_Comments6 = fread($Old6, 1024);

        $Write6 = fopen("anychatmusicdiscussionoutput.html", "w+");

        $String6 = 

        "<link rel='stylesheet' href='anychatstyles.css'><div class='gen_comments_posts'><span class='user_name'><b>".$Name6."</b></span><br />
        <span>".date("m/d/Y")." | ".date("h:i A")."</span><br />
        <span>".$Comment6."</span></div><br><br>\n".$Old_Comments6;

        fwrite($Write6, $String6);
        fclose($Write6);
        fclose($Old6);

    }

    $Read = fopen("anychatmusicdiscussionoutput.html", "r+t");
    echo "<h1>Comments:</h1><hr>".fread($Read, 1024);
    fclose($Read);
?>
        </iframe>
    </div>
    <!--Sports Section-->
    <div class="main_sports_interact" id="main_sports_interact_alt">
    <div class="general_com_form_box">
    <form action="" method="POST">
        <div class="general_com_form_box_inner">
        <label class="gen_com_form_name">Name:
            <br>
        <input class="gen_com_form_name_in" onclick="myFunc()" type="text" name="Name7" required>
        </label>
        <br>
            <br>
        <label class="gen_com_form_commentlabel_in">Comment:
            <br>
            <textarea class="gen_com_textbox" name="Comment7" required></textarea>
        </label>
        <br>
      <input class="gen_com_sub_button" id="gen_com_sub_button_alt" type="submit" name="Submit7" value="Submit">
        </div>
    </form>
    </div>
    <h3 class="gen_heading">Sports</h3>
    <a class="repo_link" href="emailto:jacksonzenisek@gmail.com">Report Comment</a>     
    <iframe class="gen_comments_discussion_frame" src="anychatsportsdiscussionoutput.html">
    <?php
    if(isset($_POST["Submit7"])){
        print "<h2>Comment Submitted</h2>";

        $Name7 = $_POST["Name7"];
        $Comment7 = $_POST["Comment7"];

        $Old7 = fopen("anychatsportsdiscussionoutput.html", "r+t");
        $Old_Comments7 = fread($Old7, 1024);

        $Write7 = fopen("anychatsportsdiscussionoutput.html", "w+");

        $String7 = 

        "<link rel='stylesheet' href='anychatstyles.css'><div class='gen_comments_posts'><span class='user_name'><b>".$Name7."</b></span><br />
        <span>".date("m/d/Y")." | ".date("h:i A")."</span><br />
        <span>".$Comment7."</span></div><br><br>\n".$Old_Comments7;

        fwrite($Write7, $String7);
        fclose($Write7);
        fclose($Old7);

    }

    $Read = fopen("anychatsportsdiscussionoutput.html", "r+t");
    echo "<h1>Comments:</h1><hr>".fread($Read, 1024);
    fclose($Read);
?>
        </iframe>
    </div>
    <!--Travel Section-->
    <div class="main_travel_interact" id="main_travel_interact_alt">
    <div class="general_com_form_box">
    <form action="" method="POST">
        <div class="general_com_form_box_inner">
        <label class="gen_com_form_name">Name:
            <br>
        <input class="gen_com_form_name_in" onclick="myFunc()" type="text" name="Name8" required>
        </label>
        <br>
            <br>
        <label class="gen_com_form_commentlabel_in">Comment:
            <br>
            <textarea class="gen_com_textbox" name="Comment8" required></textarea>
        </label>
        <br>
      <input class="gen_com_sub_button" id="gen_com_sub_button_alt" type="submit" name="Submit8" value="Submit">
        </div>
    </form>
    </div>
    <h3 class="gen_heading">Travel</h3>
    <a class="repo_link" href="emailto:jacksonzenisek@gmail.com">Report Comment</a>     
    <iframe class="gen_comments_discussion_frame" src="anychattraveldiscussionoutput.html">
    <?php
    if(isset($_POST["Submit8"])){
        print "<h2>Comment Submitted</h2>";

        $Name8 = $_POST["Name8"];
        $Comment8 = $_POST["Comment8"];

        $Old8 = fopen("anychattraveldiscussionoutput.html", "r+t");
        $Old_Comments8 = fread($Old8, 1024);

        $Write8 = fopen("anychattraveldiscussionoutput.html", "w+");

        $String8 = 

        "<link rel='stylesheet' href='anychatstyles.css'><div class='gen_comments_posts'><span class='user_name'><b>".$Name8."</b></span><br />
        <span>".date("m/d/Y")." | ".date("h:i A")."</span><br />
        <span>".$Comment8."</span></div><br><br>\n".$Old_Comments8;

        fwrite($Write8, $String8);
        fclose($Write8);
        fclose($Old8);

    }

    $Read = fopen("anychattraveldiscussionoutput.html", "r+t");
    echo "<h1>Comments:</h1><hr>".fread($Read, 1024);
    fclose($Read);
?>
        </iframe>
    </div>
    </body>
</html>