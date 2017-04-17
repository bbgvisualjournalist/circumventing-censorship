---
layout: post
title:  "Persian DNS"
langnumber: 4
tool: dns
---

{% include comic__dns.html %}


<h3 class='subhed'>دی.ان.اس (DNS) چيست؟</h3>

در دنيای فن‌آوری اينترنت، هر وبسايتی از دو نوع آدرس برخوردار است. يکی آدرسی است واقعی برمبنای اعداد، که به آن آدرس آی.پی. می‌گويند (مانند 10.10.10.1) و ديگری برمبنای نام و نشانی آسان برای يادآوری (مانند voanews.com).  در زبان انگليسی، دی.ان.اس کوتاه شده عبارت «نظام نام‌گذاری دامنه» است. نظام نام‌گذاری دامنه موافقتنامه‌ای است که بر اساس آن نام‌های آسان در برابر آدرس‌های اينترنتی واقعی مبتنی بر اعداد قرار می‌گيرد. طبق موافقتنامه دی.ان.اس، اين دو نوع آدرس به سهولت به‌يکديگر ترجمه پذيرند و به‌عبارت ديگر، يکديگر را به‌ياد می‌آورند. 

دی.ان.اس را میتوان مانند دفتر تلفن در نظر گرفت. با رجوع به دفتر تلفن شما میتوانيد شماره تلفن اشخاص را از روی نام آنها پيدا کنيد، يا برعکس. علاوه بر آن، دی.ان.اس دفتر تلفن بزرگی است حاوی همه آدرسهای اينترنتی موجود در جهان به همراه آدرس عددی آنها، بطوریکه میتوان آن را به صورت نقشه بزرگی درنظر آورد که جا و مکان فيزيکی هر وبسايتی را دقيقا نشان میدهد.

به عنوان مثال، voanews.com نام دامنه اینترنتی صدای آمريکا است و آنچيزی‌است‌که شما در مرورگر خود تایپ می‌کنيد تا به وبسايت صدای آمريکا برويد. اين نام (يعنی voanews.com )، يادگيری و يادآوری توسط انسان را ممکن می‌سازد، اما برای سرورها و روترها و ساير ابزار الکترونيکی که دسترسی به اينترنت را امکان‌پذير می‌سازد، چنين نامی واقعا معنايی ندارد.

آدرس اینترنتی واقعی صدای آمريکا (ir.voanews.com) طبق آخرین موافقتنامه جهانی 152.75.191.91    است. این آدرس واقعی جزو اسرار نيست. اما اشکالش اين استکه برای بخاطر سپردن و استفاده در موقعيتهای گوناگون، آدرس آسانی نيست. از اينرو، برای کمک و تسهيل يادآوری، پايگاه داده دی.ان.اس اسامی دامنههای استاندارد (مانند (ir.voanews.com) را به مکان واقعیشان بر روی اينترنت پيوند میزند بهطوری که آدرس آی.پی سرور شما دقيقا با آن سایت ارتباط برقرار کند.

<h3 class='subhed icon how'>چگونه کار می‌کند</h3>

همه‌چیز در اینترنت عمومی است و آدرس منحصر به‌فردی در دی.ان.اس دارد، از جمله شرکتی که به شما خدمات اینترنتی ارايه می‌کند. برای پیدا کردن آدرس دی.ان.اس سروری که شما هم‌اکنون به آن متصل هستيد، به فونکسيون CMD  کامپيوتر خود برويد و  در داس پرومت اين حروف را وارد کنيد: ipconfig/all

پس از وارد کردن آن، آدرس سرورهای خود را به‌صورت يک سری اعدادی که با نقطه از هم جدا شده‌اند پشت سرهم خواهيد ديد.

مهم است به‌یاد داشته باشید که فقط یک رکورد (سابقه) دی.ان.اس وجود ندارد، بلکه نسخه‌های بسیاری از آن در سراسر اينترنت توزیع شده و بر روی سرورهای متعددی موجود است. این دو عامل، و ساختار غیر متمرکز اینترنت، نقاط ضعفی را بدست می‌دهند که حکومت‌ها و افراد به طور یکسان می‌توانند از آن بهره‌برداری کنند.

حکومت‌ها و شرکت‌های ارايه کننده خدمات اينترنتی، می‌توانند با دستکاری سوابق خاصی در دی.ان.اس، ترافيک  اينترنت را تغيير داده و کاربران را از وبسايت درخواستی به وبسايت مورد نظرخود هدايت کنند. مثلا کاربری در کشور X سعی دارد از وبسايت voanews.com ديدن کند، اما فهرست دستکاری شده‌ای در دی.ان.اس ممکن است آن کاربر را به یک وبسایت جعلی تغییر مسیر دهد، و یا او را به صفحه‌ معروف «404 Not Found» رجوع دهد که  اعلام بلوک شدن وبسايت درخواستی است. به‌اين‌ترتيب، سازمانی که به فهرست دی.ان.اس آن کشور دسترسی دارد با مسموم کردن «دفتر تلفن» شماره عوضی به کاربر داده و ازاين‌طريق، راه ترافيک را به وبسايت درخواستی می‌بندد.

کاربران نيز می‌توانند از برخی از این نقطه‌ضعف‌ها بهره‌برداری کرده و تلاش‌های حکومت در مسموم کردن و يا دستکاری در سوابق دی.ان.اس را دور بزنند. خدمات دی.ان.اس بسیاری وجود دارند که می‌توانيد از آن‌ها استفاده کنيد، اما اجازه دهید بر روی یکی از محبوب‌ترین آن‌ها تمرکز کنيم: دی.ان.اس گوگل.
            
شرکت گوگل فهرست دی.ان.اس خود را آزادانه و به‌رايگان در دسترس علاقمندان قرار داده و مدعی است که اين فهرست، تا حد امکان، نشان دهنده نقشه دقیقی از وبسایت‌ها و آدرس‌های معتبر آی.پی. در جهان است.

فهرست گوگل در دو آدرس 8.8.8.8 و 8.8.4.4 قرار دارد. با تغییر تنظیمات بر روی کامپیوتر یا تلفن هوشمند خود میتوانید دستگاه را طوری تنظيم کنيد تا از اين فهرست دی.ان.اس دستکاری نشده برای دسترسی به وبسایتهای مورد علاقه شما استفاده کند و نه آن فهرستی که دولت الف دستکاری کرده تا وبسايت درخواستی شما را نشان ندهد.

این امر ممکن است به‌نظر کمی پيچيده آيد، زيرا سیستم‌های عامل در کامپیوترهای گوناگون نياز به اقدامات مختلفی دارند تا اين تغيير صورت پذيرد. به‌همین دلیل گوگل راهنمای کاملی برای تحقق اين امر در اینجا بدست می‌دهد. بااین‌حال، هنگامی‌که شما به دی.ان.اس گوگل متصل شويد، درواقع فهرست دستکاری شده را دور زده و از موانع ايجاد شده عبور کرده‌ايد. 

سد اينترنتی‌ای که بر اثر دستکاری در سوابق موجود در دی.ان.اس ايجاد شده، ابزاری از نوع ابتدايی است. اين سد، اغلب، نخستين واکنشی است‌که يک حکومت دستپاچه و کمتر آشنا به فن‌آوری به آن توسل می‌جويد. می‌توان آن را به عنوان تابلويی در نظر گرفت که حکومتی در جاده نصب می‌کند که بررويش نوشته شده: جاده مسدود است. خب، رانندگانی‌که  به نقشه مناسبی مجهز هستند به روشنی می‌بينند که جاده ادامه دارد و بسته نيست، و می‌توانند به راه خود ادامه دهند. اما حکومت‌هايی که مصمم به جلوگيری از رفت‌و آمد ترافيک هستند، می‌توانند به اقداماتی بيش از نصب تابلوهای جعلی دست بزنند، و اغلب هم اين‌کار را می‌کنند.

<h3 class='subhed icon caution'>اشکالات احتمالی</h3>

در نهايت، استفاده از دی.ان.اس ترفند مفیدی است برای دور زدن موانعی که در راه اينترنت گذاشته می‌شود، اما در عمل راه‌حلی کوتاه مدت است. کاربران ساکن کشورهایی که بشدت با سانسور اينترنت مواجه‌اند، به ابزارهای بيشتری برای رفتن به وبسايت‌های مورد نظر نیاز دارند.
            
این نیز بسیار مهم است (و بايد حتما به یاد داشته باشید) که استفاده از دی.ان.اس نامرئی نبوده و حکومتها میتوانند ردپای استفاده کننده را پيدا کنند. بنابراین اگر شما فکر میکنيد تحت نظر هستيد، به اين معنی استکه حکومتها و هکرها هنوز میتوانند همه فعاليتهای آنلاين شما را ببينند.
            
دی.ان.اس میتواند راه آسان و سریعی برای گريز از دست عوامل سانسور پيشپای کاربران بگذارد و ديدن محتوای وبسایتهای مسدود شده را امکانپذير سازد، اما از هويت و حریم خصوصی کاربران محافظتی بهعمل نمیآورد. بهعبارت ديگر، اين در واقع بیشتر ترفندی است تا یک ابزار، در نتیجه اغلب کاربرد محدودی دارد.
