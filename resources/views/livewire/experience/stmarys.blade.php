@section('pageTitle', $currentPageSub)

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
        <x-slot:date> 01/2020 - 08/2023 | VOLUNTEER</x-slot:date>
    </x-modules.title-subtitle>

    <p class="content-main-group">
        Stepping into the realm of full-stack development, I've engineered and maintained bespoke web servers, crafted
        seamless RESTful APIs, and managed databases to uphold data integrity and security. Notably, I single-handedly
        designed and oversaw the development of a web page tailored for a kiosk-style environment at a church. This
        sleek, responsive page features three carousels displaying rotating images, essential information (such as
        Birthdays, Wedding Anniversaries, and Sponsors), and a News section. My active involvement includes continuous
        maintenance, ensuring updates align with the members' requirements.
    </p>
    <!-- Start -->
    <x-modules.description-list-main-outer>
        <!-- First Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Responsibilities </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                Engineered, launched, and presently maintain a bespoke web server for the organization, leveraging my
                skills in server architecture, system administration, and management
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Developed and consumed RESTful APIs for seamless data integration across microservices
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Designed and managed relational databases that ensure data consistency, integrity, and security,
                specifically for content displayed on the website
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Practiced continuous delivery methodologies to ensure efficient, reliable, and safe value delivery to
                users, maintaining ongoing improvements
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Actively contributed to routine system maintenance, upgrades, and migrations, ensuring reliability and
                system integrity for the website
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Demonstrated expertise in managing the reliability, security, and integrity of the organization's Linux
                infrastructure, including the website deployment
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Established efficient software engineering practices and tools, contributing to the continuous
                improvement of the developer experience
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Played a lead role in project milestones, and features, showcasing my skills in project management and
                my ability to contribute to the cultural, process, and changes within the team
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Utilized my strong communication skills to mentor other team members, write comprehensive documentation,
                and actively participate in meetings to ensure effective knowledge transfer
            </x-modules.description-list-item>
        </x-modules.description-list-main-inner>
        <!-- Second Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Achievements </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                Maintained an updated understanding of web development trends, leading to consistent delivery of a
                superior user experience
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Earned high user satisfaction through superior design and functionality of the church's kiosk-style
                website
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Consistently delivered clean, robust code, showcasing a strong grasp of programming principles applied
                to the website's development
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Built and managed the church's web server from scratch, demonstrating technical proficiency in
                cloud-based Linux infrastructure
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Enhanced website performance significantly through strategic coding strategies, ensuring optimal load
                times and user experience
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Implemented automation scripts to eliminate repetitive tasks, enhancing operational efficiency for
                ongoing website maintenance
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Successfully led multiple projects, including the church's website, contributing to organizational
                growth and user satisfaction
            </x-modules.description-list-item>
        </x-modules.description-list-main-inner>
    </x-modules.description-list-main-outer>
    <!-- End -->
</div>
