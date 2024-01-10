@section('pageTitle', 'ElwinM - Full Stack Developer')

<div>
    <x-modules.title-subtitle>
        {{ $currentPageTitle }}
        <x-slot:sub> {{ $currentPageSub }} </x-slot:sub>
    </x-modules.title-subtitle>

    <p class="content-main-group">
        Having immersed myself in Full Stack Development, I spearheaded the creation of a robust website from inception to execution. Leveraging Laravel 10, Alpine.js, Prism.js, Tailwind, and Livewire 3, I orchestrated an innovative platform fortified by Docker containerization and Nginx server configuration. Through meticulous attention to detail, I ensured SSL integration, database implementation, and the seamless utilization of Cloudflare as a CDN, optimizing performance and security.
    </p>
        <!-- Start -->
        <x-modules.description-list-main-outer>
            <!-- First Box -->
            <x-modules.description-list-main-inner>
                <x-slot:title> Responsibilities </x-slot:title>
                <!-- List -->
                <x-modules.description-list-item>
                    Developed a feature-rich website using cutting-edge technologies like Laravel 10, Alpine.js, Prism.js, Tailwind, and Livewire 3 to optimize user experience
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Orchestrated containerized deployment with Docker, alongside Nginx server configuration, ensuring scalable and efficient resource management
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Ensured data security and integrity through SSL integration and effective management of database operations
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Leveraged Cloudflare as a Content Delivery Network (CDN), intelligently caching pages and routes for enhanced performance and accessibility
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Conducted continuous monitoring and optimization to maintain website performance, implementing enhancements for optimized resource utilization
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Fostered collaborative workflows by integrating Git for version control, facilitating seamless team collaboration and code management
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Prioritized user-centric design and development practices, incorporating feedback loops and usability testing for refined features and improved user experience
                </x-modules.description-list-item>
            </x-modules.description-list-main-inner>
            <!-- Second Box -->
            <x-modules.description-list-main-inner>
                <x-slot:title> Achievements </x-slot:title>
                <!-- List -->
                <x-modules.description-list-item>
                    Strategically optimized website performance using Cloudflare CDN and efficient caching strategies, ensuring swift load times and seamless navigation
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Successfully integrated modern technologies (Alpine.js, Prism.js, Tailwind, Livewire 3) for enhanced website functionality and interactivity
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Built a robust, scalable architecture fortified with SSL integration, Docker containerization, and Nginx server configuration, ensuring a secure framework
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Implemented Cloudflare effectively, improving page load times and site responsiveness, enhancing content delivery
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Ensured exceptional security compliance by implementing SSL protocols, maintaining a secure database environment, and regularly updating security patches
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Established a scalable infrastructure through Docker, Nginx, and efficient CDN usage, preparing for future growth and increased site performance
                </x-modules.description-list-item>
                <x-modules.description-list-item>
                    Upheld stringent security standards, safeguarding sensitive data and fortifying the website against potential vulnerabilities, fostering user trust
                </x-modules.description-list-item>
            </x-modules.description-list-main-inner>
        </x-modules.description-list-main-outer>
        <!-- End -->
</div>
