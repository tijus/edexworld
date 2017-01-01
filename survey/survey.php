<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

// Check for any mobile device.
if ($detect->isMobile() || $detect->isTablet()) {
    header("Location:m.lifeskills.php");
} else {
    session_start();
    $username = $_SESSION['username'];
    $birthdate = $_SESSION['birthdate'];
    $standard = $_SESSION['standard'];
    date_default_timezone_set("Asia/Kolkata");
    $date = new DateTime();
    $today = $date->format('d/m/Y H:i:s');
    $syl = $_SESSION['syl'];
    $society = $_SESSION['soc'];
    $area = $_SESSION['area'];
    $mail = $_SESSION['mail'];
    $contact = $_SESSION['contact'];
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }
//session_destroy();
    echo "<b>NAME: " . $username . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STANDARD: " . $standard . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SYLLABUS: " . $syl . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time:" . $today . "</b>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Educational Survey</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/npm.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="javascript.js"></script>
        <script src="js/validator.js" type="text/javascript"></script>
        <style>
            .hide { position:absolute; top:-1px; left:-1px; width:1px; height:1px; }
            #outer {
                border:1px;
                margin-left: 250px;  
            }

            #inner {
                border: 1px;
                display: inline-block;
            }
        </style>
    </head>

    <body style="background-color:#A8E3E3">

        <form name="myform" method="post" action="php.php">
            <div id="outer">
                <div id="inner">
                    <div class="col-md-12 col-xs-12">
                        <h1 align="center"><u>Educational Survey</u></h1>
                        <h2 align="center"><u>(Self Awareness, Learning Style and Self-Study)</u></h2>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title" align="center">

                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>1. Do you have some real life role models?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q1" id="1" value="1" />
                                                No, I have no role models at present.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q1" id="2" value="2" />
                                                Yes, I have various role models.                                                
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q1" id="3" value="3" />
                                                I wish to prove myself.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q1" id="4" value="4" />
                                                My parents are my role models.
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>2. Do you wish that people should respect you?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q2" id="1" value="1" />
                                                No, I am not worthy enough to be respected.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q2" id="2" value="2" />
                                                Yes, people should respect me because I respect them.                                              
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>3. Do you remain positive even if you score less marks than expected in your exam?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q3" id="1" value="1" />
                                                No, I can't understand the reason for fewer marks even if I try my best.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q3" id="2" value="2" />
                                                Yes, because I know my weak points and I will improve thereon.                                              
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>4.	Do you help your friends in studies?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q4" id="1" value="1" />
                                                I am not intelligent enough to support my friends in studies.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q4" id="2" value="2" />
                                                Not always because he/she becomes dependent on me.                                              
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q4" id="3" value="3" />
                                                Yes, because he/she also supports me.                                               
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q4" id="4" value="4" />
                                                Yes, when he/she is in need of my real support.                                              
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>5.	Do you become nervous when your friends tease you?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q5" id="1" value="1" />
                                                Yes, most of the time.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q5" id="2" value="2" />
                                                No, teasing me is their lookout, I am not generally offended.                                              
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>6. Do you listen to others carefully and then give your opinions?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q6" id="1" value="1" />
                                                I listen to them but don't always give any opinion of my own.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q6" id="2" value="2" />
                                                Yes, I listen to them and give my logical opinions amiably.                                             
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>7.	Do you find alternative solutions of any problem in general?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q7" id="1" value="1" />
                                                No, mostly I am unable to find solutions to various problems.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q7" id="2" value="2" />
                                                Yes, I often find various solutions for a specific problem.                                             
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>8.	Do you have independent thinking on any particular matter?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q8" id="1" value="1" />
                                                No, I am not always able to express my own independent views.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q8" id="2" value="2" />
                                                Yes, I mostly express my own views on the particular issue.                                           
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>9.	Do you have rich imagination power?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q9" id="1" value="1" />
                                                No, I can imagine but can't express in writing.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q9" id="2" value="2" />
                                                Yes, I may express my imagination power in writing, too.                                            
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>10.Do you think about your future career goal?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q10" id="1" value="1" />
                                                I have not thought of my career goals yet.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q10" id="2" value="2" />
                                                Yes, I want to be a professional/businessman/ government employee in my career.                                           
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>11.How do you take decisions in your daily life?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q11" id="1" value="1" />
                                                I don't take decisions of my own; I need support.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q11" id="2" value="2" />
                                                I take decisions logically; form my own opinions and act accordingly.                                       
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>12.How do you consider the problem in your studies?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q12" id="1" value="1" />
                                                I get disturbed and become afraid of the problems.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q12" id="2" value="2" />
                                                I consider problems as the opportunity to succeed and I think of alternatives to solve it.                                           
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>13.How do you communicate with others?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q13" id="1" value="1" />
                                                I hesitate in expressing my feelings to others.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q13" id="2" value="2" />
                                                I communicate with others freely and friendly.                                         
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>14.Do you think about your future career goal?How do you interact with your peers and teachers?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q14" id="1" value="1" />
                                                I am scared to talk with them.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q14" id="2" value="2" />
                                                I interact with them cheerfully and friendly.                                       
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>15.How do you deal with the stressful situations?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q15" id="1" value="1" />
                                                I am disturbed and become hopeless in adverse situations.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q15" id="2" value="2" />
                                                I react positively and remain calm under adverse situations.                                           
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>16.How do you communicate in your class?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q16" id="1" value="1" />
                                                I remain quiet in my class but bold on the playground and outside.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q16" id="2" value="2" />
                                                I rarely participate in the discussion in my class and prefer to communicate face-to-face.                                        
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q16" id="3" value="3" />
                                                I often listen to and speak easily and effortlessly in my class.                                        
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>17.What is your hobby and pastime?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q17" id="1" value="1" />
                                                I enjoy outdoor games and sporting events.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q17" id="2" value="2" />
                                                I love to give time on computer, video games and TV sports.                                      
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q17" id="3" value="3" />
                                                I am chosen for leading roles in school programs and love to read books.                                      
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>18.How is your indoor activity?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q18" id="1" value="1" />
                                                I present my homework casually and sometimes incomplete.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q18" id="2" value="2" />
                                                I present my homework with acceptable and neat paperwork.                                           
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q18" id="3" value="3" />
                                                I produce beautiful art projects, and present school H.W. neatly with good handwriting.                                           
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>19.How is your outdoor activity?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q19" id="1" value="1" />
                                                I prefer playground games like jumping ropes, etc.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q19" id="2" value="2" />
                                                I am a game leader and team captain and excel at every sport.                                           
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q19" id="3" value="3" />
                                                I am best in badminton and like non-contact games like running, bicycling.                                          
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>20.How is your social skill?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q20" id="1" value="1" />
                                                I require frequent teacher assistance and often touch the person whom I talk.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q20" id="2" value="2" />
                                                I am self-motivated & loner within the group.                                           
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q20" id="3" value="3" />
                                                I am very sociable, like group activities and motivated by the opinions of my friends.                                           
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>21.How do you express your emotions?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q21" id="1" value="1" />
                                                I become impatient, moody and easily frustrated.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q21" id="2" value="2" />
                                                I feel uncomfortable while displaying emotions.                                          
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q21" id="3" value="3" />
                                                I express my feelings freely by talking and remain sympathetic to my friends.                                          
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>22.How is your memorizing skill?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q22" id="1" value="1" />
                                                I memorize by actions and movements.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q22" id="2" value="2" />
                                                I memorize by writing and using mental pictures.                                           
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q22" id="3" value="3" />
                                                I talk to myself, listen to my inner voice and I memorize jingles, poems and facts well.                                          
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>23.How are you at school?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q23" id="1" value="1" />
                                                I excel in Science projects but need support in Reading, Maths and doing assignments.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q23" id="2" value="2" />
                                                I excel in English, Social Studies, Foreign language and Reading.                                        
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q23" id="3" value="3" />
                                                My desk is well-organized; I excel in Art, Maths, Science, Computer & Spellings.                                          
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>24.How many hours do you devote in self-study at your home?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q24" id="1" value="1" />
                                                My daily life is quite busier to devote time for self-study.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q24" id="2" value="2" />
                                                I study till the school homework is completed.                                          
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q24" id="3" value="3" />
                                                I devote extra time in self-study after finishing school assignments.                                           
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>25.What is your academic goal this year?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q25" id="1" value="1" />
                                                I want to excel by improving my grade to at least one step above.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q25" id="2" value="2" />
                                                My goal is to strengthen my basic weaknesses in Maths and Languages.                                          
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q25" id="3" value="3" />
                                                My goal is achieving 'A1' grade in all the subjects.                                         
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>26.How much time your parents support you in teaching at home?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q26" id="1" value="1" />
                                                He/She does not get regular time to support teaching me personally. 
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q26" id="2" value="2" />
                                                On weekends only                                        
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q26" id="3" value="3" />
                                                Average 1 hour daily                                         
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>27.What do you expect from the school in teaching to get excellent result?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q27" id="1" value="1" />
                                                The school should assign us with framing own questions after the chapter is completed.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q27" id="2" value="2" />
                                                The school should review &amp; revise the last chapter while teaching the present one.                                          
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q27" id="3" value="3" />
                                                The class should make groups of like-minded students to discuss the particular chapter.                                        
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>28.How do you prepare for the subject being taught in the school?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q28" id="1" value="1" />
                                                I don't get time to study the chapter in advance.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q28" id="2" value="2" />
                                                I study the particular chapter in advance.                                         
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q28" id="3" value="3" />
                                                I study the taught chapters with reference books and other sources.                                       
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>29.What is your revision method in studies at home?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q29" id="1" value="1" />
                                                I prepare the subject intensively just before the exam time. 
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q29" id="2" value="2" />
                                                I memorize the answers suggested and checked in the school by writing it down.                                        
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q29" id="3" value="3" />
                                                I make my own notes through flowcharts by different sources and revise comprehensively.                                         
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>30.Which are your most favorite subjects?</b></h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q30" id="1" value="1" />
                                                Languages, S.St., Arts
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q30" id="2" value="2" />
                                                Maths, Science, Computing
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="q30" id="3" value="3" />
                                                All the subjects
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>31.What is your present Grade in the school exam?</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q31" id="A" value="A" />
                                                A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q31" id="B" value="B" />
                                                B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q31" id="C" value="C" />
                                                C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q31" id="D" value="D" />
                                                D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q31" id="E" value="E" />
                                                E&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>32.Are you satisfied with your performance in the school results?</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q32" id="Yes" value="Yes" />
                                                Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q32" id="No" value="No" />
                                                No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>33.I help others.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q33" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q33" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q33" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q33" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q33" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>34.I make new friends very fast.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q34" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q34" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q34" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q34" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q34" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>35.I love solving puzzles, logical problems.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q35" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q35" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q35" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q35" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q35" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>36.I manage my time well during exams.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q36" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q36" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q36" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q36" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q36" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>37.I support my parents.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q37" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q37" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q37" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q37" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q37" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>38.I appear for various competitive exams.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q38" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q38" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q38" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q38" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q38" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>39.I respect other people.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q39" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q39" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q39" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q39" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q39" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>40.I love spending time on facebook, whatsapp etc.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q40" id="1" value="1" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q40" id="2" value="0.75" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q40" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q40" id="4" value="0.25" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q40" id="5" value="0" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>41.I am in the habit of reading books.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q41" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q41" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q41" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q41" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q41" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>42.I have good writing habits.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q42" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q42" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q42" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q42" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q42" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>43.I wake up early in the morning to study.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q43" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q43" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q43" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q43" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q43" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>44.I have good memory power.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q44" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q44" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q44" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q44" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q44" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>45.I manage my time to study sufficiently.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q45" id="1" value="0" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q45" id="2" value="0.25" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q45" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q45" id="4" value="0.75" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q45" id="5" value="1" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>46.I spend most of the time with mobile phones which should be avoided.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q46" id="1" value="1" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q46" id="2" value="0.75" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q46" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q46" id="4" value="0.25" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q46" id="5" value="0" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>47.I talk too much.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q47" id="1" value="1" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q47" id="2" value="0.75" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q47" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q47" id="4" value="0.25" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q47" id="5" value="0" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>48.I waste my time and my day by doing nothing valuable.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q48" id="1" value="1" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q48" id="2" value="0.75" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q48" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q48" id="4" value="0.25" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q48" id="5" value="0" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>49.I tell lies to conceal my shortcomings but I should improve thereon.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q49" id="1" value="1" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q49" id="2" value="0.75" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q49" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q49" id="4" value="0.25" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q49" id="5" value="0" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>50.I quarrel with my friends/brothers & sisters which I should avoid.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q50" id="1" value="1" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q50" id="2" value="0.75" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q50" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q50" id="4" value="0.25" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q50" id="5" value="0" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>51.I cheat my playmates while playing which is unfair.</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q51" id="1" value="1" />
                                                Never&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q51" id="2" value="0.75" />
                                                Sometimes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q51" id="3" value="0.5" />
                                                Generally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q51" id="4" value="0.25" />
                                                Most Often&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q51" id="5" value="0" />
                                                Always&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h4 id="Q11" align="left"><b>52.How much do you like the survey?</b></h4>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q52" id="1" value="0" />
                                                Boring &amp; Lengthy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q52" id="2" value="0.25" />
                                                Fair&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q52" id="3" value="0.5" />
                                                Good&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q52" id="4" value="0.75" />
                                                Very Good&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="q52" id="5" value="1" />
                                                Excellent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input style="margin-left:650px;" type="submit" class="btn btn-primary" value="Submit" id="submit" />		
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>