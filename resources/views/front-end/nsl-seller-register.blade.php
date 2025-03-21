<x-guest-layout>
    <style>
        .partnership-logos img {
            display: inline-block;
            max-width: 150px;
        }
        .partnership-separator {
            font-size: 2rem;
            vertical-align: middle;
        }
        .btn-furniture {
            padding: 12px 24px;
            font-size: 1rem;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            text-align: center;
            margin: 0 auto;
        }
        .btn-furniture:hover {
            background-color: #8d959e;
            color: #fff;
            border-color: #8d959e;
            text-decoration: none;
        }
        .btn-furniture i {
            margin-left: 8px;
        }
        .sign-up-box {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Sign Up</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="/">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Sign Up</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section class="log-in-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    {{-- English --}}
                    <div class="log-in-box" id="EnglishVersion">
                        <div class="log-in-title text-center">
                            <h3>Information For Seller Signing Up</h3>
                            <div class="title-header option-title" id="japaneseBtnDiv" style="display: flex; justify-content: flex-end;">
                                <button class="align-items-center btn btn-theme d-flex" id="japaneseBtn" style="background-color: var(--theme-color); color: #fff;">
                                    日本語で確認する
                                </button>
                            </div>
                        </div>

                        <div class="input-box">
                            &emsp;&emsp;&emsp;&emsp;Please register on <strong>New Style Life</strong> to begin your journey as a seller. 
                            By registering with us, your account details will be automatically synced to 
                            <strong>Made In Japan</strong> at 2:00 AM the following day, using the same 
                            information. This setup allows you to sell a variety of products from different 
                            countries on New Style Life, while Made In Japan is dedicated exclusively to products 
                            made in Japan. Register today and start showcasing your products on both platforms 
                            seamlessly.
                        </div>
                        <div class="partnership-logos my-4 text-center">
                            <img src="{{ asset('backend/assets/images/logo/mij_blogo.png') }}" class="img-fluid blur-up lazyload mx-2" alt="Made In Japan Logo">
                            <span class="partnership-separator mx-2">+</span>
                            <img src="{{ asset('backend/assets/images/logo/newstyle_logo.png') }}" class="img-fluid blur-up lazyload mx-2" alt="New Style Life Logo">
                        </div>
                        <div class="sign-up-box">
                            <a
                            href="https://new-style.life/seller/register"
                            target="_blank" style="width: 300px;"
                            class="btn btn-furniture mt-xxl-4 mt-3 home-button mend-auto">Register On New Style Life
                            <i class="fa-solid fa-right-long ms-2 icon"></i></a>
                        </div>
                    </div>
                    {{-- Japanese --}}
                    <div class="log-in-box" id="JapaneseVersion" style="display: none;">
                        <div class="log-in-title text-center">
                            <h3>販売者会員登録に関するお願い</h3>
                            <div class="title-header option-title" id="englishBtnDiv" style="display: flex; justify-content: flex-end;">
                                <button class="align-items-center btn btn-theme d-flex" id="englishBtn" style="background-color: var(--theme-color); color: #fff;">
                                    Check in English
                                </button>
                            </div>
                        </div>

                        <div class="input-box">
                            &emsp;&emsp;&emsp;&emsp;販売者会員登録を<strong>New Style Life</strong>モールに登録してください。
                            <strong>New Style Life</strong>モールに登録すると、翌日の午前 2 時に、販売者情報が自動的に
                            <strong>Made In Japan</strong> に同期されます。この設定により、<strong>New Style Life</strong>
                            モールで、世界各国の商品の販売もできるようになり、<strong>Made In Japan</strong>モールでは、
                            日本商品のみ販売できます。今すぐ販売者会員登録し、２つのECモールで、商品を販売してみてください。
                        </div>
                        <div class="partnership-logos my-4 text-center">
                            <img src="{{ asset('backend/assets/images/logo/mij_blogo.png') }}" class="img-fluid blur-up lazyload mx-2" alt="Made In Japan Logo">
                            <span class="partnership-separator mx-2">+</span>
                            <img src="{{ asset('backend/assets/images/logo/newstyle_logo.png') }}" class="img-fluid blur-up lazyload mx-2" alt="New Style Life Logo">
                        </div>
                        <div class="sign-up-box">
                            <a
                            href="https://new-style.life/seller/register"
                            target="_blank" style="width: 300px;"
                            class="btn btn-furniture mt-xxl-4 mt-3 home-button mend-auto">新生活に登録する
                            <i class="fa-solid fa-right-long ms-2 icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('japaneseBtn').addEventListener('click', function() {
            document.getElementById('EnglishVersion').style.display = 'none';
            document.getElementById('JapaneseVersion').style.display = 'block';
        });

        document.getElementById('englishBtn').addEventListener('click', function() {
            document.getElementById('JapaneseVersion').style.display = 'none';
            document.getElementById('EnglishVersion').style.display = 'block';
        });
    </script>
</x-guest-layout>