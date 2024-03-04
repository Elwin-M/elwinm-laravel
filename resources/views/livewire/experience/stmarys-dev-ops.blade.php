@section('pageTitle', $currentPageSub)

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
        <x-slot:date> 01/2024 - PRESENT</x-slot:date>
    </x-modules.title-subtitle>

    <p class="content-main-group">
        As a seasoned Full-Stack Developer & DevOps Engineer at St. Mary’s S.O.C. in Mississauga since January 2024,
        I've been instrumental in driving transformative changes within the organization's technological landscape.
        Leading the migration of outdated infrastructure to modern Nginx environments and spearheading the evolution of
        legacy PHP websites into scalable Laravel and Livewire projects are just a few examples of my proactive approach
        towards optimizing performance and enhancing security measures.
        Leveraging Docker for containerization and Kubernetes for deployment,
        I've streamlined processes, ensuring high availability and scalability.
        Moreover, my efforts in implementing an efficient email server solution have greatly enhanced internal communication and collaboration.
        Through collaborative troubleshooting and continuous optimization,
        I've consistently delivered solutions that not only meet but exceed stakeholder expectations,
        earning commendations for my role in improving system performance and user experience.
    </p>
    <!-- Start -->
    <x-modules.description-list-main-outer>
        <!-- First Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Responsibilities </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                Lead the migration of an aging Apache server to a modern Nginx environment, optimizing
                performance and enhancing security measures
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Transformed a legacy PHP website into a scalable Laravel and Livewire project, incorporating
                Tailwind CSS and Alpine.js for improved front-end functionality and aesthetics
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Containerized applications using Docker for streamlined deployment and management processes
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Deployed containerized applications to a Kubernetes-based environment, ensuring high availability
                and scalability
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Implemented and configured an email server for seamless communication within the organization
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Collaborated with cross-functional teams to troubleshoot issues and optimize system performance
            </x-modules.description-list-item>

        </x-modules.description-list-main-inner>
        <!-- Second Box -->
        <x-modules.description-list-main-inner>
            <x-slot:title> Achievements </x-slot:title>
            <!-- List -->
            <x-modules.description-list-item>
                Successfully completed the migration of the server infrastructure, resulting in improved
                performance and security posture
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Enhanced website functionality and user experience by modernizing the technology stack and
                implementing best practices
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Streamlined deployment processes and improved scalability by containerizing applications and
                deploying them to Kubernetes
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Improved internal communication and collaboration by implementing an email server solution
            </x-modules.description-list-item>
            <x-modules.description-list-item>
                Received positive feedback from stakeholders for effectively resolving issues and optimizing system
                performance
            </x-modules.description-list-item>

        </x-modules.description-list-main-inner>
    </x-modules.description-list-main-outer>
    <!-- End -->
</div>
