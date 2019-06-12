<style>
    .header1 {
        width: 100%;
        padding: 4.5rem 0;
    }

    .img-div1 {
        width: 23%;
        margin: 0 auto;
        text-align: center;
    }

    .header2 {
        width: 100%;
        background: #FFFFFF;
        padding: 1.5rem 0;
        position: fixed;
        /*box-shadow: 0 3px 4px -4px #5A5A5A;*/
        z-index: 99;
    }

    .h2-img {
        width: 40%;
        margin-left: 3rem;
    }

    .h2-r {
        line-height: 5rem;
    }

    .h2-r a {
        color: #383838;
        font-size: 1.6rem;
        margin: 0 1.5rem;
    }

    @media screen and (max-width: 600px) {
        /*当屏幕尺寸小于600px时，应用下面的CSS样式*/
        #head1 {
            display: none;
        }
        #head2 {
            display: block;
        }
        .footer-box {
            display: none;
            padding: 2rem 0;
        }
        .footer1-box {
            display: block;
            padding: 2rem 0;
        }
    }

    @media screen and (min-width: 600px) {
        /*当屏幕尺寸大于600px时，应用下面的CSS样式*/
        .header2{
            top: 40px;
        }
        #head1 {
            display: block;
        }
        #head2 {
            display: none;
        }
        .footer1-box {
            display: none;
            padding: 2rem 0;
        }
        .footer-box {
            display: block;
            padding: 3rem 0;
        }
    }

    .head-pc-top {
        height: 40px;
        line-height: 40px;
        width: 100%;
        background: #b3b3b3;
        position: fixed;
        top: 0px;
        z-index: 9999;
        text-align: right;
        color: #FFFFFF;
    }
    .hpt-span1{
        display: inline-block;
        position: relative;
        top: 3px;
        margin-right: 10px;
    }
    .hpt-span2{
        display: inline-block;
        position: relative;
        top: 3px;
        margin-right: 10px;
    }
    .hpt-span3{
        display: inline-block;
        position: relative;
        top: 3px;
        margin-right: 20px;
    }
    .hpt-span4{
        display: inline-block;
        position: relative;
        top: 3px;
    }
    .ewm-show{
        position: absolute;
        width: 800%;
        top: 40px;
        left: -220%;
        display: none;
    }
    .yx-show{
        position: absolute;
        width: 900%;
        top: 40px;
        left: -220%;
   		background: #666666;
        display: none;
    }
</style>
<!--头部1logo start-->
<div id="head1">
    <div class="head-pc-top">
        <div class="container">
			<span class="hpt-span1">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" t="1552547201943" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" p-id="2560" width="18" height="18"><defs><style type="text/css"/></defs><path d="M693.12 347.264c11.776 0 23.36 0.896 35.008 2.176-31.36-146.048-187.456-254.528-365.696-254.528C163.2 94.912 0 230.656 0 403.136c0 99.52 54.272 181.248 145.024 244.736L108.8 756.864l126.72-63.488c45.312 8.896 81.664 18.112 126.912 18.112 11.392 0 22.656-0.512 33.792-1.344-7.04-24.256-11.2-49.6-11.2-76.032 0.064-158.336 136-286.848 308.096-286.848z m-194.816-98.24c27.392 0 45.376 17.984 45.376 45.248 0 27.136-17.984 45.312-45.376 45.312-27.072 0-54.336-18.176-54.336-45.312 0-27.328 27.2-45.248 54.336-45.248z m-253.632 90.56c-27.2 0-54.592-18.176-54.592-45.312 0-27.264 27.392-45.248 54.592-45.248s45.248 17.92 45.248 45.248c0 27.136-18.048 45.312-45.248 45.312zM1024 629.76c0-144.896-145.024-262.976-307.904-262.976-172.48 0-308.224 118.144-308.224 262.976 0 145.28 135.808 262.976 308.224 262.976 36.096 0 72.512-9.024 108.736-18.112l99.392 54.528-27.264-90.624C969.728 783.872 1024 711.488 1024 629.76z m-407.872-45.376c-17.984 0-36.224-17.92-36.224-36.224 0-18.048 18.24-36.224 36.224-36.224 27.52 0 45.376 18.176 45.376 36.224 0 18.304-17.856 36.224-45.376 36.224z m199.36 0c-17.856 0-36.032-17.92-36.032-36.224 0-18.048 18.112-36.224 36.032-36.224 27.264 0 45.376 18.176 45.376 36.224 0 18.304-18.112 36.224-45.376 36.224z" p-id="2561" fill="#828282"/></svg>
				<div class="ewm-show">
					<img src="{{ asset('assets/ldd/images/about_us/ewm.jpg') }}" class="img-sy"/>
				</div>
			</span>
            <span class="hpt-span2">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" t="1552547230257" class="icon" style="" viewBox="0 0 1079 1024" version="1.1" p-id="3392" width="19" height="18"><defs><style type="text/css"/></defs><path d="M0 0zM808.4 534.11c-11.157-2.238-18.396-5.579-21.727-10.023s-3.886-8.537-1.68-12.27l3.35-5.568c0.744-0.743 1.486-1.856 2.249-3.351 0.763-1.496 2.248-4.661 4.464-9.486 2.217-4.826 3.887-9.662 5.033-14.488s2.073-10.775 2.784-17.838 0.526-13.755-0.568-20.086c-1.094-6.332-3.33-13.199-6.712-20.623-3.382-7.424-8.033-14.116-13.952-20.086-10.414-10.415-23.994-17.116-40.708-20.086-16.725-2.97-33.45-3.166-50.164-0.567-16.724 2.598-32.522 5.939-47.38 10.022-14.869 4.093-27.128 7.991-36.79 11.703l-14.488 6.713c-7.445 2.237-13.58 3.722-18.416 4.464-4.825 0.743-8.547 0.547-11.167-0.567s-4.66-2.237-6.135-3.351c-1.473-1.114-2.031-3.723-1.68-7.816 0.361-4.093 0.721-7.62 1.104-10.6 0.381-2.97 1.309-7.62 2.784-13.951s2.598-11.353 3.351-15.055c0-8.92-0.556-17.282-1.68-25.087-1.124-7.805-3.537-16.529-7.25-26.19-3.711-9.662-9.093-17.457-16.167-23.407-7.074-5.95-15.983-10.775-26.757-14.487-10.776-3.712-24.716-4.826-41.823-3.352-17.107 1.475-36.429 5.94-57.98 13.384-26.026 8.92-52.412 22.107-79.18 39.574-26.757 17.457-49.988 35.667-69.683 54.629-19.695 18.962-37.73 37.357-54.093 55.196-16.364 17.838-29.005 32.336-37.924 43.493l-12.27 17.838c-24.53 31.975-42.73 63.94-54.628 95.915-11.898 31.975-17.467 56.124-16.736 72.467v23.407c4.475 35.677 15.436 67.651 32.893 95.915 17.456 28.263 38.275 51.123 62.444 68.58s52.609 32.325 85.316 44.606c32.707 12.27 64.115 21.2 94.234 26.757 30.12 5.568 61.9 9.466 95.337 11.703 55.022 4.475 112.073 0.206 171.166-12.807 59.083-13.012 114.093-35.501 165.031-67.476s86.8-70.26 107.618-114.856c12.631-26.026 19.137-50.556 19.519-73.612 0.381-23.045-3.516-41.822-11.704-56.31-8.186-14.487-18.787-27.303-31.79-38.46-13.001-11.156-25.272-19.343-36.79-24.55-11.516-5.208-21.736-8.548-30.645-10.023l-0.01 0.063zM468.314 880.906c-80.283 3.712-148.481-11.91-204.595-46.854-56.114-34.944-84.17-79.18-84.17-132.695 0-52.783 27.881-98.317 83.634-136.593 55.752-38.274 124.147-59.279 205.171-63.012s149.41 9.641 205.172 40.142c55.753 30.49 83.634 72.127 83.634 124.89 0 53.525-28.439 101.658-85.316 144.398-56.876 42.75-124.703 65.97-203.49 69.683l-0.04 0.041z m-32.326-308.903c-21.55 2.237-40.873 7.26-57.98 15.055-17.107 7.806-30.49 16.725-40.141 26.757-9.662 10.043-17.838 20.818-24.55 32.326-6.714 11.517-11.364 22.85-13.952 34.006-2.588 11.156-4.269 21.375-5.032 30.645-0.763 9.27-1.134 16.518-1.104 21.725l1.104 8.92v4.464c0 2.237 0.752 6.692 2.248 13.384 1.495 6.681 3.547 12.816 6.135 18.416 2.587 5.588 6.867 11.724 12.805 18.416 5.95 6.681 13.013 12.26 21.2 16.735 49.072 23.788 94.791 31.026 137.16 21.725s76.561-30.676 102.586-64.115c10.415-12.631 17.292-28.253 20.623-46.854s2.577-37.368-2.248-56.31c-4.826-18.93-13.189-36.213-25.087-51.845-11.889-15.631-29.542-27.716-52.948-36.254-23.407-8.537-50.36-10.95-80.85-7.248l0.031 0.052z m-40.14 210.771c-4.475 0.732-8.745 0.928-12.807 0.567-4.073-0.36-7.785-1.103-11.167-2.248a121.244 121.244 0 0 1-10.023-3.887c-3.31-1.454-6.093-3.496-8.352-6.135-2.258-2.64-4.3-5.249-6.135-7.816-1.835-2.568-3.32-5.537-4.465-8.92-1.144-3.381-1.701-6.908-1.68-10.6 0-8.186 2.238-16.177 6.713-23.973s10.61-14.498 18.416-20.086c7.805-5.59 16.529-8.755 26.19-9.486 6.682-0.732 13.19-0.547 19.52 0.567 6.33 1.113 11.712 2.97 16.167 5.567 4.454 2.598 8.352 5.568 11.703 8.92 3.351 3.35 5.764 7.259 7.239 11.703 1.474 4.454 2.226 9.28 2.248 14.487 0 8.188-2.413 15.983-7.249 23.407-4.826 7.424-11.332 13.734-19.519 18.941s-17.106 8.188-26.757 8.92l-0.043 0.072z m94.769-80.283c-5.207 3.712-10.6 5.393-16.168 5.032-5.568-0.361-9.465-2.774-11.703-7.24l-2.248-4.464c-0.743-1.495-1.104-2.98-1.104-4.464v-4.465c0-2.238 0.371-4.094 1.104-5.568l2.248-4.464a7.145 7.145 0 0 1 3.35-3.352l3.351-4.464c5.95-4.476 11.703-6.332 17.272-5.568 5.568 0.763 9.465 3.732 11.703 8.919 2.238 2.97 3.166 6.32 2.784 10.022-0.381 3.712-1.495 7.239-3.35 10.6-1.857 3.351-4.268 6.517-7.239 9.486v-0.01z m395.847-233.064c4.475 0 8.57-1.113 12.27-3.351 3.712-2.237 6.68-5.022 8.919-8.352 2.238-3.33 3.722-6.867 4.464-10.6 0.743-0.732 1.104-1.856 1.104-3.351 8.92-84.758-20.818-133.077-89.202-144.976-20.076-3.712-38.667-4.083-55.774-1.103-5.207 0-9.672 1.299-13.383 3.887-3.712 2.588-6.878 5.94-9.487 10.023-2.62 4.093-3.918 8.362-3.887 12.806 0 7.445 2.61 13.766 7.816 18.942 5.208 5.186 11.529 7.795 18.942 7.815 57.99-13.394 89.213 5.197 93.667 55.774 1.496 12.63 0.753 24.52-2.248 35.676 0 7.445 2.61 13.766 7.817 18.942 5.207 5.186 11.528 7.795 18.952 7.816l0.03 0.052z m-18.94-314.43c-32.708-7.444-76.572-5.96-131.592 4.465-0.743 0-1.485 0.371-2.248 1.103l-1.104 2.248-1.104 1.103c-8.186 2.238-14.879 6.889-20.086 13.952-5.207 7.063-7.816 14.693-7.816 22.87 0 11.157 3.722 20.447 11.167 27.871 7.445 7.424 16.364 11.147 26.757 11.168h3.35c0.733 0 2.414-0.372 5.033-1.104 2.62-0.742 5.403-1.299 8.352-1.68 2.95-0.382 6.115-1.135 9.487-2.249s6.352-2.237 8.92-3.351c2.567-1.114 7.588-1.681 15.053-1.681 7.465 0 16.581 0.557 27.335 1.68 10.754 1.125 22.644 3.898 35.677 8.353 13.032 4.454 26.046 10.022 39.038 16.735 12.992 6.712 25.994 15.993 39.038 27.87 13.034 11.87 24.376 25.624 34.006 41.246 19.334 43.864 23.067 86.243 11.167 127.137 0 0.732-0.184 1.485-0.567 2.248-0.382 0.763-0.938 2.62-1.68 5.568s-1.486 5.733-2.249 8.352c-0.762 2.62-1.505 5.96-2.248 10.022-0.742 4.073-1.103 7.6-1.103 10.6 0 6.682 1.856 12.26 5.568 16.735 3.712 4.475 8.363 7.63 13.951 9.486s12.095 2.784 19.519 2.784c20.819 0 33.079-12.641 36.79-37.935 8.92-28.995 13.942-56.68 15.054-83.067 1.114-26.376-0.742-49.607-5.568-69.683-4.826-20.076-12.075-38.843-21.726-56.31-9.662-17.456-20.808-32.325-33.47-44.606-12.652-12.27-26.789-23.426-42.39-33.47-15.6-10.043-30.665-18.034-45.172-23.973-14.508-5.95-29.573-10.775-45.174-14.488h0.034v0.001z" p-id="3393" fill="#828282"/></svg>
			</span>
            <span class="hpt-span3">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" t="1552547289324" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" p-id="4214" width="17" height="17"><defs><style type="text/css"/></defs><path d="M916.970325 971.093333H106.303659c-58.026667 0-105.813333-47.786667-105.813334-105.813333V312.32C0.490325 252.586667 48.276992 204.8 106.303659 204.8h808.96c58.026667 0 105.813333 47.786667 105.813333 105.813333v552.96c1.706667 59.733333-46.08 107.52-104.106667 107.52zM106.303659 247.466667c-35.84 0-63.146667 29.013333-63.146667 63.146666v552.96c0 35.84 29.013333 63.146667 63.146667 63.146667h808.96c35.84 0 63.146667-29.013333 63.146666-63.146667V312.32c0-35.84-29.013333-63.146667-63.146666-63.146667H106.303659z m0 0" p-id="4215" fill="#828282"/><path d="M512.490325 716.8c-34.133333 0-69.973333-11.946667-97.28-35.84L7.316992 327.68c-8.533333-8.533333-10.24-20.48-1.706667-30.72 8.533333-8.533333 20.48-10.24 30.72-1.706667L442.516992 648.533333c39.253333 34.133333 100.693333 34.133333 139.946667 0l406.186666-353.28c8.533333-6.826667 22.186667-6.826667 30.72 1.706667s6.826667 22.186667-1.706666 30.72L609.770325 680.96C582.463659 704.853333 546.623659 716.8 512.490325 716.8z m0 0" p-id="4216" fill="#828282"/><path d="M119.956992 802.133333c-5.12 0-11.946667-1.706667-15.36-6.826666-8.533333-8.533333-6.826667-22.186667 1.706667-30.72l221.866666-192.853334c8.533333-6.826667 22.186667-6.826667 30.72 1.706667s6.826667 22.186667-1.706666 30.72l-221.866667 192.853333c-5.12 3.413333-10.24 5.12-15.36 5.12z m783.36 0c-5.12 0-10.24-1.706667-13.653333-5.12L669.503659 604.16c-8.533333-8.533333-10.24-20.48-1.706667-30.72 8.533333-8.533333 20.48-10.24 30.72-1.706667l220.16 191.146667c8.533333 8.533333 10.24 20.48 1.706667 30.72-5.12 5.12-11.946667 8.533333-17.066667 8.533333z m0 0" p-id="4217" fill="#828282"/></svg>
				<div class="yx-show">
					<a href="mailto:eric@landingdong.com" target="_blank">eric@landingdong.com
                     </a>
				</div>
			</span>
            <span class="hpt-span4">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" t="1552547619584" class="icon" style="" viewBox="0 0 1058 1024" version="1.1" p-id="10520" width="19" height="18"><defs><style type="text/css"/></defs><path d="M529.066667 962.56c-249.173333 0-450.56-201.386667-450.56-450.56s201.386667-450.56 450.56-450.56 450.56 201.386667 450.56 450.56-201.386667 450.56-450.56 450.56m0-962.56c-283.306667 0-512 228.693333-512 512s228.693333 512 512 512 512-228.693333 512-512-228.693333-512-512-512m242.346666 634.88c-3.413333-3.413333-10.24-6.826667-20.48-10.24-6.826667-3.413333-17.066667-10.24-23.893333-13.653333l-20.48-10.24s-3.413333-3.413333-10.24-6.826667c-3.413333-3.413333-10.24-6.826667-13.653333-6.826667-3.413333 0-6.826667-3.413333-10.24-3.413333-3.413333 0-10.24 3.413333-17.066667 10.24-6.826667 6.826667-13.653333 13.653333-20.48 23.893333-6.826667 6.826667-13.653333 17.066667-20.48 23.893334s-13.653333 10.24-17.066667 10.24c-3.413333 0-3.413333 0-6.826666-3.413334-3.413333 0-6.826667-3.413333-6.826667-3.413333-3.413333 0-3.413333-3.413333-10.24-3.413333-3.413333-3.413333-6.826667-3.413333-6.826667-3.413334-34.133333-17.066667-61.44-40.96-85.333333-61.44-23.893333-23.893333-44.373333-51.2-61.44-85.333333 0 0 0-3.413333-3.413333-6.826667s-3.413333-6.826667-3.413334-10.24c0 0 0-3.413333-3.413333-6.826666 0-3.413333-3.413333-6.826667-3.413333-6.826667 0-3.413333 3.413333-10.24 10.24-17.066667s13.653333-13.653333 23.893333-20.48c6.826667-6.826667 17.066667-13.653333 23.893333-20.48 6.826667-6.826667 10.24-13.653333 10.24-17.066666 0-3.413333 0-6.826667-3.413333-10.24-3.413333-3.413333-3.413333-6.826667-6.826667-13.653334-3.413333-3.413333-6.826667-6.826667-6.826666-10.24l-10.24-20.48c-3.413333-6.826667-6.826667-13.653333-13.653334-23.893333l-10.24-20.48c-6.826667-17.066667-13.653333-27.306667-20.48-27.306667h-6.826666c-6.826667 0-13.653333 0-23.893334 3.413334-10.24 3.413333-20.48 6.826667-23.893333 6.826666-10.24 3.413333-23.893333 20.48-37.546667 44.373334-13.653333 23.893333-17.066667 44.373333-17.066666 68.266666v20.48c0 6.826667 3.413333 13.653333 3.413333 20.48 3.413333 6.826667 3.413333 13.653333 6.826667 17.066667 0 3.413333 3.413333 10.24 6.826666 20.48s6.826667 17.066667 6.826667 17.066667c6.826667 23.893333 17.066667 44.373333 30.72 61.44 20.48 30.72 44.373333 61.44 78.506667 95.573333 34.133333 34.133333 64.853333 58.026667 95.573333 78.506667l61.44 30.72c3.413333 0 6.826667 3.413333 17.066667 6.826666s17.066667 6.826667 20.48 6.826667c3.413333 0 10.24 3.413333 17.066666 6.826667s13.653333 3.413333 20.48 3.413333h20.48c23.893333 0 44.373333-6.826667 68.266667-17.066667 23.893333-13.653333 37.546667-27.306667 44.373333-37.546666 3.413333-6.826667 6.826667-13.653333 6.826667-23.893334 3.413333-10.24 3.413333-20.48 3.413333-23.893333v-6.826667c-6.826667-10.24-13.653333-13.653333-30.72-23.893333" p-id="10521" fill="#ffffff"/></svg>
			</span>
            <span>400-180-0707</span>
        </div>
    </div>
    <script>
        $('.hpt-span1').mouseover(function(){
            $('.ewm-show').show();
        })
        $('.hpt-span1').mouseout(function(){
            $('.ewm-show').hide();
        })
        $('.hpt-span3').mouseover(function(){
            $('.yx-show').show();
        })
        $('.hpt-span3').mouseout(function(){
            $('.yx-show').hide();
        })
    </script>
    <!--头部1logo end-->
    <!--头部2logo start-->
    <header class="header2">
        <div class="container">
            <div class="h2-l col-md-4 col-xs-3">
                <div class="h2-img">
                    <img src="{{ asset('assets/ldd/images/index/logo.png') }}" class="img-sy" />
                </div>
            </div>
            <div class="h2-r col-md-8 col-xs-9" style="text-align: center;padding-left: 0;padding-right: 0;">
                <a id="index" href="{{ route('web.index') }}">首页</a>
                <a id="ab" href="{{ route('web.about_us') }}">关于我们</a>
                <a id="xmys" href="{{ route('web.funeng') }}">项目优势</a>
                <a id="ser" href="{{ route('web.service') }}">服务范围</a>
                <a id="new" href="{{ route('web.news') }}">新闻资讯</a>
                <a id="bus" href="{{ route('web.cooperation') }}">商务合作</a>
                <a id="sch" href="{{ route('web.second4') }}">商学院</a>
                <a id="fuw" >商城</a>
            </div>
        </div>
    </header>
    <div style="height:95px;"></div>
</div>
<!--头部2logo end-->

<!--头部3手机端 start-->
<style>
    .mobile-inner-nav a {
        -webkit-animation-duration: 0.5s;
        animation-duration: 0.5s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation-name: returnToNormal;
        animation-name: returnToNormal;
    }

    @-webkit-keyframes returnToNormal {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes returnToNormal {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }
</style>
<div id="head2">
    <div class="wrapper header2">
        <div class="wrapper-inner">
            <div class="mobile">
                <div class="mobile-inner">
                    <div class="mobile-inner-header">
                        <div style="width: 50%;float: left;height: 50px;line-height: 50px;text-align: left;">
                            <img src="{{ asset('assets/ldd/images/index/logo.png') }}" style="max-height: 30px;width: auto;overflow: hidden;margin-bottom: 0;margin-left: 15px;" />
                        </div>
                        <div class="mobile-inner-header-icon mobile-inner-header-icon-out" style="float: right;"><span></span><span></span></div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="mobile-inner-nav">
                        <a href="{{ route('web.index') }}">首页</a>
                        <a href="{{ route('web.about_us') }}">关于我们</a>
                        <a href="{{ route('web.funeng') }}">项目优势</a>
                        <a href="{{ route('web.service') }}">服务范围</a>
                        <a href="{{ route('web.news') }}">新闻资讯</a>
                        <a href="{{ route('web.cooperation') }}">商务合作</a>
                        <a href="{{ route('web.second4') }}">商学院</a>
                        <a >商城</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:50px;"></div>
</div>
