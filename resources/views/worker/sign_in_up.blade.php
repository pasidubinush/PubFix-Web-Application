<div class="worker-page w-full max-w-[1440px] min-h-[1100px] bg-stone-100 inline-flex flex-col justify-start items-start overflow-hidden">
  @include('worker.partials.navigation')
  <div class="self-stretch h-20 px-20 border-b border-neutral-200 inline-flex justify-between items-center overflow-hidden">
    <div class="size- flex justify-start items-center gap-2 overflow-hidden">
      <div class="w-8 h-9 bg-teal-800 rounded-[10px] flex justify-center items-center overflow-hidden">
        <div class="size-6 relative overflow-hidden">
          <div class="size-5 left-[2.88px] top-[2.88px] absolute outline outline-[1.20px] outline-offset-[-0.60px] outline-white"></div>
        </div>
      </div>
      <div class="justify-start"><span class="text-zinc-800 text-2xl font-normal font-['Inter']">Pub</span><span class="text-green-500 text-2xl font-normal font-['Inter']">Fix</span></div>
    </div>
    <div class="size- flex justify-start items-center gap-6 overflow-hidden">
      <a href="{{ route('worker.sign-in') }}" class="justify-start text-zinc-800 text-sm font-semibold font-['Inter']">Log in</a>
      <a href="{{ route('worker.sign-up') }}" class="justify-start text-teal-800 text-sm font-semibold font-['Inter']">Sign up</a>
      <a href="{{ route('handymen.index') }}" class="h-12 px-5 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-start items-center gap-2.5 overflow-hidden">
        <span class="justify-start text-zinc-800 text-sm font-semibold font-['Inter']">Find a handyman</span>
        <div class="size-4 relative overflow-hidden">
          <div class="size-2 left-[4.96px] top-[4.96px] absolute outline outline-[1.20px] outline-offset-[-0.60px] outline-teal-800"></div>
        </div>
      </a>
    </div>
  </div>
  <div class="self-stretch min-h-[947px] px-20 pt-12 pb-16 inline-flex justify-start items-start gap-24 overflow-hidden">
    <div class="flex-1 px-7 inline-flex flex-col justify-start items-start gap-6 overflow-hidden">
      <div class="self-stretch p-[5px] bg-stone-200 rounded-xl inline-flex justify-start items-start gap-1.5 overflow-hidden">
        <div class="flex-1 h-12 bg-stone-200 rounded-lg flex justify-center items-center gap-2 overflow-hidden">
          <div class="size-4 relative overflow-hidden">
            <div class="size-3.5 left-[2.16px] top-[2.16px] absolute outline outline-[1.20px] outline-offset-[-0.60px] outline-neutral-500"></div>
          </div>
          <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">I need a hand</div>
        </div>
        <div class="flex-1 h-12 bg-white rounded-lg flex justify-center items-center gap-2 overflow-hidden">
          <div class="size-4 relative overflow-hidden">
            <div class="size-3.5 left-[2.16px] top-[2.16px] absolute outline outline-[1.20px] outline-offset-[-0.60px] outline-teal-800"></div>
          </div>
          <div class="justify-start text-teal-800 text-xs font-normal font-['Inter']">I’m a handyman</div>
        </div>
      </div>
      <div class="self-stretch flex flex-col justify-start items-start gap-2.5 overflow-hidden">
        <div class="self-stretch justify-start text-zinc-800 text-3xl font-normal font-['Inter']">Handyman sign-in</div>
        <div class="self-stretch justify-start text-neutral-500 text-sm font-normal font-['Inter'] leading-6">Welcome back. Your next good job is waiting.</div>
        <div class="self-stretch justify-start"><span class="text-neutral-500 text-xs font-normal font-['Inter'] leading-5">New to Goodhands? </span><a href="{{ route('worker.sign-up') }}" class="text-teal-800 text-xs font-semibold font-['Inter'] leading-5">Create a pro account</a></div>
      </div>
      <button type="button" class="self-stretch h-12 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex justify-center items-center overflow-hidden">
        <div class="justify-start text-zinc-800 text-sm font-semibold font-['Inter']">Continue with Google</div>
      </button>
      <div class="self-stretch inline-flex justify-start items-center gap-4 overflow-hidden">
        <div class="flex-1 h-px bg-neutral-200"></div>
        <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">or sign in with email</div>
        <div class="flex-1 h-px bg-neutral-200"></div>
      </div>
      <form method="GET" action="{{ route('worker.sign-in') }}" class="self-stretch flex flex-col justify-start items-start gap-5 overflow-hidden">
        <div class="self-stretch flex flex-col justify-start items-start gap-2 overflow-hidden">
          <label for="worker-email" class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">Email address</label>
          <input id="worker-email" name="email" type="email" placeholder="marcus.reed@email.com" class="self-stretch h-12 px-3.5 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 text-neutral-500 text-sm font-normal font-['Inter']" />
        </div>
        <div class="self-stretch flex flex-col justify-start items-start gap-2 overflow-hidden">
          <label for="worker-password" class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">Password</label>
          <input id="worker-password" name="password" type="password" placeholder="••••••••••••" class="self-stretch h-12 px-3.5 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 text-neutral-500 text-sm font-normal font-['Inter']" />
        </div>
        <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
        <div class="size- flex justify-start items-center gap-2.5 overflow-hidden">
          <input id="worker-remember" type="checkbox" name="remember" value="1" class="size-4 accent-teal-800" checked />
          <label for="worker-remember" class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Remember me</label>
        </div>
        <a href="{{ route('password.request') }}" class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Forgot password?</a>
        </div>
      <button type="submit" class="self-stretch h-12 bg-teal-800 rounded-lg inline-flex justify-center items-center gap-2.5 overflow-hidden">
        <div class="justify-start text-white text-sm font-semibold font-['Inter']">Sign in to my pro account</div>
        <div class="size-4 relative overflow-hidden">
          <div class="size-2.5 left-[3.54px] top-[3.54px] absolute outline outline-[1.20px] outline-offset-[-0.60px] outline-white"></div>
        </div>
      </button>
      </form>
      <div class="self-stretch inline-flex justify-center items-center gap-1.5 overflow-hidden">
        <div class="size-3 relative overflow-hidden">
          <div class="size-2.5 left-[1.44px] top-[1.44px] absolute outline outline-[1.20px] outline-offset-[-0.60px] outline-neutral-500"></div>
        </div>
        <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Your information is safe. Your inbox stays peaceful.</div>
      </div>
      <div class="self-stretch p-5 bg-gray-200 rounded-xl inline-flex justify-start items-center gap-3 overflow-hidden">
        <div class="size-6 relative overflow-hidden">
          <div class="w-4 h-5 left-[3px] top-[2px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-teal-800"></div>
        </div>
        <div class="flex-1 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
          <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">A real team, on your side.</div>
          <div class="justify-start text-teal-800 text-xs font-normal font-['Inter']">Need a hand signing in? Talk to us ↗</div>
        </div>
      </div>
    </div>
  </div>
  <div class="self-stretch px-20 py-6 border-t border-neutral-200 inline-flex justify-between items-start overflow-hidden">
    <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">© 2026 PubFix. Good work, close to home.</div>
    <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Privacy policy     Terms of service     Help center</div>
  </div>
</div>