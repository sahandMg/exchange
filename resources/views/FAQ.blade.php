@extends('master.layout')
@section('title')
    <title> اسم سایت - سوالات متداول</title>
@endsection
@section('content')
<section class="pb_section pb_slant-light" id="section-faq">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 text-center mb-5">
                <!--<h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>FAQ</strong></h5>-->
                <h2>سوالات متداول</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div id="pb_faq" class="pb_accordion" data-children=".item">
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq1" aria-expanded="true" aria-controls="pb_faq1" class="pb_font-22 py-4">نانا چیست ؟</a>
                        <div id="pb_faq1" class="collapse show" role="tabpanel">
                            <div class="py-3">
                                <p>نانا یک پلت فرم امن برای تبدیل رمز ارزهای موجود به یکدیگر است. کاربرد این پلت فرم برای تریدرهای فعال در این حوزه و سایر متقاضیان تبدیل رمزارزها به یکدیگر است. این پلت فرم با بهره گیری از نرخ های دقیق و بهنگام تبدیل رمزارزها، پاسخگوی متقاضیان این حوزه می باشد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq2" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-22 py-4">نانا چگونه کار میکند ؟</a>
                        <div id="pb_faq2" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>الگوریتم نانا با بزرگترین اکسچنج های فعال در این حوزه نظیر بایننس، چنجلی، پولونیکس و ... تلفیق شده است. این الگوریتم با مانیتور پیوسته ی نرخ سفارشات خرید و فروش در این اکسچنج ها، قیمت دقیق بازار را استخراج میکند و به عنوان معیار معامله به کار میگیرد. </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq3" aria-expanded="false" aria-controls="pb_faq3" class="pb_font-22 py-4">چرا باید به نانا اعتماد کرد ؟</a>
                        <div id="pb_faq3" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>دلیل اصلی اعتماد متقاضیان ما، ایرانی بودن این محصول است. تمامی فعالیت های مربوط به این اکسنچ در استارت آپ "نانا" و در کشور ایران در حال انجام و قابل پیگیری است. </p>
                                <p>دلایل دیگر :</p>
                                <p>تعداد قابل توجه معامله گران و متقضیانی که از طریق "نانا" اقدام به معامله کرده اند</p>
                                <p>عدم نیاز به بلوکه شدن پول متقاضیان برای تبادل رمزارزها</p>
                                <p>تبدیل آنی رمز ارزها پس از ثبت درخواست و واریز رمزارز جدید به کیف پول متقاضی</p>
                                <p>ارائه نرخ تبدیل دقیق با توجه به الگورتیم پیشرفته مانیتورینگ بازیگران اصلی بازار اکسچنج در سراسر دنیا</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq4" aria-expanded="false" aria-controls="pb_faq4" class="pb_font-22 py-4">دلیل نوسانات دائم در قیمت های موجود در سایت چیست ؟</a>
                        <div id="pb_faq4" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>همان طور که می دانید قیمت رمزارزها به صورت لحظه ای در حال نوسان است. با توجه به لزوم انجام معاملات با قیمت های همواره به روز شده، "نانا" همواره آخرین قیمت بازار را در سایت خود به نمایش می گذارد. </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq5" aria-expanded="false" aria-controls="pb_faq5" class="pb_font-22 py-4">چگونه می توان در "نانا" اقدام به ثبت نام نمود ؟</a>
                        <div id="pb_faq5" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>برای ثبت نام در "نانا" لازم است اقدام به ساخت اکانت با ایمیل معتبر نمایید. این اکانت محتوی مشخصات و لاگ مدیریتی معاملات انجام شده توسط کاربر میباشد. </p>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq6" aria-expanded="false" aria-controls="pb_faq6" class="pb_font-22 py-4">آیا برای ثبت نام نیاز به احراز هویت میباشد ؟</a>
                        <div id="pb_faq6" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>فعالیت های "نانا" کاملا منطبق بر قوانین رایج در مورد رمزارزها در کشور ایران میباشد. با توجه به عدم وجود الزام در مورد احراز هویت برای تبدیل رمزارزها به یکدیگر مطابق قوانین کشور، ضرورتی در مورد احراز هویت کاربران وجود ندارد. </p>
                                <p>توضیحات بیشتر : مطابق قوانین رایج در مورد رمز ارزها در کشور ایران، در اکسچنج ها فعال در زمینه تبدیل رمزارزها به ارزهای فیات نیاز به احراز هویت می باشد.</p>
                            </div>
                        </div>
                    </div>

                     <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq7" aria-expanded="false" aria-controls="pb_faq7" class="pb_font-22 py-4">پس از ثبت نام در سایت برای شروع معامله لازم است چه اقدامی انجام شود ؟</a>
                        <div id="pb_faq7" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>پیش از اقدام به معامله لازم است کاربر اقدام به ثبت آدرس کیف پول ارزهای تبادلی مورد نظر خود نماید.</p>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq8" aria-expanded="false" aria-controls="pb_faq8" class="pb_font-22 py-4">کیف پول دیجیتال چیست ؟</a>
                        <div id="pb_faq8" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>آدرس کیف پول مشابه کیف پول های سنتی ولی برای کاربری در حوزه رمزارزها و برای ذخیره و مبادلات انواع رمزارزها میباشد. هر یک از رمزارزها در کیف پول های مخصوص به خود قابلیت ذخیره سازی و مبادله دارند. این کیف پول های انواع مختلف نرم افزاری و سخت افزاری دارند. هر کیف پول شامل دو کلید عمومی و خصوصی مبیباشد. کلید عمومی جهت معرفی و استعلام موجودی دارنده کیف پول و کلید خصوصی جهت انجام تراکنش و مدیریت کیف پول می باشد. </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq9" aria-expanded="false" aria-controls="pb_faq9" class="pb_font-22 py-4">چگونه می توان اقدام به ساخت آدرس کیف پول نمود؟</a>
                        <div id="pb_faq9" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>برای این کار لازم است به سایت های ارائه دهنده سرویس کیف پول مراجعه نمایید و پس از ثبت نام در این سایت ها اقدام به دریافت کیف پول خود نمایید. توجه داشته باشید که کیف پول درخواستی از رمز مورد نظر شما پشتیبانی نماید.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq10" aria-expanded="false" aria-controls="pb_faq10" class="pb_font-22 py-4">حداقل و حداکثر میزان مبادله در نانا چقدر است ؟</a>
                        <div id="pb_faq10" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>محدودیتی در مورد حداکثر میزان مبادله وجود ندارد. در مورد حداقل میزان مبادله به رقم پیشنهادی در هنگام مبادله توجه کنید. در صورت اقدام به مبادله در حجم کمتر از مقدار حداقلی، امکان عدم تکمیل پروسه ی مبادله وجود دارد.</p>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq11" aria-expanded="false" aria-controls="pb_faq11" class="pb_font-22 py-4">سرعت مبادله در نانا چگونه تنظیم می شود ؟</a>
                        <div id="pb_faq11" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>سرعت مبادله بسته به حجم مجموع تراکنش های روی بلاک چین و میزان کارمزد شبکه در نظر گرفته شده در کیف پول شما دارد.</p>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq12" aria-expanded="false" aria-controls="pb_faq12" class="pb_font-22 py-4">کارمزد شبکه چیست ؟</a>
                        <div id="pb_faq12" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>برای انجام هر نوع مبادله ای لازم است اطلاعات مربوطه در شبکه بلاک چین مورد تایید واقع شده و ذخیره شوند. برای انجام این پروسه لازم است، معامله کننده اقدام به تخصیص مقداری از حجم کل معامله به عنوان کارمزد شبکه نماید. توجه داشته باشید که اگر حجم معامله ی مورد نظر از مقدار پیشنهادی کمتر باشد امکان عدم تکمیل پروسه و یا از دست رفتن ارزدیجیتال ارسالی توسط مخاطب شود.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq13" aria-expanded="false" aria-controls="pb_faq13" class="pb_font-22 py-4">چگونه می توان اقدام به لغو تراکنش پس از تایید نهایی نمود ؟</a>
                        <div id="pb_faq13" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>در نظر داشته باشید، با توجه به اینکه تمامی تراکنش ها بر بستر بلاک چین صورت می گیرد، به محض تایید نهایی، اطلاعات تراکنش بر روی شبکه ثبت و پس از مدتی به انجام می رسد. بنابراین امکان لغو تراکنش و بازگشت ارزدیجیتال ارسالی وجود ندارد. پس پیش از تایید نهایی تراکنش، از درست بودن آن اطمینان حاصل نمایید.</p>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq14" aria-expanded="false" aria-controls="pb_faq14" class="pb_font-22 py-4">دلیل عدم تطابق مقدار نهایی واریز شده به کیف پول با مقدار اولیه مشاهده شده در تابلو مبادله چیست ؟</a>
                        <div id="pb_faq14" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>این تفاوت به علت ناپایداری ارزش ارزهای دیجیتال ارسالی و دریافتی است. با توجه به اینکه پس از ثبت نهایی، اتمام تراکنش با تاخیر چند دقیقه ای ( بین 10 تا 30 دقیقه ) صورت می گیرد، تغییر قیمت ارزها در این زمان موجب تفاوت میان مقدار نهایی واریزی و مقدار اولیه تابلو مبادله می گردد.</p>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq15" aria-expanded="false" aria-controls="pb_faq15" class="pb_font-22 py-4">چقدر زمان می برد تا ارزدیجیتال دریافتی، به کیف پول واریز شود ؟</a>
                        <div id="pb_faq15" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>مدت زمان واریز ارزدیجیتال بین 10 تا 30 دقیقه است. اگر حجم معامله بیش از مقدار مشخص 1 بیت کوین باشد، ممکن است بسته به مجموع تعداد کل تراکنش های روی شبکه و حجم معامله این زمان افزایش یابد. </p>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq16" aria-expanded="false" aria-controls="pb_faq16" class="pb_font-22 py-4">علت غیر مجاز شناخته شدن کیف پول من چیست ؟</a>
                        <div id="pb_faq16" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>نانا از اکثر کیف پول های ارز دیجیتال پشتیبانی می کند. اگر کیف پول شما غیر مجاز شناخته می شود، می تواند به دلیل یکی از موارد ذیل باشد :</p>
                                <ul style="direction: rtl;">
                                    <li>عدم پشتیبانی کیف پول شما از ارزدیجیتال مورد نظر برای معامله</li>
                                    <li>عدم به روزرسانی یا هماهنگی BCH ABC کیف پول با بلاک چین</li>
                                    <li>وجود اشتباه در مورد آدرس وارد شده. دقت کنید تمامی کارکترها را درست وارد کرده باشید.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq17" aria-expanded="false" aria-controls="pb_faq17" class="pb_font-22 py-4">دلیل بیش از حد طولانی شدن انجام مبادله ی من چیست ؟</a>
                        <div id="pb_faq17" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>به صورت متداول مدت زمان 10 تا 30 دقیقه برای هر تراکنش لازم است. اگر بیش از 30 دقیقه تراکنش شما به طول انجامید به یکی از دلایل زیر است : </p>
                                <ul style="direction: rtl;">
                                    <li>بار زیاد روی شبکه بلاک چین. تراکنش شما در کنار سایر تراکنش ها به عنوان بار شبکه ی بلاک چین در نظر گرفته می شود. به علت زیاد بودن این اطلاعات امکان پیش آمد تاخیر در تراکنش ها وجود دارد. این تاخیر در مورد بیت کوین و بلاک چین بیت کوین رخ می دهد.</li>
                                    <li>حملات DDOS . متاسفانه هر پلت فرمی در معرض حملات مختلفی قرار می گیرد. در حالت این حمله، تنها راه ایجاد تاخیر در انجام فعالیت است.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@include('master.footer')



<style>
    .item a {direction: rtl;}
    .item p {direction: rtl;}
</style>

@include('master.scripts')

<script type="text/javascript">
    $('#pb-navbar').addClass("scrolled awake"); 
</script>

@endsection