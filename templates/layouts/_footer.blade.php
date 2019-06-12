<style>
    @media screen and (min-width: 600px) {
        /*当屏幕尺寸大于600px时，应用下面的CSS样式*/
        .dfc-content1 {
            width: 100%;
            display: table;
        }

        .dfcc-item1 {
            display: table-cell;
            width: 55%;
            text-align: center;
            letter-spacing: 10px;
            font-size: 21px;
            font-weight: 320;
            color: #8d8d8d;
        }

        .dfcc-item2 {
            display: table-cell;
            width: 28%;
            text-align: left;
        }
        .dfcc-item2 div:first-of-type span:last-of-type{
            position: relative;
            display: inline-block;
            top: -10px;
            font-size: 18px;
            color: #000000;
            opacity: .5;
        }
        .dfcc-item2 div:last-of-type{
            color: #ff9a3d;
            font-size: 25px;
            font-weight: 400;
        }
        .dfcc-item3 {
            display: table-cell;
            width: 17%;
            text-align: left;
        }

        .ewm-img {
            padding: 40px 40px 0 0;
            margin-right: 40px;
        }
        .ewm-text{
            font-size: 16px;
            color: #000000;
            opacity: .5;
            padding: 15px 0;
        }
        .dfc-content2{
            padding: 20px;
            color: #5a5a5a;
            opacity: .4;
            text-align: center;
            font-size: 16px;
            letter-spacing: 3px;
            font-weight: 320;
        }
    }

    @media screen and (max-width: 600px) {
        /*当屏幕尺寸小于600px时，应用下面的CSS样式*/
        .dfc-content1 {
            width: 100%;
        }

        .dfcc-item1 {
            width: 100%;
            text-align: center;
            letter-spacing: 10px;
            font-size: 18px;
            font-weight: 320;
            color: #8d8d8d;
            padding: 20px 0;
        }

        .dfcc-item2 {
            width: 50%;
            float: left;
            padding-top: 10px;
            text-align: center;
        }
        .dfcc-item2 div:first-of-type span:last-of-type{
            position: relative;
            display: inline-block;
            top: -10px;
            font-size: 16px;
            color: #000000;
            opacity: .5;
        }
        .dfcc-item2 div:last-of-type{
            color: #ff9a3d;
            font-size: 20px;
            font-weight: 400;
        }
        .dfcc-item3 {
            width: 50%;
            float: left;
            text-align: center;
        }

        .ewm-img {
            width: 40%;
            margin: 0 auto;
        }
        .ewm-text{
            font-size: 15px;
            color: #000000;
            opacity: .5;
            padding: 15px 0;
        }
        .dfc-content2{
            padding: 20px;
            color: #5a5a5a;
            opacity: .4;
            text-align: center;
            font-size: 15px;
            letter-spacing: 1px;
            font-weight: 320;
        }
    }
    .dd-footer {
        background: #d7d7d7;
    }
</style>
<div class="dd-footer">
    <div class="container">
        <div class="dfc-content1">
            <div class="dfcc-item1">优质到家服务提供商</div>
            <div class="dfcc-item2">
                <div>
					<span>
						<svg viewBox="0 0 1024 1024" version="1.1" p-id="4346" width="38" height="38"><path d="M512.894881 209.974245c-161.590282 0-292.574498 130.996496-292.574498 292.575522 0 79.141478 31.454386 150.822031 82.425268 203.514113 23.189142 20.87033 48.467875 39.283702 76.295664 53.749158 15.129582 7.828292 31.821753 15.749706 49.317219 22.912849 26.770713 8.012488 55.149041 12.421914 84.536348 12.421914 161.590282 0 292.575522-131.006729 292.575522-292.598035C805.470403 340.970742 674.486186 209.974245 512.894881 209.974245zM512.894881 751.250012c-137.321552 0-248.699222-111.354134-248.699222-248.699222 0-137.357368 111.37767-248.677732 248.699222-248.677732 137.368624 0 248.701269 111.320365 248.701269 248.677732C761.59615 639.894855 650.264529 751.250012 512.894881 751.250012z" p-id="4347" fill="#bebebe"/><path d="M353.463776 561.533137c165.769464 139.986241 318.887794 0 318.887794 0s0 144.807037-159.455665 144.807037C353.463776 706.340173 353.463776 561.533137 353.463776 561.533137z" p-id="4348" fill="#bebebe"/><path d="M512.894881 119.145587c-180.003654 0-331.008856 124.028804-372.268562 291.324018 0 0-103.272062 16.33606-98.702999 120.205733 4.569062 103.84716 113.489774 110.183472 113.489774 110.183472 1.307785 3.329838 24.198122-3.237741 32.419364-4.6366-16.96744-41.190121-26.40437-86.329181-26.40437-133.671419 0-194.112999 157.366074-351.467817 351.46577-351.467817 194.124256 0 351.445304 157.354817 351.445304 351.467817 0 154.884556-100.149954 286.307771-239.21829 333.098447-8.977465 3.053546-18.413372-1.00898-18.413372-1.00898s-23.556509-4.409426-53.105498 3.948939c-14.556531 4.155646-20.801768 19.677155-19.928888 33.267685 1.079588 16.186657 7.230682 27.826765 24.15412 30.399357 21.789259 3.421936 52.760644 7.30129 64.470337-16.003486 3.168156-6.337335 6.613628-18.069541 14.052041-20.594037 107.472733-36.528961 193.503109-119.43723 234.278791-224.845954 0 0 108.324124-12.673647 111.51684-112.547309 3.191692-99.839893-96.890724-117.53081-96.890724-117.53081C844.091002 243.312538 692.992679 119.145587 512.894881 119.145587z" p-id="4349" fill="#bebebe"/></svg>
					</span>
                    <span>联系客服</span>
                </div>
                <div>400-180-0707</div>
            </div>
            <div class="dfcc-item3">
                <div class="ewm-img">
                    <img src="{{ asset('assets/ldd/images/about_us/ewm.jpg') }}" class="img-sy" />
                </div>
                <div class="ewm-text">关注微信公众号</div>
            </div>
            <div class="fl-cl"></div>
        </div>
        <div class="dfc-content2"><a style="color: #5A5A5A;" href="http://beian.miit.gov.cn">鲁ICP备19015066号-1</a> 版权所有 ©landingdong.com</div>
    </div>
</div>