<div class="h-full overflow-auto">
    <section class="grid grid-cols-2 gap-5 overflow-auto p-4">
        @foreach ($komentar as $comment)
            <div class="h-max max-h-72 overflow-y-auto rounded-md bg-white">
                <div class="sticky top-0 bg-white p-2">
                    {{ $comment->nama }}
                </div>
                <div class="p-2 break-words">
                    {{ $comment->komentar }}
                </div>
            </div>
        @endforeach
    </section>
</div>
