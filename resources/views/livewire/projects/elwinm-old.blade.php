@section('pageTitle', 'ElwinM Old Portfolio')

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
    </x-modules.title-subtitle>
    <div class="flex gap-x-4">
        <div class="flex-none">
            <span class="sr-only">Old Website</span>
            <x-icons.website />
        </div>
        <div class="flex gap-2"><a class="link link-underline hover:text-white" href="https://old.elwinm.ca"
                target="_blank">old.elwinm.ca</a><x-icons.new-tab /></div>
    </div>

    <p class="pt-4 pb-0 content-main-group">
        This project marked my inaugural foray into the expansive realm of full-stack development and server
        infrastructure. It served as a comprehensive platform, meticulously handcrafted from scratch, combining my
        accumulated knowledge in IT to create a dynamic web presence and robust server architecture.
    </p>

    <x-modules.bar-horizontal />
    <h2 class="pb-4 text-2xl tracking-tight text-white font-display">
        Description
    </h2>
    <p class="pt-4 content-main-group">
        <span class="text-base font-semibold leading-6 text-white">Technologies Used:</span> LAMP Stack, HTML, CSS, JS
    </p>

    <h3 class="text-xl tracking-tight text-white font-display">
        Overview
    </h3>
    <p class="pt-4 content-main-group">
        This project stood as a testament to my evolution in IT—an embodiment of my journey as a full-stack developer.
        As my initial venture into the realm of full-stack development, this comprehensive website and its underlying
        server architecture were meticulously handcrafted, representing a culmination of my acquired skills and
        knowledge.
    </p>

    <h3 class="text-xl tracking-tight text-white font-display">
        Key Features
    </h3>
    <p class="pt-4 content-main-group">
        Hosted on an Apache server, this project boasted SSL encryption with automated certificate renewal, ensuring
        secure and uninterrupted service. Leveraging dynamic DNS and Cloudflare CDN and caching services, it prioritized
        minimal downtime and optimal performance across various devices.
    </p>

    <h3 class="text-xl tracking-tight text-white font-display">
        Behind-The-Scenes Excellence
    </h3>
    <p class="pt-4 content-main-group">
        While much of the work remained unseen by end-users, the project's codebase, barring sensitive portions for
        privacy and security reasons, was available on my GitHub. The infrastructure extended beyond the web interface,
        encompassing a diverse array of functionalities: htaccess configurations, automatic redirects (including error
        4XX), game servers, reverse proxy services, OpenVPN connections, Samba network shares, and virtual hosts for
        running multiple servers.
    </p>

    <h3 class="text-xl tracking-tight text-white font-display">
        Expanded Expertise
    </h3>
    <p class="pt-4 content-main-group">
        This endeavor served as my initiation into the Linux environment, catalyzing the acquisition of extensive
        expertise in design, full-stack development, system administration, network management, backup strategies, and
        stringent security protocols.
    </p>

    <h3 class="text-xl tracking-tight text-white font-display">
        Cloudflare Integration And Beyond
    </h3>
    <p class="pt-4 content-main-group">
        Incorporating Cloudflare services not only bolstered security against bots and crawlers but also optimized proxy
        and firewall services.
    </p>
    <p class="pt-0 pb-0 content-main-group">
        While this description encapsulates a significant portion of my involvement, it stands as
        a testament to the countless hours devoted to design, development, troubleshooting, and refining this
        multifaceted project.
    </p>

    <x-modules.bar-horizontal />
    <h2 class="pb-4 text-2xl tracking-tight text-white font-display">
        Screenshot
    </h2>

    <div class="" x-data="{ dropdown: false }">
        <!-- Expand/collapse -->
        <div @click="dropdown = !dropdown" class="hover:cursor-pointer">
            <div class="flex items-start justify-between w-full py-2 text-left text-white border-t border-slate-800"
                aria-controls="faq-0" aria-expanded="false">
                <span class="text-base font-semibold leading-7">Click to expand screenshot</span>
                <span class="flex items-center ml-6 h-7">
                    <!-- Plus icon -->
                    <svg x-cloak x-show="!dropdown" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                    </svg>
                    <!-- Minus icon -->
                    <svg x-cloak x-show="dropdown" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                    </svg>
                </span>
            </div>
        </div>
        <!-- Actual dropdown -->
        <div x-cloak x-show="dropdown" class="px-4 mt-2">
            <img class="a" src="{{ asset('images/old.elwinm.ca.png') }}" alt="Old elwinm website screenshot"
                width="full">
        </div>
    </div>
</div>
