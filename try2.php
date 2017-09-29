<?php
session_start();
if(isset($_SESSION['admin_name']) && isset($_SESSION['admin_id']) && isset($_SESSION['can_id']) && isset($_SESSION['can_name']))
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
    <input type='radio' value='1' name='que".$row['que_id']."'>".$row['opt1'].
"<br>

<input type='radio' value='2' name='que".$row['que_id']."'>".$row['opt2']."
<br>

<input type='radio' value='3' name='que".$row['que_id']."'>".$row['opt3']."
<br>

<input type='radio' value='4' name='que".$row['que_id']."'>".$row['opt4']."

</fieldset>
        ";
    }
}
}
else
{
    header("Location:Administrator.php");
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
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
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
    width: 80%;
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

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
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
      
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
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
                    <li style="float:left;" onclick="validate();"   id="myBtn"><a>Submit </a></li>
                </ul>
            </div>
            <div class="col-sm-6 bg-grey" id="buttons">
                    <div class="row">
                        <div class="col-sm-offset-8 col-sm-4" id="timer">
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
        //checking wether function is called or not
        console.log("call to validate")
        //storing user data
        for(var i=0; i <=99; i++)
        {
            que_ans.push(document.forms["que_form"]["que"+i].value)
            console.log(que_ans[i]) 
        }
        var data=JSON.stringify(que_ans);
        $.ajax({
                type:"post",
                url:"try.php",
                data:{data:data},
                success:function(res)
                {
                    console.log(res);
                }
            });
        
        return false;
    }
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display ="none";
}


    var index=0
   $(".next").click(go_next);
    $(".previous").click(go_previous);
    $("#clear").click(clear_data);
    $("#reminder").click(set_reminder);
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
    document.getElementsByTagName("fieldset")[0].style.display="block"
        create_buttons();
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
                                console.log("completed")
                            }
                    }
            }
        document.getElementById("timer").innerHTML="<h3>"+h+":"+m+":"+s + "</h3>";
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