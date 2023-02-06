var url = window.location.href;
// Addbody
function addBodyBottom(t) {
    const get_body = document.getElementsByTagName('body');
    get_body[0].insertAdjacentHTML('beforeEnd', `${t}`);
}

// Add Facebook Tracking Header

var meta = document.createElement("meta");
meta.name = "facebook-domain-verification";
meta.content = "uc5op39nax2wccyiwofwk8geln6caj";
document.getElementsByTagName("head")[0].appendChild(meta);

// ICO
// (function() {
//     var link = document.createElement('link');
//     link.type = 'image/x-icon';
//     link.rel = 'shortcut icon';
//     link.href = 'https://benhvienthammykangnam.vn/quangcao247/code_tracking/icon/kn_favicon.ico';

//     var t = document.getElementsByTagName('script')[0];
//     t.parentNode.insertBefore(link, t)
// })();


// Fix Event Call GA
if (document.querySelectorAll('.pop_callkn_1_0_0__mb')) {
    let items = document.querySelectorAll('.pop_callkn_1_0_0__mb');
    for (let item of items) {
        item.addEventListener('click', () => {
            gtag('event', 'touch', { event_category: 'Call', event_label: '19006466' });
            console.log('ok call');
        });
    }
}

if (document.querySelectorAll('.pop_callkn_1_1_0__more')) {
    let items = document.querySelectorAll('.pop_callkn_1_1_0__more');
    for (let item of items) {
        item.addEventListener('click', () => {
            gtag('event', 'touch', { event_category: 'Call', event_label: '19006466' });

            console.log('ok call');
        });
    }
}

// // Fix Icon Call
// if (document.querySelector('.siteHeaderCall img')) {
//     if (document.querySelector('.siteHeaderCall img').src == 'https://benhvienthammykangnam.com.vn/uu-dai/media/images/calsdl.png') {
//         document.querySelector('.siteHeaderCall img').src = 'https://benhvienthammykangnam.com.vn/css/images/call.svg';
//     }
// }
// if (document.querySelector('.regft img')) {
//     if (document.querySelectorAll('.regft img')[0].src == 'https://benhvienthammykangnam.com.vn/uu-dai/media/images/calsdl.png') {
//         document.querySelectorAll('.regft img')[0].src = 'https://benhvienthammykangnam.com.vn/css/images/icon-call.png';
//     }
//     if (document.querySelectorAll('.regft img')[1].src == 'https://benhvienthammykangnam.com.vn/uu-dai/media/images/flash.svg') {
//         document.querySelectorAll('.regft img')[1].src = 'https://benhvienthammykangnam.com.vn/css/images/flash.svg';
//     }
// }

// add footer_kn_1_0_0
// document.querySelector('body').insertAdjacentHTML('beforeend', `
// <div class="footer_kn_1_0_0__note">
//     <div class="container">
//         <span>Kết quả phụ thuộc vào cơ địa mỗi người(*)</span>
//     </div>
// </div>
// <footer class="footer_kn_1_0_0">
//     <div class="container">
//         <div class="footer_kn_1_0_0__wrapper">
//             <div class="footer_kn_1_0_0__left">
//                 <a href="/"> <img width="288px" height="90px" src="https://benhvienthammykangnam.com.vn/css/footer_kn_1_0_0/images/logoft2.svg?v=2" alt="logo"></a>
//                 <a class="footer_kn_1_0_0__bct" href="http://online.gov.vn/Home/WebDetails/69978" rel="nofollow" target="_blank"> <img width="288px" height="90px" src="https://benhvienthammykangnam.com.vn/css/footer_kn_1_0_0/images/bocongthuong.png" alt=""></a>
//             </div>
//             <div class="footer_kn_1_0_0__right">
//                 <div class="footer_kn_1_0_0__info">
//                     <span class="footer_kn_1_0_0__title">TP HCM</span>
//                     <div class="footer_kn_1_0_0__box">
//                         <span class="footer_kn_1_0_0__text address">
//                             <img width="15px" height="15px" src="https://benhvienthammykangnam.com.vn/css/footer_kn_1_0_0/images/location.svg" alt="">
//                             <a 
//                             href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+Th%E1%BA%A9m+M%E1%BB%B9+Kangnam+H%C3%A0n+Qu%E1%BB%91c/@10.7873808,106.6621278,17z/data=!4m13!1m7!3m6!1s0x31752fa0cfc24fdd:0x8b50e2061ac8ec72!2zNjY2IMSQLiBDw6FjaCBN4bqhbmcgVGjDoW5nIDgsIFBoxrDhu51uZyAxMSwgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!3b1!8m2!3d10.7873755!4d106.6643165!3m4!1s0x31752edf6f710189:0xb553f42d991d07dd!8m2!3d10.7872392!4d106.6643386" 
//                             rel="nofollow" target="_blank">
//                                 666 Cách mạng Tháng Tám, P.5, Q.Tân Bình
//                             </a>
//                         </span>                       
//                         <span class="footer_kn_1_0_0__text">
//                             <img width="15px" height="15px" src="https://benhvienthammykangnam.com.vn/css/footer_kn_1_0_0/images/phone.svg" alt="">
//                             <a rel="nofollow" target="_blank" href="tel:024.73.00.64.66">024.73.00.64.66</a>
//                         </span>
//                         <span class="footer_kn_1_0_0__text">
//                             <img width="15px" height="15px" src="https://benhvienthammykangnam.com.vn/css/footer_kn_1_0_0/images/phone.svg" alt="">
//                             <a rel="nofollow" target="_blank" href="tel:0948.44.99.88">0948.44.99.88</a>
//                         </span>
//                     </div>
//                 </div>

//                 <div class="footer_kn_1_0_0__info">
//                     <span class="footer_kn_1_0_0__title">Hà Nội</span>
//                     <div class="footer_kn_1_0_0__box">
//                         <span class="footer_kn_1_0_0__text address">
//                             <img width="15px" height="15px" src="https://benhvienthammykangnam.com.vn/css/footer_kn_1_0_0/images/location.svg" alt="">
//                             <a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+Th%E1%BA%A9m+M%E1%BB%B9+Kangnam+H%C3%A0n+Qu%E1%BB%91c/@21.0004462,105.8284237,17z/data=!4m8!1m2!2m1!1zQuG7h25oIFZp4buHbiBUaOG6qW0gTeG7uSBLYW5nbmFtIA!3m4!1s0x3135ab920d07ad6b:0xaeafc086533191b!8m2!3d21.0004112!4d105.8306137"
//                             rel="nofollow" target="_blank">
//                             190A+B Trường Chinh, P.Khương Thượng, Q.Đống Đa, TP.Hà Nội
//                             </a>
//                         </span>
//                         <span class="footer_kn_1_0_0__text">
//                             <img width="15px" height="15px" src="https://benhvienthammykangnam.com.vn/css/footer_kn_1_0_0/images/phone.svg" alt="">
//                             <a rel="nofollow" target="_blank" href="tel:024.73.00.64.66">024.73.00.64.66</a>
//                         </span>
//                         <span class="footer_kn_1_0_0__text">
//                             <img width="15px" height="15px" src="https://benhvienthammykangnam.com.vn/css/footer_kn_1_0_0/images/phone.svg" alt="">
//                             <a rel="nofollow" target="_blank"  href="tel:0968.999.777">0968.999.777</a>
//                         </span>
//                     </div>
//                 </div>
//             </div>
//         </div>
//         <div class="footer_kn_1_0_0__bottom">
//             <a href="tel:19006466">
//                 <p>Bác sĩ tư vấn (24/7): </p> 1900.6466
//             </a>
//             <span>CÔNG TY TNHH BỆNH VIỆN THẨM MỸ KANGNAM</span>
//             <span>Giấy chứng nhận đăng ký doanh nghiệp số: 0312155633 do Phòng Đăng ký kinh doanh - Sở Kế hoạch và Đầu tư TP. Hồ Chí Minh cấp ngày 06/02/2013</span>
//             <span>Giấy phép hoạt động khám bệnh, chữa bệnh số: 181/BYT - GPHĐ do Bộ Y tế cấp ngày 27/02/2019 Email: benhvienthammykangnam@kangnam.com.vn</span>
//             <span class="footer_kn_1_0_0__policy">
//                 <a href="https://benhvienthammykangnam.com.vn/chinh-sach-bao-mat/" target="_blank" rel="nofollow">Chính sách bảo mật</a>
//                 |
//                 <a href="https://benhvienthammykangnam.com.vn/chinh-sach-khach-hang/" target="_blank" rel="nofollow">Chính sách khách hàng</a>
//                 |
//                 <a href="https://benhvienthammykangnam.com.vn/phuong-thuc-cung-ung-dich-vu/" target="_blank" rel="nofollow">Phương thức cung ứng dịch vụ</a>
//                 |
//                 <a href="https://benhvienthammykangnam.com.vn/dieu-khoan-su-dung/" target="_blank" rel="nofollow">Điều khoản sử dụng</a>
//                 |
//                 <a href="https://benhvienthammykangnam.com.vn/phuong-thuc-thanh-toan/" target="_blank" rel="nofollow">Phương thức thanh toán</a>

//             </span>
//         </div>
//     </div>
// </footer>
// <style>
//     .footer_5_0_0,.refuse,.foot{display:none}
//     .footer_kn_1_0_0{background:url(https://benhvienthammykangnam.com.vn/css/footer_kn_1_0_0/images/ft-bg.jpg) 0 center;padding:40px 0}
//     .footer_kn_1_0_0__note{width:100%;position:fixed;bottom:0;background:rgba(0,87,134,0.6);padding:5px 0;color:#fff;z-index:3}
//     .footer_kn_1_0_0 span,.footer_kn_1_0_0 a{color:#fff;font-size:14px}
//     .footer_kn_1_0_0__wrapper{display:flex;width:100%;margin-bottom:30px;gap:10%}
//     .footer_kn_1_0_0__left{display:flex;flex-direction:column;width:20%;gap:20px}
//     .footer_kn_1_0_0__left a{display:block}
//     .footer_kn_1_0_0__left a img{width:100%;display:block;height:auto}
//     .footer_kn_1_0_0__bct{width:80%}
//     .footer_kn_1_0_0__right{display:flex;gap:40px;width:80%}
//     .footer_kn_1_0_0__info{width:40%}
//     .footer_kn_1_0_0__title{border-bottom:1px solid #0072e6;padding:0 0 10px;text-transform:uppercase;font-weight:600;font-size:16px;display:block}
//     .footer_kn_1_0_0__box{margin-top:20px;display:flex;flex-direction:column;gap:15px}
//     .footer_kn_1_0_0__text{display:flex}
//     .footer_kn_1_0_0__text img{margin-right:8px;margin-top:3px}
//     .footer_kn_1_0_0__text.address a{color:#F26649}
//     .footer_kn_1_0_0__bottom{margin-top:10px;text-align:center}
//     .footer_kn_1_0_0__bottom a{text-transform:uppercase;margin-bottom:10px;display:block;font-size:13px}
//     .footer_kn_1_0_0__bottom p{display:inline;color:#f69679;font-size:14px}
//     .footer_kn_1_0_0__bottom span{display:block;font-size:13px}
//     .footer_kn_1_0_0__policy{margin-top:10px;text-decoration:underline}
//     .footer_kn_1_0_0__policy a{display:inline;text-transform:none}
//     @media (max-width: 912px) {
//     .footer_kn_1_0_0__left{width:40%}
//     }
//     @media (max-width: 767px) {
//     .footer_kn_1_0_0__text.address a{font-size:13px}
//     .footer_kn_1_0_0__note{position:unset;background:#033c9a;font-size:13px}
//     .footer_kn_1_0_0{padding-bottom:60px}
//     .footer_kn_1_0_0__wrapper{flex-wrap:wrap}
//     .footer_kn_1_0_0__left{width:50%;margin:0 auto;gap:10}
//     .footer_kn_1_0_0__bct{margin:0 auto;width:110px}
//     .footer_kn_1_0_0__right{margin-top:20px;flex-wrap:wrap;gap:20px;width:100%}
//     .footer_kn_1_0_0__info{width:100%}
//     .footer_kn_1_0_0__box{margin-top:10px;gap:3px}
//     .footer_kn_1_0_0__bottom a,.footer_kn_1_0_0__bottom p,.footer_kn_1_0_0__bottom span{font-size:12px}
//     .footer_kn_1_0_0__text{font-size:12px}
//     }
//     @media (max-width: 320px) {
//     .footer_kn_1_0_0__left{width:80%}
//     }
// </style>
// `);