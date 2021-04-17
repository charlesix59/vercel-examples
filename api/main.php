<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>请假</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            h4{
            color: black;
            text-align: center;
            font-family:"微软雅黑",times,serif;
            font-weight: normal;
            margin-bottom: 2px;
            padding-bottom: 2px
            }
            div.main{
                font-family: "微软雅黑";
                text-indent:32px;
                font-size: 16px;
            }
            a{
                color: deepskyblue;
                font-size: 16px;
                font-weight:500;
            }
            h6{
                font-weight: normal;
                text-indent: 24px;
                font-size: 12px;
                color: gray;
            }
            div.top{
                background-image: linear-gradient(to right,#56d0ff,#3584fa);
                border-radius: 5px;
                font-size: 14px;
                color: white;
                padding: 10px;
                text-align: center;
                margin-bottom: 7px;
            }
            div.list{
                width: 82%;
                position: relative;
                left:10%;
                background-color: white;
                border: 1px #d6d6d6 solid;
                padding: 10px;
                line-height: 1.3em;
                font-size: 12px;
            }
            span.gray{
                font-size: 10px;
                color: #6d6d6d;
            }
            div.yellow{
                display: inline;
                text-align: center;
                background: #f7bd37;
                color: white;
                font-size: 14px;
                padding: 7px 3.5em;
                border-radius: 3px;
                position: relative;
            }
        </style>
    </head>
    <body bgcolor="#f6f6f6">
        <div class="top">请假申请已被批准通过，请结束后完成销假</div>
        <div style="position:absolute;text-align: center;float: left;width: 10%;">
            <div style="color:#d6d6d6;font-size: 17px">●</div>
            <div style="color:#d6d6d6;font-size: 17px;margin: -9px">|</div>
            <div style="color:#d6d6d6;font-size: 17px;margin: -9px">|</div>
            <div style="color:#d6d6d6;font-size: 17px;margin: -9px">|</div>
            <div style="color:#d6d6d6;font-size: 17px">●</div>
            <div style="color:#d6d6d6;font-size: 17px;margin: -10px">|</div>
            <div style="color:#d6d6d6;font-size: 17px;margin: -10px">|</div>
            <div style="color:#d6d6d6;font-size: 17px;margin: -10px">|</div>
            <div style="color:#d6d6d6;font-size: 17px;margin: -10px">|</div>
            <div style="color:#46a1fa;font-size: 17px">●</div>
        </div>
        <div class="list">
            <span class="gray">学生</span>
            <br>
            <?php 
            echo $_POST['name']."&nbsp;申请请假";
            ?>
            <span class="gray" style="position: absolute;right:2em"><?php echo $_POST['data1'] ?> &nbsp;20:20</span>
            <div style="position: absolute;right: 3px;bottom:15px;float:right;font-size: 16px;color: #53c295">○</div>
            <div style="position: absolute;right: 5px;bottom:16px;float:right;font-size: 16px;color: #53c295">√</div>
        </div>
        <div class="list">
            <span class="gray">辅导员</span>
            <br>
            <?php 
            echo $_POST['teacher']."&nbsp;审批请假";
            ?>
            <span class="gray" style="position: absolute;right:2em;"><?php echo $_POST['data1'] ?> &nbsp;20:20</span>
            <div style="position: absolute;right: 3px;bottom:15px;float:right;font-size: 16px;color: #53c295">○</div>
            <div style="position: absolute;right: 5px;bottom:16px;float:right;font-size: 16px;color: #53c295">√</div>
        </div>
        <div class="list">
            <span class="gray">学生</span>
            <br>
            <?php 
            echo $_POST['name']."&nbsp;销假申请";
            ?>
        </div>
        <main style="background-color:white;margin-bottom: 7px;margin-top: -13px;">
        <h4>请假申请</h4>
        尊敬的老师：
        <br>
        <br/>
        <?php
        echo "
        <div class='main'>本人<a>"
        .$_POST['class'].$_POST['name']."
        </a>因<a>事务</a>，需请<a>事假</a>，从<a>"
        .$_POST['data1']."-".$_POST['time1'].
        "</a> 至<a>"
        .$_POST['data1']."-".$_POST['time1'].
        "</a> ，不能参加累计<a>0</a>节课程的学习。</div>
        <div>请假期间，本人将去往<a>校外</a>，详细地址为：<a>青岛大学中心校区</a>，
            联系人<a>父亲</a>，联系电话<a style='text-decoration: underline'>"
            .$_POST['tel'].
            "</a> 。</div>"
            ?>
            <h6 style="margin-top:7px;">本人已签署<a style="font-size: 14px;text-decoration: underline;">承诺书</a>，承诺请假期间严格遵守国家法律法规和校规校纪相关规定，
            不参加任何非法游行、集会活动，一切安全事故责任自负，按时返校销假，
            请准假！
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            </h6>
        </main>
        <div class="yellow" style="left:5%;right: 5px">申请续假</div>
        <div class="yellow" style="left:5%;">申请销假</div>
    </body>
</html>
