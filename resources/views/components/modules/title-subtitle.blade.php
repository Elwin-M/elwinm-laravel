<div class="content-head-group">
    <p class="content-title">
        {{ $slot }}
    </p>
    <h1 class="content-subheading">
        {{ $sub }}
    </h1>
    @if (isset($date))
        <h3 class="text-xl tracking-tight text-slate-600 font-display">
            {{ $date }}
        </h3>
    @endif
</div>
