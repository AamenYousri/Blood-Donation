<?php 
$page_name = "donation";
session_start();
include'header.php'; 
?> 


    <div class="container display-1 bloodDTEXT bloodTextSM titleShadow">
        <p>Blood Donation</p>
    </div>
    <br />



    <div class="container display-4 subTitleShadow">Donation Rules
        <button type="button" class="btn btn-info" id="arabic">اللغة العربية</button>
    </div>
    <br />
    <br />




    <div class="container">
        <div class="firstAbout">
            <p>Most people can give blood if they are in good health. There are some basic requirements one need to fulfill in order to become a blood donor. Below are some basic eligibility guidelines:

            </p>

            <br />

            <ul>
                <li>You weigh at least 50 kg.</li>
                <li>You are aged between 18 and 65.</li>
                <li>You must be in good health at the time you donate.</li>
                <li>Diabetes, Acceptable as long as it is well controlled, whether medication is taken or not.</li>
                <li>Diet: A meal is recommended at least four hours prior to donation. Drink plenty of fluids.</li>
                <li>Pregnancy, the deferral period should last as many months as the duration of the pregnancy.</li>
                <li>You must not donate blood If you do not meet the minimum haemoglobin level for blood donation.</li>
                <li>You cannot donate if you have a cold, flu, sore throat, cold sore, stomach bug or any other infection.</li>
                <li>Travel to areas where mosquito-borne infections are endemic, e.g. malaria, dengue and Zika virus infections, may result in a temporary deferral.</li>
                <li>Body Piercing: You must not donate if you have had a tongue, nose, belly button or genital piercing in the past 12 months (donors with pierced ears are eligible).</li>

            </ul>



        </div>




    </div>


    <div class="secondAbout">

        <div class="display-4 container d-flex justify-content-center " dir="rtl">
            <p>حالات لا يمكنهم التبرع بالدم</p>
        </div>



        <br />


        <div class="container d-flex justify-content-start textArabicAlign" dir="rtl">

            <ul>
                <li class="d-flex justify-content-start">&raquo; فى حالة الحمل.</li>
                <li class="d-flex justify-content-start">&raquo; إذا كنت تخضع للعلاج.</li>
                <li class="d-flex justify-content-start">&raquo; ذا كان وزنك أقل من 50 كيلو.</li>
                <li class="d-flex justify-content-start">&raquo; لو كان سنك أقل من 17 سنة.</li>
                <li class="d-flex justify-content-start">&raquo; عندما تتناول بعض الأدوية ومنها المضادات الحيوية.</li>
                <li class="d-flex justify-content-start">&raquo; إذا كنت مريض سكر فيجب أن يكون مستوى السكر مضبوط.</li>
                <li class="d-flex justify-content-start">&raquo; إذا كنت تعانى من بعض الأمراض الخطيرة مثل السرطان والإيدز.</li>
                <li class="d-flex justify-content-start">&raquo; لو عندك نزلة برد مصاحبة لسعال ببلغم فانتظر حتى الانتهاء من العلاج.</li>
                <li class="d-flex justify-content-start">&raquo; إذا كنت تعانى من حمى أو عدوى شديدة فعليك الانتظار لحين العلاج منها.</li>
                <li class="d-flex justify-content-start">&raquo; فى حال الإصابة ببعض المشكلات الخاصة بسيولة الدم أو أخذ علاج يخفف من تجلط الدم.</li>
            </ul>
        </div>

    </div>

    <br />
    <br />

    <hr class="container" />
    <div class="container display-4 bloodDTEXT">Blood type charts
    </div>
    <br />

    <div class="container" id="imgSmall">

        <img src="Media/bloodtypecharts.JPG" alt="Who can donate to who img" class="mx-auto d-block" id="imgSmall">

    </div>



    <br />


<?php include'footer.php'; ?>