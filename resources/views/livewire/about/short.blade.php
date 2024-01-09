@section('pageTitle', 'Elwin\'s Portfolio')

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
    </x-modules.title-subtitle>

    <p class="content-main-group">
    Welcome to my portfolio!
    As a recent graduate with an Honours degree in Information Technology and a minor in Business Administration,
    coupled with practical experience in web development, I am excited to showcase my passion for creating innovative digital solutions.
    Explore my projects and see how my technical expertise and business acumen converge to deliver impactful web solutions.
    </p>

    <p class="content-main-group">
        As a Full Stack Developer and DevOps enthusiast, I leverage my comprehensive knowledge of software development,
        systems administration, and Agile methodologies to create cutting-edge solutions that impact people's lives and
        revolutionize industries. My continuous drive for learning, ability to solve complex problems, and commitment to
        community success define my journey in this fast-paced tech industry.
    </p>

    <x-modules.quick-links-box>
        <x-modules.quick-links-box-item :link="'elwinm/Experience/SFTE - Web Developer'">
            Web Developer
            <x-slot:description>
                2023 - 2023 Sweets From The Earth
            </x-slot:description>
        </x-modules.quick-links-box-item>

        <x-modules.quick-links-box-item :link="'elwinm/Experience/St. Mary\'s - Full Stack Developer'">
            Full Stack Developer
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

        <x-modules.quick-links-box-item :link="'elwinm/Experience/ElwinM - Full Stack Developer'">
            Portfolio - Full Stack Developer
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
