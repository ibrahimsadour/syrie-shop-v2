@extends('front.layouts.site')

@section('content')

<div class="ps-page--single">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('site.index')}}">الرئيسية</a></li>
                <li>الاسئلة الشائعة</li>
            </ul>
        </div>
    </div>
    <div class="ps-faqs">
        <div class="container">
            <div class="ps-section__header">
                <h1>لاسئلة الشائعاة</h1>
            </div>
            <div class="ps-section__content">
                <div class="table-responsive">
                    <table class="table ps-table--faqs">
                        <tbody>
                            <tr>
                                <td class="heading" rowspan="3">
                                    <h4>أسئلة الحساب والتسجيل</h4>
                                </td>
                                <td class="question"> كيف يمكنني التسجيل؟</td>
                                <td>انقر على "تسجيل الدخول" في الاعلى على أي صفحة من موقعنا و وفر جميع المعلومات المطلوبة. أو انقر على shopping.hvips.com/my-account. لدي حساب على اتش فى اى بى اس، هل أحتاج للتسجيل مرة أخرى للبيع؟ لا، يمكنك استخدام نفس الحساب للبيع على اتش فى اى بى اس لا يتوجب عليك انشاء حساب آخر، يمكنك الدخول كبائع باستخدام معلومات الحساب المسجل مسبقاً. إذا كنت تريد تغيير اسم المستخدم الخاص بك، قم ببساطة انقر "تعديل المعلومات" في حسابك.</td>
                            </tr>
                            <tr>
                                <td class="question">كيف يمكنني تسجيل الدخول ؟</td>
                                <td>انقر على زر "تسجيل الدخول" في الاعلى على أي صفحة من موقعنا أو عبر shopping.hvips.com/my-account. لقد نسيت كلمة المرور الخاصة بي، ماذا أفعل؟ انقر على زر "تسجيل الدخول" في الاعلى على أي صفحة من موقعنا، ثم انقر على زر "نسيت كلمة السر؟" أدخل عنوان البريد الإلكتروني الذي استخدمته للتسجيل. سوف نرسل لك رسالة على البريد الالكتروني مع تعليمات إعادة ضبط كلمة السر.</td>
                            </tr>
                            
                            <tr>
                                <td class="question">من الذي يدفع للشحن ؟</td>
                                <td>يمكنك تحديد من سيتحمل تكلفة الشحن. لجذب العملاء والحصول على المزيد من الطلبات، يمكن للبائع أن يقدم الشحن مجاناً على السلع، أو خلال أعياد معينة او أيام العطل. في هذه الحالة سيتم خصم تكلفة الشحن من المبلغ "المستحق". خلاف ذلك، وسيتحمل العميل تكاليف الشحن. ملاحظة: انها فكرة جيدة لتتبع منافسيك لضمان أن عملية الشحن لا تقف في وجه عملية الشراء من العروض الخاصة بك.</td>
                            </tr>

                            <hr></hr>
                            <tr>
                                <td class="heading" rowspan="5">
                                    <h4>أسئلة عامة</h4>
                                </td>
                                <td class="question"> كم عدد الزوار الذين يقومون بزيارة الموقع ؟</td>
                                <td>يقوم بزيارة موقع اتش فى اى بى اس الملايين من العملاء يومياً</td>
                            </tr>
                            <tr>
                                <td class="question">ما هو الملف الشخصى لعملاء الموقع ؟</td>
                                <td>يتوزع عملاء الموقع على مختلف الأماكن الديموغرافية في كل من دولة الإمارات، السعودية، مصر و الكويت.</td>
                            </tr>
                            <tr>
                                <td class="question">ما هي السلع التي يمكنني بيعها على الموقع ؟</td>
                                <td>يمكنك بيع السلع التي تم تحميلها مسبقاً على الموقع أو إنشاء قوائمك الخاصة. للتحقق من قائمة الفئات المتاحة على الموقع، يرجى الضغط على:www.souq.hvips.com/shop-all-categories/c/. إذا كنت ترغب في إدراج سلعة في فئة لم تجدها في هذا الدليل قم بارسال أي استفسار على : egyptseller@hvips.com.</td>
                            </tr>
                            <tr>
                                <td class="question">كيف تتم عملية البيع على الموقع ؟</td>
                                <td>
عملية البيع على الموقع سهلة جداً لأنها لا تتطلب أي استثمار، يمكنك البدء بعدد قليل من الخطوات.فقط قم بزيارة صفحة https://shopping.hvips.com/selling-how-it-works/c/ لمعرفة المزيد حول كيفية البيع و ابدأ بالبيع</td>
                            </tr>
                            <tr>
                                <td class="question">ما هي الدول التي يعمل فيها الموقع ؟</td>
                                <td>الموقع متاح في الإمارات العربية المتحدة، مصر، المملكة العربية السعودية والكويت</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-call-to-action">
        <div class="container">
            <h3 style="text-align: center;">نحن هنا للمساعدة !<a href="{{route('site.contact-us.index')}}"> اتصل بنا</a></h3>
        </div>
    </div>
</div>
@endsection