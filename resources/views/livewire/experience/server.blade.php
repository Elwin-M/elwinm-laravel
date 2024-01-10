@section('pageTitle', $currentPageSub)

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
        <x-slot:date> 2019 - PRESENT</x-slot:date>
    </x-modules.title-subtitle>

    <p class="content-main-group">
        Engaging in System Administration, I spearheaded a substantial upgrade utilizing enterprise hardware, employing advanced techniques like ACLs, ZFS, Snapshots, Docker Containers, and Kubernetes. This project marks a significant enhancement in server capacity, performance, and security, featuring GUI management, robust security protocols, and seamless integration with Dynamic DNS, Cloudflare, and Let’s Encrypt for a more professional setup.
    </p>
        <!-- Start -->
        <x-modules.description-list-main-outer>
            <!-- First Box -->
            <x-modules.description-list-main-inner>
                <x-slot:title> Responsibilities </x-slot:title>
                <!-- List -->
                <x-modules.description-list-item>
                    Managed servers operating on enterprise-grade hardware to ensure optimal performance and reliability
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Deployed advanced technologies including ACLs, ZFS, Snapshots, Docker Containers, Kubernetes, and Traefik for robust and secure server operations
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Oversaw SSL encryption, SSL renewal policies, private DNS, and VPN, ensuring data encryption and secure access
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Responsible for network architecture and management for multiple users, implementing LAN and VPN-controlled access
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Oversaw hundreds of TBs of data, employed automation for component updates, ensuring seamless operations and data reliability
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Extended capabilities by integrating Dynamic DNS, Cloudflare, and Let’s Encrypt, enhancing reliability and professionalization of services
                </x-modules.description-list-item>
            </x-modules.description-list-main-inner>
            <!-- Second Box -->
            <x-modules.description-list-main-inner>
                <x-slot:title> Achievements </x-slot:title>
                <!-- List -->
                <x-modules.description-list-item>
                    Significantly upgraded server capacity, performance, and security, providing improved services and reliability
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Professionally integrated Dynamic DNS, Cloudflare, and Let’s Encrypt, enhancing security and reliability
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Implemented automation for component updates, streamlining operations and ensuring up-to-date systems
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Ensured robust SSL encryption, private DNS, and VPN, ensuring secure data transmission and access control
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Managed network architecture and management for numerous users, ensuring secure access and data integrity
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Implemented comprehensive system monitoring and alert mechanisms, proactively identifying and resolving potential issues, ensuring minimal downtime and optimal system performance
                </x-modules.description-list-item>
            </x-modules.description-list-main-inner>
        </x-modules.description-list-main-outer>
        <!-- End -->
</div>
