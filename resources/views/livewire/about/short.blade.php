@section('pageTitle', 'Elwin\'s Portfolio')

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
    </x-modules.title-subtitle>
    <x-modules.resume />
    <p class="pt-4 content-main-group">
        Armed with an Honours degree in Information Technology,
        complemented by a Minor in Business Administration and practical experience in web development,
        I thrive on showcasing my passion for crafting innovative digital solutions.
        Explore my projects to witness the convergence of my technical expertise and business acumen,
        delivering impactful web solutions that drive change.
    </p>

    <p class="content-main-group">
        Identified as a full-stack developer and DevOps engineer,
        I merge my extensive knowledge in software development, systems administration,
        and agile methodologies to engineer cutting-edge solutions.
        Within this fast-paced tech industry, my relentless pursuit of knowledge, adept problem-solving skills,
        and commitment to community success define my journey, constantly shaping impactful and transformative technological innovations.
    </p>

    <!-- Division -->
    <x-modules.bar-horizontal />
    <h2 class="pb-4 text-2xl tracking-tight text-white font-display">
        Quick Links
    </h2>
    <p class="content-main-group">
        Click to delve into my professional journey, academic degree, and projects.
    </p>
    <x-modules.quick-links-box>
        <x-modules.quick-links-box-item :link="'elwinm/Experience/St. Mary\'s - Full-Stack Developer & DevOps Engineer'">
            Full-Stack Developer & DevOps Engineer
            <x-slot:description>
                2024 - PRESENT St. Mary's S.O.C.
            </x-slot:description>
        </x-modules.quick-links-box-item>

        <x-modules.quick-links-box-item :link="'elwinm/Experience/SFTE - Web Developer'">
            Web Developer
            <x-slot:description>
                2023 - 2023 Sweets From The Earth
            </x-slot:description>
        </x-modules.quick-links-box-item>

        <x-modules.quick-links-box-item :link="'elwinm/Experience/St. Mary\'s - Full-Stack Developer & System Administrator'">
            Full-Stack Developer & System Administrator
            <x-slot:description>
                2020 - 2023 St. Mary's S.O.C.
            </x-slot:description>
        </x-modules.quick-links-box-item>

        <x-modules.quick-links-box-item :link="'elwinm/Education (York University)/B.A. Hons: Information Technology'">
            B.A. Hons: Information Technology
            <x-slot:description>
                2016 - 2021 York University
            </x-slot:description>
        </x-modules.quick-links-box-item>

        <x-modules.quick-links-box-item :link="'elwinm/Education (York University)/Minor: Business Administration'">
            Minor: Business Administration
            <x-slot:description>
                2016 - 2021 York University
            </x-slot:description>
        </x-modules.quick-links-box-item>

        <x-modules.quick-links-box-item :link="'elwinm/Experience/ElwinM - Full-Stack Developer'">
            Portfolio - Full-Stack Developer
            <x-slot:description>
                elwinm.ca and old.elwinm.ca portfolio
            </x-slot:description>
        </x-modules.quick-links-box-item>

        <x-modules.quick-links-box-item :link="'elwinm/Experience/ElwinM - System Administrator'">
            Portfolio - System Administrator
            <x-slot:description>
                Truenas Scale server management
            </x-slot:description>
        </x-modules.quick-links-box-item>
    </x-modules.quick-links-box>
</div>
