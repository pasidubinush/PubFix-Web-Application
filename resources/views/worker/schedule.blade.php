<div class="worker-page w-full max-w-[1440px] h-[1141px] min-h-[1100px] bg-stone-100 inline-flex flex-col justify-start items-start overflow-hidden">
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
      <a href="{{ route('worker.service-area') }}" class="left-[59px] top-[444px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Service area</a>
      <div class="size-3.5 left-[34px] top-[443px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.profile') }}" class="left-[59px] top-[404px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">My public profile</a>
      <div class="size-3.5 left-[34px] top-[403px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.profile') }}#reviews" class="left-[62px] top-[243px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Reviews</a>
      <div class="size-3.5 left-[24px] top-[245px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.earnings') }}" class="left-[59px] top-[207px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Earnings</a>
      <div class="size-3.5 left-[27px] top-[206px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="left-[182px] top-[101px] absolute justify-start text-teal-800 text-[10px] font-normal font-['Inter']">3</div>
      <a href="{{ route('worker.bookings') }}" class="left-[59px] top-[100px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Job requests</a>
      <div class="size-3.5 left-[34px] top-[99px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.dashboard') }}" class="left-[59px] top-[46px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Overview</a>
      <div class="size-3.5 left-[34px] top-[45px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="w-44 h-px left-[18px] top-[372px] absolute bg-neutral-200"></div>
      <div class="w-44 h-11 px-3 left-[18px] top-[138px] absolute bg-gray-200 rounded-lg inline-flex justify-start items-center gap-2.5 overflow-hidden">
        <div class="size-4 relative overflow-hidden">
          <div class="size-3.5 left-[2.25px] top-[1.50px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
        </div>
        <a href="{{ route('worker.schedule') }}" class="flex-1 justify-start text-teal-800 text-xs font-normal font-['Inter']" aria-current="page">My schedule</a>
      </div>
    </div>
    @if (isset($schedule))
    <main class="flex-1 p-8 inline-flex flex-col justify-start items-start gap-7 overflow-hidden">
      <div class="self-stretch flex flex-col gap-7">
        <div class="self-stretch flex flex-wrap justify-between items-end gap-4">
          <div class="flex flex-col gap-2">
            <div class="text-neutral-500 text-xs font-semibold font-['Inter']">YOUR PRO WORKSPACE</div>
            <h1 class="text-zinc-800 text-4xl font-normal font-['Inter']">My schedule</h1>
            <p class="text-neutral-500 text-xs font-normal font-['Inter']">Accepted bookings and upcoming appointments.</p>
          </div>
          <form method="GET" action="{{ route('worker.schedule') }}" class="flex items-center gap-2">
            <label for="schedule-period" class="sr-only">Schedule month</label>
            <input id="schedule-period" name="period" type="month" value="{{ $schedule['period']->format('Y-m') }}" class="h-11 px-3 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 text-zinc-800 text-xs font-semibold font-['Inter']" />
            <button type="submit" class="h-11 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 text-zinc-800 text-xs font-semibold font-['Inter']">View month</button>
          </form>
        </div>

        <section class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col gap-4" aria-labelledby="schedule-bookings-title">
          <div class="flex items-center justify-between gap-4">
            <h2 id="schedule-bookings-title" class="text-zinc-800 text-xl font-semibold font-['Inter']">{{ $schedule['period']->format('F Y') }}</h2>
            <span class="text-neutral-500 text-xs font-normal font-['Inter']">{{ $schedule['bookings']->count() }} accepted jobs</span>
          </div>
          @forelse ($schedule['bookings'] as $booking)
            <article class="p-4 border border-neutral-200 rounded-lg flex flex-wrap items-start justify-between gap-4">
              <div class="flex flex-col gap-1">
                <h3 class="text-zinc-800 text-sm font-semibold font-['Inter']">{{ $booking->description }}</h3>
                <p class="text-neutral-500 text-xs font-normal font-['Inter']">{{ $booking->user->name }} · {{ $booking->handyman->city }}</p>
                <p class="text-neutral-500 text-xs font-normal font-['Inter']">{{ $booking->booking_at->format('D, M j, Y · g:i A') }}</p>
              </div>
              <div class="flex items-center gap-3">
                <span class="px-2.5 py-1.5 bg-gray-200 rounded-full text-teal-800 text-[10px] font-semibold font-['Inter']">{{ ucfirst($booking->status->value) }}</span>
                <a href="{{ route('worker.bookings.show', $booking) }}" class="text-teal-800 text-xs font-semibold font-['Inter']">View details ↗</a>
              </div>
            </article>
          @empty
            <p class="text-neutral-500 text-sm font-normal font-['Inter']">No accepted bookings in this month.</p>
          @endforelse
        </section>
      </div>
    </main>
    @else
    <div class="flex-1 p-8 inline-flex flex-col justify-start items-start gap-7 overflow-hidden">
      <div class="self-stretch flex flex-col justify-start items-start gap-7 overflow-hidden">
        <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
            <div class="justify-start text-neutral-500 text-xs font-semibold font-['Inter']">YOUR PRO WORKSPACE</div>
            <div class="self-stretch justify-start text-zinc-800 text-4xl font-normal font-['Inter']">My schedule</div>
            <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">A little planning. A lot of good work.</div>
          </div>
          <div class="h-11 px-4 bg-teal-800 rounded-lg outline outline-1 outline-offset-[-1px] outline-teal-800 flex justify-center items-center gap-2 overflow-hidden">
            <div class="justify-start text-white text-xs font-semibold font-['Inter']">Set availability</div>
          </div>
        </div>
        <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
          <div class="w-96 flex justify-start items-center gap-4 overflow-hidden">
            <div class="flex-1 justify-start text-zinc-800 text-2xl font-normal font-['Inter']">October 2026</div>
            <div class="size-4 relative overflow-hidden">
              <div class="w-1 h-2 left-[6.75px] top-[4.50px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-neutral-500"></div>
            </div>
            <div class="size-4 relative overflow-hidden">
              <div class="w-1 h-2 left-[6.75px] top-[4.50px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-neutral-500"></div>
            </div>
            <div class="h-11 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
              <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Today</div>
            </div>
          </div>
          <div class="size- flex justify-start items-center gap-4 overflow-hidden">
            <div class="size- flex justify-start items-center gap-2 overflow-hidden">
              <div class="size-1.5 bg-teal-800 rounded-sm"></div>
              <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Confirmed</div>
              <div class="size-1.5 bg-yellow-700 rounded-sm"></div>
              <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Pending</div>
            </div>
            <div class="size- p-1 bg-stone-200 rounded-lg flex justify-start items-start gap-1 overflow-hidden">
              <div class="size- px-3.5 py-2 bg-white rounded-[5px] flex justify-start items-start overflow-hidden">
                <div class="justify-start text-teal-800 text-xs font-normal font-['Inter']">Month</div>
              </div>
              <div class="w-14 h-8 text-center justify-center text-neutral-500 text-xs font-normal font-['Inter']">Week</div>
            </div>
          </div>
        </div>
        <div class="self-stretch inline-flex justify-start items-start gap-6 overflow-hidden">
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-6 overflow-hidden">
            <div class="self-stretch bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start overflow-hidden">
              <div class="self-stretch bg-stone-100 inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">MON</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">TUE</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">WED</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">THU</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">FRI</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">SAT</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">SUN</div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-24 p-2 bg-stone-100 border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-stone-100 rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">28</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-stone-100 border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-stone-100 rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">29</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-stone-100 border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-stone-100 rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">30</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">1</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">2</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">3</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">4</div>
                  </div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">5</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">6</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">7</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">8</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">9</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">10</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">11</div>
                  </div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">12</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">1 job · completed</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">13</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">1 job · completed</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">14</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">1 job · completed</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">15</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">1 job · completed</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-gray-200 outline outline-1 outline-offset-[-1px] outline-teal-800 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-teal-800 rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-white text-xs font-normal font-['Inter']">16</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">10 AM · Ethan</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-orange-100 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-yellow-700 text-[9px] font-normal font-['Inter']">2 PM · Emily</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">17</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-orange-100 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-yellow-700 text-[9px] font-normal font-['Inter']">10 AM · James</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">2 PM · Ava</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">18</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-orange-100 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-yellow-700 text-[9px] font-normal font-['Inter']">11 AM · Priya</div>
                  </div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">19</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">20</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">21</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">22</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">23</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">24</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">25</div>
                  </div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">26</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">27</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">28</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">29</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">30</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">31</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-stone-100 border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-stone-100 rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">1</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
                <div class="flex-1 justify-start text-zinc-800 text-base font-semibold font-['Inter']">Your regular working hours</div>
                <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Edit hours ↗</div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start gap-8 overflow-hidden">
                <div class="flex-1 justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Monday – Friday<br/>9:00 AM – 5:00 PM</div>
                <div class="flex-1 justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Saturday<br/>10:00 AM – 4:00 PM</div>
                <div class="flex-1 justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Sunday<br/>By request</div>
              </div>
            </div>
          </div>
          <div class="w-80 inline-flex flex-col justify-start items-start gap-5 overflow-hidden">
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
                <div class="flex-1 justify-start text-zinc-800 text-xl font-semibold font-['Inter']">Friday, October 16</div>
                <div class="size-4 relative overflow-hidden">
                  <div class="size-3.5 left-[2.25px] top-[1.50px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
                </div>
              </div>
              <div class="size- px-2.5 py-1.5 bg-gray-200 rounded-[100px] inline-flex justify-start items-start overflow-hidden">
                <div class="justify-start text-teal-800 text-xs font-medium font-['Inter']">Confirmed</div>
              </div>
              <div class="self-stretch justify-start text-zinc-800 text-xl font-semibold font-['Inter']">Standing desk assembly</div>
              <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">Ethan Wilson</div>
              <div class="self-stretch h-px bg-neutral-200"></div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">10:00 AM – 12:00 PM<br/>Travis Heights, Austin<br/>2 hours × $55/hr · $110</div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Assemble an adjustable standing desk in the home office. Please bring your standard tools.</div>
              <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">View job details ↗</div>
            </div>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="size- px-2.5 py-1.5 bg-orange-100 rounded-[100px] inline-flex justify-start items-start overflow-hidden">
                <div class="justify-start text-yellow-700 text-xs font-medium font-['Inter']">Awaiting your reply</div>
              </div>
              <div class="self-stretch justify-start text-zinc-800 text-base font-semibold font-['Inter']">2:00 PM · Emily Rivera</div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Desk & bookshelf assembly<br/>Bouldin Creek · 2 hours · $110</div>
              <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Review request ↗</div>
            </div>
            <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Pending requests don’t reserve your time. Accept a request to confirm it on your calendar.</div>
          </div>
        </div>
      </div>
      <div class="self-stretch pt-1 inline-flex justify-between items-start overflow-hidden">
        <div clas<div class="w-[1440px] h-[1141px] min-h-[1100px] bg-stone-100 inline-flex flex-col justify-start items-start overflow-hidden">
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
      <div class="left-[59px] top-[484px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Settings</div>
      <div class="size-3.5 left-[34px] top-[483px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="left-[59px] top-[444px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Service area</div>
      <div class="size-3.5 left-[34px] top-[443px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="left-[59px] top-[404px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">My public profile</div>
      <div class="size-3.5 left-[34px] top-[403px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="left-[62px] top-[243px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Reviews</div>
      <div class="size-3.5 left-[24px] top-[245px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="left-[59px] top-[207px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Earnings</div>
      <div class="size-3.5 left-[27px] top-[206px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="left-[182px] top-[101px] absolute justify-start text-teal-800 text-[10px] font-normal font-['Inter']">3</div>
      <div class="left-[59px] top-[100px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Job requests</div>
      <div class="size-3.5 left-[34px] top-[99px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="left-[59px] top-[46px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Overview</div>
      <div class="size-3.5 left-[34px] top-[45px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="w-44 h-px left-[18px] top-[372px] absolute bg-neutral-200"></div>
      <div class="w-44 h-11 px-3 left-[18px] top-[138px] absolute bg-gray-200 rounded-lg inline-flex justify-start items-center gap-2.5 overflow-hidden">
        <div class="size-4 relative overflow-hidden">
          <div class="size-3.5 left-[2.25px] top-[1.50px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
        </div>
        <div class="flex-1 justify-start text-teal-800 text-xs font-normal font-['Inter']">My schedule</div>
      </div>
    </div>
    <div class="flex-1 p-8 inline-flex flex-col justify-start items-start gap-7 overflow-hidden">
      <div class="self-stretch flex flex-col justify-start items-start gap-7 overflow-hidden">
        <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
            <div class="justify-start text-neutral-500 text-xs font-semibold font-['Inter']">YOUR PRO WORKSPACE</div>
            <div class="self-stretch justify-start text-zinc-800 text-4xl font-normal font-['Inter']">My schedule</div>
            <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">A little planning. A lot of good work.</div>
          </div>
          <div class="h-11 px-4 bg-teal-800 rounded-lg outline outline-1 outline-offset-[-1px] outline-teal-800 flex justify-center items-center gap-2 overflow-hidden">
            <div class="justify-start text-white text-xs font-semibold font-['Inter']">Set availability</div>
          </div>
        </div>
        <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
          <div class="w-96 flex justify-start items-center gap-4 overflow-hidden">
            <div class="flex-1 justify-start text-zinc-800 text-2xl font-normal font-['Inter']">October 2026</div>
            <div class="size-4 relative overflow-hidden">
              <div class="w-1 h-2 left-[6.75px] top-[4.50px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-neutral-500"></div>
            </div>
            <div class="size-4 relative overflow-hidden">
              <div class="w-1 h-2 left-[6.75px] top-[4.50px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-neutral-500"></div>
            </div>
            <div class="h-11 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
              <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Today</div>
            </div>
          </div>
          <div class="size- flex justify-start items-center gap-4 overflow-hidden">
            <div class="size- flex justify-start items-center gap-2 overflow-hidden">
              <div class="size-1.5 bg-teal-800 rounded-sm"></div>
              <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Confirmed</div>
              <div class="size-1.5 bg-yellow-700 rounded-sm"></div>
              <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Pending</div>
            </div>
            <div class="size- p-1 bg-stone-200 rounded-lg flex justify-start items-start gap-1 overflow-hidden">
              <div class="size- px-3.5 py-2 bg-white rounded-[5px] flex justify-start items-start overflow-hidden">
                <div class="justify-start text-teal-800 text-xs font-normal font-['Inter']">Month</div>
              </div>
              <div class="w-14 h-8 text-center justify-center text-neutral-500 text-xs font-normal font-['Inter']">Week</div>
            </div>
          </div>
        </div>
        <div class="self-stretch inline-flex justify-start items-start gap-6 overflow-hidden">
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-6 overflow-hidden">
            <div class="self-stretch bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start overflow-hidden">
              <div class="self-stretch bg-stone-100 inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">MON</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">TUE</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">WED</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">THU</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">FRI</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">SAT</div>
                <div class="flex-1 h-10 text-center justify-center text-neutral-500 text-[10px] font-normal font-['Inter']">SUN</div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-24 p-2 bg-stone-100 border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-stone-100 rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">28</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-stone-100 border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-stone-100 rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">29</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-stone-100 border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-stone-100 rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">30</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">1</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">2</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">3</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">4</div>
                  </div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">5</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">6</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">7</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">8</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">9</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">10</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">11</div>
                  </div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">12</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">1 job · completed</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">13</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">1 job · completed</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">14</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">1 job · completed</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">15</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">1 job · completed</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-gray-200 outline outline-1 outline-offset-[-1px] outline-teal-800 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-teal-800 rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-white text-xs font-normal font-['Inter']">16</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">10 AM · Ethan</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-orange-100 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-yellow-700 text-[9px] font-normal font-['Inter']">2 PM · Emily</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">17</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-orange-100 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-yellow-700 text-[9px] font-normal font-['Inter']">10 AM · James</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-gray-200 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-teal-800 text-[9px] font-normal font-['Inter']">2 PM · Ava</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">18</div>
                  </div>
                  <div class="self-stretch px-1 py-[3px] bg-orange-100 rounded-[3px] inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-yellow-700 text-[9px] font-normal font-['Inter']">11 AM · Priya</div>
                  </div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">19</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">20</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">21</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">22</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">23</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">24</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">25</div>
                  </div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start overflow-hidden">
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">26</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">27</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">28</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">29</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">30</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-white border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-white rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">31</div>
                  </div>
                </div>
                <div class="flex-1 h-24 p-2 bg-stone-100 border-r border-t border-neutral-200 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="size-6 bg-stone-100 rounded-[100px] inline-flex justify-center items-center overflow-hidden">
                    <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">1</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
                <div class="flex-1 justify-start text-zinc-800 text-base font-semibold font-['Inter']">Your regular working hours</div>
                <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Edit hours ↗</div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start gap-8 overflow-hidden">
                <div class="flex-1 justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Monday – Friday<br/>9:00 AM – 5:00 PM</div>
                <div class="flex-1 justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Saturday<br/>10:00 AM – 4:00 PM</div>
                <div class="flex-1 justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Sunday<br/>By request</div>
              </div>
            </div>
          </div>
          <div class="w-80 inline-flex flex-col justify-start items-start gap-5 overflow-hidden">
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
                <div class="flex-1 justify-start text-zinc-800 text-xl font-semibold font-['Inter']">Friday, October 16</div>
                <div class="size-4 relative overflow-hidden">
                  <div class="size-3.5 left-[2.25px] top-[1.50px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
                </div>
              </div>
              <div class="size- px-2.5 py-1.5 bg-gray-200 rounded-[100px] inline-flex justify-start items-start overflow-hidden">
                <div class="justify-start text-teal-800 text-xs font-medium font-['Inter']">Confirmed</div>
              </div>
              <div class="self-stretch justify-start text-zinc-800 text-xl font-semibold font-['Inter']">Standing desk assembly</div>
              <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">Ethan Wilson</div>
              <div class="self-stretch h-px bg-neutral-200"></div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">10:00 AM – 12:00 PM<br/>Travis Heights, Austin<br/>2 hours × $55/hr · $110</div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Assemble an adjustable standing desk in the home office. Please bring your standard tools.</div>
              <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">View job details ↗</div>
            </div>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="size- px-2.5 py-1.5 bg-orange-100 rounded-[100px] inline-flex justify-start items-start overflow-hidden">
                <div class="justify-start text-yellow-700 text-xs font-medium font-['Inter']">Awaiting your reply</div>
              </div>
              <div class="self-stretch justify-start text-zinc-800 text-base font-semibold font-['Inter']">2:00 PM · Emily Rivera</div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Desk & bookshelf assembly<br/>Bouldin Creek · 2 hours · $110</div>
              <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Review request ↗</div>
            </div>
            <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Pending requests don’t reserve your time. Accept a request to confirm it on your calendar.</div>
          </div>
        </div>
      </div>
      <div class="self-stretch pt-1 inline-flex justify-between items-start overflow-hidden">
        <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">© 2026 PubFix · Built around good work.</div>
        <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Help center     Terms     Privacy</div>
      </div>
    </div>
    @endif
  </div>
</div>