<div class="text-base lg:text-sm" x-data="{ activePage : @entangle('content') }">
    <ul role="list" class="space-y-9">
        <!-- Titles and links components -->
        @foreach ($menusConfig as $menu => $subItem)
            <x-modules.quick-links-title>
                {{ $menu }}
                <x-slot:subSlot>
                    @foreach ($subItem as $item => $link)
                        <x-modules.quick-links-list-item :menu="$menu" :item="$item" :link="$link">
                            {{ $item }}
                        </x-modules.quick-links-list-item>
                    @endforeach
                </x-slot:subSlot>
            </x-modules.quick-links-title>
        @endforeach
    </ul>
</div>
