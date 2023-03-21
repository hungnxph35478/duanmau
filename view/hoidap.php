<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hỏi đáp</title>
    <style>
        html {
            font-family: sans-serif;
            font-size: 10px;
        }

        body {
            width: 100%;
            min-height: 100vh;
            font-size: 1.6rem;
            line-height: 140%;
            background-color: #f3f6f6;
            opacity: 0.3;
            /* background-image: repeating-radial-gradient(circle at 0 0, transparent 0, #f3f6f6 50px ), repeating-linear-gradient( #56d1b355, #56d1b3 ); */
            opacity: 1;
            display: grid;
            place-items: center;
        }

        .card {
            background: #fff;
            color: #333;
            margin: 15rem auto;
            width: 90%;
            max-width: 50rem;
            min-height: 30rem;
            border-radius: 2rem;
        }

        .hero {
            display: flex;
            justify-content: center;
            transform: translateY(-55%);
        }

        .hero .img {
            filter: drop-shadow(0rem 1.5rem rgba(0, 0, 0, 0.1));
            transition: 0.3s ease-out;
        }

        .card:hover .img {
            filter: drop-shadow(0rem 2.5rem rgba(0, 0, 0, 0.1));
        }

        .title {
            text-align: center;
            font-size: 5rem;
            padding: 1rem;
        }

        .faq {
            padding-top: 20px;
        }

        .acc-container {
            padding: 4rem 2rem;
        }

        .acc-btn {
            width: 100%;
            padding: 1.6rem 2rem;
            font-size: 1.6rem;
            cursor: pointer;
            background: inherit;
            border: none;
            outline: none;
            text-align: left;
            transition: all 0.5s linear;
        }

        .acc-btn:after {
            content: "\27A4";
            color: #fa8d0c;
            float: right;
            transition: all 0.3s linear;
        }

        .acc-btn.is-open:after {
            transform: rotate(90deg);
        }

        .acc-btn:hover,
        .acc-btn.is-open {
            color: #000;
            font-weight: bold;
        }

        .acc-content {
            max-height: 0;
            color: rgba(0, 0, 0, 0.75);
            font-size: 1.5rem;
            margin-top: 0 2rem;
            padding-left: 1rem;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
            border-bottom: 1px solid #ccc;
        }

        .credit {
            text-align: center;
            padding: 1rem;
        }

        .credit a {
            text-decoration: wavy underline;
            color: dodgerblue;
        }

        
    </style>
</head>

<body>

    <main class="card">
        <h2 class="title faq">FAQ</h2>

        <div class="acc-container">
            <button class="acc-btn">
                1. Mua sản phẩm Xshop Shop được bảo hành như thế nào?
            </button>
            <div class="acc-content">
                <p>
                    Để đảm bảo quyền lợi của quý khách hàng khi mua sản phẩm tại các
                    cửa hàng thuộc hệ thống cửa hàng FPT Shop. Chúng tôi cam kết tất
                    cả các sản phẩm được tuân theo các điều khoản bảo hành của sản
                    phẩm tại thời điểm xuất hóa đơn cho quý khách hàng. Các sản phẩm
                    điện thoại sẽ có chính sách bảo hành khác nhau tùy thuộc vào hãng
                    sản xuất. Khách hàng có thể bảo hành máy tại các cửa hàng FPT Shop
                    trên toàn quốc cũng như các trung tâm bảo hành chính hãng sản
                    phẩm. Khách hàng có thể truy cập đường dẫn sau để tìm kiếm địa chỉ
                    trung tâp bảo hoặc cửa hàng FPT Shop gần nhất:
                    fptshop.com.vn/ho-tro/chinh-sach-bao-hanh và
                    fptshop.com.vn/cua-hang Để tra cứu thông tin máy gửi bảo hành, quý
                    khách hàng có thể truy cập đường dẫn sau:
                    fptshop.com.vn/kiem-tra-bao-hanh
                </p>
            </div>

            <button class="acc-btn">
                2. Mua sản phẩm tại FPT Shop có được đổi trả không? Nếu được thì phí
                đổi trả sẽ được tính như thế nào?
            </button>
            <div class="acc-content">
                <p>
                    Đối với các sản phẩm ĐTDĐ, MTB, MTXT, SMARTWATCH (Áp dụng bao gồm
                    các sản phẩm Apple), sản phẩm cùng model, cùng màu, cùng dung
                    lượng. Trong tình huống sản phẩm đổi hết hàng, khách hàng có thể
                    đổi sang một sản phẩm khác tương đương hoặc cao hơn về giá trị so
                    với sản phẩm lỗi. Trường hợp khách hàng muốn trả sản phẩm: FPTShop
                    sẽ kiểm tra tình trạng máy và thông báo đến Khách hàng về giá trị
                    thu lại sản phẩm ngay tại cửa hàng. Để biết thêm thông tin chi
                    tiết, quý khách hàng truy cập đường dẫn bên dưới để nắm được phí
                    đổi trả chi tiết nhất.
                    fptshop.com.vn/ho-tro/chinh-sach-doi-san-pham
                </p>
            </div>

            <button class="acc-btn">
                3. FPT Shop có chính sách giao hàng tận nhà không? Nếu giao hàng tại
                nhà mà không ưng sản phẩm có được trả lại không?
            </button>
            <div class="acc-content">
                <p>
                    FPT Shop cam kết giao hàng toàn bộ 63 tỉnh thành, FPT Shop nhận
                    giao đơn hàng có thời gian hẹn giao tại nhà trước 20h00. Miễn phí
                    giao hàng với các đơn hàng trong bán kính 20km có đặt shop (Với
                    đơn hàng có giá trị nhỏ hơn 100.000đ sẽ thu phí 10.000đ) nhân viên
                    FPT Shop sẽ tư vấn chi tiết về cách thức giao nhận thuận tiện
                    nhất. Nếu quý khách hàng không ưng ý với sản phẩm khi nhận hàng,
                    quý khách có thể từ chối mua hàng mà không mất bất cứ chi phí nào.
                    Để biết thêm thông tin, quý khách có thể truy cập link bên dưới để
                    biết thêm thông tin chi tiết:
                    fptshop.com.vn/ho-tro/chinh-sach-giao-hang Lưu ý: Đối với các sản
                    phẩm còn nguyên seal, khách hàng muốn bóc seal sẽ phải thanh toán
                    100% giá trị sản phẩm. Nếu không ưng, FPT Shop sẽ hỗ trợ đổi sản
                    phẩm cho khách hàng theo chính sách đổi trả. Đối với các sản phẩm
                    không seal, quý khách hàng có thể kiểm tra máy mà không phải chịu
                    bất cứ chi phí nào nếu không mua.
                </p>
            </div>

            <button class="acc-btn">
                4. Làm thế nào để được mua hàng theo chính sách F.Friends?
            </button>
            <div class="acc-content">
                <p>
                    Để được mua hàng và hưởng quyền lợi theo chính sách mua hàng
                    F.Friends, quý khách hàng phải là hội viên. Để biết bạn có là hội
                    viên hay không, bạn cần biết doanh nghiệp bạn đang công tác đã ký
                    hợp đồng tham gia chương trình F.Friends hay chưa. Điều kiện tiếp
                    theo là bạn đã ký hợp đồng chính thức với doanh nghiệp đó chưa.
                    Nếu bạn đã là hội viên của chương trình này, bạn sẽ được hưởng ưu
                    đãi trả thẳng giảm 3% khi mua sản phẩm. Để được trả góp bạn phải
                    đủ 8 tháng công tác tại doanh nghiệp. Để biết thêm thông tin chi
                    tiết. Quý khách vui lòng truy cập vào đường link bên dưới:
                    fptshop.com.vn/ho-tro/ffriends
                </p>
            </div>

            <button class="acc-btn">
                5. FPT Shop có giao hàng tại nhà không ? Chất lượng sản phẩm có thay
                đổi không ?
            </button>
            <div class="acc-content">
                <p>
                    FPT Shop giao hàng miễn phí trên toàn quốc, cam kết giao hàng
                    trong 60 phút. Và chất lượng hoàn toàn đảm bảo, 100% hàng chính
                    hãng - nguyên seal khi đến tận tay Anh/ chị. Anh/chị có thể ấn nút
                    "Mua Ngay" hoặc gọi số tổng đài 1800 6601 để được hỗ trợ
                </p>
            </div>

            <button class="acc-btn">6. Tôi muốn kiểm tra Imei máy ?</button>
            <div class="acc-content">
                <p>
                    Để tìm IMEI của sản phẩm Apple mà bạn đang sử dụng hãy làm theo
                    các bước sau nhé.
                </p>
            </div>

            <button class="acc-btn">
                7. Tôi mua sản phẩm Apple tại FPT Shop sẽ có khác biệt gì ?
            </button>
            <div class="acc-content ft-cpr">
                <p>
                    FPT Shop là đại lý ủy quyền bán hàng Apple chính hãng tại Việt
                    Nam, FPT Shop chỉ bán 1 loại hàng hóa duy nhất là: Hàng chính
                    hãng.
                </p>
            </div>
        </div>
    </main>

    <script>
        const btns = document.querySelectorAll(".acc-btn");

        // fn
        function accordion() {
            // this = the btn | icon & bg changed
            this.classList.toggle("is-open");

            // the acc-content
            const content = this.nextElementSibling;

            // IF open, close | else open
            if (content.style.maxHeight) content.style.maxHeight = null;
            else content.style.maxHeight = content.scrollHeight + "px";
        }

        // event
        btns.forEach((el) => el.addEventListener("click", accordion));

        /*
           
               Jokes are from > 
                https://chartcons.com/100-funny-trick-questions-answers/
                Background image from > 
                https://www.magicpattern.design/tools/css-backgrounds
           
        */
    </script>
</body>

</html>