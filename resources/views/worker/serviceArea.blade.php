<div class="worker-page w-full max-w-[1440px] min-h-[1100px] bg-stone-100 inline-flex flex-col justify-start items-start overflow-hidden">
  @include('worker.partials.navigation')
  <div class="self-stretch h-20 px-8 bg-white border-b border-neutral-200 inline-flex justify-between items-center overflow-hidden">
    <div class="size- flex justify-start items-center gap-8 overflow-hidden">
      <div class="size- flex justify-start items-center gap-2 overflow-hidden">
        <div class="w-8 h-9 bg-teal-800 rounded-[10px] flex justify-center items-center overflow-hidden">
          <div class="size-6 relative overflow-hidden">
            <div class="w-5 h-4 left-[2px] top-[3px] absolute outline outline-1 outline-offset-[-0.50px] outline-white"></div>
          </div>
        </div>
        <div class="justify-start"><span class="text-zinc-800 text-2xl font-normal font-['Inter']">Pub</span><span class="text-green-500 text-2xl font-normal font-['Inter']">Fix</span></div>
      </div>
      <div class="size- px-2.5 py-1.5 bg-gray-200 rounded-[100px] flex justify-start items-start overflow-hidden">
        <div class="justify-start text-teal-800 text-xs font-medium font-['Inter']">PRO WORKSPACE</div>
      </div>
    </div>
    <div class="size- flex justify-start items-center gap-6 overflow-hidden">
      <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Help & support</div>
      <div class="w-6 h-7 relative flex justify-start items-center overflow-hidden">
        <div class="size-5 relative overflow-hidden">
          <div class="size-4 left-[2.63px] top-[1.75px] absolute outline outline-1 outline-offset-[-0.50px] outline-zinc-800"></div>
        </div>
        <div class="size-1.5 left-[16px] top-[3px] absolute bg-amber-800 rounded-md"></div>
      </div>
      <img class="size-10 rounded-[100px]" src="https://placehold.co/39x39" />
      <div class="size- inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
        <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Marcus Reed</div>
        <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Carpentry & assembly</div>
      </div>
      <div class="size-4 relative overflow-hidden">
        <div class="w-2 h-1 left-[4px] top-[6px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      </div>
    </div>
  </div>
  <div class="self-stretch min-h-[1012px] inline-flex justify-start items-start overflow-hidden">
    <div class="w-56 self-stretch relative bg-white border-r border-neutral-200 overflow-hidden">
      <a href="{{ route('worker.settings') }}" class="left-[59px] top-[484px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Settings</a>
      <div class="size-3.5 left-[34px] top-[483px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.profile') }}" class="left-[59px] top-[404px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">My public profile</a>
      <div class="size-3.5 left-[34px] top-[403px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.profile') }}#reviews" class="left-[59px] top-[225px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Reviews</a>
      <div class="size-3.5 left-[34px] top-[224px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.earnings') }}" class="left-[59px] top-[190px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Earnings</a>
      <div class="size-3.5 left-[34px] top-[195px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.schedule') }}" class="left-[59px] top-[154px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">My schedule</a>
      <div class="size-3.5 left-[34px] top-[153px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="left-[182px] top-[101px] absolute justify-start text-teal-800 text-[10px] font-normal font-['Inter']">3</div>
      <a href="{{ route('worker.bookings') }}" class="left-[59px] top-[100px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Job requests</a>
      <div class="size-3.5 left-[34px] top-[99px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.dashboard') }}" class="left-[59px] top-[46px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Overview</a>
      <div class="size-3.5 left-[34px] top-[45px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="w-44 h-px left-[18px] top-[372px] absolute bg-neutral-200"></div>
      <div class="w-44 h-10 px-3 left-[18px] top-[428px] absolute bg-gray-200 rounded-lg inline-flex justify-start items-center gap-2.5 overflow-hidden">
        <div class="size-4 relative overflow-hidden">
          <div class="w-3 h-3.5 left-[3px] top-[1.50px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
        </div>
        <a href="{{ route('worker.service-area') }}" class="flex-1 justify-start text-teal-800 text-xs font-normal font-['Inter']" aria-current="page">Service area</a>
      </div>
    </div>
    <div class="flex-1 p-8 inline-flex flex-col justify-start items-start gap-7 overflow-hidden">
      <div class="self-stretch flex flex-col justify-start items-start gap-7 overflow-hidden">
        <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
            <div class="justify-start text-neutral-500 text-xs font-semibold font-['Inter']">YOUR PRO WORKSPACE</div>
            <div class="self-stretch justify-start text-zinc-800 text-4xl font-normal font-['Inter']">Service area</div>
            <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Stay local. Choose where you work and the projects you love.</div>
          </div>
          <div class="h-11 px-4 bg-teal-800 rounded-lg outline outline-1 outline-offset-[-1px] outline-teal-800 flex justify-center items-center gap-2 overflow-hidden">
            <div class="justify-start text-white text-xs font-semibold font-['Inter']">Save changes</div>
          </div>
        </div>
        <div class="self-stretch inline-flex justify-start items-start gap-6 overflow-hidden">
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-6 overflow-hidden">
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="self-stretch justify-start text-zinc-800 text-xl font-semibold font-['Inter']">Your neighborhood, and a little beyond</div>
                  <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Within 10 miles of 78704 · Austin, TX</div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-gray-200 rounded-[100px] flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-teal-800 text-xs font-medium font-['Inter']">10-mile radius</div>
                </div>
              </div>
              <div class="self-stretch h-96 relative bg-stone-200 rounded-lg overflow-hidden">
                <div class="left-[14px] top-[385px] absolute justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">Coverage preview · approximate boundary</div>
                <div class="size- left-[690px] top-[18px] absolute bg-white rounded-md outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex flex-col justify-start items-start overflow-hidden">
                  <div class="size-8 text-center justify-center text-zinc-800 text-xl font-normal font-['Inter']">+</div>
                  <div class="size-8 text-center justify-center text-zinc-800 text-xl font-normal font-['Inter']">−</div>
                </div>
                <div class="size- px-3 py-1.5 left-[340px] top-[258px] absolute bg-white rounded-md inline-flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">78704</div>
                </div>
                <div class="size-10 left-[355px] top-[208px] absolute bg-teal-800 rounded-[100px] outline outline-[3px] outline-offset-[-3px] outline-white inline-flex justify-center items-center overflow-hidden">
                  <div class="size-5 relative overflow-hidden">
                    <div class="w-3.5 h-4 left-[3.33px] top-[1.67px] absolute outline outline-1 outline-offset-[-0.50px] outline-white"></div>
                  </div>
                </div>
                <div class="left-[390px] top-[82px] absolute justify-start text-neutral-500 text-2xl font-semibold font-['Inter']">Austin</div>
                <div class="left-[120px] top-[370px] absolute justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">SUNSET VALLEY</div>
                <div class="left-[212px] top-[315px] absolute justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">South Lamar</div>
                <div class="left-[477px] top-[242px] absolute justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Travis Heights</div>
                <div class="left-[300px] top-[247px] absolute justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Bouldin Creek</div>
                <div class="left-[217px] top-[184px] absolute justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Zilker</div>
                <div class="left-[418px] top-[120px] absolute justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">DOWNTOWN</div>
                <div class="left-[75px] top-[79px] absolute justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">WEST LAKE HILLS</div>
                <div class="size-80 left-[215px] top-[56px] absolute bg-teal-800/10 rounded-full border-[1.50px] border-teal-800"></div>
                <div class="w-[752px] h-96 left-[-20px] top-[-20px] absolute border-8 border-stone-300"></div>
                <div class="w-[752px] h-96 left-[-20px] top-[100.22px] absolute border-[28px] border-zinc-200"></div>
                <div class="w-[752px] h-96 left-0 top-0 absolute border-[5px] border-white"></div>
              </div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Neighbors inside this area can find your profile and send job requests. Your exact home address is never shown publicly.</div>
            </div>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch justify-start text-zinc-800 text-base font-semibold font-['Inter']">A few neighborhoods you cover</div>
              <div class="self-stretch inline-flex justify-start items-start gap-2 flex-wrap content-start overflow-hidden">
                <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">Bouldin Creek</div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">Zilker</div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">Travis Heights</div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">South Lamar</div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">Downtown Austin</div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">Barton Hills</div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">Sunset Valley</div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">West Lake Hills</div>
                </div>
              </div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Coverage is based on distance from your home ZIP code, not driving time.</div>
            </div>
          </div>
          <div class="w-80 inline-flex flex-col justify-start items-start gap-6 overflow-hidden">
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch justify-start text-zinc-800 text-base font-semibold font-['Inter']">Set your service area</div>
              <div class="self-stretch flex flex-col justify-start items-start gap-2 overflow-hidden">
                <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">Home ZIP code</div>
                <div class="self-stretch min-h-11 px-3 py-3 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex justify-start items-start overflow-hidden">
                  <div class="flex-1 justify-start text-zinc-800 text-xs font-normal font-['Inter']">78704</div>
                </div>
                <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Austin, Texas</div>
              </div>
              <div class="self-stretch flex flex-col justify-start items-start gap-2 overflow-hidden">
                <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">Travel radius</div>
                <div class="self-stretch min-h-11 px-3 py-3 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex justify-start items-start overflow-hidden">
                  <div class="flex-1 justify-start text-zinc-800 text-xs font-normal font-['Inter']">10 miles</div>
                </div>
              </div>
              <div class="self-stretch h-4 relative inline-flex justify-start items-center overflow-hidden">
                <div class="flex-1 h-1 bg-neutral-200 rounded-sm"></div>
                <div class="w-24 h-1 left-0 top-[6px] absolute bg-teal-800"></div>
                <div class="size-4 left-[86px] top-0 absolute bg-teal-800 rounded-full border-2 border-white"></div>
              </div>
              <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
                <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">5 miles</div>
                <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">25 miles</div>
              </div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">A smaller radius can mean less time driving and more time doing good work.</div>
            </div>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch justify-start text-zinc-800 text-base font-semibold font-['Inter']">Service preferences</div>
              <div class="self-stretch inline-flex justify-start items-center gap-6 overflow-hidden">
                <div class="flex-1 justify-start"><span class="text-zinc-800 text-xs font-semibold font-['Inter'] leading-6">Furniture assembly<br/></span><span class="text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Desks, wardrobes, and flat-pack pieces</span></div>
                <div class="w-8 h-5 relative bg-teal-800 rounded-2xl flex justify-start items-start overflow-hidden">
                  <div class="size-3 left-[15px] top-[3px] absolute bg-white rounded-[10px]"></div>
                </div>
              </div>
              <div class="self-stretch h-px bg-neutral-200"></div>
              <div class="self-stretch inline-flex justify-start items-center gap-6 overflow-hidden">
                <div class="flex-1 justify-start"><span class="text-zinc-800 text-xs font-semibold font-['Inter'] leading-6">Shelving & carpentry<br/></span><span class="text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Floating shelves and small repairs</span></div>
                <div class="w-8 h-5 relative bg-teal-800 rounded-2xl flex justify-start items-start overflow-hidden">
                  <div class="size-3 left-[15px] top-[3px] absolute bg-white rounded-[10px]"></div>
                </div>
              </div>
              <div class="self-stretch h-px bg-neutral-200"></div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">$55 / hour · 1-hour minimum<br/>Estimates cover labor only.</div>
              <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Edit rates on your profile ↗</div>
            </div>
            <div class="self-stretch p-5 bg-gray-200 rounded-xl outline outline-1 outline-offset-[-1px] outline-gray-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-start items-center gap-6 overflow-hidden">
                <div class="flex-1 justify-start"><span class="text-zinc-800 text-xs font-semibold font-['Inter'] leading-6">Open to new jobs<br/></span><span class="text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Let neighbors know you’re ready for your next project.</span></div>
                <div class="w-8 h-5 relative bg-teal-800 rounded-2xl flex justify-start items-start overflow-hidden">
                  <div class="size-3 left-[15px] top-[3px] absolute bg-white rounded-[10px]"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="self-stretch pt-1 inline-flex justify-between items-start overflow-hidden">
        <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">© 2026 PubFix · Built around good work.</div>
        <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Help center     Terms     Privacy</div>
      </div>
    </div>
  </div>
</div>