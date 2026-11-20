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
      <img class="size-10 rounded-[100px] object-cover" src="{{ $handyman->user->avatar_url ?: 'https://placehold.co/39x39' }}" alt="{{ $handyman->user->name }}" />
      <div class="size- inline-flex flex-col justify-start items-start gap-1 overflow-hidden">
        <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">{{ $handyman->user->name }}</div>
        <div class="justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">{{ $handyman->category->name }}</div>
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
      <a href="{{ route('worker.profile') }}#reviews" class="left-[59px] top-[316px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Reviews</a>
      <div class="size-3.5 left-[34px] top-[315px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.earnings') }}" class="left-[59px] top-[198px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Earnings</a>
      <div class="size-3.5 left-[34px] top-[197px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.schedule') }}" class="left-[59px] top-[154px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">My schedule</a>
      <div class="size-3.5 left-[34px] top-[153px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="left-[182px] top-[101px] absolute justify-start text-teal-800 text-[10px] font-normal font-['Inter']">3</div>
      <a href="{{ route('worker.bookings') }}" class="left-[59px] top-[100px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Job requests</a>
      <div class="size-3.5 left-[34px] top-[99px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <a href="{{ route('worker.dashboard') }}" class="left-[59px] top-[46px] absolute justify-start text-neutral-500 text-xs font-normal font-['Inter']">Overview</a>
      <div class="size-3.5 left-[34px] top-[45px] absolute outline outline-1 outline-offset-[-0.50px] outline-neutral-500"></div>
      <div class="w-44 h-px left-[18px] top-[372px] absolute bg-neutral-200"></div>
      <div class="w-44 h-10 px-3 left-[18px] top-[388px] absolute bg-gray-200 rounded-lg inline-flex justify-start items-center gap-2.5 overflow-hidden">
        <div class="size-4 relative overflow-hidden">
          <div class="w-3 h-3.5 left-[3px] top-[2.25px] absolute outline outline-1 outline-offset-[-0.50px] outline-teal-800"></div>
        </div>
        <a href="{{ route('worker.profile') }}" class="flex-1 justify-start text-teal-800 text-xs font-normal font-['Inter']" aria-current="page">My public profile</a>
      </div>
    </div>
    <div class="flex-1 p-8 inline-flex flex-col justify-start items-start gap-7 overflow-hidden">
      <div class="self-stretch flex flex-col justify-start items-start gap-7 overflow-hidden">
        <div class="self-stretch inline-flex justify-between items-center overflow-hidden">
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
            <div class="justify-start text-neutral-500 text-xs font-semibold font-['Inter']">YOUR PRO WORKSPACE</div>
            <div class="self-stretch justify-start text-zinc-800 text-4xl font-normal font-['Inter']">My public profile</div>
            <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Show neighbors the person—and the good work—behind your business.</div>
          </div>
          <div class="h-11 px-4 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 flex justify-center items-center gap-2 overflow-hidden">
            <div class="justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Preview public profile</div>
          </div>
        </div>
        <div class="self-stretch px-4 py-3.5 bg-gray-200 rounded-lg inline-flex justify-start items-center gap-3 overflow-hidden">
          <div class="size-4 relative overflow-hidden">
            <div class="size-3.5 left-[1.50px] top-[1.50px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-teal-800"></div>
          </div>
          <div class="flex-1 justify-start text-teal-800 text-xs font-normal font-['Inter']">Your profile is live and visible to neighbors in your service area.</div>
          <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Copy profile link ↗</div>
        </div>
        <div class="self-stretch inline-flex justify-start items-start gap-6 overflow-hidden">
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-6 overflow-hidden">
            <div class="self-stretch p-7 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-start items-center gap-5 overflow-hidden">
                <img id="profile-card-avatar" class="size-20 rounded-[100px] object-cover border border-neutral-200" src="{{ $handyman->user->avatar_url ?: 'https://placehold.co/88x88' }}" alt="{{ $handyman->user->name }}" />
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-2.5 overflow-hidden">
                  <div class="size- inline-flex justify-start items-center gap-3 overflow-hidden">
                    <div class="justify-start text-zinc-800 text-3xl font-normal font-['Inter']">{{ $handyman->user->name }}</div>
                    <div class="size- px-2.5 py-1.5 bg-gray-200 rounded-[100px] flex justify-start items-start overflow-hidden">
                      <div class="justify-start text-teal-800 text-xs font-medium font-['Inter']">Verified pro</div>
                    </div>
                  </div>
                  <div class="self-stretch justify-start text-zinc-800 text-xs font-normal font-['Inter'] leading-5">{{ $handyman->category->name }}</div>
                  <div class="size- inline-flex justify-start items-center gap-2 overflow-hidden">
                    <div class="justify-start text-teal-800 text-xs font-normal font-['Inter']">★ {{ number_format((float) ($handyman->reviews_avg_rating ?? 0), 1) }}</div>
                    <div class="justify-start text-neutral-500 text-xs font-normal font-['Inter']">({{ $handyman->reviews_count }} reviews) · {{ $handyman->city }}</div>
                  </div>
                </div>
                <div class="size-4 relative overflow-hidden">
                  <div class="size-3.5 left-[1.50px] top-[1.50px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-teal-800"></div>
                </div>
              </div>
              <div class="self-stretch h-px bg-neutral-200"></div>
              <div class="self-stretch inline-flex justify-start items-start gap-7 overflow-hidden">
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="justify-start text-zinc-800 text-2xl font-normal font-['Inter']">${{ number_format((float) $handyman->hourly_rate, 2) }} / hour</div>
                  <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">1-hour minimum</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-1.5 overflow-hidden">
                  <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">Your local helping hand</div>
                  <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">{{ $handyman->city }}</div>
                </div>
                <div class="size- px-2.5 py-1.5 bg-gray-200 rounded-[100px] flex justify-start items-start overflow-hidden">
                  <div class="justify-start text-teal-800 text-xs font-medium font-['Inter']">{{ $handyman->available ? 'Open to new jobs' : 'Currently unavailable' }}</div>
                </div>
              </div>
            </div>
            @if (session('success'))
              <div class="self-stretch px-4 py-3 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-lg text-xs font-medium">
                {{ session('success') }}
              </div>
            @endif
            @if ($errors->any())
              <div class="self-stretch px-4 py-3 bg-red-50 border border-red-200 text-red-700 rounded-lg text-xs font-medium">
                <ul class="list-disc list-inside space-y-1">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('worker.profile.update') }}" enctype="multipart/form-data" class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col gap-5">
              @csrf
              @method('PUT')
              <div class="self-stretch flex justify-between items-start gap-4">
                <span class="flex-1 text-zinc-800 text-xl font-semibold font-['Inter']">Profile details & photo</span>
                <span class="text-teal-800 text-xs font-semibold font-['Inter']">Edit profile</span>
              </div>

              <!-- Profile Picture Upload Section -->
              <div class="flex flex-col gap-2 p-4 bg-stone-50 border border-neutral-200 rounded-lg">
                <label class="text-zinc-800 text-xs font-semibold">Profile photo</label>
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                  <img id="worker-avatar-preview" class="size-16 rounded-full object-cover border-2 border-teal-800/30 shrink-0" src="{{ $handyman->user->avatar_url ?: 'https://placehold.co/88x88' }}" alt="{{ $handyman->user->name }}" />
                  <div class="flex flex-col gap-1.5">
                    <div class="flex items-center gap-2">
                      <label for="worker-avatar-input" class="inline-flex items-center justify-center px-3.5 py-1.5 bg-white hover:bg-neutral-50 text-zinc-800 text-xs font-medium rounded-lg border border-neutral-300 shadow-2xs cursor-pointer transition-colors">
                        Choose picture
                      </label>
                      <input id="worker-avatar-input" name="avatar" type="file" accept="image/jpeg,image/png,image/jpg,image/webp" class="hidden" onchange="previewWorkerAvatar(event)" />
                      <span id="avatar-file-name" class="text-neutral-500 text-xs truncate max-w-[200px]">No file chosen</span>
                    </div>
                    <span class="text-neutral-500 text-[11px]">Recommended: Square image (JPG, PNG, WEBP), max 5MB. Shows on the find handyman page.</span>
                    @error('avatar')
                      <span class="text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="self-stretch flex flex-col gap-2">
                <label for="worker-bio" class="text-zinc-800 text-xs font-semibold font-['Inter']">A little about me</label>
                <textarea id="worker-bio" name="bio" rows="4" class="w-full p-3 border border-neutral-200 rounded-lg text-zinc-800 text-xs leading-5 focus:outline-none focus:border-teal-800">{{ old('bio', $handyman->bio) }}</textarea>
                @error('bio')
                  <span class="text-red-600 text-xs">{{ $message }}</span>
                @enderror
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="flex flex-col gap-2">
                  <label for="worker-category" class="text-zinc-800 text-xs font-semibold">Primary service</label>
                  <select id="worker-category" name="category_id" class="min-h-11 px-3 border border-neutral-200 rounded-lg text-zinc-800 text-xs focus:outline-none focus:border-teal-800">
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}" @selected($category->id === $handyman->category_id)>{{ $category->name }}</option>
                    @endforeach
                  </select>
                  @error('category_id')
                    <span class="text-red-600 text-xs">{{ $message }}</span>
                  @enderror
                </div>
                <div class="flex flex-col gap-2">
                  <label for="worker-rate" class="text-zinc-800 text-xs font-semibold">Hourly rate ($/hr)</label>
                  <input id="worker-rate" name="hourly_rate" type="number" min="0" step="0.01" value="{{ old('hourly_rate', $handyman->hourly_rate) }}" class="min-h-11 px-3 border border-neutral-200 rounded-lg text-zinc-800 text-xs focus:outline-none focus:border-teal-800" />
                  @error('hourly_rate')
                    <span class="text-red-600 text-xs">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <button type="submit" class="self-start h-10 px-5 bg-teal-800 hover:bg-teal-900 transition-colors rounded-lg text-white text-xs font-semibold cursor-pointer shadow-xs">
                Save profile
              </button>
            </form>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch inline-flex justify-between items-start overflow-hidden">
                <div class="flex-1 justify-start text-zinc-800 text-xl font-semibold font-['Inter']">A few recent projects</div>
                <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Add photos +</div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start gap-3.5 overflow-hidden">
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
                  <img class="self-stretch h-36 rounded-lg" src="https://placehold.co/241x146" />
                  <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter']">Oak shelves, neatly installed</div>
                  <div class="self-stretch justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Shelving · South Austin</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
                  <img class="self-stretch h-36 rounded-lg" src="https://placehold.co/241x146" />
                  <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter']">A home office, ready for work</div>
                  <div class="self-stretch justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Furniture assembly · Austin</div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
                  <img class="self-stretch h-36 rounded-lg" src="https://placehold.co/241x146" />
                  <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter']">More room for the everyday</div>
                  <div class="self-stretch justify-start text-neutral-500 text-[10px] font-normal font-['Inter']">Custom storage · Austin</div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-80 inline-flex flex-col justify-start items-start gap-6 overflow-hidden">
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch justify-start text-zinc-800 text-base font-semibold font-['Inter']">Your service details</div>
              <div class="self-stretch flex flex-col justify-start items-start gap-2 overflow-hidden">
                <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">Primary service</div>
                <div class="self-stretch min-h-11 px-3 py-3 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex justify-start items-start overflow-hidden">
                  <div class="flex-1 justify-start text-zinc-800 text-xs font-normal font-['Inter']">Carpentry & assembly</div>
                </div>
              </div>
              <div class="self-stretch inline-flex justify-start items-start gap-3 overflow-hidden">
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
                  <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">Hourly rate</div>
                  <div class="self-stretch min-h-11 px-3 py-3 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-zinc-800 text-xs font-normal font-['Inter']">$55</div>
                  </div>
                </div>
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
                  <div class="self-stretch justify-start text-zinc-800 text-xs font-semibold font-['Inter'] leading-5">Minimum booking</div>
                  <div class="self-stretch min-h-11 px-3 py-3 bg-white rounded-lg outline outline-1 outline-offset-[-1px] outline-neutral-200 inline-flex justify-start items-start overflow-hidden">
                    <div class="flex-1 justify-start text-zinc-800 text-xs font-normal font-['Inter']">1 hour</div>
                  </div>
                </div>
              </div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-4">Labor only. Agree on materials and final scope with your customer before starting.</div>
              <div class="h-11 px-4 bg-teal-800 rounded-lg outline outline-1 outline-offset-[-1px] outline-teal-800 inline-flex justify-center items-center gap-2 overflow-hidden">
                <div class="justify-start text-white text-xs font-semibold font-['Inter']">Save service details</div>
              </div>
            </div>
            <div class="self-stretch p-5 bg-white rounded-xl outline outline-1 outline-offset-[-1px] outline-neutral-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch justify-start text-zinc-800 text-base font-semibold font-['Inter']">Profile essentials</div>
              <div class="size- inline-flex justify-start items-center gap-2 overflow-hidden">
                <div class="size-4 relative overflow-hidden">
                  <div class="w-2.5 h-2 left-[2.67px] top-[4px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-teal-800"></div>
                </div>
                <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">{{ $handyman->user->avatar ? 'Profile photo added' : 'Add a profile photo' }}</div>
              </div>
              <div class="size- inline-flex justify-start items-center gap-2 overflow-hidden">
                <div class="size-4 relative overflow-hidden">
                  <div class="w-2.5 h-2 left-[2.67px] top-[4px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-teal-800"></div>
                </div>
                <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">Identity verified</div>
              </div>
              <div class="size- inline-flex justify-start items-center gap-2 overflow-hidden">
                <div class="size-4 relative overflow-hidden">
                  <div class="w-2.5 h-2 left-[2.67px] top-[4px] absolute outline outline-[1.30px] outline-offset-[-0.65px] outline-teal-800"></div>
                </div>
                <div class="justify-start text-zinc-800 text-xs font-normal font-['Inter']">128 customer reviews</div>
              </div>
              <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Manage account details ↗</div>
            </div>
            <div class="self-stretch p-5 bg-gray-200 rounded-xl outline outline-1 outline-offset-[-1px] outline-gray-200 flex flex-col justify-start items-start gap-4 overflow-hidden">
              <div class="self-stretch justify-start text-zinc-800 text-base font-semibold font-['Inter']">Let your work do the talking.</div>
              <div class="self-stretch justify-start text-neutral-500 text-xs font-normal font-['Inter'] leading-5">Clear, well-lit project photos help neighbors picture what you can do for their home. Show the finish and the little details you’re proud of.</div>
              <div class="justify-start text-teal-800 text-xs font-semibold font-['Inter']">Manage portfolio photos ↗</div>
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
  <script>
    function previewWorkerAvatar(event) {
      const file = event.target.files && event.target.files[0];
      if (!file) return;

      const fileNameEl = document.getElementById('avatar-file-name');
      if (fileNameEl) {
        fileNameEl.textContent = file.name;
      }

      const reader = new FileReader();
      reader.onload = function(e) {
        const preview = document.getElementById('worker-avatar-preview');
        if (preview) preview.src = e.target.result;
        const cardAvatar = document.getElementById('profile-card-avatar');
        if (cardAvatar) cardAvatar.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  </script>
</div>