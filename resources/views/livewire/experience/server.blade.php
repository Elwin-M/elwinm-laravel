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
                <x-modules.description-list-item>
                    Led the comprehensive planning of server migration, outlining the transition from Apache to Nginx, decoupling joint websites, and strategizing the relocation of hardware and the database server
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Successfully separated joint websites into individual entities, ensuring smooth functionality and independent operation after migration
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Implemented Nginx configuration settings, optimizing server performance and ensuring compatibility with the new environment
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Orchestrated the seamless transition of the database server, overseeing the transfer of data and ensuring data integrity throughout the migration process
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Managed the relocation of hardware, coordinating the physical movement of server components to the new environment while minimizing downtime
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
                <x-modules.description-list-item>
                    Executed a flawless transition from Apache to Nginx, enhancing server efficiency, performance, and securit
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Accomplished the decoupling of joint websites, providing each entity with increased autonomy and independent functionality
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Achieved a seamless transition of the database server, ensuring the integrity of data during the migration process
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Successfully managed the relocation of server hardware, minimizing downtime and ensuring a smooth transition to the new physical environment
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Implemented Nginx configurations that resulted in improved server performance, optimizing resource utilization for enhanced efficiency
                </x-modules.description-list-item>
            </x-modules.description-list-main-inner>
        </x-modules.description-list-main-outer>
        <!-- End -->
</div>
