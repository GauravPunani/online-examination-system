<?php
session_start();
if(isset($_SESSION['admin_name']) && isset($_SESSION['admin_id']) && isset($_SESSION['exam_id']) && isset($_SESSION['user_name']))
{
    include("connection.php");
$sql="SELECT * FROM `questions`";
$res=mysqli_query($conn,$sql);
if($res==true)
{
    $questions="";
    while($row=mysqli_fetch_assoc($res))
    {
        $questions.="
<fieldset id='que_".$row['que_id']."' class='que'>
<h3>".$row['que']."</h3>
    <input type='radio' value='1' name='que".$row['que_id']."'> ".$row['opt1'].
"<br>

<input type='radio' value='2' name='que".$row['que_id']."'> ".$row['opt2']."
<br>

<input type='radio' value='3' name='que".$row['que_id']."'> ".$row['opt3']."
<br>

<input type='radio' value='4' name='que".$row['que_id']."'> ".$row['opt4']."

</fieldset>
        ";
    }
}
}
else
{
    header("Location:administrator.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
       
    fieldset
      {
          display: none;
      }
      /* The Modal (background) */
.modal {
    display: none; /* Hidden befault */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left:
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 600px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}
.modal-body
{
    width: auto;
    height: auto;
    margin: 0;
    padding: 0;
}
#gif
{
    width: 100%;
    padding: 0;
    margin: 0;
    height: 240px;
}
.functions
{
    background-color: black;
    color:white;
    border: none;
    border-radius: 5px;
}
    </style>
</head>
<body>
  
   <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
    <h3> processing... </h3>
    </div>
    <div class="modal-body">
     <img src="loading.gif" id="gif" alt="">
     <h2 id="head_line" style="display:none; text-align: center;">Your data has been saved</h2>
    </div>
    <div style="display: none;" class="modal-footer">

        <a style="float: left; display: none;" id="logout" href="logout.php">LOGOUT</a>
        <a id="result" style="display:none; " href="result_new.php">CHECK RESULT</a>
    </div>
  </div>

</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 bg-red">
               <br><br>
               <div id="demo"></div>
                <form  name="que_form" id="que_form" >
                    <span><?php echo $questions; ?></span>
                </form>
                <ul class="pager">
                    <li class="previous"><a >Previous</a></li>
                    <li class="next"><a >Next</a></li>
                </ul>
                <button class="functions" id="clear">CLEAR</button>
                <button class="functions" id="reminder">REMIND ME</button>
                <button class="functions" id="clear_reminder">CLEAR REMINDER</button>
                <ul class="pager">
                    <li style="float:left;"  onclick="validate();"   id="myBtn"><a>Submit </a></li>
                </ul>
            </div>
            <div class="col-sm-6 bg-grey" id="buttons">
                    <div class="row">
                        <div class="col-sm-offset-5 col-sm-7">
                            <h2>Time Left <span style="color:red;" id="timer"></span></h2>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $("input[type=radio]").click(function(){
        console.log(index);
        console.log(this.value);
        $("#"+index).css("backgroundColor","green");
    });

    var que_ans=[];
    //validate form
    function validate()
    {
        //return confirm("Are you sure");
        //stopping the timer
        clearInterval(timer);
        //checking wether function is called or not
        console.log("call to validate")
        //storing user data
        for(var i=0; i <=99; i++)
        {
            que_ans.push(document.forms["que_form"]["que"+i].value)
            console.log(que_ans[i]) 
        }
        $("#myModal").show();
        var data=JSON.stringify(que_ans);

        $.ajax({
                type:"post",
                url:"try.php",
                data:{data:data},
                success:function(res)
                {
                    setTimeout(process,1000);
                    function process()
                    {
                        <?php
                            $_SESSION['can_id']=$_SESSION['exam_id'];
                            $_SESSION['can_name']=$_SESSION['user_name'];
                        ?>
                    console.log(res);
                    $(".modal-footer").show();
                    $("#gif").hide();
                    $("#head_line").show();
                    $("#result").show();
                    $("#logout").show();
                    $(".modal-header").text("DONE");
                    }

                }
            });
        
        return false;
    }
// Get the modal
var modal = document.getElementById('myModal');

    var index=0
   $(".next").click(go_next);
    $(".previous").click(go_previous);
    $("#clear").click(clear_data);
    $("#reminder").click(set_reminder);
    $("#clear_reminder").click(clear_reminder);
    function clear_data()
    {
        var input_name="que"+index;
        console.log(input_name)
        console.log("id while clearing is "+ index)
        $("input[name="+input_name+"]").prop('checked',false);
        var color=document.getElementById(index).style.backgroundColor;
        if(color!="red")
        {
        $("#"+index).css("backgroundColor","black");
        }
    }
    function go_next()
    {
        index++;
        if(index>99)
            {
                index=0;
            }
        console.log(index)
        $("fieldset").hide();
        $("fieldset").eq(index).show();
    }
    function go_previous()
    {
        index--;
        if(index <0)
            {
                index=99
            }
        console.log(index)
        $("fieldset").hide();
        $("fieldset").eq(index).show();
    }
    function set_reminder()
    {
        $("#"+index).css("backgroundColor","red");
    }
    function clear_reminder()
    {
        console.log("function called")
        var c=document.getElementById(index).style.backgroundColor;
        if(c!="green")
        {
        $("#"+index).css("backgroundColor","black");
        }
    }
    //showing the first question
    document.getElementsByTagName("fieldset")[0].style.display="block"
        create_buttons();

        //creatin timer
var s=0;
var m=0;
var h=1;
    var timer=setInterval(set_timer,1000)
    function set_timer()
    {
        --s;
        if(s<=0)
            {
                s=60;
                --m;
                if(m<=0)
                    {
                        m=59;
                        --h;
                        if(h<0)
                            {
                                clearInterval(timer)
                                validate();
                                console.log("completed")
                            }
                    }
            }
        document.getElementById("timer").innerHTML=h+":"+m+":"+s;
    }

    //100 buttons creation
    function create_buttons()
    {
        var css_string="margin:2px; width:40px; border:none; background-color:black; color:white";
        for(var i=0; i<=99; i++)
            {
        var a=document.createElement("button");
        var b=document.createTextNode(i+1);
        a.appendChild(b)
                a.setAttribute("id",i)
                a.setAttribute
                a.setAttribute("class","buttons")
                a.style.cssText=css_string;
        document.getElementById("buttons").appendChild(a);
            }
    }
for(var i=0; i<=99; i++)
    {
        document.getElementsByClassName("buttons")[i].onclick=change_fieldset;

    }
        function change_fieldset()
        {
            $("fieldset").hide();
            console.log("click event fired")
            index=this.id;
            console.log("id is" +index)
            
            document.getElementsByTagName("fieldset")[index].style.display="block";
        }

</script>