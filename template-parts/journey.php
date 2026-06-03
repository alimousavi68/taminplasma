  <!-- Plasma Donation Journey Timeline Section -->
  <style>
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up {
      opacity: 0;
      animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
  </style>
  <section id="journey" class="w-full py-20 lg:py-24 bg-[var(--color-bg-warm)] relative overflow-hidden">
    <!-- Decorative background circles -->
    <div class="absolute -top-32 -right-32 w-[600px] h-[600px] rounded-full border-[1px] border-[var(--color-primary)]/10 pointer-events-none"></div>
    <div class="absolute -top-16 -right-16 w-[450px] h-[450px] rounded-full border-[1px] border-[var(--color-primary)]/10 pointer-events-none"></div>
    <div class="absolute top-0 right-0 w-[300px] h-[300px] rounded-full border-[1px] border-[var(--color-primary)]/10 pointer-events-none"></div>
    
    <!-- Full width element -->
    <div class="w-full absolute right-0 top-1/2 bg-white h-24 -translate-y-1/2 border-r-8 border-[var(--color-primary)]"></div>

    <div class="container mx-auto px-4 lg:max-w-[1210px] relative z-10">
      
      <!-- DESKTOP TIMELINE (Hidden on Mobile) -->
      <div class="hidden md:flex w-full items-center justify-center gap-8 relative z-10">

        <!-- ===== TITLE CARD ===== -->
        <div class=" animate-fade-in-up  shrink-0" style="width: 300px;">
          <div class="flex items-center gap-3 px-8 py-8">
            <div class="bg-primary w-18 h-18 rounded-full flex items-center justify-center shadow-sm shrink-0">
              <img src="public/path/route.png" alt="مسیر" class="w-8 h-8 object-contain" style="filter: brightness(0);" />
            </div>
            <div class="flex flex-col text-right">
              <span class="text-neutral-900 font-extrabold text-2xl leading-tight">مسیر</span>
              <span class="text-primary font-extrabold text-2xl leading-tight">اهدای پلاسما:</span>
            </div>
          </div>
        </div>

        <!-- six-step container -->
        <div class="flex flex-row justify-center items-start gap-8" style="width: 800px;">

      
          <!-- ===== STEP 01 (odd -  bottom-right) ===== -->
            <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
              <!-- Photo -->
              <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
                <img src="public/path/step-1.png" class="w-full h-full object-cover rounded-[1.5rem]" alt="خوش‌آمدگویی و پذیرش" />
                <!-- Dashed line from photo - 20px from right, 20px from bottom -->
                <img src="public/path/line.svg" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; bottom: -44px;" alt="" />
              </div>
              <!-- Badge -->
              <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative mt-[40px] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
                ۰۱
              </div>
              <!-- Text below -->
              <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]">خوش‌آمدگویی<br/>و پذیرش</p>
            </div>

            

            <!-- ===== STEP 02 (OEVENDD - top-left) ===== -->
            <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
              <!-- Text above -->
              <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]">کنترل<br/>علائم حیاتی</p>
              <!-- Badge -->
              <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
                ۰۲
              </div>

              
              <!-- Photo -->
              <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative mt-[40px] transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
                <img src="public/path/step-2.png" class="w-full h-full object-cover rounded-[1.5rem]" alt="کنترل علائم حیاتی" />
                <!-- Dashed line from photo -->
                <img src="public/path/line.svg" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; top: -44px; transform: scaleY(-1);" alt="" />
              </div>
            </div>

           
         <!-- ===== STEP 03 (odd -  bottom-right) ===== -->
            <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
              <!-- Photo -->
              <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
                <img src="public/path/step-3.png" class="w-full h-full object-cover rounded-[1.5rem]" alt="اهدای پلاسما " />
                <!-- Dashed line from photo - 20px from right, 20px from bottom -->
                <img src="public/path/line.svg" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; bottom: -44px;" alt="" />
              </div>
              <!-- Badge -->
              <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative mt-[40px] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
                ۰۳
              </div>
              <!-- Text below -->
              <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]">اهدای پلاسما</p>
            </div>

            

            <!-- ===== STEP 06 (OEVENDD - top-left) ===== -->
            <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
              <!-- Text above -->
              <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]">تعیین وقت <br/>برای اهدای بعدی <br/><span class="text-[10px]">(دلخواه)</span> </p>
              <!-- Badge -->
              <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
                ۰۴
              </div>

              
              <!-- Photo -->
              <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative mt-[40px] transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
                <img src="public/path/step-4.png" class="w-full h-full object-cover rounded-[1.5rem]" alt="تعیین وقت برای اهدای بعدی" />
                <!-- Dashed line from photo -->
                <img src="public/path/line.svg" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; top: -44px; transform: scaleY(-1);" alt="" />
              </div>
            </div>

             <!-- ===== STEP 05 (odd -  bottom-right) ===== -->
            <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
              <!-- Photo -->
              <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
                <img src="public/path/step-5.png" class="w-full h-full object-cover rounded-[1.5rem]" alt="پذیرایی و بررسی سلامت شما توسط پزشک" />
                <!-- Dashed line from photo - 20px from right, 20px from bottom -->
                <img src="public/path/line.svg" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; bottom: -44px;" alt="" />
              </div>
              <!-- Badge -->
              <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative mt-[40px] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
                ۰۵
              </div>
              <!-- Text below -->
              <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]">پذیرایی و بررسی <br/>سلامت شما توسط پزشک</p>
            </div>

            

            <!-- ===== STEP 06 (OEVENDD - top-left) ===== -->
            <div class="flex flex-col items-center group cursor-pointer animate-fade-in-up hover:-translate-y-2 transition-all duration-500" style="width: 110px;">
              <!-- Text above -->
              <p class="text-neutral-900 font-extrabold text-[13px] text-center leading-relaxed mt-3 transition-all duration-500 group-hover:text-[var(--color-secondary)]">پرداخت هزینه<br/> ایاب ذهاب</p>
              <!-- Badge -->
              <div class="bg-surface-warm w-9 h-9 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 border-[3px] border-[var(--color-bg-warm)] shadow-sm z-20 relative transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-125 group-hover:shadow-lg">
                ۰۶
              </div>

              
              <!-- Photo -->
              <div class="w-[105px] h-[105px] rounded-[1.5rem] overflow-visible border border-neutral-200 shadow-md bg-white z-20 relative mt-[40px] transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_15px_30px_rgba(255,196,54,0.3)]">
                <img src="public/path/step-6.png" class="w-full h-full object-cover rounded-[1.5rem]" alt="پرداخت هزینه ایاب و ذهاب" />
                <!-- Dashed line from photo -->
                <img src="public/path/line.svg" class="absolute w-[71px] h-[86px] z-10 pointer-events-none" style="left: 50px; top: -44px; transform: scaleY(-1);" alt="" />
              </div>
            </div>
                

      </div>
    </div>


      <!-- MOBILE TIMELINE (Hidden on Desktop) -->
      <div class="flex flex-col md:hidden w-full relative z-10 gap-10">
        <!-- Title Block -->
        <div class="bg-white rounded-2xl p-4 pl-6 pr-12 shadow-sm flex flex-col justify-center w-[90%] z-20 shrink-0 relative h-[84px] animate-fade-in-up">
          <div class="absolute -right-6 top-1/2 -translate-y-1/2 bg-primary w-14 h-14 rounded-full flex items-center justify-center shadow-md border-4 border-[var(--color-bg-warm)]">
            <img src="public/path/route.png" alt="مسیر" class="w-6 h-6 object-contain" style="filter: brightness(0);" />
          </div>
          <h3 class="text-neutral-900 font-extrabold text-lg text-right leading-tight">مسیر</h3>
          <h3 class="text-[var(--color-secondary)] font-extrabold text-lg text-right leading-tight mt-1">اهدای پلاسما:</h3>
        </div>

        <div class="relative w-full pr-4 mt-6">
          <!-- Vertical Dashed Line connecting the steps -->
          <div class="absolute top-8 bottom-16 right-[34px] border-r-2 border-dashed border-[var(--color-border-dashed)] z-0 opacity-70"></div>

          <!-- Mobile Step 01 -->
          <div class="flex items-center gap-6 relative z-10 mb-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
            <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۱</div>
            <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
              <img src="public/path/step-1.png" class="w-full h-full object-cover" alt="خوش‌آمدگویی و پذیرش" />
            </div>
            <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]">خوش‌آمدگویی و پذیرش</p>
          </div>

          <!-- Mobile Step 02 -->
          <div class="flex items-center gap-6 relative z-10 mb-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
            <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۲</div>
            <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
              <img src="public/path/step-2.png" class="w-full h-full object-cover" alt="کنترل علائم حیاتی" />
            </div>
            <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]">کنترل علائم حیاتی</p>
          </div>

          <!-- Mobile Step 03 -->
          <div class="flex items-center gap-6 relative z-10 mb-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
            <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۳</div>
            <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
              <img src="public/path/step-3.png" class="w-full h-full object-cover" alt="اهدای پلاسما" />
            </div>
            <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]">اهدای پلاسما</p>
          </div>

          <!-- Mobile Step 04 -->
          <div class="flex items-center gap-6 relative z-10 mb-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
            <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۴</div>
            <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
              <img src="public/path/step-4.png" class="w-full h-full object-cover" alt="تعیین وقت" />
            </div>
            <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]">تعیین وقت برای اهدای بعدی (دلخواه)</p>
          </div>

          <!-- Mobile Step 05 -->
          <div class="flex items-center gap-6 relative z-10 mb-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
            <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۵</div>
            <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
              <img src="public/path/step-5.png" class="w-full h-full object-cover" alt="پذیرایی و بررسی سلامت" />
            </div>
            <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]">پذیرایی و بررسی سلامت شما توسط پزشک</p>
          </div>

          <!-- Mobile Step 06 -->
          <div class="flex items-center gap-6 relative z-10 group cursor-pointer animate-fade-in-up hover:-translate-x-3 transition-all duration-500">
            <div class="bg-surface-warm w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-sm text-neutral-900 shadow-inner shrink-0 z-10 border-4 border-[var(--color-bg-warm)] transition-all duration-500 group-hover:bg-primary group-hover:text-neutral-900 group-hover:scale-110 group-hover:shadow-lg">۰۶</div>
            <div class="w-20 h-20 shrink-0 rounded-[1.25rem] overflow-hidden border border-neutral-200 shadow-sm relative z-10 bg-white transition-all duration-500 group-hover:border-[var(--color-primary)] group-hover:shadow-[0_10px_20px_rgba(255,196,54,0.3)] group-hover:scale-105">
              <img src="public/path/step-6.png" class="w-full h-full object-cover" alt="ایاب ذهاب" />
            </div>
            <p class="text-neutral-900 font-extrabold text-sm flex-1 text-right leading-relaxed transition-all duration-500 group-hover:text-[var(--color-secondary)]">پرداخت هزینه ایاب ذهاب</p>
          </div>

        </div>
      </div>

    </div>
  </section>


