<div class="mt-10 grid grid-cols-2 gap-6 sm:grid-cols-3 sm:gap-4 lg:mt-16">
    @foreach (App\Models\Announcement::all() as $announcement)
        <article class="relative flex flex-col overflow-hidden rounded-lg  bg-white text-center   dark:bg-gray-600 shadow-lg">

            <div
                class="aspect-square block rounded-lg ">

                <div class="p-6">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        {{ $announcement->title }}
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-50">
                        {{ $announcement->content }}
                    </p>

                </div>
                <div class="border-t-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
                    <p>Created by
                        @foreach (App\Models\User::all() as $user)
                            @if ($user->id == $announcement->uid)
                                {{ $user->name }}
                            @endif
                        @endforeach
                    </p>
                    @if (Auth::user()->id == $announcement->uid)
                        <p>
                        <p>Read by: {{ $announcement->reads()->count() }} users</p>

                        <a href="{{ route('announcement.edit', $announcement) }}">Edit</a>
                        <a href="{{ route('announcement.destroy', $announcement) }}"
                            onclick="event.preventDefault(); document.getElementById('delete-post-form-{{ $announcement->id }}').submit();">Delete</a>
                        <form id="delete-post-form-{{ $announcement->id }}"
                            action="{{ route('announcement.destroy', $announcement) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endif


                    @if ($announcement->reads()->count() > 0)
                        <p>Read by:
                            @foreach ($announcement->reads->take(5) as $read)
                                {{ $read->name }}, <!-- Assuming User model has a 'name' attribute -->
                            @endforeach

                            @if ($announcement->reads()->count() > 5)
                                and {{ $announcement->reads()->count() - 5 }} others
                            @endif
                        </p>
                    @endif

                    <form method="post" action="{{ route('announcement.markAsRead', $announcement) }}">
                        @csrf
                        <button type="submit"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">Mark as Read/Unread</button>
                    </form>
                </div>
            </div>

        </article>
    @endforeach
</div>
