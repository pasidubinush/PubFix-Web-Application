<div class="worker-page w-full max-w-[1440px] min-h-[1100px] bg-stone-100 inline-flex flex-col justify-start items-start overflow-hidden">
  @include('worker.partials.navigation')
  <div class="self-stretch min-h-[1012px] inline-flex justify-start items-start overflow-hidden">
    <div class="w-56 self-stretch relative bg-white border-r border-neutral-200 overflow-hidden">
      <a href="{{ route('worker.settings') }}" class="left-[59px] top-[484px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Settings</a>
      <div class="size-3.5 left-[34px] top-[483px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.service-area') }}" class="left-[59px] top-[444px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Service area</a>
      <div class="size-3.5 left-[34px] top-[443px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.profile') }}" class="left-[59px] top-[404px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">My public profile</a>
      <div class="size-3.5 left-[34px] top-[403px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.profile') }}#reviews" class="left-[59px] top-[278px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Reviews</a>
      <div class="size-3.5 left-[34px] top-[278px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.schedule') }}" class="left-[59px] top-[154px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">My schedule</a>
      <div class="size-3.5 left-[34px] top-[153px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="left-[182px] top-[101px] absolute justify-start text-teal-800 text-[10px] font-normal font-['Inter']">3</div>
      <a href="{{ route('worker.bookings') }}" class="left-[59px] top-[100px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Job requests</a>
      <div class="size-3.5 left-[34px] top-[99px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.dashboard') }}" class="left-[59px] top-[46px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Overview</a>
      <div class="size-3.5 left-[34px] top-[45px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="w-44 h-px left-[18px] top-[372px] absolute bg-neutral-200"></div>
      <div class="w-44 h-11 px-3 left-[18px] top-[207px] absolute bg-gray-200 rounded-lg inline-flex justify-start items-center gap-2.5 overflow-hidden">
        <div class="size-4 relative overflow-hidden">
          <div class="size-3.5 left-[2.25px] top-[2.25px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
        </div>
        <a href="{{ route('worker.earnings') }}" class="flex-1 justify-start text-teal-800 text-xs font-normal font-['Inter']" aria-current="page">Earnings</a>
      </div>
    </div>
    @if (isset($earnings))
    <main class="flex-1 p-8 inline-flex flex-col justify-start items-start gap-7 overflow-hidden">
      <div class="self-stretch flex flex-col gap-7">
        <div class="self-stretch flex flex-wrap justify-between items-end gap-4">
          <div class="flex flex-col gap-2">
            <div class="text-neutral-500 text-xs font-semibold font-['Inter']">YOUR PRO WORKSPACE</div>
            <h1 class="text-zinc-800 text-4xl font-normal font-['Inter']">Earnings</h1>
            <p class="text-neutral-500 text-xs font-normal font-['Inter']">Completed jobs for {{ $earnings['period']->format('F Y') }}.</p>
          </div>
          <form method="GET" action="{{ route('worker.earnings') }}" class="flex items-center gap-2">
            <label for="earnings-period" class="sr-only">Earnings month</label>
            <input id="earnings-period" name="period" type="month" value="{{ $earnings['period']->format('Y-m') }}" class="h-11 px-3 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 text-zinc-800 text-xs font-semibold font-['Inter']" />
            <button type="submit" class="h-11 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 text-zinc-800 text-xs font-semibold font-['Inter']">View month</button>
          </form>
        </div>

        <section class="self-stretch grid gap-4 md:grid-cols-3" aria-label="Earnings summary">
          <article class="p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200">
            <div class="text-neutral-500 text-[9px] font-normal font-['Inter']">EARNED THIS MONTH</div>
            <div class="mt-3 text-zinc-800 text-3xl font-normal font-['Inter']">{{ $earnings['paymentDataAvailable'] ? '$'.number_format($earnings['totalEarnings'], 2) : 'N/A' }}</div>
            <div class="mt-2 text-neutral-500 text-[10px] font-normal font-['Inter']">No payment records are stored yet.</div>
          </article>
          <article class="p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200">
            <div class="text-neutral-500 text-[9px] font-normal font-['Inter']">COMPLETED JOBS</div>
            <div class="mt-3 text-zinc-800 text-3xl font-normal font-['Inter']">{{ $earnings['completedBookings']->count() }}</div>
            <div class="mt-2 text-neutral-500 text-[10px] font-normal font-['Inter']">Completed in selected month</div>
          </article>
          <article class="p-5 bg-gray-200 rounded-xl outline outline-1 outline-offset-[-1px] outline-gray-200">
            <div class="text-neutral-500 text-[9px] font-normal font-['Inter']">PAYMENT HISTORY</div>
            <div class="mt-3 text-zinc-800 text-xl font-normal font-['Inter']">Not available</div>
            <div class="mt-2 text-neutral-500 text-[10px] font-normal font-['Inter']">Payment data is not part of the current schema.</div>
          </article>
        </section>

        <section class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col gap-4" aria-labelledby="completed-jobs-title">
          <div class="flex items-center justify-between gap-4">
            <h2 id="completed-jobs-title" class="text-zinc-800 text-xl font-semibold font-['Inter']">Completed jobs</h2>
            <span class="text-neutral-500 text-xs font-normal font-['Inter']">{{ $earnings['completedBookings']->count() }} records</span>
          </div>
          @forelse ($earnings['completedBookings'] as $booking)
            <article class="p-4 border-b border-neutral-200 flex flex-wrap justify-between gap-3">
              <div><h3 class="text-zinc-800 text-xs font-medium font-['Inter']">{{ $booking->description }}</h3><p class="text-neutral-500 text-[10px] font-normal font-['Inter']">{{ $booking->user->name }} · {{ $booking->booking_at->format('M j, Y') }}</p></div>
              <span class="text-neutral-500 text-xs font-normal font-['Inter']">Payment not recorded</span>
            </article>
          @empty
            <p class="text-neutral-500 text-sm font-normal font-['Inter']">No completed jobs in this month.</p>
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
            <div class="self-stretch justify-start text-zinc-800 text-4xl font-normal font-['Inter']">Earnings</div>
            <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Your hard work, in numbers. All amounts are in USD.</div>
          </div>
          <div class="h-11 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
            <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Download statement</div>
          </div>
        </div>
        <div class="self-stretch inline-flex justify-start items-start gap-4 overflow-hidden">
          <div class="flex-1 p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex flex-col justify-start items-start gap-3 overflow-hidden">
            <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
              <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">EARNED THIS MONTH</div>
              <div class="size-4 relative overflow-hidden">
                <div class="w-3.5 h-3 left-[2.13px] top-[2.13px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
              </div>
            </div>
            <div class="justify-start text-zinc-800 text-3xl font-normal font-['Inter']">$1,485</div>
            <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">+18% from last month</div>
          </div>
          <div class="flex-1 p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex flex-col justify-start items-start gap-3 overflow-hidden">
            <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
              <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">PAID OUT</div>
              <div class="size-4 relative overflow-hidden">
                <div class="w-3 h-3.5 left-[2.11px] top-[1.41px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-teal-800"></div>
              </div>
            </div>
            <div class="justify-start text-zinc-800 text-3xl font-normal font-['Inter']">$1,265</div>
            <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Deposited to your bank this month</div>
          </div>
          <div class="flex-1 p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex flex-col justify-start items-start gap-3 overflow-hidden">
            <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
              <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">AVAILABLE BALANCE</div>
              <div class="size-4 relative overflow-hidden">
                <div class="size-2 left-[4.96px] top-[4.96px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-teal-800"></div>
              </div>
            </div>
            <div class="justify-start text-zinc-800 text-3xl font-normal font-['Inter']">$220</div>
            <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Next payout · Monday, Oct 19</div>
          </div>
          <div class="flex-1 p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex flex-col justify-start items-start gap-3 overflow-hidden">
            <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
              <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">UPCOMING CONFIRMED</div>
              <div class="size-4 relative overflow-hidden">
                <div class="w-3 h-3.5 left-[2.13px] top-[1.42px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
              </div>
            </div>
            <div class="justify-start text-zinc-800 text-3xl font-normal font-['Inter']">$220</div>
            <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">2 jobs · Not yet included in earnings</div>
          </div>
        </div>
        <div class="self-stretch inline-flex justify-start items-start gap-6 overflow-hidden">
          <div class="flex-1 p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex flex-col justify-start items-start gap-4 overflow-hidden">
            <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
              <div class="flex-1 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                <div class="self-stretch justify-start text-zinc-800 text-xl font-semibold font-['Inter']">Income over time</div>
                <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">October 1–16 · 27 billable hours</div>
              </div>
              <div class="h-11 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
                <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">October 2026</div>
                <div class="size-3.5 relative overflow-hidden">
                  <div class="w-2 h-1 left-[3.75px] top-[5.63px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
                </div>
              </div>
            </div>
            <div class="self-stretch h-48 inline-flex justify-start items-end gap-3 overflow-hidden">
              <div class="w-8 h-48 inline-flex flex-col justify-between items-start overflow-hidden">
                <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">$165</div>
                <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">$110</div>
                <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">$55</div>
                <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">$0</div>
              </div>
              <div class="flex-1 h-48 border-b border-neutral-200 flex justify-start items-end gap-3 overflow-hidden">
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-14 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">1</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-28 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">2</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-0.5 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">3</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-40 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">4</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-14 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">5</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-28 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">6</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-28 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">7</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-14 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">8</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-40 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">9</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-0.5 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">10</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-28 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">11</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-28 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">12</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-14 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">13</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-40 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">14</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-28 bg-gray-200 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">15</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-center gap-2 overflow-hidden">
                  <div class="self-stretch h-28 bg-teal-800 rounded-tl-sm rounded-tr-sm"></div>
                  <div class="justify-start text-neutral-500 text-[9px] font-normal font-['Inter']">16</div>
                </div>
              </div>
            </div>
            <div class="self-stretch justify-start text-neutral-500 text-[10px] font-normal font-['Inter'] leading-4">Completed work only. Upcoming jobs appear after completion and payment.</div>
          </div>
          <div class="w-80 p-5 bg-gray-200 rounded-xl outline outline-1 outline-offset-[-1px] outline-gray-200 inline-flex flex-col justify-start items-start gap-4 overflow-hidden">
            <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
              <div class="flex-1 justify-start text-zinc-800 text-base font-semibold font-['Inter']">Your next payout</div>
              <div class="size-4 relative overflow-hidden">
                <div class="size-3.5 left-[2.23px] top-[1.50px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-teal-800"></div>
              </div>
            </div>
            <div class="justify-start text-zinc-800 text-4xl font-normal font-['Inter']">$220.00</div>
            <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Scheduled for Monday, October 19<br/>Usually arrives in 1–2 business days.</div>
            <div class="self-stretch h-px bg-neutral-200"></div>
            <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Chase checking ···· 4821<br/>Automatic weekly payouts</div>
            <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Manage payout account ↗</div>
          </div>
        </div>
        <div class="self-stretch bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start overflow-hidden">
          <div class="self-stretch p-5 inline-flex justify-between items-center overflow-hidden">
            <div class="flex-1 justify-start text-zinc-800 text-xl font-semibold font-['Inter']">Transaction history</div>
            <div class="size- flex justify-start items-start gap-2.5 overflow-hidden">
              <div class="h-11 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
                <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">All statuses</div>
                <div class="size-3.5 relative overflow-hidden">
                  <div class="w-2 h-1 left-[3.75px] top-[5.63px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
                </div>
              </div>
              <div class="h-11 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
                <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">This month</div>
                <div class="size-3.5 relative overflow-hidden">
                  <div class="w-2 h-1 left-[3.75px] top-[5.63px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="self-stretch px-5 py-3 bg-stone-100 inline-flex justify-start items-start gap-4 overflow-hidden">
            <div class="flex-1 justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">JOB / CUSTOMER</div>
            <div class="w-44 justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">COMPLETED</div>
            <div class="w-36 justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">STATUS</div>
            <div class="w-28 text-right justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">AMOUNT</div>
          </div>
          <div class="self-stretch px-5 py-3.5 border-b border-neutral-200 inline-flex justify-start items-center gap-4 overflow-hidden">
            <div class="flex-1 inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
              <div class="justify-start text-zinc-800 text-xs font-medium font-['Inter']">Bookcase assembly</div>
              <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Olivia Chen</div>
            </div>
            <div class="w-44 justify-start text-neutral-500 text-xs font-normal font-['Inter']">Oct 15, 2026</div>
            <div class="w-36 flex justify-start items-start overflow-hidden">
              <div class="size- px-2.5 py-1.5 bg-gray-200 rounded-[100px] flex justify-start items-start overflow-hidden">
                <div class="justify-start text-teal-800 text-xs font-medium font-['Inter']">Available</div>
              </div>
            </div>
            <div class="w-28 text-right justify-start text-zinc-800 text-sm font-semibold font-['Inter']">$110</div>
          </div>
          <div class="self-stretch px-5 py-3.5 border-b border-neutral-200 inline-flex justify-start items-center gap-4 overflow-hidden">
            <div class="flex-1 inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
              <div class="justify-start text-zinc-800 text-xs font-medium font-['Inter']">Custom shelving installation</div>
              <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Daniel Brooks</div>
            </div>
            <div class="w-44 justify-start text-neutral-500 text-xs font-normal font-['Inter']">Oct 14, 2026</div>
            <div class="w-36 flex justify-start items-start overflow-hidden">
              <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">Paid out</div>
              </div>
            </div>
            <div class="w-28 text-right justify-start text-zinc-800 text-sm font-semibold font-['Inter']">$165</div>
          </div>
          <div class="self-stretch px-5 py-3.5 border-b border-neutral-200 inline-flex justify-start items-center gap-4 overflow-hidden">
            <div class="flex-1 inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
              <div class="justify-start text-zinc-800 text-xs font-medium font-['Inter']">Dining table assembly</div>
              <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Sofia Martinez</div>
            </div>
            <div class="w-44 justify-start text-neutral-500 text-xs font-normal font-['Inter']">Oct 13, 2026</div>
            <div class="w-36 flex justify-start items-start overflow-hidden">
              <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">Paid out</div>
              </div>
            </div>
            <div class="w-28 text-right justify-start text-zinc-800 text-sm font-semibold font-['Inter']">$110</div>
          </div>
          <div class="self-stretch px-5 py-3.5 border-b border-neutral-200 inline-flex justify-start items-center gap-4 overflow-hidden">
            <div class="flex-1 inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
              <div class="justify-start text-zinc-800 text-xs font-medium font-['Inter']">Storage cabinet assembly</div>
              <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Liam Anderson</div>
            </div>
            <div class="w-44 justify-start text-neutral-500 text-xs font-normal font-['Inter']">Oct 12, 2026</div>
            <div class="w-36 flex justify-start items-start overflow-hidden">
              <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">Paid out</div>
              </div>
            </div>
            <div class="w-28 text-right justify-start text-zinc-800 text-sm font-semibold font-['Inter']">$110</div>
          </div>
          <div class="self-stretch px-5 py-3.5 border-b border-neutral-200 inline-flex justify-start items-center gap-4 overflow-hidden">
            <div class="flex-1 inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
              <div class="justify-start text-zinc-800 text-xs font-medium font-['Inter']">Cabinet hinge repair</div>
              <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Grace Lee</div>
            </div>
            <div class="w-44 justify-start text-neutral-500 text-xs font-normal font-['Inter']">Oct 11, 2026</div>
            <div class="w-36 flex justify-start items-start overflow-hidden">
              <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-start overflow-hidden">
                <div class="justify-start text-neutral-500 text-xs font-medium font-['Inter']">Paid out</div>
              </div>
            </div>
            <div class="w-28 text-right justify-start text-zinc-800 text-sm font-semibold font-['Inter']">$55</div>
          </div>
          <div class="self-stretch p-5 inline-flex justify-between items-start overflow-hidden">
            <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Showing 5 of 18 completed jobs this month</div>
            <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">View all transactions ↗</div>
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
</div>
</div>