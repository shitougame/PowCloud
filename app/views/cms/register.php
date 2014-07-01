<style>
        /*@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);*/

    html {
        background: url(http://thekitemap.com/images/feedback-img.jpg) no-repeat;
        background-size: cover;
        height: 100%;
    }

    #feedback-page {
        text-align: center;
    }

    #form-main {
        width: 100%;
        float: left;
        padding-top: 0px;
    }

    #form-div {
        background-color: rgba(72, 72, 72, 0.4);
        padding-left: 35px;
        padding-right: 35px;
        padding-top: 35px;
        padding-bottom: 50px;
        width: 450px;
        float: left;
        left: 50%;
        position: absolute;
        margin-top: 30px;
        margin-left: -260px;
        -moz-border-radius: 7px;
        -webkit-border-radius: 7px;
    }

    .feedback-input {
        color: #3c3c3c;
        font-family: Helvetica, Arial, sans-serif;
        font-weight: 500;
        font-size: 18px;
        border-radius: 0;
        line-height: 22px;
        background-color: #fbfbfb;
        padding: 13px 13px 13px 54px;
        margin-bottom: 10px;
        width: 100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
        border: 3px solid rgba(68, 26, 26, 1);
    }

    .feedback-input:focus {
        background: #fff;
        box-shadow: 0;
        border: 3px solid #3498db;
        color: #3498db;
        outline: none;
        padding: 13px 13px 13px 54px;
    }

    .focused {
        color: #30aed6;
        border: #30aed6 solid 3px;
    }

        /* Icons ---------------------------------- */
    #name {
        background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
        background-size: 30px 30px;
        background-position: 11px 8px;
        background-repeat: no-repeat;
    }

    #name:focus {
        background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
        background-size: 30px 30px;
        background-position: 8px 5px;
        background-position: 11px 8px;
        background-repeat: no-repeat;
    }

    #password {
        background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
        background-size: 30px 30px;
        background-position: 11px 8px;
        background-repeat: no-repeat;
    }

    #password:focus {
        background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
        background-size: 30px 30px;
        background-position: 11px 8px;
        background-repeat: no-repeat;
    }

    #comment {
        background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
        background-size: 30px 30px;
        background-position: 11px 8px;
        background-repeat: no-repeat;
    }

    textarea {
        width: 100%;
        height: 150px;
        line-height: 150%;
        resize: vertical;
    }

    input:hover, textarea:hover,
    input:focus, textarea:focus {
        background-color: white;
    }

    #button-blue {
        font-family: 'Montserrat', Arial, Helvetica, sans-serif;
        float: left;
        width: 100%;
        border: #fbfbfb solid 4px;
        cursor: pointer;
        background-color: #3498db;
        color: white;
        font-size: 24px;
        padding-top: 22px;
        padding-bottom: 22px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        margin-top: -4px;
        font-weight: 700;
    }

    #button-blue:hover {
        background-color: rgba(0, 0, 0, 0);
        color: #0493bd;
    }

    .ease {
        width: 0px;
        height: 74px;
        background-color: #fbfbfb;
        -webkit-transition: .3s ease;
        -moz-transition: .3s ease;
        -o-transition: .3s ease;
        -ms-transition: .3s ease;
        transition: .3s ease;
    }

    .submit:hover .ease {
        width: 100%;
        background-color: white;
    }

    @media only screen and (max-width: 580px) {
        #form-div {
            left: 3%;
            margin-right: 3%;
            width: 88%;
            margin-left: 0;
            padding-left: 3%;
            padding-right: 3%;
        }
    }
</style>
<body>
<div style="text-align:center;clear:both">

</div>
<div id="form-main">
    <style>
        #form-div {

        }
    </style>
    <div id="form-div">


        <form action="<?php echo URL::action('LoginController@registerUser'); ?>" method="post">

            <p class="name"> 用户名：
                <input name="username" type="text" class="feedback-input" placeholder="您的江湖名称" id="name"/>
            </p>

            <p class="password"> 密码:
                <input name="password" type="password" class="feedback-input" id="password" placeholder="您的江湖暗号"/>
            </p>

            <p class="password"> 邮箱地址:
                <input name="email" type="email" class="feedback-input" id="email" placeholder="您的邮箱地址"/>
            </p>

            <p class="password"> 电话号码:
                <input name="tel" type="tel" class="feedback-input" id="tel" placeholder="您的电话号码"/>
            </p>

            <div class="submit">
                <input type="submit" value="起航" id="button-blue"/>
            </div>
        </form>
    </div>

</body>