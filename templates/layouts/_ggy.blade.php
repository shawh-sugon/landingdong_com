<style>
    .xcy-box {
        padding: 70px 0;
        margin: 0;
    }
    .xcyb1{
        padding-bottom: 80px;
    }
    .xcyb1 .col-md-5{
        overflow: hidden;
    }
    .xcyb1 .col-md-5 img{
        cursor: pointer;
        transition: all 0.6s;
    }
    .xcyb1 .col-md-5 img:hover{
        transform: scale(1.1);
    }
    .xcyb2 .col-md-5{
        overflow: hidden;
    }
    .xcyb2 .col-md-5 img{
        cursor: pointer;
        transition: all 0.6s;
    }
    .xcyb2 .col-md-5 img:hover{
        transform: scale(1.1);
    }
    @media screen and (min-width: 600px) {
        /*当屏幕尺寸大于600px时，应用下面的CSS样式*/
        .xcyb1 .col-md-7{
            padding-left: 75px;
        }
        .xcyb1 .col-md-7 div:first-of-type{
            font-size: 30px;
            font-weight: 280;
            color: #333333;
            padding: 120px 0 40px 0;
        }
        .xcyb1 .col-md-7 div:last-of-type{
            font-size: 23px;
            font-weight: 280;
            color: #333333;
            line-height: 50px;
        }
        .xcyb2 .col-md-7{
            padding-left: 17%;
        }
        .xcyb2 .col-md-7 div:first-of-type{
            font-size: 30px;
            font-weight: 280;
            color: #333333;
            padding: 120px 0 40px 0;
        }
        .xcyb2 .col-md-7 div:last-of-type{
            font-size: 23px;
            font-weight: 280;
            color: #333333;
            line-height: 50px;
        }
        .pdm-pc{
            display: block;
        }
        .pdm-web{
            display: none;
        }
    }

    @media screen and (max-width: 600px) {
        /*当屏幕尺寸小于600px时，应用下面的CSS样式*/
        .pdm-pc{
            display: none;
        }
        .pdm-web{
            display: block;
        }
        .xcyb1 .col-md-7{
            /*padding-left: 75px;*/
        }
        .xcyb1 .col-md-7 div:first-of-type{
            font-size: 26px;
            font-weight: 280;
            color: #333333;
            padding: 70px 15px 40px 15px;
        }
        .xcyb1 .col-md-7 div:last-of-type{
            font-size: 21px;
            font-weight: 280;
            color: #333333;
            line-height: 40px;
        }
        .xcyb2 .col-md-7{
            /*padding-left: 75px;*/
        }
        .xcyb2 .col-md-7 div:first-of-type{
            font-size: 26px;
            font-weight: 280;
            color: #333333;
            padding: 70px 15px 40px 15px;
        }
        .xcyb2 .col-md-7 div:last-of-type{
            font-size: 21px;
            font-weight: 280;
            color: #333333;
            line-height: 40px;
        }
    }
</style>
<div class="xcy-box">
    <div class="row xcyb1" style="margin: 0;">
        <div class="col-md-5" style="padding-left: 0;padding-right: 0;">
            <img src="{{ asset('assets/ldd/images/second1/img4-1.jpg') }}" class="img-sy" />
        </div>
        <div class="col-md-7">
            <div>可信赖的到家服务</div>
            <div>以链接人与服务为宗旨，线上线下融合为途径，</br>
                通过网络信息技 术应用，匹配行业一流资源，</br>
                让居家服务产业信息化，集约化，规范化，品牌化,</br>
                为千万家庭提供优质可信赖的到家服务。
            </div>
        </div>
    </div>
    <div class="row xcyb2" style="margin: 0;">
        <div class="col-md-7">
            <div>解决百万就业</div>
            <div>通过输出品牌管理，信息系统，供应链，</br>
                标准化赋能中小家政服 务公司及服务人员，</br>
                终结游击队，建立生态圈，解决百万就业。
            </div>
        </div>
        <div class="col-md-5" style="padding-left: 0;padding-right: 0;">
            <img src="{{ asset('assets/ldd/images/second1/img4-2.jpg') }}" class="img-sy" />
        </div>
    </div>
</div>
<div>
    <img src="{{ asset('assets/ldd/images/second1/img5.jpg') }}" class="img-sy" />
</div>