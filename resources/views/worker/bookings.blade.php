<x-worker-layout title="PubFix · Job Requests">
<div class="worker-page w-full max-w-[1440px] bg-stone-100 inline-flex flex-col justify-start items-start overflow-hidden">
  @include('worker.partials.navigation')
  <div class="self-stretch h-20 px-8 bg-white border-b border-neutral-200 inline-flex justify-between items-center overflow-hidden">
    <div class="size- flex justify-start items-center gap-8 overflow-hidden">
      <div class="size- flex justify-start items-center gap-2 overflow-hidden">
        <div class="w-8 h-9 bg-teal-800 rounded-[10px] flex justify-center items-center overflow-hidden">
          <div class="size-6 relative overflow-hidden">
            <div class="size-5 left-[2.88px] top-[2.88px] absolute outline outline-[1.20px] outline-offset-[-0.60px] outline-white"></div>
          </div>
        </div>
        <div class="justify-start"><span class="text-zinc-800 text-2xl font-normal font-['Inter']">Pub</span><span class="text-green-500 text-2xl font-normal font-['Inter']">Fix</span></div>
      </div>
      <div class="size- px-2.5 py-1.5 bg-gray-200 rounded-[100px] flex justify-start items-center gap-[5px] overflow-hidden">
        <div class="justify-start text-teal-800 text-[10px] font-semibold font-['Inter']">CUSTOMER WORKSPACE</div>
      </div>
    </div>
    <div class="size- flex justify-start items-center gap-5 overflow-hidden">
      <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
        <div class="size-4 relative overflow-hidden">
          <div class="w-2.5 h-3.5 left-[2.67px] top-[1.33px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-teal-800"></div>
        </div>
        <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Austin, TX</div>
      </div>
      <div class="w-px h-6 bg-neutral-200"></div>
      <div class="w-6 h-7 relative flex justify-start items-center overflow-hidden">
        <div class="size-5 relative overflow-hidden">
          <div class="size-4 left-[2.63px] top-[1.75px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-zinc-800"></div>
        </div>
        <div class="size-1.5 left-[16px] top-[2px] absolute bg-amber-800 rounded-md"></div>
      </div>
      <div class="size-10 bg-stone-200 rounded-[30px] flex justify-center items-center overflow-hidden">
        <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">ER</div>
      </div>
      <div class="size- inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
        <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Emily Rivera</div>
        <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Personal account</div>
      </div>
      <div class="size-4 relative overflow-hidden">
        <div class="w-2 h-1 left-[4px] top-[6px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
      </div>
    </div>
  </div>
  <div class="self-stretch inline-flex justify-start items-start overflow-hidden">
    <div class="w-56 self-stretch px-4 py-7 bg-white border-r border-neutral-200 inline-flex flex-col justify-start items-start gap-6 overflow-hidden">
      <div class="self-stretch flex flex-col justify-start items-start gap-2 overflow-hidden">
        <div class="self-stretch h-11 px-3 bg-white rounded-lg inline-flex justify-start items-center gap-2.5 overflow-hidden">
          <div class="size-4 relative overflow-hidden">
            <div class="size-3.5 left-[2.25px] top-[2.25px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
          </div>
          <a href="{{ route('worker.dashboard') }}" class="flex-1 justify-start text-neutral-500 text-xs font-normal font-['Inter']">Overview</a>
        </div>
        <div class="self-stretch h-11 px-3 bg-white rounded-lg inline-flex justify-start items-center gap-2.5 overflow-hidden">
          <div class="size-4 relative overflow-hidden">
            <div class="size-3.5 left-[2.25px] top-[2.25px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
          </div>
          <a href="{{ route('handymen.index') }}" class="flex-1 justify-start text-neutral-500 text-xs font-normal font-['Inter']">Find a handyman</a>
        </div>
        <div class="self-stretch h-11 px-3 bg-gray-200 rounded-lg inline-flex justify-start items-center gap-2.5 overflow-hidden">
          <div class="size-4 relative overflow-hidden">
            <div class="size-3.5 left-[2.25px] top-[1.50px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-teal-800"></div>
          </div>
          <a href="{{ route('worker.bookings') }}" class="flex-1 justify-start text-teal-800 text-xs font-semibold font-['Inter']" aria-current="page">My Bookings</a>
          <div class="justify-start text-teal-800 text-[10px] font-normal font-['Inter']">2</div>
        </div>
      </div>
      <div class="self-stretch h-px bg-neutral-200"></div>
    </div>
    <div class="flex-1 p-8 inline-flex flex-col justify-start items-start gap-7 overflow-hidden">
      <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
        <div class="size- inline-flex flex-col justify-start items-start gap-2.5 overflow-hidden">
          <div class="justify-start text-neutral-500 text-xs font-semibold font-['Inter']">YOUR HOME. IN GOOD HANDS.</div>
          <div class="justify-start text-zinc-800 text-4xl font-normal font-['Inter']">My Bookings</div>
          <div class="justify-start text-neutral-500 text-sm font-normal font-['Inter']">A home for your plans, past projects, and little thank-yous.</div>
        </div>
        <div class="h-10 px-4 bg-teal-800 rounded-lg outline outline-1 outline-offset-[-1px] outline-teal-800 flex justify-center items-center gap-2 overflow-hidden">
          <div class="justify-start text-white text-xs font-semibold font-['Inter']">Book a service</div>
          <div class="size-4 relative overflow-hidden">
            <div class="size-2.5 left-[3.33px] top-[3.33px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-white"></div>
          </div>
        </div>
      </div>
      @if (isset($bookings))
        <section class="self-stretch flex flex-col gap-5" aria-labelledby="worker-bookings-title">
          <div class="flex items-center justify-between gap-4">
            <h2 id="worker-bookings-title" class="text-zinc-800 text-xl font-normal font-['Inter']">Assigned bookings · {{ $bookings->count() }}</h2>
            <span class="text-neutral-500 text-xs font-normal font-['Inter']">Newest first</span>
          </div>

          @forelse ($bookings as $booking)
            <article class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col gap-4">
              <div class="flex items-start justify-between gap-4">
                <div class="flex flex-col gap-1">
                  <h3 class="text-zinc-800 text-xl font-normal font-['Inter']">{{ $booking->description }}</h3>
                  <p class="text-neutral-500 text-xs font-normal font-['Inter']">{{ $booking->user->name }} · {{ $booking->booking_at->format('M j, Y · g:i A') }}</p>
                </div>
                <span class="rounded-full px-2.5 py-1.5 bg-gray-200 text-teal-800 text-[10px] font-semibold font-['Inter']">{{ ucfirst($booking->status->value) }}</span>
              </div>

              <div class="flex flex-wrap gap-5 text-neutral-500 text-xs font-normal font-['Inter']">
                <span>Booking #{{ $booking->id }}</span>
                <span>{{ $booking->handyman->city ?? 'Service area unavailable' }}</span>
              </div>

              <div class="flex flex-wrap items-center justify-between gap-3 border-t border-neutral-200 pt-3.5">
                <a href="{{ route('worker.bookings.show', $booking) }}" class="text-teal-800 text-xs font-semibold font-['Inter']">View details ↗</a>
                <div class="flex flex-wrap gap-2">
                  @if ($booking->isPending())
                    <form method="POST" action="{{ route('worker.bookings.decline', $booking) }}">
                      @csrf
                      <button type="submit" class="h-10 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 text-zinc-800 text-xs font-semibold font-['Inter']">Decline</button>
                    </form>
                    <form method="POST" action="{{ route('worker.bookings.accept', $booking) }}">
                      @csrf
                      <button type="submit" class="h-10 px-4 bg-teal-800 rounded-lg outline outline-1 outline-offset-[-1px] outline-teal-800 text-white text-xs font-semibold font-['Inter']">Accept job</button>
                    </form>
                  @elseif ($booking->isConfirmed())
                    <form method="POST" action="{{ route('worker.bookings.complete', $booking) }}">
                      @csrf
                      <button type="submit" class="h-10 px-4 bg-teal-800 rounded-lg outline outline-1 outline-offset-[-1px] outline-teal-800 text-white text-xs font-semibold font-['Inter']">Mark complete</button>
                    </form>
                  @endif
                </div>
              </div>
            </article>
          @empty
            <div class="p-8 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 text-neutral-500 text-sm font-normal font-['Inter']">
              No bookings have been assigned yet.
            </div>
          @endforelse
        </section>
      @else
      <div class="self-stretch border-b border-neutral-200 inline-flex justify-start items-start gap-7 overflow-hidden">
        <div class="size- py-3.5 border-b-2 border-teal-800 flex justify-start items-center gap-2 overflow-hidden">
          <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">All bookings</div>
          <div class="size- px-1.5 py-[3px] bg-gray-200 rounded-[5px] flex justify-start items-start overflow-hidden">
            <div class="justify-start text-teal-800 text-[10px] font-normal font-['Inter']">5</div>
          </div>
        </div>
        <div class="size- py-3.5 border-stone-100 flex justify-start items-center gap-2 overflow-hidden">
          <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Upcoming</div>
          <div class="size- px-1.5 py-[3px] bg-stone-200 rounded-[5px] flex justify-start items-start overflow-hidden">
            <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">2</div>
          </div>
        </div>
        <div class="size- py-3.5 border-stone-100 flex justify-start items-center gap-2 overflow-hidden">
          <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Completed</div>
          <div class="size- px-1.5 py-[3px] bg-stone-200 rounded-[5px] flex justify-start items-start overflow-hidden">
            <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">2</div>
          </div>
        </div>
        <div class="size- py-3.5 border-stone-100 flex justify-start items-center gap-2 overflow-hidden">
          <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Cancelled</div>
          <div class="size- px-1.5 py-[3px] bg-stone-200 rounded-[5px] flex justify-start items-start overflow-hidden">
            <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">1</div>
          </div>
        </div>
      </div>
      <div class="self-stretch inline-flex justify-start items-start gap-6 overflow-hidden">
        <div class="flex-1 inline-flex flex-col justify-start items-start gap-5 overflow-hidden">
          <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
            <div class="flex-1 flex justify-between items-center overflow-hidden">
              <div class="justify-start text-zinc-800 text-xl font-normal font-['Inter']">Upcoming · 2</div>
            </div>
            <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Soonest first</div>
          </div>
          <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
            <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
              <div class="size- flex justify-start items-center gap-2.5 overflow-hidden">
                <img class="size-10 rounded-[20px]" src="https://placehold.co/40x40" />
                <div class="size- inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
                  <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Marcus Reed</div>
                  <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Carpentry & assembly · ★ 4.9</div>
                </div>
              </div>
              <div class="size- px-2.5 py-1.5 bg-gray-200 rounded-[100px] flex justify-start items-center gap-[5px] overflow-hidden">
                <div class="justify-start text-teal-800 text-[10px] font-semibold font-['Inter']">Confirmed</div>
              </div>
            </div>
            <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
              <div class="justify-start text-zinc-800 text-xl font-normal font-['Inter']">Assemble a desk & bookshelf</div>
              <div class="justify-start"><span class="text-zinc-800 text-2xl font-normal font-['Inter']">$110</span><span class="text-neutral-500 text-[10px] font-normal font-['Inter']"> est.</span></div>
            </div>
            <div class="self-stretch inline-flex justify-start items-start gap-5 overflow-hidden">
              <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                <div class="size-3.5 relative overflow-hidden">
                  <div class="w-2.5 h-3 left-[1.75px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                </div>
                <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Sat, Oct 24, 2026</div>
              </div>
              <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                <div class="size-3.5 relative overflow-hidden">
                  <div class="size-3 left-[1.17px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                </div>
                <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">10:00 AM – 12:00 PM</div>
              </div>
            </div>
            <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
              <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                <div class="size-3.5 relative overflow-hidden">
                  <div class="w-2.5 h-3 left-[2.33px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                </div>
                <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Home · 204 W Annie St, Austin</div>
              </div>
              <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">2 hours × $55/hr · Labor estimate</div>
            </div>
            <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Booking GH-2048 · Bouldin Creek, 78704</div>
            <div class="self-stretch pt-3.5 border-t border-neutral-200 inline-flex justify-between items-center overflow-hidden">
              <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">View details ↗</div>
              <div class="size- flex justify-start items-center gap-4 overflow-hidden">
                <div class="justify-start text-amber-800 text-xs font-normal font-['Inter']">Cancel</div>
                <div class="h-10 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
                  <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Reschedule</div>
                  <div class="size-4 relative overflow-hidden">
                    <div class="w-3 h-3.5 left-[2px] top-[1.33px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-teal-800"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
            <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
              <div class="size- flex justify-start items-center gap-2.5 overflow-hidden">
                <img class="size-10 rounded-[20px]" src="https://placehold.co/40x40" />
                <div class="size- inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
                  <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Sofia Chen</div>
                  <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Electrical & lighting · ★ 4.9</div>
                </div>
              </div>
              <div class="size- px-2.5 py-1.5 bg-gray-200 rounded-[100px] flex justify-start items-center gap-[5px] overflow-hidden">
                <div class="justify-start text-teal-800 text-[10px] font-semibold font-['Inter']">Confirmed</div>
              </div>
            </div>
            <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
              <div class="justify-start text-zinc-800 text-xl font-normal font-['Inter']">Install two pendant lights</div>
              <div class="justify-start"><span class="text-zinc-800 text-2xl font-normal font-['Inter']">$150</span><span class="text-neutral-500 text-[10px] font-normal font-['Inter']"> est.</span></div>
            </div>
            <div class="self-stretch inline-flex justify-start items-start gap-5 overflow-hidden">
              <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                <div class="size-3.5 relative overflow-hidden">
                  <div class="w-2.5 h-3 left-[1.75px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                </div>
                <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Mon, Oct 26, 2026</div>
              </div>
              <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                <div class="size-3.5 relative overflow-hidden">
                  <div class="size-3 left-[1.17px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                </div>
                <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">9:00 AM – 11:00 AM</div>
              </div>
            </div>
            <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
              <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                <div class="size-3.5 relative overflow-hidden">
                  <div class="w-2.5 h-3 left-[2.33px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                </div>
                <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Home · 204 W Annie St, Austin</div>
              </div>
              <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">2 hours × $75/hr · Labor estimate</div>
            </div>
            <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Booking GH-2056 · Bouldin Creek, 78704</div>
            <div class="self-stretch pt-3.5 border-t border-neutral-200 inline-flex justify-between items-center overflow-hidden">
              <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">View details ↗</div>
              <div class="size- flex justify-start items-center gap-4 overflow-hidden">
                <div class="justify-start text-amber-800 text-xs font-normal font-['Inter']">Cancel</div>
                <div class="h-10 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
                  <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Reschedule</div>
                  <div class="size-4 relative overflow-hidden">
                    <div class="w-3 h-3.5 left-[2px] top-[1.33px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-teal-800"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="self-stretch pt-2 flex flex-col justify-start items-start gap-4 overflow-hidden">
            <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
              <div class="justify-start text-zinc-800 text-xl font-normal font-['Inter']">Completed · 2</div>
            </div>
            <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Good work deserves a good word. Share your experience with your neighbors.</div>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
                <div class="size- flex justify-start items-center gap-2.5 overflow-hidden">
                  <img class="size-10 rounded-[20px]" src="https://placehold.co/40x40" />
                  <div class="size- inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Daniel Brooks</div>
                    <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Plumbing & repairs · ★ 4.8</div>
                  </div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-center gap-[5px] overflow-hidden">
                  <div class="justify-start text-neutral-500 text-[10px] font-semibold font-['Inter']">Completed</div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
                <div class="justify-start text-zinc-800 text-xl font-normal font-['Inter']">Fix a leaking kitchen tap</div>
                <div class="justify-start text-zinc-800 text-2xl font-normal font-['Inter']">$65</div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start gap-5 overflow-hidden">
                <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                  <div class="size-3.5 relative overflow-hidden">
                    <div class="w-2.5 h-3 left-[1.75px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                  </div>
                  <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Tue, Oct 20, 2026</div>
                </div>
                <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                  <div class="size-3.5 relative overflow-hidden">
                    <div class="size-3 left-[1.17px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                  </div>
                  <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">2:00 PM – 3:00 PM</div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
                <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                  <div class="size-3.5 relative overflow-hidden">
                    <div class="w-2.5 h-3 left-[2.33px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                  </div>
                  <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Home · 204 W Annie St, Austin</div>
                </div>
                <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">1 hour × $65/hr · Total paid</div>
              </div>
              <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Booking GH-1982 · Bouldin Creek, 78704</div>
              <div class="self-stretch pt-3.5 border-t border-neutral-200 inline-flex justify-between items-center overflow-hidden">
                <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">View details ↗</div>
                <div class="size- flex justify-start items-center gap-4 overflow-hidden">
                  <div class="h-10 px-4 bg-teal-800 rounded-lg outline outline-1 outline-offset-[-1px] outline-teal-800 flex justify-center items-center gap-2 overflow-hidden">
                    <div class="justify-start text-white text-xs font-semibold font-['Inter']">Leave a review</div>
                    <div class="size-4 relative overflow-hidden">
                      <div class="w-3.5 h-3 left-[1.33px] top-[1.33px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-white"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
                <div class="size- flex justify-start items-center gap-2.5 overflow-hidden">
                  <img class="size-10 rounded-[20px]" src="https://placehold.co/40x40" />
                  <div class="size- inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Marcus Reed</div>
                    <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Carpentry & assembly · ★ 4.9</div>
                  </div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-stone-100 rounded-[100px] flex justify-start items-center gap-[5px] overflow-hidden">
                  <div class="justify-start text-neutral-500 text-[10px] font-semibold font-['Inter']">Completed</div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
                <div class="justify-start text-zinc-800 text-xl font-normal font-['Inter']">Mount living room shelves</div>
                <div class="justify-start text-zinc-800 text-2xl font-normal font-['Inter']">$110</div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start gap-5 overflow-hidden">
                <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                  <div class="size-3.5 relative overflow-hidden">
                    <div class="w-2.5 h-3 left-[1.75px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                  </div>
                  <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Fri, Oct 9, 2026</div>
                </div>
                <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                  <div class="size-3.5 relative overflow-hidden">
                    <div class="size-3 left-[1.17px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                  </div>
                  <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">10:00 AM – 12:00 PM</div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
                <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                  <div class="size-3.5 relative overflow-hidden">
                    <div class="w-2.5 h-3 left-[2.33px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                  </div>
                  <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Home · 204 W Annie St, Austin</div>
                </div>
                <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">2 hours × $55/hr · Total paid</div>
              </div>
              <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Booking GH-1904 · Bouldin Creek, 78704</div>
              <div class="self-stretch pt-3.5 border-t border-neutral-200 inline-flex justify-between items-center overflow-hidden">
                <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">View details ↗</div>
                <div class="size- flex justify-start items-center gap-4 overflow-hidden">
                  <div class="justify-start text-teal-800 text-xs font-normal font-['Inter']">★★★★★  Reviewed</div>
                  <div class="h-10 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Book again</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="self-stretch pt-2 flex flex-col justify-start items-start gap-4 overflow-hidden">
            <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
              <div class="justify-start text-zinc-800 text-xl font-normal font-['Inter']">Cancelled · 1</div>
            </div>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
                <div class="size- flex justify-start items-center gap-2.5 overflow-hidden">
                  <img class="size-10 rounded-[20px]" src="https://placehold.co/40x40" />
                  <div class="size- inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Daniel Brooks</div>
                    <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Plumbing & repairs · ★ 4.8</div>
                  </div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-rose-100 rounded-[100px] flex justify-start items-center gap-[5px] overflow-hidden">
                  <div class="justify-start text-amber-800 text-[10px] font-semibold font-['Inter']">Cancelled</div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
                <div class="justify-start text-zinc-800 text-xl font-normal font-['Inter']">Replace bathroom faucet</div>
                <div class="justify-start text-zinc-800 text-2xl font-normal font-['Inter']">$130</div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start gap-5 overflow-hidden">
                <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                  <div class="size-3.5 relative overflow-hidden">
                    <div class="w-2.5 h-3 left-[1.75px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                  </div>
                  <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Mon, Oct 5, 2026</div>
                </div>
                <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                  <div class="size-3.5 relative overflow-hidden">
                    <div class="size-3 left-[1.17px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                  </div>
                  <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">1:00 PM – 3:00 PM</div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
                <div class="size- flex justify-start items-center gap-1.5 overflow-hidden">
                  <div class="size-3.5 relative overflow-hidden">
                    <div class="w-2.5 h-3 left-[2.33px] top-[1.17px] absolute outline outline-[1.50px] outline-offset-[-0.75px] outline-neutral-500"></div>
                  </div>
                  <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">Home · 204 W Annie St, Austin</div>
                </div>
                <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Original estimate · No charge</div>
              </div>
              <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Cancelled by you on Oct 3 · No cancellation fee</div>
              <div class="self-stretch pt-3.5 border-t border-neutral-200 inline-flex justify-between items-center overflow-hidden">
                <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">View details ↗</div>
                <div class="size- flex justify-start items-center gap-4 overflow-hidden">
                  <div class="h-10 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
                    <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Book again</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="self-stretch text-center justify-start text-neutral-500 text-xs font-normal font-['Inter']">You're all caught up. Every little fix, all in one place.</div>
        </div>
      </div>
      @endif
      <div class="self-stretch pt-3 inline-flex justify-between items-start overflow-hidden">
        <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">© 2026 PubFix · A little more peace of mind.</div>
        <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Help center     Terms     Privacy</div>
      </div>
    </div>
  </div>
</div>