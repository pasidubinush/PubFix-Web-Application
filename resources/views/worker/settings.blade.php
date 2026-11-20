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
      <a href="{{ route('worker.service-area') }}" class="left-[59px] top-[444px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Service area</a>
      <div class="size-3.5 left-[34px] top-[443px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.profile') }}" class="left-[59px] top-[404px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">My public profile</a>
      <div class="size-3.5 left-[34px] top-[403px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.profile') }}#reviews" class="left-[59px] top-[251px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Reviews</a>
      <div class="size-3.5 left-[35px] top-[251px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.earnings') }}" class="left-[59px] top-[205px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Earnings</a>
      <div class="size-3.5 left-[35px] top-[207px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.schedule') }}" class="left-[59px] top-[154px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">My schedule</a>
      <div class="size-3.5 left-[34px] top-[153px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="left-[182px] top-[101px] absolute justify-start text-teal-800 text-[10px] font-normal font-['Inter']">3</div>
      <a href="{{ route('worker.bookings') }}" class="left-[59px] top-[100px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Job requests</a>
      <div class="size-3.5 left-[34px] top-[99px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.dashboard') }}" class="left-[59px] top-[46px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Overview</a>
      <div class="size-3.5 left-[34px] top-[45px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="w-44 h-px left-[18px] top-[372px] absolute bg-neutral-200"></div>
      <div class="w-44 h-10 px-3 left-[18px] top-[468px] absolute bg-gray-200 rounded-lg inline-flex justify-start items-center gap-2.5 overflow-hidden">
        <div class="size-4 relative overflow-hidden">
          <div class="size-3.5 left-[2.28px] top-[1.51px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
        </div>
        <a href="{{ route('worker.settings') }}" class="flex-1 justify-start text-teal-800 text-xs font-normal font-['Inter']" aria-current="page">Settings</a>
      </div>
    </div>
    <div class="flex-1 p-8 inline-flex flex-col justify-start items-start gap-7 overflow-hidden">
      <div class="self-stretch flex flex-col justify-start items-start gap-7 overflow-hidden">
        <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
            <div class="justify-start text-neutral-500 text-xs font-semibold font-['Inter']">YOUR PRO WORKSPACE</div>
            <div class="self-stretch justify-start text-zinc-800 text-4xl font-normal font-['Inter']">Settings</div>
            <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Make your workspace feel like yours. Manage your account and preferences.</div>
          </div>
          <div class="h-11 px-4 bg-teal-800 rounded-lg outline outline-1 outline-offset-[-1px] outline-teal-800 flex justify-center items-center gap-2 overflow-hidden">
            <div class="justify-start text-white text-xs font-semibold font-['Inter']">Save changes</div>
          </div>
        </div>
        <div class="self-stretch inline-flex justify-start items-start gap-6 overflow-hidden">
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-6 overflow-hidden">
            <form method="POST" action="{{ route('worker.settings.update') }}" class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4">
              @csrf
              @method('PUT')
              <div class="self-stretch justify-start text-zinc-800 text-xl font-semibold font-['Inter']">Account details</div>
              <div class="self-stretch inline-flex justify-start items-center gap-4 overflow-hidden">
                <img class="size-14 rounded-[100px]" src="https://placehold.co/58x58" />
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Change profile photo ↗</div>
                  <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">A friendly face helps neighbors get to know you.</div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start gap-4 overflow-hidden">
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
                  <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">First name</div>
                  <input id="worker-settings-name" name="name" value="{{ old('name', $user->name) }}" required class="self-stretch min-h-11 px-3 py-3 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 text-zinc-800 text-xs" />
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
                  <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">Last name</div>
                  <input value="Stored with display name" disabled class="self-stretch min-h-11 px-3 py-3 bg-stone-100 rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 text-neutral-500 text-xs" />
                </div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start gap-4 overflow-hidden">
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
                  <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">Email address</div>
                  <div class="self-stretch min-h-11 px-3 py-3 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-zinc-800 text-xs font-normal font-['Inter']">{{ $user->email }}</div>
                  </div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
                  <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">Mobile number</div>
                  <input id="worker-settings-phone" name="phone" type="tel" value="{{ old('phone', $user->phone) }}" class="self-stretch min-h-11 px-3 py-3 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 text-zinc-800 text-xs" />
                </div>
              </div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Your contact details are private. Customers reach you through Goodhands.</div>
              <button type="submit" class="self-start h-10 px-4 bg-teal-800 rounded-lg text-white text-xs font-semibold">Save account details</button>
            </form>
            <form method="POST" action="{{ route('worker.settings.password') }}" class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col gap-4">
              @csrf
              @method('PUT')
              <h2 class="text-zinc-800 text-xl font-semibold font-['Inter']">Change password</h2>
              <label for="worker-current-password" class="text-zinc-800 text-xs font-semibold">Current password</label>
              <input id="worker-current-password" name="current_password" type="password" required class="min-h-11 px-3 border border-neutral-200 rounded-lg text-zinc-800 text-xs" />
              <label for="worker-password" class="text-zinc-800 text-xs font-semibold">New password</label>
              <input id="worker-password" name="password" type="password" required class="min-h-11 px-3 border border-neutral-200 rounded-lg text-zinc-800 text-xs" />
              <label for="worker-password-confirmation" class="text-zinc-800 text-xs font-semibold">Confirm new password</label>
              <input id="worker-password-confirmation" name="password_confirmation" type="password" required class="min-h-11 px-3 border border-neutral-200 rounded-lg text-zinc-800 text-xs" />
              <button type="submit" class="self-start h-10 px-4 bg-teal-800 rounded-lg text-white text-xs font-semibold">Change password</button>
            </form>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
                <div class="flex-1 justify-start text-zinc-800 text-xl font-semibold font-['Inter']">Notifications</div>
                <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">Your preferences</div>
                </div>
              </div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Notification preferences are not stored in the current database schema.</div>
              <div class="self-stretch inline-flex justify-start items-center gap-6 overflow-hidden">
                <div class="flex-1 justify-start"><span class="text-zinc-800 text-xs font-semibold font-['Inter'] leading-6">New job requests<br/></span><span class="text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Email and push alerts when a neighbor needs a hand.</span></div>
                <div class="w-8 h-5 relative bg-neutral-200 rounded-2xl flex justify-start items-start overflow-hidden" aria-disabled="true">
                  <div class="size-3 left-[15px] top-[3px] absolute bg-white rounded-[10px]"></div>
                </div>
              </div>
              <div class="self-stretch h-px bg-neutral-200"></div>
              <div class="self-stretch h-px bg-neutral-200"></div>
              <div class="self-stretch inline-flex justify-start items-center gap-6 overflow-hidden">
                <div class="flex-1 justify-start"><span class="text-zinc-800 text-xs font-semibold font-['Inter'] leading-6">Tips, stories & Goodhands news<br/></span><span class="text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Occasional emails to help you grow your business.</span></div>
                <div class="w-8 h-5 relative bg-neutral-200 rounded-2xl flex justify-start items-start overflow-hidden" aria-disabled="true">
                  <div class="size-3 left-[3px] top-[3px] absolute bg-white rounded-[10px]"></div>
                </div>
              </div>
            </div>
            <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
              <div class="flex-1 justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Changes apply to your Goodhands worker account.</div>
              <div class="size- flex justify-start items-start gap-2.5 overflow-hidden">
                <div class="h-11 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
                  <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Cancel</div>
                </div>
                <div class="h-11 px-4 bg-teal-800 rounded-lg outline outline-1 outline-offset-[-1px] outline-teal-800 flex justify-center items-center gap-2 overflow-hidden">
                  <div class="justify-start text-white text-xs font-semibold font-['Inter']">Save changes</div>
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